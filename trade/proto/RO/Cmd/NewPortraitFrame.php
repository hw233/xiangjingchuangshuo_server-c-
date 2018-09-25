<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class NewPortraitFrame extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_NEWPORTRAITFRAME;
    
    /**  @var int[]  */
    public $portrait = array();
    
    /**  @var int[]  */
    public $frame = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.NewPortraitFrame');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_NEWPORTRAITFRAME;
      $descriptor->addField($f);

      // REPEATED UINT32 portrait = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "portrait";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      // REPEATED UINT32 frame = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "frame";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
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
     * @return \RO\Cmd\NewPortraitFrame
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
     * @return \RO\Cmd\NewPortraitFrame
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
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <portrait> has a value
     *
     * @return boolean
     */
    public function hasPortrait(){
      return $this->_has(3);
    }
    
    /**
     * Clear <portrait> value
     *
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function clearPortrait(){
      return $this->_clear(3);
    }
    
    /**
     * Get <portrait> value
     *
     * @param int $idx
     * @return int
     */
    public function getPortrait($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <portrait> value
     *
     * @param int $value
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function setPortrait( $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <portrait>
     *
     * @return int[]
     */
    public function getPortraitList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <portrait>
     *
     * @param int $value
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function addPortrait( $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <frame> has a value
     *
     * @return boolean
     */
    public function hasFrame(){
      return $this->_has(4);
    }
    
    /**
     * Clear <frame> value
     *
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function clearFrame(){
      return $this->_clear(4);
    }
    
    /**
     * Get <frame> value
     *
     * @param int $idx
     * @return int
     */
    public function getFrame($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <frame> value
     *
     * @param int $value
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function setFrame( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <frame>
     *
     * @return int[]
     */
    public function getFrameList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <frame>
     *
     * @param int $value
     * @return \RO\Cmd\NewPortraitFrame
     */
    public function addFrame( $value){
     return $this->_add(4, $value);
    }
  }
}
