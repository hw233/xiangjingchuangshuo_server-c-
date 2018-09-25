<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class SlotInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = null;
    
    /**  @var int - \RO\Cmd\ESlotType */
    public $type = \RO\Cmd\ESlotType::ESLOT_DEFAULT;
    
    /**  @var boolean */
    public $active = false;
    
    /**  @var int */
    public $costid = null;
    
    /**  @var int */
    public $costnum = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SlotInfo');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESlotType';
      $f->default   = \RO\Cmd\ESlotType::ESLOT_DEFAULT;
      $descriptor->addField($f);

      // OPTIONAL BOOL active = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL UINT32 costid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "costid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 costnum = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "costnum";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\SlotInfo
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\SlotInfo
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\SlotInfo
     */
    public function clearType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\ESlotType
     */
    public function getType(){
      return $this->_get(2);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\ESlotType $value
     * @return \RO\Cmd\SlotInfo
     */
    public function setType( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(3);
    }
    
    /**
     * Clear <active> value
     *
     * @return \RO\Cmd\SlotInfo
     */
    public function clearActive(){
      return $this->_clear(3);
    }
    
    /**
     * Get <active> value
     *
     * @return boolean
     */
    public function getActive(){
      return $this->_get(3);
    }
    
    /**
     * Set <active> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SlotInfo
     */
    public function setActive( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <costid> has a value
     *
     * @return boolean
     */
    public function hasCostid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <costid> value
     *
     * @return \RO\Cmd\SlotInfo
     */
    public function clearCostid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <costid> value
     *
     * @return int
     */
    public function getCostid(){
      return $this->_get(4);
    }
    
    /**
     * Set <costid> value
     *
     * @param int $value
     * @return \RO\Cmd\SlotInfo
     */
    public function setCostid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <costnum> has a value
     *
     * @return boolean
     */
    public function hasCostnum(){
      return $this->_has(5);
    }
    
    /**
     * Clear <costnum> value
     *
     * @return \RO\Cmd\SlotInfo
     */
    public function clearCostnum(){
      return $this->_clear(5);
    }
    
    /**
     * Get <costnum> value
     *
     * @return int
     */
    public function getCostnum(){
      return $this->_get(5);
    }
    
    /**
     * Set <costnum> value
     *
     * @param int $value
     * @return \RO\Cmd\SlotInfo
     */
    public function setCostnum( $value){
      return $this->_set(5, $value);
    }
  }
}
