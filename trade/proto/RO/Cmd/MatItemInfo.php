<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class MatItemInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $itemid = null;
    
    /**  @var int */
    public $num = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.MatItemInfo');

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
     * @return \RO\Cmd\MatItemInfo
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
     * @return \RO\Cmd\MatItemInfo
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
     * @return \RO\Cmd\MatItemInfo
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
     * @return \RO\Cmd\MatItemInfo
     */
    public function setNum( $value){
      return $this->_set(2, $value);
    }
  }
}

