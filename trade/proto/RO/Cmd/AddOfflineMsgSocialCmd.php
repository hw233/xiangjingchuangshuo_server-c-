<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SocialCmd.proto

namespace RO\Cmd {

  class AddOfflineMsgSocialCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SOCIAL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SocialParam */
    public $param = \RO\Cmd\SocialParam::SOCIALPARAM_ADD_OFFLINEMSG;
    
    /**  @var \RO\Cmd\OfflineMsg */
    public $msg = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.AddOfflineMsgSocialCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SOCIAL_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SocialParam';
      $f->default   = \RO\Cmd\SocialParam::SOCIALPARAM_ADD_OFFLINEMSG;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE msg = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "msg";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\OfflineMsg';
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
     * @return \RO\Cmd\AddOfflineMsgSocialCmd
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
     * @return \RO\Cmd\AddOfflineMsgSocialCmd
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
     * @return \RO\Cmd\AddOfflineMsgSocialCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SocialParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SocialParam $value
     * @return \RO\Cmd\AddOfflineMsgSocialCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <msg> has a value
     *
     * @return boolean
     */
    public function hasMsg(){
      return $this->_has(3);
    }
    
    /**
     * Clear <msg> value
     *
     * @return \RO\Cmd\AddOfflineMsgSocialCmd
     */
    public function clearMsg(){
      return $this->_clear(3);
    }
    
    /**
     * Get <msg> value
     *
     * @return \RO\Cmd\OfflineMsg
     */
    public function getMsg(){
      return $this->_get(3);
    }
    
    /**
     * Set <msg> value
     *
     * @param \RO\Cmd\OfflineMsg $value
     * @return \RO\Cmd\AddOfflineMsgSocialCmd
     */
    public function setMsg(\RO\Cmd\OfflineMsg $value){
      return $this->_set(3, $value);
    }
  }
}

