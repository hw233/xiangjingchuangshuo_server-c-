<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class InviteWithMeUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_INVITE_WITH_ME;
    
    /**  @var int */
    public $sendid = 0;
    
    /**  @var int */
    public $time = 0;
    
    /**  @var boolean */
    public $reply = false;
    
    /**  @var string */
    public $sign = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.InviteWithMeUserCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_INVITE_WITH_ME;
      $descriptor->addField($f);

      // OPTIONAL UINT64 sendid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "sendid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL reply = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "reply";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BYTES sign = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "sign";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
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
     * @return \RO\Cmd\InviteWithMeUserCmd
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
     * @return \RO\Cmd\InviteWithMeUserCmd
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
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <sendid> has a value
     *
     * @return boolean
     */
    public function hasSendid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <sendid> value
     *
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function clearSendid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <sendid> value
     *
     * @return int
     */
    public function getSendid(){
      return $this->_get(3);
    }
    
    /**
     * Set <sendid> value
     *
     * @param int $value
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function setSendid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function clearTime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(4);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function setTime( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <reply> has a value
     *
     * @return boolean
     */
    public function hasReply(){
      return $this->_has(5);
    }
    
    /**
     * Clear <reply> value
     *
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function clearReply(){
      return $this->_clear(5);
    }
    
    /**
     * Get <reply> value
     *
     * @return boolean
     */
    public function getReply(){
      return $this->_get(5);
    }
    
    /**
     * Set <reply> value
     *
     * @param boolean $value
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function setReply( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <sign> has a value
     *
     * @return boolean
     */
    public function hasSign(){
      return $this->_has(6);
    }
    
    /**
     * Clear <sign> value
     *
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function clearSign(){
      return $this->_clear(6);
    }
    
    /**
     * Get <sign> value
     *
     * @return string
     */
    public function getSign(){
      return $this->_get(6);
    }
    
    /**
     * Set <sign> value
     *
     * @param string $value
     * @return \RO\Cmd\InviteWithMeUserCmd
     */
    public function setSign( $value){
      return $this->_set(6, $value);
    }
  }
}
