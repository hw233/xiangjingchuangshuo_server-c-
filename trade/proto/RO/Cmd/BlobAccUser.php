<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobAccUser extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $auguryreward = 0;
    
    /**  @var int */
    public $maxbaselv = 0;
    
    /**  @var int */
    public $maxbaselv_resettime = 0;
    
    /**  @var \RO\Cmd\PhotoMd5[]  */
    public $md5s = array();
    
    /**  @var \RO\Cmd\BlobJoyData[]  */
    public $accjoy = array();
    
    /**  @var int[]  */
    public $shownpcs = array();
    
    /**  @var int */
    public $char_primary_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobAccUser');

      // OPTIONAL UINT32 auguryreward = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "auguryreward";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 maxbaselv = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "maxbaselv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 maxbaselv_resettime = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "maxbaselv_resettime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE md5s = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "md5s";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\PhotoMd5';
      $descriptor->addField($f);

      // REPEATED MESSAGE accjoy = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "accjoy";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\BlobJoyData';
      $descriptor->addField($f);

      // REPEATED UINT32 shownpcs = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "shownpcs";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL UINT64 char_primary_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "char_primary_id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <auguryreward> has a value
     *
     * @return boolean
     */
    public function hasAuguryreward(){
      return $this->_has(1);
    }
    
    /**
     * Clear <auguryreward> value
     *
     * @return \RO\Cmd\BlobAccUser
     */
    public function clearAuguryreward(){
      return $this->_clear(1);
    }
    
    /**
     * Get <auguryreward> value
     *
     * @return int
     */
    public function getAuguryreward(){
      return $this->_get(1);
    }
    
    /**
     * Set <auguryreward> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function setAuguryreward( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <maxbaselv> has a value
     *
     * @return boolean
     */
    public function hasMaxbaselv(){
      return $this->_has(2);
    }
    
    /**
     * Clear <maxbaselv> value
     *
     * @return \RO\Cmd\BlobAccUser
     */
    public function clearMaxbaselv(){
      return $this->_clear(2);
    }
    
    /**
     * Get <maxbaselv> value
     *
     * @return int
     */
    public function getMaxbaselv(){
      return $this->_get(2);
    }
    
    /**
     * Set <maxbaselv> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function setMaxbaselv( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <maxbaselv_resettime> has a value
     *
     * @return boolean
     */
    public function hasMaxbaselvResettime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <maxbaselv_resettime> value
     *
     * @return \RO\Cmd\BlobAccUser
     */
    public function clearMaxbaselvResettime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <maxbaselv_resettime> value
     *
     * @return int
     */
    public function getMaxbaselvResettime(){
      return $this->_get(3);
    }
    
    /**
     * Set <maxbaselv_resettime> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function setMaxbaselvResettime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <md5s> has a value
     *
     * @return boolean
     */
    public function hasMd5s(){
      return $this->_has(4);
    }
    
    /**
     * Clear <md5s> value
     *
     * @return \RO\Cmd\BlobAccUser
     */
    public function clearMd5s(){
      return $this->_clear(4);
    }
    
    /**
     * Get <md5s> value
     *
     * @param int $idx
     * @return \RO\Cmd\PhotoMd5
     */
    public function getMd5s($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <md5s> value
     *
     * @param \RO\Cmd\PhotoMd5 $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function setMd5s(\RO\Cmd\PhotoMd5 $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <md5s>
     *
     * @return \RO\Cmd\PhotoMd5[]
     */
    public function getMd5sList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <md5s>
     *
     * @param \RO\Cmd\PhotoMd5 $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function addMd5s(\RO\Cmd\PhotoMd5 $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <accjoy> has a value
     *
     * @return boolean
     */
    public function hasAccjoy(){
      return $this->_has(5);
    }
    
    /**
     * Clear <accjoy> value
     *
     * @return \RO\Cmd\BlobAccUser
     */
    public function clearAccjoy(){
      return $this->_clear(5);
    }
    
    /**
     * Get <accjoy> value
     *
     * @param int $idx
     * @return \RO\Cmd\BlobJoyData
     */
    public function getAccjoy($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <accjoy> value
     *
     * @param \RO\Cmd\BlobJoyData $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function setAccjoy(\RO\Cmd\BlobJoyData $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <accjoy>
     *
     * @return \RO\Cmd\BlobJoyData[]
     */
    public function getAccjoyList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <accjoy>
     *
     * @param \RO\Cmd\BlobJoyData $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function addAccjoy(\RO\Cmd\BlobJoyData $value){
     return $this->_add(5, $value);
    }
    
    /**
     * Check if <shownpcs> has a value
     *
     * @return boolean
     */
    public function hasShownpcs(){
      return $this->_has(6);
    }
    
    /**
     * Clear <shownpcs> value
     *
     * @return \RO\Cmd\BlobAccUser
     */
    public function clearShownpcs(){
      return $this->_clear(6);
    }
    
    /**
     * Get <shownpcs> value
     *
     * @param int $idx
     * @return int
     */
    public function getShownpcs($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <shownpcs> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function setShownpcs( $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <shownpcs>
     *
     * @return int[]
     */
    public function getShownpcsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <shownpcs>
     *
     * @param int $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function addShownpcs( $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <char_primary_id> has a value
     *
     * @return boolean
     */
    public function hasCharPrimaryId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <char_primary_id> value
     *
     * @return \RO\Cmd\BlobAccUser
     */
    public function clearCharPrimaryId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <char_primary_id> value
     *
     * @return int
     */
    public function getCharPrimaryId(){
      return $this->_get(7);
    }
    
    /**
     * Set <char_primary_id> value
     *
     * @param int $value
     * @return \RO\Cmd\BlobAccUser
     */
    public function setCharPrimaryId( $value){
      return $this->_set(7, $value);
    }
  }
}
