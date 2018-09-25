<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class ProfessionUserInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = null;
    
    /**  @var int */
    public $profession = null;
    
    /**  @var int */
    public $joblv = 0;
    
    /**  @var int */
    public $jobexp = 0;
    
    /**  @var int - \RO\Cmd\EProfressionDataType */
    public $type = \RO\Cmd\EProfressionDataType::ETypeBranch;
    
    /**  @var string */
    public $recordname = null;
    
    /**  @var int */
    public $recordtime = null;
    
    /**  @var int */
    public $charid = null;
    
    /**  @var string */
    public $charname = null;
    
    /**  @var \RO\Cmd\AttrProfessionData */
    public $attr_data = null;
    
    /**  @var \RO\Cmd\EquipPackData[]  */
    public $equip_data = array();
    
    /**  @var \RO\Cmd\AstrolabeProfessionData */
    public $astrolabe_data = null;
    
    /**  @var \RO\Cmd\SkillProfessionData */
    public $skill_data = null;
    
    /**  @var boolean */
    public $isfirst = true;
    
    /**  @var boolean */
    public $isbuy = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ProfessionUserInfo');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 profession = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "profession";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 joblv = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "joblv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 jobexp = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "jobexp";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EProfressionDataType';
      $f->default   = \RO\Cmd\EProfressionDataType::ETypeBranch;
      $descriptor->addField($f);

      // OPTIONAL STRING recordname = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "recordname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 recordtime = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "recordtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING charname = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "charname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE attr_data = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "attr_data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\AttrProfessionData';
      $descriptor->addField($f);

      // REPEATED MESSAGE equip_data = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "equip_data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\EquipPackData';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE astrolabe_data = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "astrolabe_data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\AstrolabeProfessionData';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE skill_data = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "skill_data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SkillProfessionData';
      $descriptor->addField($f);

      // OPTIONAL BOOL isfirst = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "isfirst";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = true;
      $descriptor->addField($f);

      // OPTIONAL BOOL isbuy = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "isbuy";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <profession> has a value
     *
     * @return boolean
     */
    public function hasProfession(){
      return $this->_has(2);
    }
    
    /**
     * Clear <profession> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearProfession(){
      return $this->_clear(2);
    }
    
    /**
     * Get <profession> value
     *
     * @return int
     */
    public function getProfession(){
      return $this->_get(2);
    }
    
    /**
     * Set <profession> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setProfession( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <joblv> has a value
     *
     * @return boolean
     */
    public function hasJoblv(){
      return $this->_has(3);
    }
    
    /**
     * Clear <joblv> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearJoblv(){
      return $this->_clear(3);
    }
    
    /**
     * Get <joblv> value
     *
     * @return int
     */
    public function getJoblv(){
      return $this->_get(3);
    }
    
    /**
     * Set <joblv> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setJoblv( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <jobexp> has a value
     *
     * @return boolean
     */
    public function hasJobexp(){
      return $this->_has(4);
    }
    
    /**
     * Clear <jobexp> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearJobexp(){
      return $this->_clear(4);
    }
    
    /**
     * Get <jobexp> value
     *
     * @return int
     */
    public function getJobexp(){
      return $this->_get(4);
    }
    
    /**
     * Set <jobexp> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setJobexp( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EProfressionDataType
     */
    public function getType(){
      return $this->_get(5);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EProfressionDataType $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setType( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <recordname> has a value
     *
     * @return boolean
     */
    public function hasRecordname(){
      return $this->_has(6);
    }
    
    /**
     * Clear <recordname> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearRecordname(){
      return $this->_clear(6);
    }
    
    /**
     * Get <recordname> value
     *
     * @return string
     */
    public function getRecordname(){
      return $this->_get(6);
    }
    
    /**
     * Set <recordname> value
     *
     * @param string $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setRecordname( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <recordtime> has a value
     *
     * @return boolean
     */
    public function hasRecordtime(){
      return $this->_has(7);
    }
    
    /**
     * Clear <recordtime> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearRecordtime(){
      return $this->_clear(7);
    }
    
    /**
     * Get <recordtime> value
     *
     * @return int
     */
    public function getRecordtime(){
      return $this->_get(7);
    }
    
    /**
     * Set <recordtime> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setRecordtime( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(8);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearCharid(){
      return $this->_clear(8);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(8);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setCharid( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <charname> has a value
     *
     * @return boolean
     */
    public function hasCharname(){
      return $this->_has(9);
    }
    
    /**
     * Clear <charname> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearCharname(){
      return $this->_clear(9);
    }
    
    /**
     * Get <charname> value
     *
     * @return string
     */
    public function getCharname(){
      return $this->_get(9);
    }
    
    /**
     * Set <charname> value
     *
     * @param string $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setCharname( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <attr_data> has a value
     *
     * @return boolean
     */
    public function hasAttrData(){
      return $this->_has(10);
    }
    
    /**
     * Clear <attr_data> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearAttrData(){
      return $this->_clear(10);
    }
    
    /**
     * Get <attr_data> value
     *
     * @return \RO\Cmd\AttrProfessionData
     */
    public function getAttrData(){
      return $this->_get(10);
    }
    
    /**
     * Set <attr_data> value
     *
     * @param \RO\Cmd\AttrProfessionData $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setAttrData(\RO\Cmd\AttrProfessionData $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <equip_data> has a value
     *
     * @return boolean
     */
    public function hasEquipData(){
      return $this->_has(11);
    }
    
    /**
     * Clear <equip_data> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearEquipData(){
      return $this->_clear(11);
    }
    
    /**
     * Get <equip_data> value
     *
     * @param int $idx
     * @return \RO\Cmd\EquipPackData
     */
    public function getEquipData($idx = NULL){
      return $this->_get(11, $idx);
    }
    
    /**
     * Set <equip_data> value
     *
     * @param \RO\Cmd\EquipPackData $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setEquipData(\RO\Cmd\EquipPackData $value, $idx = NULL){
      return $this->_set(11, $value, $idx);
    }
    
    /**
     * Get all elements of <equip_data>
     *
     * @return \RO\Cmd\EquipPackData[]
     */
    public function getEquipDataList(){
     return $this->_get(11);
    }
    
    /**
     * Add a new element to <equip_data>
     *
     * @param \RO\Cmd\EquipPackData $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function addEquipData(\RO\Cmd\EquipPackData $value){
     return $this->_add(11, $value);
    }
    
    /**
     * Check if <astrolabe_data> has a value
     *
     * @return boolean
     */
    public function hasAstrolabeData(){
      return $this->_has(12);
    }
    
    /**
     * Clear <astrolabe_data> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearAstrolabeData(){
      return $this->_clear(12);
    }
    
    /**
     * Get <astrolabe_data> value
     *
     * @return \RO\Cmd\AstrolabeProfessionData
     */
    public function getAstrolabeData(){
      return $this->_get(12);
    }
    
    /**
     * Set <astrolabe_data> value
     *
     * @param \RO\Cmd\AstrolabeProfessionData $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setAstrolabeData(\RO\Cmd\AstrolabeProfessionData $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <skill_data> has a value
     *
     * @return boolean
     */
    public function hasSkillData(){
      return $this->_has(13);
    }
    
    /**
     * Clear <skill_data> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearSkillData(){
      return $this->_clear(13);
    }
    
    /**
     * Get <skill_data> value
     *
     * @return \RO\Cmd\SkillProfessionData
     */
    public function getSkillData(){
      return $this->_get(13);
    }
    
    /**
     * Set <skill_data> value
     *
     * @param \RO\Cmd\SkillProfessionData $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setSkillData(\RO\Cmd\SkillProfessionData $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <isfirst> has a value
     *
     * @return boolean
     */
    public function hasIsfirst(){
      return $this->_has(14);
    }
    
    /**
     * Clear <isfirst> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearIsfirst(){
      return $this->_clear(14);
    }
    
    /**
     * Get <isfirst> value
     *
     * @return boolean
     */
    public function getIsfirst(){
      return $this->_get(14);
    }
    
    /**
     * Set <isfirst> value
     *
     * @param boolean $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setIsfirst( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <isbuy> has a value
     *
     * @return boolean
     */
    public function hasIsbuy(){
      return $this->_has(15);
    }
    
    /**
     * Clear <isbuy> value
     *
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function clearIsbuy(){
      return $this->_clear(15);
    }
    
    /**
     * Get <isbuy> value
     *
     * @return boolean
     */
    public function getIsbuy(){
      return $this->_get(15);
    }
    
    /**
     * Set <isbuy> value
     *
     * @param boolean $value
     * @return \RO\Cmd\ProfessionUserInfo
     */
    public function setIsbuy( $value){
      return $this->_set(15, $value);
    }
  }
}

