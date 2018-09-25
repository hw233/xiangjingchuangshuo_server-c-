<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionCmd.proto

namespace RO\Cmd {

  class SessionShopData extends \DrSlump\Protobuf\Message {

    /**  @var int[]  */
    public $old = array();
    
    /**  @var int */
    public $now = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SessionShopData');

      // REPEATED UINT32 old = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "old";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // OPTIONAL UINT32 now = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "now";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <old> has a value
     *
     * @return boolean
     */
    public function hasOld(){
      return $this->_has(1);
    }
    
    /**
     * Clear <old> value
     *
     * @return \RO\Cmd\SessionShopData
     */
    public function clearOld(){
      return $this->_clear(1);
    }
    
    /**
     * Get <old> value
     *
     * @param int $idx
     * @return int
     */
    public function getOld($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <old> value
     *
     * @param int $value
     * @return \RO\Cmd\SessionShopData
     */
    public function setOld( $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <old>
     *
     * @return int[]
     */
    public function getOldList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <old>
     *
     * @param int $value
     * @return \RO\Cmd\SessionShopData
     */
    public function addOld( $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <now> has a value
     *
     * @return boolean
     */
    public function hasNow(){
      return $this->_has(2);
    }
    
    /**
     * Clear <now> value
     *
     * @return \RO\Cmd\SessionShopData
     */
    public function clearNow(){
      return $this->_clear(2);
    }
    
    /**
     * Get <now> value
     *
     * @return int
     */
    public function getNow(){
      return $this->_get(2);
    }
    
    /**
     * Set <now> value
     *
     * @param int $value
     * @return \RO\Cmd\SessionShopData
     */
    public function setNow( $value){
      return $this->_set(2, $value);
    }
  }
}

