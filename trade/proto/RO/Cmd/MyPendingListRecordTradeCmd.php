<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class MyPendingListRecordTradeCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::RECORD_USER_TRADE_PROTOCMD;
    
    /**  @var int - \RO\Cmd\RecordUserTradeParam */
    public $param = \RO\Cmd\RecordUserTradeParam::MY_PENDING_LIST_RECORDTRADE;
    
    /**  @var \RO\Cmd\SearchCond */
    public $search_cond = null;
    
    /**  @var int */
    public $charid = null;
    
    /**  @var \RO\Cmd\TradeItemBaseInfo[]  */
    public $lists = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.MyPendingListRecordTradeCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::RECORD_USER_TRADE_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\RecordUserTradeParam';
      $f->default   = \RO\Cmd\RecordUserTradeParam::MY_PENDING_LIST_RECORDTRADE;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_cond = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "search_cond";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SearchCond';
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE lists = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "lists";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\TradeItemBaseInfo';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <cmd> has a value
     *
     * @return boolean
     */
    public function hasCmd(){
      return $this->_has(1);
    }
    
    /**
     * Clear <cmd> value
     *
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function clearCmd(){
      return $this->_clear(1);
    }
    
    /**
     * Get <cmd> value
     *
     * @return int - \RO\Cmd\Command
     */
    public function getCmd(){
      return $this->_get(1);
    }
    
    /**
     * Set <cmd> value
     *
     * @param int - \RO\Cmd\Command $value
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function setCmd( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <param> has a value
     *
     * @return boolean
     */
    public function hasParam(){
      return $this->_has(2);
    }
    
    /**
     * Clear <param> value
     *
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\RecordUserTradeParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\RecordUserTradeParam $value
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <search_cond> has a value
     *
     * @return boolean
     */
    public function hasSearchCond(){
      return $this->_has(3);
    }
    
    /**
     * Clear <search_cond> value
     *
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function clearSearchCond(){
      return $this->_clear(3);
    }
    
    /**
     * Get <search_cond> value
     *
     * @return \RO\Cmd\SearchCond
     */
    public function getSearchCond(){
      return $this->_get(3);
    }
    
    /**
     * Set <search_cond> value
     *
     * @param \RO\Cmd\SearchCond $value
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function setSearchCond(\RO\Cmd\SearchCond $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function clearCharid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(4);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function setCharid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <lists> has a value
     *
     * @return boolean
     */
    public function hasLists(){
      return $this->_has(6);
    }
    
    /**
     * Clear <lists> value
     *
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function clearLists(){
      return $this->_clear(6);
    }
    
    /**
     * Get <lists> value
     *
     * @param int $idx
     * @return \RO\Cmd\TradeItemBaseInfo
     */
    public function getLists($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <lists> value
     *
     * @param \RO\Cmd\TradeItemBaseInfo $value
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function setLists(\RO\Cmd\TradeItemBaseInfo $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <lists>
     *
     * @return \RO\Cmd\TradeItemBaseInfo[]
     */
    public function getListsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <lists>
     *
     * @param \RO\Cmd\TradeItemBaseInfo $value
     * @return \RO\Cmd\MyPendingListRecordTradeCmd
     */
    public function addLists(\RO\Cmd\TradeItemBaseInfo $value){
     return $this->_add(6, $value);
    }
  }
}

