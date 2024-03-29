<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SocialCmd.proto

namespace RO\Cmd {

  class SocialDataUpdateSocialCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SOCIAL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SocialParam */
    public $param = \RO\Cmd\SocialParam::SOCIALPARAM_SOCIAL_DATA_UPDATE;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $targetid = 0;
    
    /**  @var \RO\Cmd\SocialDataUpdate */
    public $update = null;
    
    /**  @var boolean */
    public $to_global = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SocialDataUpdateSocialCmd');

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
      $f->default   = \RO\Cmd\SocialParam::SOCIALPARAM_SOCIAL_DATA_UPDATE;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 targetid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "targetid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE update = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "update";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SocialDataUpdate';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_global = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "to_global";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
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
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
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
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
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
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
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
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
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
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
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
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <targetid> has a value
     *
     * @return boolean
     */
    public function hasTargetid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <targetid> value
     *
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
     */
    public function clearTargetid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <targetid> value
     *
     * @return int
     */
    public function getTargetid(){
      return $this->_get(4);
    }
    
    /**
     * Set <targetid> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
     */
    public function setTargetid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <update> has a value
     *
     * @return boolean
     */
    public function hasUpdate(){
      return $this->_has(5);
    }
    
    /**
     * Clear <update> value
     *
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
     */
    public function clearUpdate(){
      return $this->_clear(5);
    }
    
    /**
     * Get <update> value
     *
     * @return \RO\Cmd\SocialDataUpdate
     */
    public function getUpdate(){
      return $this->_get(5);
    }
    
    /**
     * Set <update> value
     *
     * @param \RO\Cmd\SocialDataUpdate $value
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
     */
    public function setUpdate(\RO\Cmd\SocialDataUpdate $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <to_global> has a value
     *
     * @return boolean
     */
    public function hasToGlobal(){
      return $this->_has(6);
    }
    
    /**
     * Clear <to_global> value
     *
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
     */
    public function clearToGlobal(){
      return $this->_clear(6);
    }
    
    /**
     * Get <to_global> value
     *
     * @return boolean
     */
    public function getToGlobal(){
      return $this->_get(6);
    }
    
    /**
     * Set <to_global> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SocialDataUpdateSocialCmd
     */
    public function setToGlobal( $value){
      return $this->_set(6, $value);
    }
  }
}

