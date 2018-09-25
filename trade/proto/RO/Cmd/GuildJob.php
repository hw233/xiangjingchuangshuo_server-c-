<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class GuildJob extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EGuildJob */
    public $job = \RO\Cmd\EGuildJob::EGUILDJOB_MIN;
    
    /**  @var string */
    public $name = null;
    
    /**  @var int */
    public $auth = 0;
    
    /**  @var int */
    public $editauth = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GuildJob');

      // OPTIONAL ENUM job = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "job";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EGuildJob';
      $f->default   = \RO\Cmd\EGuildJob::EGUILDJOB_MIN;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 auth = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "auth";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 editauth = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "editauth";
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
     * Check if <job> has a value
     *
     * @return boolean
     */
    public function hasJob(){
      return $this->_has(1);
    }
    
    /**
     * Clear <job> value
     *
     * @return \RO\Cmd\GuildJob
     */
    public function clearJob(){
      return $this->_clear(1);
    }
    
    /**
     * Get <job> value
     *
     * @return int - \RO\Cmd\EGuildJob
     */
    public function getJob(){
      return $this->_get(1);
    }
    
    /**
     * Set <job> value
     *
     * @param int - \RO\Cmd\EGuildJob $value
     * @return \RO\Cmd\GuildJob
     */
    public function setJob( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\GuildJob
     */
    public function clearName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(2);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\GuildJob
     */
    public function setName( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <auth> has a value
     *
     * @return boolean
     */
    public function hasAuth(){
      return $this->_has(3);
    }
    
    /**
     * Clear <auth> value
     *
     * @return \RO\Cmd\GuildJob
     */
    public function clearAuth(){
      return $this->_clear(3);
    }
    
    /**
     * Get <auth> value
     *
     * @return int
     */
    public function getAuth(){
      return $this->_get(3);
    }
    
    /**
     * Set <auth> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildJob
     */
    public function setAuth( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <editauth> has a value
     *
     * @return boolean
     */
    public function hasEditauth(){
      return $this->_has(4);
    }
    
    /**
     * Clear <editauth> value
     *
     * @return \RO\Cmd\GuildJob
     */
    public function clearEditauth(){
      return $this->_clear(4);
    }
    
    /**
     * Get <editauth> value
     *
     * @return int
     */
    public function getEditauth(){
      return $this->_get(4);
    }
    
    /**
     * Set <editauth> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildJob
     */
    public function setEditauth( $value){
      return $this->_set(4, $value);
    }
  }
}
