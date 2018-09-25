<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class ChangeBgmCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_CHANGEBGM;
    
    /**  @var string */
    public $bgm = null;
    
    /**  @var boolean */
    public $play = true;
    
    /**  @var int */
    public $times = 0;
    
    /**  @var int - \RO\Cmd\EBgmType */
    public $type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChangeBgmCmd');

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
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_CHANGEBGM;
      $descriptor->addField($f);

      // OPTIONAL STRING bgm = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "bgm";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL play = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "play";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = true;
      $descriptor->addField($f);

      // OPTIONAL UINT32 times = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "times";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EBgmType';
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
     * @return \RO\Cmd\ChangeBgmCmd
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
     * @return \RO\Cmd\ChangeBgmCmd
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
     * @return \RO\Cmd\ChangeBgmCmd
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
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <bgm> has a value
     *
     * @return boolean
     */
    public function hasBgm(){
      return $this->_has(3);
    }
    
    /**
     * Clear <bgm> value
     *
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function clearBgm(){
      return $this->_clear(3);
    }
    
    /**
     * Get <bgm> value
     *
     * @return string
     */
    public function getBgm(){
      return $this->_get(3);
    }
    
    /**
     * Set <bgm> value
     *
     * @param string $value
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function setBgm( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <play> has a value
     *
     * @return boolean
     */
    public function hasPlay(){
      return $this->_has(4);
    }
    
    /**
     * Clear <play> value
     *
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function clearPlay(){
      return $this->_clear(4);
    }
    
    /**
     * Get <play> value
     *
     * @return boolean
     */
    public function getPlay(){
      return $this->_get(4);
    }
    
    /**
     * Set <play> value
     *
     * @param boolean $value
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function setPlay( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <times> has a value
     *
     * @return boolean
     */
    public function hasTimes(){
      return $this->_has(5);
    }
    
    /**
     * Clear <times> value
     *
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function clearTimes(){
      return $this->_clear(5);
    }
    
    /**
     * Get <times> value
     *
     * @return int
     */
    public function getTimes(){
      return $this->_get(5);
    }
    
    /**
     * Set <times> value
     *
     * @param int $value
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function setTimes( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(6);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function clearType(){
      return $this->_clear(6);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EBgmType
     */
    public function getType(){
      return $this->_get(6);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EBgmType $value
     * @return \RO\Cmd\ChangeBgmCmd
     */
    public function setType( $value){
      return $this->_set(6, $value);
    }
  }
}
