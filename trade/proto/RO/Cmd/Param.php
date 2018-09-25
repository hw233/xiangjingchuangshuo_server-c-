<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ProtoCommon.proto

namespace RO\Cmd {

  class Param extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $key = null;
    
    /**  @var string */
    public $value = null;
    
    /**  @var \RO\Cmd\Param[]  */
    public $items = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.Param');

      // OPTIONAL STRING key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "key";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE items = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\Param';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <key> has a value
     *
     * @return boolean
     */
    public function hasKey(){
      return $this->_has(1);
    }
    
    /**
     * Clear <key> value
     *
     * @return \RO\Cmd\Param
     */
    public function clearKey(){
      return $this->_clear(1);
    }
    
    /**
     * Get <key> value
     *
     * @return string
     */
    public function getKey(){
      return $this->_get(1);
    }
    
    /**
     * Set <key> value
     *
     * @param string $value
     * @return \RO\Cmd\Param
     */
    public function setKey( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \RO\Cmd\Param
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return string
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param string $value
     * @return \RO\Cmd\Param
     */
    public function setValue( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <items> has a value
     *
     * @return boolean
     */
    public function hasItems(){
      return $this->_has(3);
    }
    
    /**
     * Clear <items> value
     *
     * @return \RO\Cmd\Param
     */
    public function clearItems(){
      return $this->_clear(3);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\Param
     */
    public function getItems($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\Param $value
     * @return \RO\Cmd\Param
     */
    public function setItems(\RO\Cmd\Param $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\Param[]
     */
    public function getItemsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\Param $value
     * @return \RO\Cmd\Param
     */
    public function addItems(\RO\Cmd\Param $value){
     return $this->_add(3, $value);
    }
  }
}
