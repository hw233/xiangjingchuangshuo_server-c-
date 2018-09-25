<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneBeing.proto

namespace RO\Cmd {

  class ChangeBodyBeingCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_BEING_PROTOCMD;
    
    /**  @var int - \RO\Cmd\BeingParam */
    public $param = \RO\Cmd\BeingParam::BEINGPARAM_BEING_CHANGE_BODY;
    
    /**  @var int */
    public $beingid = null;
    
    /**  @var int */
    public $body = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChangeBodyBeingCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_BEING_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\BeingParam';
      $f->default   = \RO\Cmd\BeingParam::BEINGPARAM_BEING_CHANGE_BODY;
      $descriptor->addField($f);

      // REQUIRED UINT32 beingid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "beingid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED UINT32 body = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "body";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
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
     * @return \RO\Cmd\ChangeBodyBeingCmd
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
     * @return \RO\Cmd\ChangeBodyBeingCmd
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
     * @return \RO\Cmd\ChangeBodyBeingCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\BeingParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\BeingParam $value
     * @return \RO\Cmd\ChangeBodyBeingCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <beingid> has a value
     *
     * @return boolean
     */
    public function hasBeingid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <beingid> value
     *
     * @return \RO\Cmd\ChangeBodyBeingCmd
     */
    public function clearBeingid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <beingid> value
     *
     * @return int
     */
    public function getBeingid(){
      return $this->_get(3);
    }
    
    /**
     * Set <beingid> value
     *
     * @param int $value
     * @return \RO\Cmd\ChangeBodyBeingCmd
     */
    public function setBeingid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <body> has a value
     *
     * @return boolean
     */
    public function hasBody(){
      return $this->_has(4);
    }
    
    /**
     * Clear <body> value
     *
     * @return \RO\Cmd\ChangeBodyBeingCmd
     */
    public function clearBody(){
      return $this->_clear(4);
    }
    
    /**
     * Get <body> value
     *
     * @return int
     */
    public function getBody(){
      return $this->_get(4);
    }
    
    /**
     * Set <body> value
     *
     * @param int $value
     * @return \RO\Cmd\ChangeBodyBeingCmd
     */
    public function setBody( $value){
      return $this->_set(4, $value);
    }
  }
}

