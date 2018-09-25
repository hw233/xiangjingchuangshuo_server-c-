<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: FuBenCmd.proto

namespace RO\Cmd {

  class RaidPConfig extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $RaidID = 0;
    
    /**  @var int */
    public $starID = 0;
    
    /**  @var int */
    public $Auto = 0;
    
    /**  @var int */
    public $WhetherTrace = 0;
    
    /**  @var string */
    public $DescInfo = null;
    
    /**  @var string */
    public $Content = null;
    
    /**  @var string */
    public $TraceInfo = null;
    
    /**  @var \RO\Cmd\ConfigParam */
    public $params = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.RaidPConfig');

      // OPTIONAL UINT32 RaidID = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "RaidID";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 starID = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "starID";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 Auto = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "Auto";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 WhetherTrace = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "WhetherTrace";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING DescInfo = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "DescInfo";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING Content = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "Content";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING TraceInfo = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "TraceInfo";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE params = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "params";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ConfigParam';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <RaidID> has a value
     *
     * @return boolean
     */
    public function hasRaidID(){
      return $this->_has(1);
    }
    
    /**
     * Clear <RaidID> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearRaidID(){
      return $this->_clear(1);
    }
    
    /**
     * Get <RaidID> value
     *
     * @return int
     */
    public function getRaidID(){
      return $this->_get(1);
    }
    
    /**
     * Set <RaidID> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setRaidID( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <starID> has a value
     *
     * @return boolean
     */
    public function hasStarID(){
      return $this->_has(2);
    }
    
    /**
     * Clear <starID> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearStarID(){
      return $this->_clear(2);
    }
    
    /**
     * Get <starID> value
     *
     * @return int
     */
    public function getStarID(){
      return $this->_get(2);
    }
    
    /**
     * Set <starID> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setStarID( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <Auto> has a value
     *
     * @return boolean
     */
    public function hasAuto(){
      return $this->_has(3);
    }
    
    /**
     * Clear <Auto> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearAuto(){
      return $this->_clear(3);
    }
    
    /**
     * Get <Auto> value
     *
     * @return int
     */
    public function getAuto(){
      return $this->_get(3);
    }
    
    /**
     * Set <Auto> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setAuto( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <WhetherTrace> has a value
     *
     * @return boolean
     */
    public function hasWhetherTrace(){
      return $this->_has(4);
    }
    
    /**
     * Clear <WhetherTrace> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearWhetherTrace(){
      return $this->_clear(4);
    }
    
    /**
     * Get <WhetherTrace> value
     *
     * @return int
     */
    public function getWhetherTrace(){
      return $this->_get(4);
    }
    
    /**
     * Set <WhetherTrace> value
     *
     * @param int $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setWhetherTrace( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <DescInfo> has a value
     *
     * @return boolean
     */
    public function hasDescInfo(){
      return $this->_has(5);
    }
    
    /**
     * Clear <DescInfo> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearDescInfo(){
      return $this->_clear(5);
    }
    
    /**
     * Get <DescInfo> value
     *
     * @return string
     */
    public function getDescInfo(){
      return $this->_get(5);
    }
    
    /**
     * Set <DescInfo> value
     *
     * @param string $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setDescInfo( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <Content> has a value
     *
     * @return boolean
     */
    public function hasContent(){
      return $this->_has(6);
    }
    
    /**
     * Clear <Content> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearContent(){
      return $this->_clear(6);
    }
    
    /**
     * Get <Content> value
     *
     * @return string
     */
    public function getContent(){
      return $this->_get(6);
    }
    
    /**
     * Set <Content> value
     *
     * @param string $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setContent( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <TraceInfo> has a value
     *
     * @return boolean
     */
    public function hasTraceInfo(){
      return $this->_has(7);
    }
    
    /**
     * Clear <TraceInfo> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearTraceInfo(){
      return $this->_clear(7);
    }
    
    /**
     * Get <TraceInfo> value
     *
     * @return string
     */
    public function getTraceInfo(){
      return $this->_get(7);
    }
    
    /**
     * Set <TraceInfo> value
     *
     * @param string $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setTraceInfo( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <params> has a value
     *
     * @return boolean
     */
    public function hasParams(){
      return $this->_has(8);
    }
    
    /**
     * Clear <params> value
     *
     * @return \RO\Cmd\RaidPConfig
     */
    public function clearParams(){
      return $this->_clear(8);
    }
    
    /**
     * Get <params> value
     *
     * @return \RO\Cmd\ConfigParam
     */
    public function getParams(){
      return $this->_get(8);
    }
    
    /**
     * Set <params> value
     *
     * @param \RO\Cmd\ConfigParam $value
     * @return \RO\Cmd\RaidPConfig
     */
    public function setParams(\RO\Cmd\ConfigParam $value){
      return $this->_set(8, $value);
    }
  }
}
