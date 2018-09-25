<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class FoodLimitInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $itemid = null;
    
    /**  @var int */
    public $num = null;
    
    /**  @var int */
    public $time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.FoodLimitInfo');

      // OPTIONAL UINT32 itemid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 num = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "num";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\FoodLimitInfo
     */
    public function clearItemid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(1);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\FoodLimitInfo
     */
    public function setItemid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <num> has a value
     *
     * @return boolean
     */
    public function hasNum(){
      return $this->_has(2);
    }
    
    /**
     * Clear <num> value
     *
     * @return \RO\Cmd\FoodLimitInfo
     */
    public function clearNum(){
      return $this->_clear(2);
    }
    
    /**
     * Get <num> value
     *
     * @return int
     */
    public function getNum(){
      return $this->_get(2);
    }
    
    /**
     * Set <num> value
     *
     * @param int $value
     * @return \RO\Cmd\FoodLimitInfo
     */
    public function setNum( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\FoodLimitInfo
     */
    public function clearTime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(3);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\FoodLimitInfo
     */
    public function setTime( $value){
      return $this->_set(3, $value);
    }
  }
}

