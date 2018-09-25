<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class EffectUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_EFFECT;
    
    /**  @var int - \RO\Cmd\EEffectType */
    public $effecttype = \RO\Cmd\EEffectType::EEFFECTTYPE_NORMAL;
    
    /**  @var int */
    public $charid = null;
    
    /**  @var int */
    public $effectpos = null;
    
    /**  @var \RO\Cmd\ScenePos */
    public $pos = null;
    
    /**  @var string */
    public $effect = null;
    
    /**  @var int */
    public $msec = 0;
    
    /**  @var int */
    public $times = 1;
    
    /**  @var int */
    public $index = 1;
    
    /**  @var int - \RO\Cmd\EEffectOpt */
    public $opt = \RO\Cmd\EEffectOpt::EEFFECTOPT_PLAY;
    
    /**  @var boolean */
    public $posbind = false;
    
    /**  @var boolean */
    public $epbind = false;
    
    /**  @var int */
    public $delay = 0;
    
    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $dir = null;
    
    /**  @var int */
    public $skillid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.EffectUserCmd');

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
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_EFFECT;
      $descriptor->addField($f);

      // OPTIONAL ENUM effecttype = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "effecttype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EEffectType';
      $f->default   = \RO\Cmd\EEffectType::EEFFECTTYPE_NORMAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 effectpos = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "effectpos";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pos = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "pos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ScenePos';
      $descriptor->addField($f);

      // OPTIONAL STRING effect = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "effect";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 msec = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "msec";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 times = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "times";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 1;
      $descriptor->addField($f);

      // OPTIONAL UINT32 index = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "index";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 1;
      $descriptor->addField($f);

      // OPTIONAL ENUM opt = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "opt";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EEffectOpt';
      $f->default   = \RO\Cmd\EEffectOpt::EEFFECTOPT_PLAY;
      $descriptor->addField($f);

      // OPTIONAL BOOL posbind = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "posbind";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BOOL epbind = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "epbind";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL UINT32 delay = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "delay";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 id = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 dir = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "dir";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 skillid = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "skillid";
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
     * @return \RO\Cmd\EffectUserCmd
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
     * @return \RO\Cmd\EffectUserCmd
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
     * @return \RO\Cmd\EffectUserCmd
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
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <effecttype> has a value
     *
     * @return boolean
     */
    public function hasEffecttype(){
      return $this->_has(3);
    }
    
    /**
     * Clear <effecttype> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearEffecttype(){
      return $this->_clear(3);
    }
    
    /**
     * Get <effecttype> value
     *
     * @return int - \RO\Cmd\EEffectType
     */
    public function getEffecttype(){
      return $this->_get(3);
    }
    
    /**
     * Set <effecttype> value
     *
     * @param int - \RO\Cmd\EEffectType $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setEffecttype( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearCharid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(4);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setCharid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <effectpos> has a value
     *
     * @return boolean
     */
    public function hasEffectpos(){
      return $this->_has(5);
    }
    
    /**
     * Clear <effectpos> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearEffectpos(){
      return $this->_clear(5);
    }
    
    /**
     * Get <effectpos> value
     *
     * @return int
     */
    public function getEffectpos(){
      return $this->_get(5);
    }
    
    /**
     * Set <effectpos> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setEffectpos( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <pos> has a value
     *
     * @return boolean
     */
    public function hasPos(){
      return $this->_has(6);
    }
    
    /**
     * Clear <pos> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearPos(){
      return $this->_clear(6);
    }
    
    /**
     * Get <pos> value
     *
     * @return \RO\Cmd\ScenePos
     */
    public function getPos(){
      return $this->_get(6);
    }
    
    /**
     * Set <pos> value
     *
     * @param \RO\Cmd\ScenePos $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setPos(\RO\Cmd\ScenePos $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <effect> has a value
     *
     * @return boolean
     */
    public function hasEffect(){
      return $this->_has(7);
    }
    
    /**
     * Clear <effect> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearEffect(){
      return $this->_clear(7);
    }
    
    /**
     * Get <effect> value
     *
     * @return string
     */
    public function getEffect(){
      return $this->_get(7);
    }
    
    /**
     * Set <effect> value
     *
     * @param string $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setEffect( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <msec> has a value
     *
     * @return boolean
     */
    public function hasMsec(){
      return $this->_has(8);
    }
    
    /**
     * Clear <msec> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearMsec(){
      return $this->_clear(8);
    }
    
    /**
     * Get <msec> value
     *
     * @return int
     */
    public function getMsec(){
      return $this->_get(8);
    }
    
    /**
     * Set <msec> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setMsec( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <times> has a value
     *
     * @return boolean
     */
    public function hasTimes(){
      return $this->_has(9);
    }
    
    /**
     * Clear <times> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearTimes(){
      return $this->_clear(9);
    }
    
    /**
     * Get <times> value
     *
     * @return int
     */
    public function getTimes(){
      return $this->_get(9);
    }
    
    /**
     * Set <times> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setTimes( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <index> has a value
     *
     * @return boolean
     */
    public function hasIndex(){
      return $this->_has(10);
    }
    
    /**
     * Clear <index> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearIndex(){
      return $this->_clear(10);
    }
    
    /**
     * Get <index> value
     *
     * @return int
     */
    public function getIndex(){
      return $this->_get(10);
    }
    
    /**
     * Set <index> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setIndex( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <opt> has a value
     *
     * @return boolean
     */
    public function hasOpt(){
      return $this->_has(11);
    }
    
    /**
     * Clear <opt> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearOpt(){
      return $this->_clear(11);
    }
    
    /**
     * Get <opt> value
     *
     * @return int - \RO\Cmd\EEffectOpt
     */
    public function getOpt(){
      return $this->_get(11);
    }
    
    /**
     * Set <opt> value
     *
     * @param int - \RO\Cmd\EEffectOpt $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setOpt( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <posbind> has a value
     *
     * @return boolean
     */
    public function hasPosbind(){
      return $this->_has(12);
    }
    
    /**
     * Clear <posbind> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearPosbind(){
      return $this->_clear(12);
    }
    
    /**
     * Get <posbind> value
     *
     * @return boolean
     */
    public function getPosbind(){
      return $this->_get(12);
    }
    
    /**
     * Set <posbind> value
     *
     * @param boolean $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setPosbind( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <epbind> has a value
     *
     * @return boolean
     */
    public function hasEpbind(){
      return $this->_has(13);
    }
    
    /**
     * Clear <epbind> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearEpbind(){
      return $this->_clear(13);
    }
    
    /**
     * Get <epbind> value
     *
     * @return boolean
     */
    public function getEpbind(){
      return $this->_get(13);
    }
    
    /**
     * Set <epbind> value
     *
     * @param boolean $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setEpbind( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <delay> has a value
     *
     * @return boolean
     */
    public function hasDelay(){
      return $this->_has(14);
    }
    
    /**
     * Clear <delay> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearDelay(){
      return $this->_clear(14);
    }
    
    /**
     * Get <delay> value
     *
     * @return int
     */
    public function getDelay(){
      return $this->_get(14);
    }
    
    /**
     * Set <delay> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setDelay( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(15);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearId(){
      return $this->_clear(15);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(15);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setId( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <dir> has a value
     *
     * @return boolean
     */
    public function hasDir(){
      return $this->_has(16);
    }
    
    /**
     * Clear <dir> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearDir(){
      return $this->_clear(16);
    }
    
    /**
     * Get <dir> value
     *
     * @return int
     */
    public function getDir(){
      return $this->_get(16);
    }
    
    /**
     * Set <dir> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setDir( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <skillid> has a value
     *
     * @return boolean
     */
    public function hasSkillid(){
      return $this->_has(17);
    }
    
    /**
     * Clear <skillid> value
     *
     * @return \RO\Cmd\EffectUserCmd
     */
    public function clearSkillid(){
      return $this->_clear(17);
    }
    
    /**
     * Get <skillid> value
     *
     * @return int
     */
    public function getSkillid(){
      return $this->_get(17);
    }
    
    /**
     * Set <skillid> value
     *
     * @param int $value
     * @return \RO\Cmd\EffectUserCmd
     */
    public function setSkillid( $value){
      return $this->_set(17, $value);
    }
  }
}

