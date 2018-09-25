<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ChatCmd.proto

namespace RO\Cmd {

  class QueryUserInfoChatCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::CHAT_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ChatParam */
    public $param = \RO\Cmd\ChatParam::CHATPARAM_QUERYUSERINFO;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $msgid = 0;
    
    /**  @var int - \RO\Cmd\EUserInfoType */
    public $type = \RO\Cmd\EUserInfoType::EUSERINFOTYPE_CHAT;
    
    /**  @var \RO\Cmd\QueryUserInfo */
    public $info = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryUserInfoChatCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::CHAT_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ChatParam';
      $f->default   = \RO\Cmd\ChatParam::CHATPARAM_QUERYUSERINFO;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 msgid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "msgid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EUserInfoType';
      $f->default   = \RO\Cmd\EUserInfoType::EUSERINFOTYPE_CHAT;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE info = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\QueryUserInfo';
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
     * @return \RO\Cmd\QueryUserInfoChatCmd
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
     * @return \RO\Cmd\QueryUserInfoChatCmd
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
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ChatParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ChatParam $value
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <msgid> has a value
     *
     * @return boolean
     */
    public function hasMsgid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <msgid> value
     *
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function clearMsgid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <msgid> value
     *
     * @return int
     */
    public function getMsgid(){
      return $this->_get(4);
    }
    
    /**
     * Set <msgid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function setMsgid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(6);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function clearType(){
      return $this->_clear(6);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EUserInfoType
     */
    public function getType(){
      return $this->_get(6);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EUserInfoType $value
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function setType( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <info> has a value
     *
     * @return boolean
     */
    public function hasInfo(){
      return $this->_has(5);
    }
    
    /**
     * Clear <info> value
     *
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function clearInfo(){
      return $this->_clear(5);
    }
    
    /**
     * Get <info> value
     *
     * @return \RO\Cmd\QueryUserInfo
     */
    public function getInfo(){
      return $this->_get(5);
    }
    
    /**
     * Set <info> value
     *
     * @param \RO\Cmd\QueryUserInfo $value
     * @return \RO\Cmd\QueryUserInfoChatCmd
     */
    public function setInfo(\RO\Cmd\QueryUserInfo $value){
      return $this->_set(5, $value);
    }
  }
}

