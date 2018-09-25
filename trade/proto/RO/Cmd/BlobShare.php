<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobShare extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\ShareNormal[]  */
    public $normaldata = array();
    
    /**  @var \RO\Cmd\ShareCalc[]  */
    public $calcdata = array();
    
    /**  @var \RO\Cmd\ShareFirstMvp */
    public $firstmvp = null;
    
    /**  @var string */
    public $firstphoto = null;
    
    /**  @var \RO\Cmd\ShareFirstHand */
    public $firsthand = null;
    
    /**  @var \RO\Cmd\ShareFirstCarrier */
    public $firstcarrier = null;
    
    /**  @var \RO\Cmd\ShareTrade */
    public $tradebuy = null;
    
    /**  @var \RO\Cmd\ShareTrade */
    public $tradesell = null;
    
    /**  @var \RO\Cmd\ShareDamage */
    public $maxdamage = null;
    
    /**  @var int[]  */
    public $mystery_box = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobShare');

      // REPEATED MESSAGE normaldata = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "normaldata";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ShareNormal';
      $descriptor->addField($f);

      // REPEATED MESSAGE calcdata = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "calcdata";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ShareCalc';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE firstmvp = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "firstmvp";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ShareFirstMvp';
      $descriptor->addField($f);

      // OPTIONAL STRING firstphoto = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "firstphoto";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE firsthand = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "firsthand";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ShareFirstHand';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE firstcarrier = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "firstcarrier";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ShareFirstCarrier';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tradebuy = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "tradebuy";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ShareTrade';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tradesell = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "tradesell";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ShareTrade';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE maxdamage = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "maxdamage";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ShareDamage';
      $descriptor->addField($f);

      // REPEATED UINT32 mystery_box = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "mystery_box";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <normaldata> has a value
     *
     * @return boolean
     */
    public function hasNormaldata(){
      return $this->_has(1);
    }
    
    /**
     * Clear <normaldata> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearNormaldata(){
      return $this->_clear(1);
    }
    
    /**
     * Get <normaldata> value
     *
     * @param int $idx
     * @return \RO\Cmd\ShareNormal
     */
    public function getNormaldata($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <normaldata> value
     *
     * @param \RO\Cmd\ShareNormal $value
     * @return \RO\Cmd\BlobShare
     */
    public function setNormaldata(\RO\Cmd\ShareNormal $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <normaldata>
     *
     * @return \RO\Cmd\ShareNormal[]
     */
    public function getNormaldataList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <normaldata>
     *
     * @param \RO\Cmd\ShareNormal $value
     * @return \RO\Cmd\BlobShare
     */
    public function addNormaldata(\RO\Cmd\ShareNormal $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <calcdata> has a value
     *
     * @return boolean
     */
    public function hasCalcdata(){
      return $this->_has(2);
    }
    
    /**
     * Clear <calcdata> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearCalcdata(){
      return $this->_clear(2);
    }
    
    /**
     * Get <calcdata> value
     *
     * @param int $idx
     * @return \RO\Cmd\ShareCalc
     */
    public function getCalcdata($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <calcdata> value
     *
     * @param \RO\Cmd\ShareCalc $value
     * @return \RO\Cmd\BlobShare
     */
    public function setCalcdata(\RO\Cmd\ShareCalc $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <calcdata>
     *
     * @return \RO\Cmd\ShareCalc[]
     */
    public function getCalcdataList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <calcdata>
     *
     * @param \RO\Cmd\ShareCalc $value
     * @return \RO\Cmd\BlobShare
     */
    public function addCalcdata(\RO\Cmd\ShareCalc $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <firstmvp> has a value
     *
     * @return boolean
     */
    public function hasFirstmvp(){
      return $this->_has(3);
    }
    
    /**
     * Clear <firstmvp> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearFirstmvp(){
      return $this->_clear(3);
    }
    
    /**
     * Get <firstmvp> value
     *
     * @return \RO\Cmd\ShareFirstMvp
     */
    public function getFirstmvp(){
      return $this->_get(3);
    }
    
    /**
     * Set <firstmvp> value
     *
     * @param \RO\Cmd\ShareFirstMvp $value
     * @return \RO\Cmd\BlobShare
     */
    public function setFirstmvp(\RO\Cmd\ShareFirstMvp $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <firstphoto> has a value
     *
     * @return boolean
     */
    public function hasFirstphoto(){
      return $this->_has(4);
    }
    
    /**
     * Clear <firstphoto> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearFirstphoto(){
      return $this->_clear(4);
    }
    
    /**
     * Get <firstphoto> value
     *
     * @return string
     */
    public function getFirstphoto(){
      return $this->_get(4);
    }
    
    /**
     * Set <firstphoto> value
     *
     * @param string $value
     * @return \RO\Cmd\BlobShare
     */
    public function setFirstphoto( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <firsthand> has a value
     *
     * @return boolean
     */
    public function hasFirsthand(){
      return $this->_has(5);
    }
    
    /**
     * Clear <firsthand> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearFirsthand(){
      return $this->_clear(5);
    }
    
    /**
     * Get <firsthand> value
     *
     * @return \RO\Cmd\ShareFirstHand
     */
    public function getFirsthand(){
      return $this->_get(5);
    }
    
    /**
     * Set <firsthand> value
     *
     * @param \RO\Cmd\ShareFirstHand $value
     * @return \RO\Cmd\BlobShare
     */
    public function setFirsthand(\RO\Cmd\ShareFirstHand $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <firstcarrier> has a value
     *
     * @return boolean
     */
    public function hasFirstcarrier(){
      return $this->_has(6);
    }
    
    /**
     * Clear <firstcarrier> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearFirstcarrier(){
      return $this->_clear(6);
    }
    
    /**
     * Get <firstcarrier> value
     *
     * @return \RO\Cmd\ShareFirstCarrier
     */
    public function getFirstcarrier(){
      return $this->_get(6);
    }
    
    /**
     * Set <firstcarrier> value
     *
     * @param \RO\Cmd\ShareFirstCarrier $value
     * @return \RO\Cmd\BlobShare
     */
    public function setFirstcarrier(\RO\Cmd\ShareFirstCarrier $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <tradebuy> has a value
     *
     * @return boolean
     */
    public function hasTradebuy(){
      return $this->_has(7);
    }
    
    /**
     * Clear <tradebuy> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearTradebuy(){
      return $this->_clear(7);
    }
    
    /**
     * Get <tradebuy> value
     *
     * @return \RO\Cmd\ShareTrade
     */
    public function getTradebuy(){
      return $this->_get(7);
    }
    
    /**
     * Set <tradebuy> value
     *
     * @param \RO\Cmd\ShareTrade $value
     * @return \RO\Cmd\BlobShare
     */
    public function setTradebuy(\RO\Cmd\ShareTrade $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <tradesell> has a value
     *
     * @return boolean
     */
    public function hasTradesell(){
      return $this->_has(8);
    }
    
    /**
     * Clear <tradesell> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearTradesell(){
      return $this->_clear(8);
    }
    
    /**
     * Get <tradesell> value
     *
     * @return \RO\Cmd\ShareTrade
     */
    public function getTradesell(){
      return $this->_get(8);
    }
    
    /**
     * Set <tradesell> value
     *
     * @param \RO\Cmd\ShareTrade $value
     * @return \RO\Cmd\BlobShare
     */
    public function setTradesell(\RO\Cmd\ShareTrade $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <maxdamage> has a value
     *
     * @return boolean
     */
    public function hasMaxdamage(){
      return $this->_has(9);
    }
    
    /**
     * Clear <maxdamage> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearMaxdamage(){
      return $this->_clear(9);
    }
    
    /**
     * Get <maxdamage> value
     *
     * @return \RO\Cmd\ShareDamage
     */
    public function getMaxdamage(){
      return $this->_get(9);
    }
    
    /**
     * Set <maxdamage> value
     *
     * @param \RO\Cmd\ShareDamage $value
     * @return \RO\Cmd\BlobShare
     */
    public function setMaxdamage(\RO\Cmd\ShareDamage $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <mystery_box> has a value
     *
     * @return boolean
     */
    public function hasMysteryBox(){
      return $this->_has(10);
    }
    
    /**
     * Clear <mystery_box> value
     *
     * @return \RO\Cmd\BlobShare
     */
    public function clearMysteryBox(){
      return $this->_clear(10);
    }
    
    /**
     * Get <mystery_box> value
     *
     * @param int $idx
     * @return int
     */
    public function getMysteryBox($idx = NULL){
      return $this->_get(10, $idx);
    }
    
    /**
     * Set <mystery_box> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobShare
     */
    public function setMysteryBox( $value, $idx = NULL){
      return $this->_set(10, $value, $idx);
    }
    
    /**
     * Get all elements of <mystery_box>
     *
     * @return int[]
     */
    public function getMysteryBoxList(){
     return $this->_get(10);
    }
    
    /**
     * Add a new element to <mystery_box>
     *
     * @param int $value
     * @return \RO\Cmd\BlobShare
     */
    public function addMysteryBox( $value){
     return $this->_add(10, $value);
    }
  }
}
