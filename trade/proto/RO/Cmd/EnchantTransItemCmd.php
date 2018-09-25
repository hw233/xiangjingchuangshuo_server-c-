<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class EnchantTransItemCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ItemParam */
    public $param = \RO\Cmd\ItemParam::ITEMPARAM_ENCHANT_TRANS;
    
    /**  @var string */
    public $from_guid = null;
    
    /**  @var string */
    public $to_guid = null;
    
    /**  @var boolean */
    public $success = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.EnchantTransItemCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemParam';
      $f->default   = \RO\Cmd\ItemParam::ITEMPARAM_ENCHANT_TRANS;
      $descriptor->addField($f);

      // OPTIONAL STRING from_guid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "from_guid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING to_guid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "to_guid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL success = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "success";
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
     * @return \RO\Cmd\EnchantTransItemCmd
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
     * @return \RO\Cmd\EnchantTransItemCmd
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
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ItemParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ItemParam $value
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <from_guid> has a value
     *
     * @return boolean
     */
    public function hasFromGuid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <from_guid> value
     *
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function clearFromGuid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <from_guid> value
     *
     * @return string
     */
    public function getFromGuid(){
      return $this->_get(3);
    }
    
    /**
     * Set <from_guid> value
     *
     * @param string $value
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function setFromGuid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <to_guid> has a value
     *
     * @return boolean
     */
    public function hasToGuid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <to_guid> value
     *
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function clearToGuid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <to_guid> value
     *
     * @return string
     */
    public function getToGuid(){
      return $this->_get(4);
    }
    
    /**
     * Set <to_guid> value
     *
     * @param string $value
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function setToGuid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <success> has a value
     *
     * @return boolean
     */
    public function hasSuccess(){
      return $this->_has(5);
    }
    
    /**
     * Clear <success> value
     *
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function clearSuccess(){
      return $this->_clear(5);
    }
    
    /**
     * Get <success> value
     *
     * @return boolean
     */
    public function getSuccess(){
      return $this->_get(5);
    }
    
    /**
     * Set <success> value
     *
     * @param boolean $value
     * @return \RO\Cmd\EnchantTransItemCmd
     */
    public function setSuccess( $value){
      return $this->_set(5, $value);
    }
  }
}

