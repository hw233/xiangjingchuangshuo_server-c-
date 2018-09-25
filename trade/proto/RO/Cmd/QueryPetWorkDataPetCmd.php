<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class QueryPetWorkDataPetCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
    
    /**  @var int - \RO\Cmd\PetParam */
    public $param = \RO\Cmd\PetParam::PETPARAM_WORK_QUERYWORKDATA;
    
    /**  @var \RO\Cmd\WorkSpace[]  */
    public $datas = array();
    
    /**  @var \RO\Cmd\WorkPetExtra[]  */
    public $extras = array();
    
    /**  @var int */
    public $max_space = 0;
    
    /**  @var int */
    public $card_expiretime = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryPetWorkDataPetCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\PetParam';
      $f->default   = \RO\Cmd\PetParam::PETPARAM_WORK_QUERYWORKDATA;
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\WorkSpace';
      $descriptor->addField($f);

      // REPEATED MESSAGE extras = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "extras";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\WorkPetExtra';
      $descriptor->addField($f);

      // OPTIONAL UINT32 max_space = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "max_space";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 card_expiretime = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "card_expiretime";
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
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
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
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
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
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\PetParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\PetParam $value
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function setParam( $value){
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
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function clearDatas(){
      return $this->_clear(3);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\WorkSpace
     */
    public function getDatas($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\WorkSpace $value
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function setDatas(\RO\Cmd\WorkSpace $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\WorkSpace[]
     */
    public function getDatasList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\WorkSpace $value
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function addDatas(\RO\Cmd\WorkSpace $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <extras> has a value
     *
     * @return boolean
     */
    public function hasExtras(){
      return $this->_has(4);
    }
    
    /**
     * Clear <extras> value
     *
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function clearExtras(){
      return $this->_clear(4);
    }
    
    /**
     * Get <extras> value
     *
     * @param int $idx
     * @return \RO\Cmd\WorkPetExtra
     */
    public function getExtras($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <extras> value
     *
     * @param \RO\Cmd\WorkPetExtra $value
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function setExtras(\RO\Cmd\WorkPetExtra $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <extras>
     *
     * @return \RO\Cmd\WorkPetExtra[]
     */
    public function getExtrasList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <extras>
     *
     * @param \RO\Cmd\WorkPetExtra $value
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function addExtras(\RO\Cmd\WorkPetExtra $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <max_space> has a value
     *
     * @return boolean
     */
    public function hasMaxSpace(){
      return $this->_has(5);
    }
    
    /**
     * Clear <max_space> value
     *
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function clearMaxSpace(){
      return $this->_clear(5);
    }
    
    /**
     * Get <max_space> value
     *
     * @return int
     */
    public function getMaxSpace(){
      return $this->_get(5);
    }
    
    /**
     * Set <max_space> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function setMaxSpace( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <card_expiretime> has a value
     *
     * @return boolean
     */
    public function hasCardExpiretime(){
      return $this->_has(6);
    }
    
    /**
     * Clear <card_expiretime> value
     *
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function clearCardExpiretime(){
      return $this->_clear(6);
    }
    
    /**
     * Get <card_expiretime> value
     *
     * @return int
     */
    public function getCardExpiretime(){
      return $this->_get(6);
    }
    
    /**
     * Set <card_expiretime> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryPetWorkDataPetCmd
     */
    public function setCardExpiretime( $value){
      return $this->_set(6, $value);
    }
  }
}
