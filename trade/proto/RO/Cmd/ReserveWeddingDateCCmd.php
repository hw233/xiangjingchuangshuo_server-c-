<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: WeddingCCmd.proto

namespace RO\Cmd {

  class ReserveWeddingDateCCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::WEDDINGC_PROTOCMD;
    
    /**  @var int - \RO\Cmd\WeddingCParam */
    public $param = \RO\Cmd\WeddingCParam::WEDDINGCPARAM_RESERVE_WEDDINGDATE;
    
    /**  @var int */
    public $date = null;
    
    /**  @var int */
    public $configid = null;
    
    /**  @var int */
    public $charid2 = null;
    
    /**  @var boolean */
    public $use_ticket = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ReserveWeddingDateCCmd');

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
      $f->default   = \RO\Cmd\WeddingCParam::WEDDINGCPARAM_RESERVE_WEDDINGDATE;
      $descriptor->addField($f);

      // OPTIONAL UINT32 date = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "date";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 configid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "configid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid2 = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "charid2";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL use_ticket = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "use_ticket";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\ReserveWeddingDateCCmd
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
     * @return \RO\Cmd\ReserveWeddingDateCCmd
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
     * @return \RO\Cmd\ReserveWeddingDateCCmd
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
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <date> has a value
     *
     * @return boolean
     */
    public function hasDate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <date> value
     *
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function clearDate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <date> value
     *
     * @return int
     */
    public function getDate(){
      return $this->_get(3);
    }
    
    /**
     * Set <date> value
     *
     * @param int $value
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function setDate( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <configid> has a value
     *
     * @return boolean
     */
    public function hasConfigid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <configid> value
     *
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function clearConfigid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <configid> value
     *
     * @return int
     */
    public function getConfigid(){
      return $this->_get(4);
    }
    
    /**
     * Set <configid> value
     *
     * @param int $value
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function setConfigid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <charid2> has a value
     *
     * @return boolean
     */
    public function hasCharid2(){
      return $this->_has(5);
    }
    
    /**
     * Clear <charid2> value
     *
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function clearCharid2(){
      return $this->_clear(5);
    }
    
    /**
     * Get <charid2> value
     *
     * @return int
     */
    public function getCharid2(){
      return $this->_get(5);
    }
    
    /**
     * Set <charid2> value
     *
     * @param int $value
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function setCharid2( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <use_ticket> has a value
     *
     * @return boolean
     */
    public function hasUseTicket(){
      return $this->_has(6);
    }
    
    /**
     * Clear <use_ticket> value
     *
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function clearUseTicket(){
      return $this->_clear(6);
    }
    
    /**
     * Get <use_ticket> value
     *
     * @return boolean
     */
    public function getUseTicket(){
      return $this->_get(6);
    }
    
    /**
     * Set <use_ticket> value
     *
     * @param boolean $value
     * @return \RO\Cmd\ReserveWeddingDateCCmd
     */
    public function setUseTicket( $value){
      return $this->_set(6, $value);
    }
  }
}
