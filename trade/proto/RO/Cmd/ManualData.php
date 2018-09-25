<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneManual.proto

namespace RO\Cmd {

  class ManualData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $version = 0;
    
    /**  @var int */
    public $point = 0;
    
    /**  @var int */
    public $level = 0;
    
    /**  @var int */
    public $skillpoint = 0;
    
    /**  @var int */
    public $exchange_time = 0;
    
    /**  @var \RO\Cmd\ManualItem[]  */
    public $items = array();
    
    /**  @var \RO\Cmd\ManualGroup[]  */
    public $groups = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ManualData');

      // OPTIONAL UINT32 version = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "version";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 point = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "point";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 level = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "level";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 skillpoint = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "skillpoint";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 exchange_time = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "exchange_time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE items = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ManualItem';
      $descriptor->addField($f);

      // REPEATED MESSAGE groups = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "groups";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ManualGroup';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(6);
    }
    
    /**
     * Clear <version> value
     *
     * @return \RO\Cmd\ManualData
     */
    public function clearVersion(){
      return $this->_clear(6);
    }
    
    /**
     * Get <version> value
     *
     * @return int
     */
    public function getVersion(){
      return $this->_get(6);
    }
    
    /**
     * Set <version> value
     *
     * @param int $value
     * @return \RO\Cmd\ManualData
     */
    public function setVersion( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <point> has a value
     *
     * @return boolean
     */
    public function hasPoint(){
      return $this->_has(1);
    }
    
    /**
     * Clear <point> value
     *
     * @return \RO\Cmd\ManualData
     */
    public function clearPoint(){
      return $this->_clear(1);
    }
    
    /**
     * Get <point> value
     *
     * @return int
     */
    public function getPoint(){
      return $this->_get(1);
    }
    
    /**
     * Set <point> value
     *
     * @param int $value
     * @return \RO\Cmd\ManualData
     */
    public function setPoint( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <level> has a value
     *
     * @return boolean
     */
    public function hasLevel(){
      return $this->_has(2);
    }
    
    /**
     * Clear <level> value
     *
     * @return \RO\Cmd\ManualData
     */
    public function clearLevel(){
      return $this->_clear(2);
    }
    
    /**
     * Get <level> value
     *
     * @return int
     */
    public function getLevel(){
      return $this->_get(2);
    }
    
    /**
     * Set <level> value
     *
     * @param int $value
     * @return \RO\Cmd\ManualData
     */
    public function setLevel( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <skillpoint> has a value
     *
     * @return boolean
     */
    public function hasSkillpoint(){
      return $this->_has(4);
    }
    
    /**
     * Clear <skillpoint> value
     *
     * @return \RO\Cmd\ManualData
     */
    public function clearSkillpoint(){
      return $this->_clear(4);
    }
    
    /**
     * Get <skillpoint> value
     *
     * @return int
     */
    public function getSkillpoint(){
      return $this->_get(4);
    }
    
    /**
     * Set <skillpoint> value
     *
     * @param int $value
     * @return \RO\Cmd\ManualData
     */
    public function setSkillpoint( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <exchange_time> has a value
     *
     * @return boolean
     */
    public function hasExchangeTime(){
      return $this->_has(8);
    }
    
    /**
     * Clear <exchange_time> value
     *
     * @return \RO\Cmd\ManualData
     */
    public function clearExchangeTime(){
      return $this->_clear(8);
    }
    
    /**
     * Get <exchange_time> value
     *
     * @return int
     */
    public function getExchangeTime(){
      return $this->_get(8);
    }
    
    /**
     * Set <exchange_time> value
     *
     * @param int $value
     * @return \RO\Cmd\ManualData
     */
    public function setExchangeTime( $value){
      return $this->_set(8, $value);
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
     * @return \RO\Cmd\ManualData
     */
    public function clearItems(){
      return $this->_clear(3);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\ManualItem
     */
    public function getItems($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\ManualItem $value
     * @return \RO\Cmd\ManualData
     */
    public function setItems(\RO\Cmd\ManualItem $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\ManualItem[]
     */
    public function getItemsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\ManualItem $value
     * @return \RO\Cmd\ManualData
     */
    public function addItems(\RO\Cmd\ManualItem $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <groups> has a value
     *
     * @return boolean
     */
    public function hasGroups(){
      return $this->_has(5);
    }
    
    /**
     * Clear <groups> value
     *
     * @return \RO\Cmd\ManualData
     */
    public function clearGroups(){
      return $this->_clear(5);
    }
    
    /**
     * Get <groups> value
     *
     * @param int $idx
     * @return \RO\Cmd\ManualGroup
     */
    public function getGroups($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <groups> value
     *
     * @param \RO\Cmd\ManualGroup $value
     * @return \RO\Cmd\ManualData
     */
    public function setGroups(\RO\Cmd\ManualGroup $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <groups>
     *
     * @return \RO\Cmd\ManualGroup[]
     */
    public function getGroupsList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <groups>
     *
     * @param \RO\Cmd\ManualGroup $value
     * @return \RO\Cmd\ManualData
     */
    public function addGroups(\RO\Cmd\ManualGroup $value){
     return $this->_add(5, $value);
    }
  }
}

