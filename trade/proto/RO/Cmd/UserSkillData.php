<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class UserSkillData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $totalpoint = null;
    
    /**  @var int */
    public $maxpos = null;
    
    /**  @var \RO\Cmd\SkillData[]  */
    public $datas = array();
    
    /**  @var \RO\Cmd\SkillPos[]  */
    public $pos = array();
    
    /**  @var int */
    public $automaxpos = null;
    
    /**  @var \RO\Cmd\SkillPos[]  */
    public $autopos = array();
    
    /**  @var \RO\Cmd\SkillPos[]  */
    public $extendpos = array();
    
    /**  @var int */
    public $maxextendpos = null;
    
    /**  @var boolean */
    public $reseted = false;
    
    /**  @var \RO\Cmd\SkillReplaceInfo[]  */
    public $replace = array();
    
    /**  @var \RO\Cmd\SkillShortcutDB[]  */
    public $shortcuts = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.UserSkillData');

      // OPTIONAL UINT32 totalpoint = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "totalpoint";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 maxpos = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "maxpos";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SkillData';
      $descriptor->addField($f);

      // REPEATED MESSAGE pos = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "pos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SkillPos';
      $descriptor->addField($f);

      // OPTIONAL UINT32 automaxpos = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "automaxpos";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE autopos = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "autopos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SkillPos';
      $descriptor->addField($f);

      // REPEATED MESSAGE extendpos = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "extendpos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SkillPos';
      $descriptor->addField($f);

      // OPTIONAL UINT32 maxextendpos = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "maxextendpos";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL reseted = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "reseted";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // REPEATED MESSAGE replace = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "replace";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SkillReplaceInfo';
      $descriptor->addField($f);

      // REPEATED MESSAGE shortcuts = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "shortcuts";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SkillShortcutDB';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <totalpoint> has a value
     *
     * @return boolean
     */
    public function hasTotalpoint(){
      return $this->_has(1);
    }
    
    /**
     * Clear <totalpoint> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearTotalpoint(){
      return $this->_clear(1);
    }
    
    /**
     * Get <totalpoint> value
     *
     * @return int
     */
    public function getTotalpoint(){
      return $this->_get(1);
    }
    
    /**
     * Set <totalpoint> value
     *
     * @param int $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setTotalpoint( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <maxpos> has a value
     *
     * @return boolean
     */
    public function hasMaxpos(){
      return $this->_has(2);
    }
    
    /**
     * Clear <maxpos> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearMaxpos(){
      return $this->_clear(2);
    }
    
    /**
     * Get <maxpos> value
     *
     * @return int
     */
    public function getMaxpos(){
      return $this->_get(2);
    }
    
    /**
     * Set <maxpos> value
     *
     * @param int $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setMaxpos( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(3);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearDatas(){
      return $this->_clear(3);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\SkillData
     */
    public function getDatas($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\SkillData $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setDatas(\RO\Cmd\SkillData $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\SkillData[]
     */
    public function getDatasList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\SkillData $value
     * @return \RO\Cmd\UserSkillData
     */
    public function addDatas(\RO\Cmd\SkillData $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <pos> has a value
     *
     * @return boolean
     */
    public function hasPos(){
      return $this->_has(4);
    }
    
    /**
     * Clear <pos> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearPos(){
      return $this->_clear(4);
    }
    
    /**
     * Get <pos> value
     *
     * @param int $idx
     * @return \RO\Cmd\SkillPos
     */
    public function getPos($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <pos> value
     *
     * @param \RO\Cmd\SkillPos $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setPos(\RO\Cmd\SkillPos $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <pos>
     *
     * @return \RO\Cmd\SkillPos[]
     */
    public function getPosList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <pos>
     *
     * @param \RO\Cmd\SkillPos $value
     * @return \RO\Cmd\UserSkillData
     */
    public function addPos(\RO\Cmd\SkillPos $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <automaxpos> has a value
     *
     * @return boolean
     */
    public function hasAutomaxpos(){
      return $this->_has(5);
    }
    
    /**
     * Clear <automaxpos> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearAutomaxpos(){
      return $this->_clear(5);
    }
    
    /**
     * Get <automaxpos> value
     *
     * @return int
     */
    public function getAutomaxpos(){
      return $this->_get(5);
    }
    
    /**
     * Set <automaxpos> value
     *
     * @param int $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setAutomaxpos( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <autopos> has a value
     *
     * @return boolean
     */
    public function hasAutopos(){
      return $this->_has(6);
    }
    
    /**
     * Clear <autopos> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearAutopos(){
      return $this->_clear(6);
    }
    
    /**
     * Get <autopos> value
     *
     * @param int $idx
     * @return \RO\Cmd\SkillPos
     */
    public function getAutopos($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <autopos> value
     *
     * @param \RO\Cmd\SkillPos $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setAutopos(\RO\Cmd\SkillPos $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <autopos>
     *
     * @return \RO\Cmd\SkillPos[]
     */
    public function getAutoposList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <autopos>
     *
     * @param \RO\Cmd\SkillPos $value
     * @return \RO\Cmd\UserSkillData
     */
    public function addAutopos(\RO\Cmd\SkillPos $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <extendpos> has a value
     *
     * @return boolean
     */
    public function hasExtendpos(){
      return $this->_has(7);
    }
    
    /**
     * Clear <extendpos> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearExtendpos(){
      return $this->_clear(7);
    }
    
    /**
     * Get <extendpos> value
     *
     * @param int $idx
     * @return \RO\Cmd\SkillPos
     */
    public function getExtendpos($idx = NULL){
      return $this->_get(7, $idx);
    }
    
    /**
     * Set <extendpos> value
     *
     * @param \RO\Cmd\SkillPos $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setExtendpos(\RO\Cmd\SkillPos $value, $idx = NULL){
      return $this->_set(7, $value, $idx);
    }
    
    /**
     * Get all elements of <extendpos>
     *
     * @return \RO\Cmd\SkillPos[]
     */
    public function getExtendposList(){
     return $this->_get(7);
    }
    
    /**
     * Add a new element to <extendpos>
     *
     * @param \RO\Cmd\SkillPos $value
     * @return \RO\Cmd\UserSkillData
     */
    public function addExtendpos(\RO\Cmd\SkillPos $value){
     return $this->_add(7, $value);
    }
    
    /**
     * Check if <maxextendpos> has a value
     *
     * @return boolean
     */
    public function hasMaxextendpos(){
      return $this->_has(8);
    }
    
    /**
     * Clear <maxextendpos> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearMaxextendpos(){
      return $this->_clear(8);
    }
    
    /**
     * Get <maxextendpos> value
     *
     * @return int
     */
    public function getMaxextendpos(){
      return $this->_get(8);
    }
    
    /**
     * Set <maxextendpos> value
     *
     * @param int $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setMaxextendpos( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <reseted> has a value
     *
     * @return boolean
     */
    public function hasReseted(){
      return $this->_has(10);
    }
    
    /**
     * Clear <reseted> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearReseted(){
      return $this->_clear(10);
    }
    
    /**
     * Get <reseted> value
     *
     * @return boolean
     */
    public function getReseted(){
      return $this->_get(10);
    }
    
    /**
     * Set <reseted> value
     *
     * @param boolean $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setReseted( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <replace> has a value
     *
     * @return boolean
     */
    public function hasReplace(){
      return $this->_has(11);
    }
    
    /**
     * Clear <replace> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearReplace(){
      return $this->_clear(11);
    }
    
    /**
     * Get <replace> value
     *
     * @param int $idx
     * @return \RO\Cmd\SkillReplaceInfo
     */
    public function getReplace($idx = NULL){
      return $this->_get(11, $idx);
    }
    
    /**
     * Set <replace> value
     *
     * @param \RO\Cmd\SkillReplaceInfo $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setReplace(\RO\Cmd\SkillReplaceInfo $value, $idx = NULL){
      return $this->_set(11, $value, $idx);
    }
    
    /**
     * Get all elements of <replace>
     *
     * @return \RO\Cmd\SkillReplaceInfo[]
     */
    public function getReplaceList(){
     return $this->_get(11);
    }
    
    /**
     * Add a new element to <replace>
     *
     * @param \RO\Cmd\SkillReplaceInfo $value
     * @return \RO\Cmd\UserSkillData
     */
    public function addReplace(\RO\Cmd\SkillReplaceInfo $value){
     return $this->_add(11, $value);
    }
    
    /**
     * Check if <shortcuts> has a value
     *
     * @return boolean
     */
    public function hasShortcuts(){
      return $this->_has(12);
    }
    
    /**
     * Clear <shortcuts> value
     *
     * @return \RO\Cmd\UserSkillData
     */
    public function clearShortcuts(){
      return $this->_clear(12);
    }
    
    /**
     * Get <shortcuts> value
     *
     * @param int $idx
     * @return \RO\Cmd\SkillShortcutDB
     */
    public function getShortcuts($idx = NULL){
      return $this->_get(12, $idx);
    }
    
    /**
     * Set <shortcuts> value
     *
     * @param \RO\Cmd\SkillShortcutDB $value
     * @return \RO\Cmd\UserSkillData
     */
    public function setShortcuts(\RO\Cmd\SkillShortcutDB $value, $idx = NULL){
      return $this->_set(12, $value, $idx);
    }
    
    /**
     * Get all elements of <shortcuts>
     *
     * @return \RO\Cmd\SkillShortcutDB[]
     */
    public function getShortcutsList(){
     return $this->_get(12);
    }
    
    /**
     * Add a new element to <shortcuts>
     *
     * @param \RO\Cmd\SkillShortcutDB $value
     * @return \RO\Cmd\UserSkillData
     */
    public function addShortcuts(\RO\Cmd\SkillShortcutDB $value){
     return $this->_add(12, $value);
    }
  }
}
