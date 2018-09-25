<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser.proto

namespace RO\Cmd {

  class PhaseData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $number = 0;
    
    /**  @var \RO\Cmd\ScenePos */
    public $pos = null;
    
    /**  @var \RO\Cmd\HitedTarget[]  */
    public $hitedTargets = array();
    
    /**  @var int */
    public $dir = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PhaseData');

      // OPTIONAL INT32 number = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "number";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pos = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "pos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ScenePos';
      $descriptor->addField($f);

      // REPEATED MESSAGE hitedTargets = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "hitedTargets";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\HitedTarget';
      $descriptor->addField($f);

      // OPTIONAL INT32 dir = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "dir";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <number> has a value
     *
     * @return boolean
     */
    public function hasNumber(){
      return $this->_has(1);
    }
    
    /**
     * Clear <number> value
     *
     * @return \RO\Cmd\PhaseData
     */
    public function clearNumber(){
      return $this->_clear(1);
    }
    
    /**
     * Get <number> value
     *
     * @return int
     */
    public function getNumber(){
      return $this->_get(1);
    }
    
    /**
     * Set <number> value
     *
     * @param int $value
     * @return \RO\Cmd\PhaseData
     */
    public function setNumber( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <pos> has a value
     *
     * @return boolean
     */
    public function hasPos(){
      return $this->_has(2);
    }
    
    /**
     * Clear <pos> value
     *
     * @return \RO\Cmd\PhaseData
     */
    public function clearPos(){
      return $this->_clear(2);
    }
    
    /**
     * Get <pos> value
     *
     * @return \RO\Cmd\ScenePos
     */
    public function getPos(){
      return $this->_get(2);
    }
    
    /**
     * Set <pos> value
     *
     * @param \RO\Cmd\ScenePos $value
     * @return \RO\Cmd\PhaseData
     */
    public function setPos(\RO\Cmd\ScenePos $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <hitedTargets> has a value
     *
     * @return boolean
     */
    public function hasHitedTargets(){
      return $this->_has(3);
    }
    
    /**
     * Clear <hitedTargets> value
     *
     * @return \RO\Cmd\PhaseData
     */
    public function clearHitedTargets(){
      return $this->_clear(3);
    }
    
    /**
     * Get <hitedTargets> value
     *
     * @param int $idx
     * @return \RO\Cmd\HitedTarget
     */
    public function getHitedTargets($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <hitedTargets> value
     *
     * @param \RO\Cmd\HitedTarget $value
     * @return \RO\Cmd\PhaseData
     */
    public function setHitedTargets(\RO\Cmd\HitedTarget $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <hitedTargets>
     *
     * @return \RO\Cmd\HitedTarget[]
     */
    public function getHitedTargetsList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <hitedTargets>
     *
     * @param \RO\Cmd\HitedTarget $value
     * @return \RO\Cmd\PhaseData
     */
    public function addHitedTargets(\RO\Cmd\HitedTarget $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <dir> has a value
     *
     * @return boolean
     */
    public function hasDir(){
      return $this->_has(5);
    }
    
    /**
     * Clear <dir> value
     *
     * @return \RO\Cmd\PhaseData
     */
    public function clearDir(){
      return $this->_clear(5);
    }
    
    /**
     * Get <dir> value
     *
     * @return int
     */
    public function getDir(){
      return $this->_get(5);
    }
    
    /**
     * Set <dir> value
     *
     * @param int $value
     * @return \RO\Cmd\PhaseData
     */
    public function setDir( $value){
      return $this->_set(5, $value);
    }
  }
}

