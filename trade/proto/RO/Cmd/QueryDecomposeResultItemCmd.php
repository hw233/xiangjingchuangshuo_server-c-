<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class QueryDecomposeResultItemCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ItemParam */
    public $param = \RO\Cmd\ItemParam::ITEMPARAM_QUERYDECOMPOSERESULT;
    
    /**  @var string */
    public $guid = null;
    
    /**  @var \RO\Cmd\DecomposeResult[]  */
    public $results = array();
    
    /**  @var int */
    public $sell_price = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryDecomposeResultItemCmd');

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
      $f->default   = \RO\Cmd\ItemParam::ITEMPARAM_QUERYDECOMPOSERESULT;
      $descriptor->addField($f);

      // OPTIONAL STRING guid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE results = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "results";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\DecomposeResult';
      $descriptor->addField($f);

      // OPTIONAL UINT32 sell_price = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "sell_price";
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
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
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
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
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
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
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
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <guid> has a value
     *
     * @return boolean
     */
    public function hasGuid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <guid> value
     *
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function clearGuid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guid> value
     *
     * @return string
     */
    public function getGuid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guid> value
     *
     * @param string $value
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function setGuid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <results> has a value
     *
     * @return boolean
     */
    public function hasResults(){
      return $this->_has(4);
    }
    
    /**
     * Clear <results> value
     *
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function clearResults(){
      return $this->_clear(4);
    }
    
    /**
     * Get <results> value
     *
     * @param int $idx
     * @return \RO\Cmd\DecomposeResult
     */
    public function getResults($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <results> value
     *
     * @param \RO\Cmd\DecomposeResult $value
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function setResults(\RO\Cmd\DecomposeResult $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <results>
     *
     * @return \RO\Cmd\DecomposeResult[]
     */
    public function getResultsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <results>
     *
     * @param \RO\Cmd\DecomposeResult $value
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function addResults(\RO\Cmd\DecomposeResult $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <sell_price> has a value
     *
     * @return boolean
     */
    public function hasSellPrice(){
      return $this->_has(5);
    }
    
    /**
     * Clear <sell_price> value
     *
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function clearSellPrice(){
      return $this->_clear(5);
    }
    
    /**
     * Get <sell_price> value
     *
     * @return int
     */
    public function getSellPrice(){
      return $this->_get(5);
    }
    
    /**
     * Set <sell_price> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryDecomposeResultItemCmd
     */
    public function setSellPrice( $value){
      return $this->_set(5, $value);
    }
  }
}
