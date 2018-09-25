<?php
namespace RO\Trade\Dao;

use RO\Cmd\EFinanceDateType;
use RO\Cmd\EFinanceRankType;
use RO\Trade\Server;
use RO\Utils\Common;

/**
 * Created by PhpStorm.
 * User: rain
 * Date: 18/2/26
 * Time: 下午4:53
 */

class Finance extends Dao
{
    const CACHE_RANK_KEY = 'finance:rank';

    const CACHE_DETAIL_KEY = 'finance:detail:%s';

    // 周期
    const CIRCLE_TIME = 4 * 3600;

    protected static $TableName = 'trade_finance';

    protected static $Fields = [
        'id'             => 'id',
        'itemId'         => 'item_id', // 物品ID
        'price'          => 'price', //当前价格
        'lastPrice'      => 'last_price', // 上次最后价格
        'dealCount'      => 'deal_count', // 成交量
        'lastDealCount'  => 'last_deal_count', // 上次成交量
        'priceRatio'     => 'price_ratio', // 价格涨跌幅
        'dealCountRatio' => 'deal_count_ratio', // 成交量涨跌幅
        'time'           => 'time', // 统计时间
        'createdTime'    => 'created_time',// 创建记录时间
    ];

    public $id;

    public $itemId;

    public $price;

    public $lastPrice;

    public $dealCount;

    public $lastDealCount;

    public $priceRatio;

    public $dealCountRatio;

    public $time;

    public $createdTime;

    public function insert()
    {
        if (!$this->createdTime) {
            $this->createdTime = time();
        }

        return parent::insert(); // TODO: Change the autogenerated stub
    }

    /**
     * 获取每个物品最新的记录
     *
     * @return array|bool
     */
    public static function getLastRecords()
    {
        $data = [];
        $sql = "SELECT `item_id`, `price`, `last_price`, `deal_count`, `last_deal_count`, `price_ratio`, `deal_count_ratio`, `time` FROM `". self::$TableName ."` ORDER BY `time` DESC";
        $rs = Server::$mysqlMaster->query($sql);
        if ($rs)
        {
            if ($rs->num_rows)
            {
                while($val = $rs->fetch_assoc())
                {
                    if (!isset($data[$val['item_id']]))
                    {
                        $data[$val['item_id']] = $val;
                    }
                }
            }

            return $data;
        }
        else
        {
            return false;
        }
    }

    /**
     * 获取今日财经排行
     *
     * @param $rankType 0:成交量 1:涨幅 2:跌幅
     * @param $dayType 0:3天 1:7天
     * @param $isCache
     * @return array
     */
    public static function getTodayFinanceRank($rankType, $dayType, $isCache = true)
    {
        switch ($rankType)
        {
            case EFinanceRankType::EFINANCE_RANK_DEALCOUNT:
                $filed = 'deal_count';
                break;
            case EFinanceRankType::EFINANCE_RANK_UPRATIO:
            case EFinanceRankType::EFINANCE_RANK_DOWNRATIO:
                $filed = 'price';
                break;
            default:
                $rankType = EFinanceRankType::EFINANCE_RANK_UPRATIO;
                $filed = 'price';
                break;
        }

        switch ($dayType)
        {
            case EFinanceDateType::EFINANCE_DATE_THREE:
                $day = 3;
                break;
            case EFinanceDateType::EFINANCE_DATE_SEVEN:
                $day = 7;
                break;
            default:
                $day = 3;
        }

        try
        {
            $data = Server::$redis->hGet(self::CACHE_RANK_KEY, "{$rankType}-{$dayType}");
        }
        catch (\Exception $e)
        {
            Server::$instance->warn("[获取今日财经排行] 发生异常, 错误信息: {$e->getMessage()}");
            $data = false;
        }

        if ($data && $isCache)
        {
            return json_decode($data, true);
        }

        // 4小时一个周期, 计算最近的一个周期时间
        $curHour  = date('H');
        $curHour  = $curHour === 0 ? 24 : $curHour;
        $nearHour = $curHour - $curHour % 4 + 1;
        $nearHour = $nearHour > $curHour ? $nearHour - 4 : $nearHour;
        $nearTime = strtotime(date("Y-m-d {$nearHour}:0:0"));
        $strTime  = '-' . ($day - 1) . ' day';
        $lastTime = strtotime(date("Y-m-d", strtotime($strTime))) + 18000;

        $sql1 = "SELECT `item_id`, `{$filed}` as `val` FROM `". self::$TableName ."` WHERE `time` = {$nearTime}";
        $data1 = [];
        $rs = Server::$mysqlMaster->query($sql1);
        if ($rs && $rs->num_rows) {
            while ($item = $rs->fetch_assoc()) {
                $data1[] = $item;
            }
            $rs->free();
        } else {
            return [];
        }

        $sql2 = "SELECT `item_id`, `{$filed}` as `val` FROM `". self::$TableName ."` WHERE `time` = {$lastTime}";
        $data2 = [];
        $rs = Server::$mysqlMaster->query($sql2);
        if ($rs && $rs->num_rows) {
            while ($item = $rs->fetch_assoc()) {
                $data2[$item['item_id']] = $item;
            }
        } else {
            return [];
        }

        $rank = [];
        foreach ($data1 as $item)
        {
            $itemId = $item['item_id'];
            if (isset($data2[$itemId]))
            {
                $item2 = $data2[$itemId];
                if ($item2['val'] > 0)
                {
                    $ratio = Common::calcRatio($item['val'], $item2['val']);
                    switch ($rankType)
                    {
                        case EFinanceRankType::EFINANCE_RANK_DEALCOUNT:
                        case EFinanceRankType::EFINANCE_RANK_UPRATIO:
                            if ($ratio > 0) {
                                $rank[] = [
                                    'item_id' => $itemId,
                                    'ratio' => intval($ratio * 1000)
                                ];
                            }
                            break;
                        case EFinanceRankType::EFINANCE_RANK_DOWNRATIO:
                            if ($ratio < 0) {
                                $rank[] = [
                                    'item_id' => $itemId,
                                    'ratio' => intval(abs($ratio) * 1000)
                                ];
                            }
                    }
                }
            }
        }

        usort($rank, function($a, $b) {
           if ($a['ratio'] == $b['ratio']) {
               return 0;
           }

           return $a['ratio'] < $b['ratio'] ? 1 : -1;
        });

        $rank = array_slice($rank, 0, Server::$configExchange['TodayFinanceMaxCount'] ?? 20);
        if ($isCache)
        {
            try
            {
                Server::$redis->hset(self::CACHE_RANK_KEY, "{$rankType}-{$dayType}", json_encode($rank));
                if (empty($rank)) {
                    Server::$redis->expire(self::CACHE_RANK_KEY, 60);
                } else {
                    Server::$redis->expire(self::CACHE_RANK_KEY, self::CIRCLE_TIME);
                }
            }
            catch (\Exception $e)
            {
                Server::$instance->warn("[获取今日财经排行] 设置缓存发生异常, 错误信息: {$e->getMessage()}");
            }
        }

        if (IS_DEBUG) {
            Server::$instance->debug("[获取今日财经排行] 当前时间:{$nearTime}, 对比时间:{$lastTime}");
        }

        return $rank;
    }

    /**
     * 获取今日财经的物品详情
     *
     * @param $itemId
     * @param $rankType
     * @param $dayType
     * @param $isCache
     * @return array
     */
    public static function getTodayFinanceDetail($itemId, $rankType, $dayType, $isCache = true)
    {
        switch ($rankType)
        {
            case EFinanceRankType::EFINANCE_RANK_DEALCOUNT:
                $filed = 'deal_count';
                break;
            case EFinanceRankType::EFINANCE_RANK_UPRATIO:
            case EFinanceRankType::EFINANCE_RANK_DOWNRATIO:
                $filed = 'price';
                break;
            default:
                $rankType = EFinanceRankType::EFINANCE_RANK_UPRATIO;
                $filed = 'price';
                break;
        }

        switch ($dayType)
        {
            case EFinanceDateType::EFINANCE_DATE_THREE:
                $day = 3;
                $hour = 4;
                break;
            case EFinanceDateType::EFINANCE_DATE_SEVEN:
                $day = 7;
                $hour = 8;
                break;
            default:
                $day = 3;
                $hour = 4;
        }

        $key = sprintf(self::CACHE_DETAIL_KEY, $itemId);
        try
        {
            $data = $data = Server::$redis->hGet($key, "{$rankType}-{$dayType}");
        }
        catch (\Exception $e)
        {
            Server::$instance->warn("[获取今日财经的物品详情] 发生异常, 错误信息: {$e->getMessage()}");
            $data = false;
        }

        if ($data && $isCache)
        {
            return json_decode($data, true);
        }

        $time = time() - $day * 86400;
        $nextTime = 0;
        $sql = "SELECT `item_id`, `{$filed}` as `val`, `time` FROM `". self::$TableName ."` WHERE `item_id` = '{$itemId}' AND `time` >= '{$time}' ORDER BY `time` ASC";
        $data = [];
        $rs = Server::$mysqlMaster->query($sql);

        if ($rs && $rs->num_rows) {
            while ($item = $rs->fetch_assoc()) {
                // 计算间隔标点
                if ($nextTime === 0 || $nextTime == $item['time']) {
                    $item['val'] = round($item['val'], 3);
                    $data[] = $item;
                    $nextTime = $item['time'] + $hour * 3600;
                }
            }
            $rs->free();
        } else {
            return [];
        }

        if ($isCache) {
            try
            {
                Server::$redis->hSet($key, "{$rankType}-{$dayType}", json_encode($data));
                if (empty($data))
                {
                    Server::$redis->expire($key, 60);
                }
                else
                {
                    Server::$redis->expire($key, self::CIRCLE_TIME);
                }
            }
            catch (\Exception $e)
            {
                Server::$instance->warn("[获取今日财经的物品详情] 设置缓存发生异常, 错误信息: {$e->getMessage()}");
            }
        }

        return $data;
    }

    /**
     * 获取几天前的价格
     *
     * @param $itemId
     * @param int $day
     * @return int
     */
    public static function getLastPrice($itemId, $day = 2)
    {
        $time = strtotime(date('Y-m-d', time())) - $day * 86400 + 18000;
        $sql = "SELECT `price` FROM `". self::$TableName ."` WHERE `item_id` = '{$itemId}' AND `time` = $time LIMIT 1";
        $rs = Server::$mysqlMaster->query($sql);
        if ($rs) {
            $data = $rs->fetch_object();
            return $data->price;
        }
        else
        {
            return 0;
        }
    }

    /**
     * 清除几天前的数据
     * @param int $day
     */
    public static function clearData($day)
    {
        $time = strtotime(date('Y-m-d', time())) - $day * 86400 + 18000;
        $sql = "DELETE FROM `" . self::$TableName . "` WHERE `time` < '{$time}' LIMIT 10000";
        Server::$mysqlMaster->query($sql);

        if (IS_DEBUG)
        {
            Server::$instance->debug("[今日财经] 清理". date('Y-m-d H:i:s', $time) . "前的过期数据, 共清理" . Server::$mysqlMaster->affected_rows . "条记录");
        }
    }

}