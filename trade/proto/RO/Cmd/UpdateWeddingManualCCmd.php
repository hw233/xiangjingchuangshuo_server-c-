<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: WeddingCCmd.proto

namespace RO\Cmd {

  class UpdateWeddingManualCCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::WEDDINGC_PROTOCMD;
    
    /**  @var int - \RO\Cmd\WeddingCParam */
    public $param = \RO\Cmd\WeddingCParam::WEDDINGCPARAM_UPDATE_MANUAL;
    
    /**  @var \RO\Cmd\ClientWeddingManual */
    public $manual = null;
    
    /**  @var \RO\Cmd\WeddingInvitee[]  */
    public $invitees = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.UpdateWeddingManualCCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::WEDDINGC_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\WeddingCParam';
      $f->default   = \RO\Cmd\WeddingCParam::WEDDINGCPARAM_UPDATE_MANUAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE manual = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "manual";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ClientWeddingManual';
      $descriptor->addField($f);

      // REPEATED MESSAGE invitees = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "invitees";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\WeddingInvitee';
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
     * @return \RO\Cmd\UpdateWeddingManualCCmd
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
     * @return \RO\Cmd\UpdateWeddingManualCCmd
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
     * @return \RO\Cmd\UpdateWeddingManualCCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\WeddingCParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\WeddingCParam $value
     * @return \RO\Cmd\UpdateWeddingManualCCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <manual> has a value
     *
     * @return boolean
     */
    public function hasManual(){
      return $this->_has(3);
    }
    
    /**
     * Clear <manual> value
     *
     * @return \RO\Cmd\UpdateWeddingManualCCmd
     */
    public function clearManual(){
      return $this->_clear(3);
    }
    
    /**
     * Get <manual> value
     *
     * @return \RO\Cmd\ClientWeddingManual
     */
    public function getManual(){
      return $this->_get(3);
    }
    
    /**
     * Set <manual> value
     *
     * @param \RO\Cmd\ClientWeddingManual $value
     * @return \RO\Cmd\UpdateWeddingManualCCmd
     */
    public function setManual(\RO\Cmd\ClientWeddingManual $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <invitees> has a value
     *
     * @return boolean
     */
    public function hasInvitees(){
      return $this->_has(4);
    }
    
    /**
     * Clear <invitees> value
     *
     * @return \RO\Cmd\UpdateWeddingManualCCmd
     */
    public function clearInvitees(){
      return $this->_clear(4);
    }
    
    /**
     * Get <invitees> value
     *
     * @param int $idx
     * @return \RO\Cmd\WeddingInvitee
     */
    public function getInvitees($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <invitees> value
     *
     * @param \RO\Cmd\WeddingInvitee $value
     * @return \RO\Cmd\UpdateWeddingManualCCmd
     */
    public function setInvitees(\RO\Cmd\WeddingInvitee $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <invitees>
     *
     * @return \RO\Cmd\WeddingInvitee[]
     */
    public function getInviteesList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <invitees>
     *
     * @param \RO\Cmd\WeddingInvitee $value
     * @return \RO\Cmd\UpdateWeddingManualCCmd
     */
    public function addInvitees(\RO\Cmd\WeddingInvitee $value){
     return $this->_add(4, $value);
    }
  }
}

