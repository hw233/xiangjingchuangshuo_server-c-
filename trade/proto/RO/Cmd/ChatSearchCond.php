<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: LogCmd.proto

namespace RO\Cmd {

  class ChatSearchCond extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $who = null;
    
    /**  @var int */
    public $fromtime = null;
    
    /**  @var int */
    public $totime = null;
    
    /**  @var int - \RO\Cmd\EChatType */
    public $chattype = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ChatSearchCond');

      // OPTIONAL UINT64 who = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "who";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 fromtime = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "fromtime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 totime = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "totime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL ENUM chattype = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "chattype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EChatType';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <who> has a value
     *
     * @return boolean
     */
    public function hasWho(){
      return $this->_has(1);
    }
    
    /**
     * Clear <who> value
     *
     * @return \RO\Cmd\ChatSearchCond
     */
    public function clearWho(){
      return $this->_clear(1);
    }
    
    /**
     * Get <who> value
     *
     * @return int
     */
    public function getWho(){
      return $this->_get(1);
    }
    
    /**
     * Set <who> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatSearchCond
     */
    public function setWho( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <fromtime> has a value
     *
     * @return boolean
     */
    public function hasFromtime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <fromtime> value
     *
     * @return \RO\Cmd\ChatSearchCond
     */
    public function clearFromtime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <fromtime> value
     *
     * @return int
     */
    public function getFromtime(){
      return $this->_get(2);
    }
    
    /**
     * Set <fromtime> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatSearchCond
     */
    public function setFromtime( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <totime> has a value
     *
     * @return boolean
     */
    public function hasTotime(){
      return $this->_has(3);
    }
    
    /**
     * Clear <totime> value
     *
     * @return \RO\Cmd\ChatSearchCond
     */
    public function clearTotime(){
      return $this->_clear(3);
    }
    
    /**
     * Get <totime> value
     *
     * @return int
     */
    public function getTotime(){
      return $this->_get(3);
    }
    
    /**
     * Set <totime> value
     *
     * @param int $value
     * @return \RO\Cmd\ChatSearchCond
     */
    public function setTotime( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <chattype> has a value
     *
     * @return boolean
     */
    public function hasChattype(){
      return $this->_has(4);
    }
    
    /**
     * Clear <chattype> value
     *
     * @return \RO\Cmd\ChatSearchCond
     */
    public function clearChattype(){
      return $this->_clear(4);
    }
    
    /**
     * Get <chattype> value
     *
     * @return int - \RO\Cmd\EChatType
     */
    public function getChattype(){
      return $this->_get(4);
    }
    
    /**
     * Set <chattype> value
     *
     * @param int - \RO\Cmd\EChatType $value
     * @return \RO\Cmd\ChatSearchCond
     */
    public function setChattype( $value){
      return $this->_set(4, $value);
    }
  }
}

