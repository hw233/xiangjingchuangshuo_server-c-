<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class ChangeFlagLogCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::LOG_PROTOCMD;
    
    /**  @var int - \RO\Cmd\LogParam */
    public $param = \RO\Cmd\LogParam::CHANGE_FLAG_LOG_CMD;
    
    /**  @var int */
    public $cid = null;
    
    /**  @var int */
    public $sid = null;
    
    /**  @var int */
    public $pid = null;
    
    /**  @var int */
    public $time = null;
    
    /**  @var string */
    public $falg = null;
    
    /**  @var string */
    public $from = null;
    
    /**  @var string */
    public $to = null;
    
    /**  @var int */
    public $param1 = null;
    
    /**  @var string */
    public $logid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChangeFlagLogCmd');

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
      $f->default   = \RO\Cmd\LogParam::CHANGE_FLAG_LOG_CMD;
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

      // OPTIONAL UINT64 pid = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING falg = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "falg";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING from = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "from";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING to = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "to";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 param1 = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "param1";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING logid = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "logid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
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
     * @return \RO\Cmd\ChangeFlagLogCmd
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
     * @return \RO\Cmd\ChangeFlagLogCmd
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
     * @return \RO\Cmd\ChangeFlagLogCmd
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
     * @return \RO\Cmd\ChangeFlagLogCmd
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
     * @return \RO\Cmd\ChangeFlagLogCmd
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
     * @return \RO\Cmd\ChangeFlagLogCmd
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
     * @return \RO\Cmd\ChangeFlagLogCmd
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
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setSid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <pid> has a value
     *
     * @return boolean
     */
    public function hasPid(){
      return $this->_has(5);
    }
    
    /**
     * Clear <pid> value
     *
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function clearPid(){
      return $this->_clear(5);
    }
    
    /**
     * Get <pid> value
     *
     * @return int
     */
    public function getPid(){
      return $this->_get(5);
    }
    
    /**
     * Set <pid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setPid( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(6);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function clearTime(){
      return $this->_clear(6);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(6);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setTime( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <falg> has a value
     *
     * @return boolean
     */
    public function hasFalg(){
      return $this->_has(7);
    }
    
    /**
     * Clear <falg> value
     *
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function clearFalg(){
      return $this->_clear(7);
    }
    
    /**
     * Get <falg> value
     *
     * @return string
     */
    public function getFalg(){
      return $this->_get(7);
    }
    
    /**
     * Set <falg> value
     *
     * @param string $value
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setFalg( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <from> has a value
     *
     * @return boolean
     */
    public function hasFrom(){
      return $this->_has(8);
    }
    
    /**
     * Clear <from> value
     *
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function clearFrom(){
      return $this->_clear(8);
    }
    
    /**
     * Get <from> value
     *
     * @return string
     */
    public function getFrom(){
      return $this->_get(8);
    }
    
    /**
     * Set <from> value
     *
     * @param string $value
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setFrom( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <to> has a value
     *
     * @return boolean
     */
    public function hasTo(){
      return $this->_has(9);
    }
    
    /**
     * Clear <to> value
     *
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function clearTo(){
      return $this->_clear(9);
    }
    
    /**
     * Get <to> value
     *
     * @return string
     */
    public function getTo(){
      return $this->_get(9);
    }
    
    /**
     * Set <to> value
     *
     * @param string $value
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setTo( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <param1> has a value
     *
     * @return boolean
     */
    public function hasParam1(){
      return $this->_has(10);
    }
    
    /**
     * Clear <param1> value
     *
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function clearParam1(){
      return $this->_clear(10);
    }
    
    /**
     * Get <param1> value
     *
     * @return int
     */
    public function getParam1(){
      return $this->_get(10);
    }
    
    /**
     * Set <param1> value
     *
     * @param int $value
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setParam1( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <logid> has a value
     *
     * @return boolean
     */
    public function hasLogid(){
      return $this->_has(11);
    }
    
    /**
     * Clear <logid> value
     *
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function clearLogid(){
      return $this->_clear(11);
    }
    
    /**
     * Get <logid> value
     *
     * @return string
     */
    public function getLogid(){
      return $this->_get(11);
    }
    
    /**
     * Set <logid> value
     *
     * @param string $value
     * @return \RO\Cmd\ChangeFlagLogCmd
     */
    public function setLogid( $value){
      return $this->_set(11, $value);
    }
  }
}

