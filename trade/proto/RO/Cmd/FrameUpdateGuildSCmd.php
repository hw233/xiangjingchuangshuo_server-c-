<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildSCmd.proto

namespace RO\Cmd {

  class FrameUpdateGuildSCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::GUILD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\GuildSParam */
    public $param = \RO\Cmd\GuildSParam::GUILDSPARAM_FRAME_UPDATE;
    
    /**  @var int */
    public $guildid = 0;
    
    /**  @var int */
    public $frameid = 0;
    
    /**  @var \RO\Cmd\GuildPhoto */
    public $update = null;
    
    /**  @var \RO\Cmd\GuildPhoto */
    public $del = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.FrameUpdateGuildSCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::GUILD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildSParam';
      $f->default   = \RO\Cmd\GuildSParam::GUILDSPARAM_FRAME_UPDATE;
      $descriptor->addField($f);

      // OPTIONAL UINT64 guildid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guildid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 frameid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "frameid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE update = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "update";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildPhoto';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE del = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "del";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\GuildPhoto';
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
     * @return \RO\Cmd\FrameUpdateGuildSCmd
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
     * @return \RO\Cmd\FrameUpdateGuildSCmd
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
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\GuildSParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\GuildSParam $value
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <guildid> has a value
     *
     * @return boolean
     */
    public function hasGuildid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <guildid> value
     *
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function clearGuildid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guildid> value
     *
     * @return int
     */
    public function getGuildid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guildid> value
     *
     * @param int $value
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function setGuildid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <frameid> has a value
     *
     * @return boolean
     */
    public function hasFrameid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <frameid> value
     *
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function clearFrameid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <frameid> value
     *
     * @return int
     */
    public function getFrameid(){
      return $this->_get(4);
    }
    
    /**
     * Set <frameid> value
     *
     * @param int $value
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function setFrameid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <update> has a value
     *
     * @return boolean
     */
    public function hasUpdate(){
      return $this->_has(5);
    }
    
    /**
     * Clear <update> value
     *
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function clearUpdate(){
      return $this->_clear(5);
    }
    
    /**
     * Get <update> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function getUpdate(){
      return $this->_get(5);
    }
    
    /**
     * Set <update> value
     *
     * @param \RO\Cmd\GuildPhoto $value
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function setUpdate(\RO\Cmd\GuildPhoto $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <del> has a value
     *
     * @return boolean
     */
    public function hasDel(){
      return $this->_has(6);
    }
    
    /**
     * Clear <del> value
     *
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function clearDel(){
      return $this->_clear(6);
    }
    
    /**
     * Get <del> value
     *
     * @return \RO\Cmd\GuildPhoto
     */
    public function getDel(){
      return $this->_get(6);
    }
    
    /**
     * Set <del> value
     *
     * @param \RO\Cmd\GuildPhoto $value
     * @return \RO\Cmd\FrameUpdateGuildSCmd
     */
    public function setDel(\RO\Cmd\GuildPhoto $value){
      return $this->_set(6, $value);
    }
  }
}

