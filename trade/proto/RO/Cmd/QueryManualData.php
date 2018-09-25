<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneManual.proto

namespace RO\Cmd {

  class QueryManualData extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_MANUAL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ManualParam */
    public $param = \RO\Cmd\ManualParam::MANUALPARAM_QUERYDATA;
    
    /**  @var int - \RO\Cmd\EManualType */
    public $type = \RO\Cmd\EManualType::EMANUALTYPE_MIN;
    
    /**  @var \RO\Cmd\ManualItem */
    public $item = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryManualData');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_MANUAL_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ManualParam';
      $f->default   = \RO\Cmd\ManualParam::MANUALPARAM_QUERYDATA;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EManualType';
      $f->default   = \RO\Cmd\EManualType::EMANUALTYPE_MIN;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "item";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ManualItem';
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
     * @return \RO\Cmd\QueryManualData
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
     * @return \RO\Cmd\QueryManualData
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
     * @return \RO\Cmd\QueryManualData
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ManualParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ManualParam $value
     * @return \RO\Cmd\QueryManualData
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\QueryManualData
     */
    public function clearType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EManualType
     */
    public function getType(){
      return $this->_get(3);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EManualType $value
     * @return \RO\Cmd\QueryManualData
     */
    public function setType( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <item> has a value
     *
     * @return boolean
     */
    public function hasItem(){
      return $this->_has(4);
    }
    
    /**
     * Clear <item> value
     *
     * @return \RO\Cmd\QueryManualData
     */
    public function clearItem(){
      return $this->_clear(4);
    }
    
    /**
     * Get <item> value
     *
     * @return \RO\Cmd\ManualItem
     */
    public function getItem(){
      return $this->_get(4);
    }
    
    /**
     * Set <item> value
     *
     * @param \RO\Cmd\ManualItem $value
     * @return \RO\Cmd\QueryManualData
     */
    public function setItem(\RO\Cmd\ManualItem $value){
      return $this->_set(4, $value);
    }
  }
}
