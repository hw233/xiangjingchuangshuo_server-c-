<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class ShareCalcItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $high_key = 0;
    
    /**  @var int */
    public $low_key = 0;
    
    /**  @var int */
    public $high_value = 0;
    
    /**  @var int */
    public $low_value = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ShareCalcItem');

      // OPTIONAL UINT32 high_key = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "high_key";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 low_key = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "low_key";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 high_value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "high_value";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 low_value = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "low_value";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <high_key> has a value
     *
     * @return boolean
     */
    public function hasHighKey(){
      return $this->_has(1);
    }
    
    /**
     * Clear <high_key> value
     *
     * @return \RO\Cmd\ShareCalcItem
     */
    public function clearHighKey(){
      return $this->_clear(1);
    }
    
    /**
     * Get <high_key> value
     *
     * @return int
     */
    public function getHighKey(){
      return $this->_get(1);
    }
    
    /**
     * Set <high_key> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareCalcItem
     */
    public function setHighKey( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <low_key> has a value
     *
     * @return boolean
     */
    public function hasLowKey(){
      return $this->_has(2);
    }
    
    /**
     * Clear <low_key> value
     *
     * @return \RO\Cmd\ShareCalcItem
     */
    public function clearLowKey(){
      return $this->_clear(2);
    }
    
    /**
     * Get <low_key> value
     *
     * @return int
     */
    public function getLowKey(){
      return $this->_get(2);
    }
    
    /**
     * Set <low_key> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareCalcItem
     */
    public function setLowKey( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <high_value> has a value
     *
     * @return boolean
     */
    public function hasHighValue(){
      return $this->_has(3);
    }
    
    /**
     * Clear <high_value> value
     *
     * @return \RO\Cmd\ShareCalcItem
     */
    public function clearHighValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <high_value> value
     *
     * @return int
     */
    public function getHighValue(){
      return $this->_get(3);
    }
    
    /**
     * Set <high_value> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareCalcItem
     */
    public function setHighValue( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <low_value> has a value
     *
     * @return boolean
     */
    public function hasLowValue(){
      return $this->_has(4);
    }
    
    /**
     * Clear <low_value> value
     *
     * @return \RO\Cmd\ShareCalcItem
     */
    public function clearLowValue(){
      return $this->_clear(4);
    }
    
    /**
     * Get <low_value> value
     *
     * @return int
     */
    public function getLowValue(){
      return $this->_get(4);
    }
    
    /**
     * Set <low_value> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareCalcItem
     */
    public function setLowValue( $value){
      return $this->_set(4, $value);
    }
  }
}

