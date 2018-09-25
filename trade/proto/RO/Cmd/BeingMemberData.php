<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneBeing.proto

namespace RO\Cmd {

  class BeingMemberData extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EBeingDataType */
    public $etype = \RO\Cmd\EBeingDataType::EBEINGDATA_MIN;
    
    /**  @var int */
    public $value = 0;
    
    /**  @var int[]  */
    public $values = array();
    
    /**  @var string */
    public $data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BeingMemberData');

      // OPTIONAL ENUM etype = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "etype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EBeingDataType';
      $f->default   = \RO\Cmd\EBeingDataType::EBEINGDATA_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT64 value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED UINT32 values = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "values";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL STRING data = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <etype> has a value
     *
     * @return boolean
     */
    public function hasEtype(){
      return $this->_has(1);
    }
    
    /**
     * Clear <etype> value
     *
     * @return \RO\Cmd\BeingMemberData
     */
    public function clearEtype(){
      return $this->_clear(1);
    }
    
    /**
     * Get <etype> value
     *
     * @return int - \RO\Cmd\EBeingDataType
     */
    public function getEtype(){
      return $this->_get(1);
    }
    
    /**
     * Set <etype> value
     *
     * @param int - \RO\Cmd\EBeingDataType $value
     * @return \RO\Cmd\BeingMemberData
     */
    public function setEtype( $value){
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
     * @return \RO\Cmd\BeingMemberData
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return int
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param int $value
     * @return \RO\Cmd\BeingMemberData
     */
    public function setValue( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <values> has a value
     *
     * @return boolean
     */
    public function hasValues(){
      return $this->_has(3);
    }
    
    /**
     * Clear <values> value
     *
     * @return \RO\Cmd\BeingMemberData
     */
    public function clearValues(){
      return $this->_clear(3);
    }
    
    /**
     * Get <values> value
     *
     * @param int $idx
     * @return int
     */
    public function getValues($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <values> value
     *
     * @param int $value
     * @return \RO\Cmd\BeingMemberData
     */
    public function setValues( $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <values>
     *
     * @return int[]
     */
    public function getValuesList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <values>
     *
     * @param int $value
     * @return \RO\Cmd\BeingMemberData
     */
    public function addValues( $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(4);
    }
    
    /**
     * Clear <data> value
     *
     * @return \RO\Cmd\BeingMemberData
     */
    public function clearData(){
      return $this->_clear(4);
    }
    
    /**
     * Get <data> value
     *
     * @return string
     */
    public function getData(){
      return $this->_get(4);
    }
    
    /**
     * Set <data> value
     *
     * @param string $value
     * @return \RO\Cmd\BeingMemberData
     */
    public function setData( $value){
      return $this->_set(4, $value);
    }
  }
}
