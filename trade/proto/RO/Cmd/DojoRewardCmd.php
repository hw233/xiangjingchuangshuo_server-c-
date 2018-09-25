<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: Dojo.proto

namespace RO\Cmd {

  class DojoRewardCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::DOJO_PROTOCMD;
    
    /**  @var int - \RO\Cmd\DojoParam */
    public $param = \RO\Cmd\DojoParam::EDOJOPARAM_REWARD;
    
    /**  @var int */
    public $dojoid = null;
    
    /**  @var int - \RO\Cmd\EPassType */
    public $passtype = null;
    
    /**  @var \RO\Cmd\ItemInfo[]  */
    public $items = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DojoRewardCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::DOJO_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\DojoParam';
      $f->default   = \RO\Cmd\DojoParam::EDOJOPARAM_REWARD;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dojoid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "dojoid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM passtype = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "passtype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EPassType';
      $descriptor->addField($f);

      // REPEATED MESSAGE items = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ItemInfo';
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
     * @return \RO\Cmd\DojoRewardCmd
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
     * @return \RO\Cmd\DojoRewardCmd
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
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\DojoParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\DojoParam $value
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <dojoid> has a value
     *
     * @return boolean
     */
    public function hasDojoid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <dojoid> value
     *
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function clearDojoid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <dojoid> value
     *
     * @return int
     */
    public function getDojoid(){
      return $this->_get(3);
    }
    
    /**
     * Set <dojoid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function setDojoid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <passtype> has a value
     *
     * @return boolean
     */
    public function hasPasstype(){
      return $this->_has(4);
    }
    
    /**
     * Clear <passtype> value
     *
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function clearPasstype(){
      return $this->_clear(4);
    }
    
    /**
     * Get <passtype> value
     *
     * @return int - \RO\Cmd\EPassType
     */
    public function getPasstype(){
      return $this->_get(4);
    }
    
    /**
     * Set <passtype> value
     *
     * @param int - \RO\Cmd\EPassType $value
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function setPasstype( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <items> has a value
     *
     * @return boolean
     */
    public function hasItems(){
      return $this->_has(5);
    }
    
    /**
     * Clear <items> value
     *
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function clearItems(){
      return $this->_clear(5);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\ItemInfo
     */
    public function getItems($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\ItemInfo $value
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function setItems(\RO\Cmd\ItemInfo $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\ItemInfo[]
     */
    public function getItemsList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\ItemInfo $value
     * @return \RO\Cmd\DojoRewardCmd
     */
    public function addItems(\RO\Cmd\ItemInfo $value){
     return $this->_add(5, $value);
    }
  }
}
