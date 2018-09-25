<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class JumpzoneLogCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::LOG_PROTOCMD;
    
    /**  @var int - \RO\Cmd\LogParam */
    public $param = \RO\Cmd\LogParam::JUMPZONE_LOG_CMD;
    
    /**  @var int */
    public $cid = null;
    
    /**  @var int */
    public $sid = null;
    
    /**  @var string */
    public $account = null;
    
    /**  @var int */
    public $pid = null;
    
    /**  @var int */
    public $time = null;
    
    /**  @var int */
    public $eid = null;
    
    /**  @var int */
    public $etype = null;
    
    /**  @var int */
    public $oldzoneid = null;
    
    /**  @var int */
    public $newzoneid = null;
    
    /**  @var int */
    public $isfirst = null;
    
    /**  @var string */
    public $cost = null;
    
    /**  @var string */
    public $logid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.JumpzoneLogCmd');

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
      $f->default   = \RO\Cmd\LogParam::JUMPZONE_LOG_CMD;
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

      // OPTIONAL STRING account = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "account";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 pid = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "pid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 eid = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "eid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 etype = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 oldzoneid = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "oldzoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 newzoneid = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "newzoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 isfirst = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "isfirst";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING cost = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "cost";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING logid = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setSid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <account> has a value
     *
     * @return boolean
     */
    public function hasAccount(){
      return $this->_has(5);
    }
    
    /**
     * Clear <account> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearAccount(){
      return $this->_clear(5);
    }
    
    /**
     * Get <account> value
     *
     * @return string
     */
    public function getAccount(){
      return $this->_get(5);
    }
    
    /**
     * Set <account> value
     *
     * @param string $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setAccount( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <pid> has a value
     *
     * @return boolean
     */
    public function hasPid(){
      return $this->_has(6);
    }
    
    /**
     * Clear <pid> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearPid(){
      return $this->_clear(6);
    }
    
    /**
     * Get <pid> value
     *
     * @return int
     */
    public function getPid(){
      return $this->_get(6);
    }
    
    /**
     * Set <pid> value
     *
     * @param int $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setPid( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(7);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearTime(){
      return $this->_clear(7);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(7);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setTime( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <eid> has a value
     *
     * @return boolean
     */
    public function hasEid(){
      return $this->_has(8);
    }
    
    /**
     * Clear <eid> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearEid(){
      return $this->_clear(8);
    }
    
    /**
     * Get <eid> value
     *
     * @return int
     */
    public function getEid(){
      return $this->_get(8);
    }
    
    /**
     * Set <eid> value
     *
     * @param int $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setEid( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(9);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearEtype(){
      return $this->_clear(9);
    }
    
    /**
     * Get <etype> value
     *
     * @return int
     */
    public function getEtype(){
      return $this->_get(9);
    }
    
    /**
     * Set <etype> value
     *
     * @param int $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setEtype( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <oldzoneid> has a value
     *
     * @return boolean
     */
    public function hasOldzoneid(){
      return $this->_has(10);
    }
    
    /**
     * Clear <oldzoneid> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearOldzoneid(){
      return $this->_clear(10);
    }
    
    /**
     * Get <oldzoneid> value
     *
     * @return int
     */
    public function getOldzoneid(){
      return $this->_get(10);
    }
    
    /**
     * Set <oldzoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setOldzoneid( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <newzoneid> has a value
     *
     * @return boolean
     */
    public function hasNewzoneid(){
      return $this->_has(11);
    }
    
    /**
     * Clear <newzoneid> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearNewzoneid(){
      return $this->_clear(11);
    }
    
    /**
     * Get <newzoneid> value
     *
     * @return int
     */
    public function getNewzoneid(){
      return $this->_get(11);
    }
    
    /**
     * Set <newzoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setNewzoneid( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <isfirst> has a value
     *
     * @return boolean
     */
    public function hasIsfirst(){
      return $this->_has(12);
    }
    
    /**
     * Clear <isfirst> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearIsfirst(){
      return $this->_clear(12);
    }
    
    /**
     * Get <isfirst> value
     *
     * @return int
     */
    public function getIsfirst(){
      return $this->_get(12);
    }
    
    /**
     * Set <isfirst> value
     *
     * @param int $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setIsfirst( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <cost> has a value
     *
     * @return boolean
     */
    public function hasCost(){
      return $this->_has(13);
    }
    
    /**
     * Clear <cost> value
     *
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function clearCost(){
      return $this->_clear(13);
    }
    
    /**
     * Get <cost> value
     *
     * @return string
     */
    public function getCost(){
      return $this->_get(13);
    }
    
    /**
     * Set <cost> value
     *
     * @param string $value
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setCost( $value){
      return $this->_set(13, $value);
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
     * @return \RO\Cmd\JumpzoneLogCmd
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
     * @return \RO\Cmd\JumpzoneLogCmd
     */
    public function setLogid( $value){
      return $this->_set(14, $value);
    }
  }
}

