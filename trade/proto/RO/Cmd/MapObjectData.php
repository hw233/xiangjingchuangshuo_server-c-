<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser.proto

namespace RO\Cmd {

  class MapObjectData extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PROTOCMD;
    
    /**  @var int - \RO\Cmd\CmdParam */
    public $param = \RO\Cmd\CmdParam::MAP_OBJECT_DATA;
    
    /**  @var int */
    public $guid = 0;
    
    /**  @var \RO\Cmd\UserAttr[]  */
    public $attrs = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.MapObjectData');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\CmdParam';
      $f->default   = \RO\Cmd\CmdParam::MAP_OBJECT_DATA;
      $descriptor->addField($f);

      // OPTIONAL UINT64 guid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE attrs = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "attrs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UserAttr';
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
     * @return \RO\Cmd\MapObjectData
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
     * @return \RO\Cmd\MapObjectData
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
     * @return \RO\Cmd\MapObjectData
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\CmdParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\CmdParam $value
     * @return \RO\Cmd\MapObjectData
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
     * @return \RO\Cmd\MapObjectData
     */
    public function clearGuid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guid> value
     *
     * @return int
     */
    public function getGuid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guid> value
     *
     * @param int $value
     * @return \RO\Cmd\MapObjectData
     */
    public function setGuid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <attrs> has a value
     *
     * @return boolean
     */
    public function hasAttrs(){
      return $this->_has(4);
    }
    
    /**
     * Clear <attrs> value
     *
     * @return \RO\Cmd\MapObjectData
     */
    public function clearAttrs(){
      return $this->_clear(4);
    }
    
    /**
     * Get <attrs> value
     *
     * @param int $idx
     * @return \RO\Cmd\UserAttr
     */
    public function getAttrs($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <attrs> value
     *
     * @param \RO\Cmd\UserAttr $value
     * @return \RO\Cmd\MapObjectData
     */
    public function setAttrs(\RO\Cmd\UserAttr $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <attrs>
     *
     * @return \RO\Cmd\UserAttr[]
     */
    public function getAttrsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <attrs>
     *
     * @param \RO\Cmd\UserAttr $value
     * @return \RO\Cmd\MapObjectData
     */
    public function addAttrs(\RO\Cmd\UserAttr $value){
     return $this->_add(4, $value);
    }
  }
}
