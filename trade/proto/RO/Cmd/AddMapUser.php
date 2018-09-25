<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneMap.proto

namespace RO\Cmd {

  class AddMapUser extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_MAP_PROTOCMD;
    
    /**  @var int - \RO\Cmd\MapParam */
    public $param = \RO\Cmd\MapParam::MAPPARAM_ADDMAPUSER;
    
    /**  @var \RO\Cmd\MapUser[]  */
    public $users = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.AddMapUser');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_MAP_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\MapParam';
      $f->default   = \RO\Cmd\MapParam::MAPPARAM_ADDMAPUSER;
      $descriptor->addField($f);

      // REPEATED MESSAGE users = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "users";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\MapUser';
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
     * @return \RO\Cmd\AddMapUser
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
     * @return \RO\Cmd\AddMapUser
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
     * @return \RO\Cmd\AddMapUser
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\MapParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\MapParam $value
     * @return \RO\Cmd\AddMapUser
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <users> has a value
     *
     * @return boolean
     */
    public function hasUsers(){
      return $this->_has(3);
    }
    
    /**
     * Clear <users> value
     *
     * @return \RO\Cmd\AddMapUser
     */
    public function clearUsers(){
      return $this->_clear(3);
    }
    
    /**
     * Get <users> value
     *
     * @param int $idx
     * @return \RO\Cmd\MapUser
     */
    public function getUsers($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <users> value
     *
     * @param \RO\Cmd\MapUser $value
     * @return \RO\Cmd\AddMapUser
     */
    public function setUsers(\RO\Cmd\MapUser $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <users>
     *
     * @return \RO\Cmd\MapUser[]
     */
    public function getUsersList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <users>
     *
     * @param \RO\Cmd\MapUser $value
     * @return \RO\Cmd\AddMapUser
     */
    public function addUsers(\RO\Cmd\MapUser $value){
     return $this->_add(3, $value);
    }
  }
}
