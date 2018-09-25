<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: TeamCmd.proto

namespace RO\Cmd {

  class LoadLuaTeamCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::TEAM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ServerTeamParam */
    public $param = \RO\Cmd\ServerTeamParam::SERVERTEAMPARAM_LOADLUA;
    
    /**  @var string */
    public $table = null;
    
    /**  @var string */
    public $lua = null;
    
    /**  @var string */
    public $log = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.LoadLuaTeamCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::TEAM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ServerTeamParam';
      $f->default   = \RO\Cmd\ServerTeamParam::SERVERTEAMPARAM_LOADLUA;
      $descriptor->addField($f);

      // OPTIONAL STRING table = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "table";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING lua = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "lua";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING log = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "log";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
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
     * @return \RO\Cmd\LoadLuaTeamCmd
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
     * @return \RO\Cmd\LoadLuaTeamCmd
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
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ServerTeamParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ServerTeamParam $value
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <table> has a value
     *
     * @return boolean
     */
    public function hasTable(){
      return $this->_has(3);
    }
    
    /**
     * Clear <table> value
     *
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function clearTable(){
      return $this->_clear(3);
    }
    
    /**
     * Get <table> value
     *
     * @return string
     */
    public function getTable(){
      return $this->_get(3);
    }
    
    /**
     * Set <table> value
     *
     * @param string $value
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function setTable( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <lua> has a value
     *
     * @return boolean
     */
    public function hasLua(){
      return $this->_has(4);
    }
    
    /**
     * Clear <lua> value
     *
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function clearLua(){
      return $this->_clear(4);
    }
    
    /**
     * Get <lua> value
     *
     * @return string
     */
    public function getLua(){
      return $this->_get(4);
    }
    
    /**
     * Set <lua> value
     *
     * @param string $value
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function setLua( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <log> has a value
     *
     * @return boolean
     */
    public function hasLog(){
      return $this->_has(5);
    }
    
    /**
     * Clear <log> value
     *
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function clearLog(){
      return $this->_clear(5);
    }
    
    /**
     * Get <log> value
     *
     * @return string
     */
    public function getLog(){
      return $this->_get(5);
    }
    
    /**
     * Set <log> value
     *
     * @param string $value
     * @return \RO\Cmd\LoadLuaTeamCmd
     */
    public function setLog( $value){
      return $this->_set(5, $value);
    }
  }
}

