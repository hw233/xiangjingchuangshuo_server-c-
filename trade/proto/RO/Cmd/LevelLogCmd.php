<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class LevelLogCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::LOG_PROTOCMD;
    
    /**  @var int - \RO\Cmd\LogParam */
    public $param = \RO\Cmd\LogParam::LEVEL_LOG_CMD;
    
    /**  @var int */
    public $cid = null;
    
    /**  @var int */
    public $sid = null;
    
    /**  @var int */
    public $hid = null;
    
    /**  @var string */
    public $account = null;
    
    /**  @var int */
    public $pid = null;
    
    /**  @var int */
    public $time = null;
    
    /**  @var int */
    public $from = null;
    
    /**  @var int */
    public $to = null;
    
    /**  @var int */
    public $ispay = null;
    
    /**  @var int */
    public $type = null;
    
    /**  @var int[]  */
    public $mark = array();
    
    /**  @var string */
    public $logid = null;
    
    /**  @var int */
    public $costtime = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.LevelLogCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::LOG_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\LogParam';
      $f->default   = \RO\Cmd\LogParam::LEVEL_LOG_CMD;
      $descriptor->addField($f);

      // OPTIONAL UINT32 cid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "cid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 hid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "hid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING account = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "account";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 pid = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 from = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "from";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 to = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "to";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 ispay = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "ispay";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 type = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED UINT32 mark = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "mark";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL STRING logid = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "logid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 costtime = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "costtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\LevelLogCmd
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
     * @return \RO\Cmd\LevelLogCmd
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
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\LogParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\LogParam $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <cid> has a value
     *
     * @return boolean
     */
    public function hasCid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <cid> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearCid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <cid> value
     *
     * @return int
     */
    public function getCid(){
      return $this->_get(3);
    }
    
    /**
     * Set <cid> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setCid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sid> has a value
     *
     * @return boolean
     */
    public function hasSid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sid> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearSid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sid> value
     *
     * @return int
     */
    public function getSid(){
      return $this->_get(4);
    }
    
    /**
     * Set <sid> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setSid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <hid> has a value
     *
     * @return boolean
     */
    public function hasHid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <hid> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearHid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <hid> value
     *
     * @return int
     */
    public function getHid(){
      return $this->_get(5);
    }
    
    /**
     * Set <hid> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setHid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <account> has a value
     *
     * @return boolean
     */
    public function hasAccount(){
      return $this->_has(6);
    }
    
    /**
     * Clear <account> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearAccount(){
      return $this->_clear(6);
    }
    
    /**
     * Get <account> value
     *
     * @return string
     */
    public function getAccount(){
      return $this->_get(6);
    }
    
    /**
     * Set <account> value
     *
     * @param string $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setAccount( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <pid> has a value
     *
     * @return boolean
     */
    public function hasPid(){
      return $this->_has(7);
    }
    
    /**
     * Clear <pid> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearPid(){
      return $this->_clear(7);
    }
    
    /**
     * Get <pid> value
     *
     * @return int
     */
    public function getPid(){
      return $this->_get(7);
    }
    
    /**
     * Set <pid> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setPid( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(8);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearTime(){
      return $this->_clear(8);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(8);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setTime( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <from> has a value
     *
     * @return boolean
     */
    public function hasFrom(){
      return $this->_has(9);
    }
    
    /**
     * Clear <from> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearFrom(){
      return $this->_clear(9);
    }
    
    /**
     * Get <from> value
     *
     * @return int
     */
    public function getFrom(){
      return $this->_get(9);
    }
    
    /**
     * Set <from> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setFrom( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <to> has a value
     *
     * @return boolean
     */
    public function hasTo(){
      return $this->_has(10);
    }
    
    /**
     * Clear <to> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearTo(){
      return $this->_clear(10);
    }
    
    /**
     * Get <to> value
     *
     * @return int
     */
    public function getTo(){
      return $this->_get(10);
    }
    
    /**
     * Set <to> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setTo( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <ispay> has a value
     *
     * @return boolean
     */
    public function hasIspay(){
      return $this->_has(11);
    }
    
    /**
     * Clear <ispay> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearIspay(){
      return $this->_clear(11);
    }
    
    /**
     * Get <ispay> value
     *
     * @return int
     */
    public function getIspay(){
      return $this->_get(11);
    }
    
    /**
     * Set <ispay> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setIspay( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(12);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearType(){
      return $this->_clear(12);
    }
    
    /**
     * Get <type> value
     *
     * @return int
     */
    public function getType(){
      return $this->_get(12);
    }
    
    /**
     * Set <type> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setType( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <mark> has a value
     *
     * @return boolean
     */
    public function hasMark(){
      return $this->_has(13);
    }
    
    /**
     * Clear <mark> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearMark(){
      return $this->_clear(13);
    }
    
    /**
     * Get <mark> value
     *
     * @param int $idx
     * @return int
     */
    public function getMark($idx = NULL){
      return $this->_get(13, $idx);
    }
    
    /**
     * Set <mark> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setMark( $value, $idx = NULL){
      return $this->_set(13, $value, $idx);
    }
    
    /**
     * Get all elements of <mark>
     *
     * @return int[]
     */
    public function getMarkList(){
     return $this->_get(13);
    }
    
    /**
     * Add a new element to <mark>
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function addMark( $value){
     return $this->_add(13, $value);
    }
    
    /**
     * Check if <logid> has a value
     *
     * @return boolean
     */
    public function hasLogid(){
      return $this->_has(14);
    }
    
    /**
     * Clear <logid> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearLogid(){
      return $this->_clear(14);
    }
    
    /**
     * Get <logid> value
     *
     * @return string
     */
    public function getLogid(){
      return $this->_get(14);
    }
    
    /**
     * Set <logid> value
     *
     * @param string $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setLogid( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <costtime> has a value
     *
     * @return boolean
     */
    public function hasCosttime(){
      return $this->_has(15);
    }
    
    /**
     * Clear <costtime> value
     *
     * @return \RO\Cmd\LevelLogCmd
     */
    public function clearCosttime(){
      return $this->_clear(15);
    }
    
    /**
     * Get <costtime> value
     *
     * @return int
     */
    public function getCosttime(){
      return $this->_get(15);
    }
    
    /**
     * Set <costtime> value
     *
     * @param int $value
     * @return \RO\Cmd\LevelLogCmd
     */
    public function setCosttime( $value){
      return $this->_set(15, $value);
    }
  }
}
