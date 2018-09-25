<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ScenePet.proto

namespace RO\Cmd {

  class HandPetPetCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_PET_PROTOCMD;
    
    /**  @var int - \RO\Cmd\PetParam */
    public $param = \RO\Cmd\PetParam::PETPARAM_INVITE_HAND;
    
    /**  @var int */
    public $petguid = null;
    
    /**  @var boolean */
    public $breakup = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.HandPetPetCmd');

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
      $f->default   = \RO\Cmd\PetParam::PETPARAM_INVITE_HAND;
      $descriptor->addField($f);

      // REQUIRED UINT64 petguid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "petguid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // OPTIONAL BOOL breakup = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "breakup";
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
     * @return \RO\Cmd\HandPetPetCmd
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
     * @return \RO\Cmd\HandPetPetCmd
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
     * @return \RO\Cmd\HandPetPetCmd
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
     * @return \RO\Cmd\HandPetPetCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <petguid> has a value
     *
     * @return boolean
     */
    public function hasPetguid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <petguid> value
     *
     * @return \RO\Cmd\HandPetPetCmd
     */
    public function clearPetguid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <petguid> value
     *
     * @return int
     */
    public function getPetguid(){
      return $this->_get(3);
    }
    
    /**
     * Set <petguid> value
     *
     * @param int $value
     * @return \RO\Cmd\HandPetPetCmd
     */
    public function setPetguid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <breakup> has a value
     *
     * @return boolean
     */
    public function hasBreakup(){
      return $this->_has(4);
    }
    
    /**
     * Clear <breakup> value
     *
     * @return \RO\Cmd\HandPetPetCmd
     */
    public function clearBreakup(){
      return $this->_clear(4);
    }
    
    /**
     * Get <breakup> value
     *
     * @return boolean
     */
    public function getBreakup(){
      return $this->_get(4);
    }
    
    /**
     * Set <breakup> value
     *
     * @param boolean $value
     * @return \RO\Cmd\HandPetPetCmd
     */
    public function setBreakup( $value){
      return $this->_set(4, $value);
    }
  }
}
