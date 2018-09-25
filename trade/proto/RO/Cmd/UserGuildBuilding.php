<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class UserGuildBuilding extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EGuildBuilding */
    public $type = \RO\Cmd\EGuildBuilding::EGUILDBUILDING_MIN;
    
    /**  @var int */
    public $submitcount = 0;
    
    /**  @var int */
    public $nextwelfaretime = 0;
    
    /**  @var boolean */
    public $levelupeffect = false;
    
    /**  @var int */
    public $submitcounttotal = 0;
    
    /**  @var int */
    public $submittime = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.UserGuildBuilding');

      // OPTIONAL ENUM type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EGuildBuilding';
      $f->default   = \RO\Cmd\EGuildBuilding::EGUILDBUILDING_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT32 submitcount = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "submitcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 nextwelfaretime = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "nextwelfaretime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL levelupeffect = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "levelupeffect";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL UINT32 submitcounttotal = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "submitcounttotal";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 submittime = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "submittime";
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
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(1);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EGuildBuilding
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EGuildBuilding $value
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <submitcount> has a value
     *
     * @return boolean
     */
    public function hasSubmitcount(){
      return $this->_has(2);
    }
    
    /**
     * Clear <submitcount> value
     *
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function clearSubmitcount(){
      return $this->_clear(2);
    }
    
    /**
     * Get <submitcount> value
     *
     * @return int
     */
    public function getSubmitcount(){
      return $this->_get(2);
    }
    
    /**
     * Set <submitcount> value
     *
     * @param int $value
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function setSubmitcount( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <nextwelfaretime> has a value
     *
     * @return boolean
     */
    public function hasNextwelfaretime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <nextwelfaretime> value
     *
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function clearNextwelfaretime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <nextwelfaretime> value
     *
     * @return int
     */
    public function getNextwelfaretime(){
      return $this->_get(3);
    }
    
    /**
     * Set <nextwelfaretime> value
     *
     * @param int $value
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function setNextwelfaretime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <levelupeffect> has a value
     *
     * @return boolean
     */
    public function hasLevelupeffect(){
      return $this->_has(4);
    }
    
    /**
     * Clear <levelupeffect> value
     *
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function clearLevelupeffect(){
      return $this->_clear(4);
    }
    
    /**
     * Get <levelupeffect> value
     *
     * @return boolean
     */
    public function getLevelupeffect(){
      return $this->_get(4);
    }
    
    /**
     * Set <levelupeffect> value
     *
     * @param boolean $value
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function setLevelupeffect( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <submitcounttotal> has a value
     *
     * @return boolean
     */
    public function hasSubmitcounttotal(){
      return $this->_has(5);
    }
    
    /**
     * Clear <submitcounttotal> value
     *
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function clearSubmitcounttotal(){
      return $this->_clear(5);
    }
    
    /**
     * Get <submitcounttotal> value
     *
     * @return int
     */
    public function getSubmitcounttotal(){
      return $this->_get(5);
    }
    
    /**
     * Set <submitcounttotal> value
     *
     * @param int $value
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function setSubmitcounttotal( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <submittime> has a value
     *
     * @return boolean
     */
    public function hasSubmittime(){
      return $this->_has(6);
    }
    
    /**
     * Clear <submittime> value
     *
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function clearSubmittime(){
      return $this->_clear(6);
    }
    
    /**
     * Get <submittime> value
     *
     * @return int
     */
    public function getSubmittime(){
      return $this->_get(6);
    }
    
    /**
     * Set <submittime> value
     *
     * @param int $value
     * @return \RO\Cmd\UserGuildBuilding
     */
    public function setSubmittime( $value){
      return $this->_set(6, $value);
    }
  }
}
