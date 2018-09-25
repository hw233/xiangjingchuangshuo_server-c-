<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class QuickSellItemCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ItemParam */
    public $param = \RO\Cmd\ItemParam::ITEMPARAM_QUICK_SELLITEM;
    
    /**  @var \RO\Cmd\SItem[]  */
    public $items = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QuickSellItemCmd');

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
      $f->default   = \RO\Cmd\ItemParam::ITEMPARAM_QUICK_SELLITEM;
      $descriptor->addField($f);

      // REPEATED MESSAGE items = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SItem';
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
     * @return \RO\Cmd\QuickSellItemCmd
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
     * @return \RO\Cmd\QuickSellItemCmd
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
     * @return \RO\Cmd\QuickSellItemCmd
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
     * @return \RO\Cmd\QuickSellItemCmd
     */
    public function setParam( $value){
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
     * @return \RO\Cmd\QuickSellItemCmd
     */
    public function clearItems(){
      return $this->_clear(3);
    }
    
    /**
     * Get <items> value
     *
     * @param int $idx
     * @return \RO\Cmd\SItem
     */
    public function getItems($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <items> value
     *
     * @param \RO\Cmd\SItem $value
     * @return \RO\Cmd\QuickSellItemCmd
     */
    public function setItems(\RO\Cmd\SItem $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <items>
     *
     * @return \RO\Cmd\SItem[]
     */
    public function getItemsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <items>
     *
     * @param \RO\Cmd\SItem $value
     * @return \RO\Cmd\QuickSellItemCmd
     */
    public function addItems(\RO\Cmd\SItem $value){
     return $this->_add(3, $value);
    }
  }
}

