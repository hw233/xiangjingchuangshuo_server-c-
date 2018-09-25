<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneChatRoom.proto

namespace RO\Cmd {

  class ChatRoomTip extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_CHATROOM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\EChatRoomParam */
    public $param = \RO\Cmd\EChatRoomParam::ECHATROOMPARAM_ROOMTIP;
    
    /**  @var int - \RO\Cmd\EChatRoomTip */
    public $tip = \RO\Cmd\EChatRoomTip::ECHATROOMTIP_JOIN;
    
    /**  @var int */
    public $userid = 0;
    
    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChatRoomTip');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_CHATROOM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EChatRoomParam';
      $f->default   = \RO\Cmd\EChatRoomParam::ECHATROOMPARAM_ROOMTIP;
      $descriptor->addField($f);

      // OPTIONAL ENUM tip = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "tip";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EChatRoomTip';
      $f->default   = \RO\Cmd\EChatRoomTip::ECHATROOMTIP_JOIN;
      $descriptor->addField($f);

      // OPTIONAL UINT64 userid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "userid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "name";
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
     * @return \RO\Cmd\ChatRoomTip
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
     * @return \RO\Cmd\ChatRoomTip
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
     * @return \RO\Cmd\ChatRoomTip
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\EChatRoomParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\EChatRoomParam $value
     * @return \RO\Cmd\ChatRoomTip
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <tip> has a value
     *
     * @return boolean
     */
    public function hasTip(){
      return $this->_has(3);
    }
    
    /**
     * Clear <tip> value
     *
     * @return \RO\Cmd\ChatRoomTip
     */
    public function clearTip(){
      return $this->_clear(3);
    }
    
    /**
     * Get <tip> value
     *
     * @return int - \RO\Cmd\EChatRoomTip
     */
    public function getTip(){
      return $this->_get(3);
    }
    
    /**
     * Set <tip> value
     *
     * @param int - \RO\Cmd\EChatRoomTip $value
     * @return \RO\Cmd\ChatRoomTip
     */
    public function setTip( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <userid> has a value
     *
     * @return boolean
     */
    public function hasUserid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <userid> value
     *
     * @return \RO\Cmd\ChatRoomTip
     */
    public function clearUserid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <userid> value
     *
     * @return int
     */
    public function getUserid(){
      return $this->_get(4);
    }
    
    /**
     * Set <userid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatRoomTip
     */
    public function setUserid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(5);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\ChatRoomTip
     */
    public function clearName(){
      return $this->_clear(5);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(5);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\ChatRoomTip
     */
    public function setName( $value){
      return $this->_set(5, $value);
    }
  }
}

