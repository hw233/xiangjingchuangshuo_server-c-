<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class PetAdventureStep extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $step = 0;
    
    /**  @var \RO\Cmd\ItemData[]  */
    public $items = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PetAdventureStep');

      // OPTIONAL UINT32 step = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "step";
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
      $f->reference = '\RO\Cmd\ItemData';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <step> has a value
     *
     * @return boolean
     */
    public function hasStep(){
      return $this->_has(1);
    }
    
    /**
     * Clear <step> value
     *
     * @return \RO\Cmd\PetAdventureStep
     */
    public function clearStep(){
      return $this->_clear(1);
    }
    
    /**
     * Get <step> value
     *
     * @return int
     */
    public function getStep(){
      return $this->_get(1);
    }
    
    /**
     * Set <step> value
     *
     * @param int $value
     * @return \RO\Cmd\PetAdventureStep
     */
    public function setStep( $value){
      return $this->_set(1, $value);
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
     * @return \RO\Cmd\PetAdventureStep
     */
    public function clearItems(){
      return $this->_clear(3);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\ItemData
     */
    public function getItems($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\PetAdventureStep
     */
    public function setItems(\RO\Cmd\ItemData $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\ItemData[]
     */
    public function getItemsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\PetAdventureStep
     */
    public function addItems(\RO\Cmd\ItemData $value){
     return $this->_add(3, $value);
    }
  }
}

