<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ChatCmd.proto

namespace RO\Cmd {

  class QueryItemData extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::CHAT_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ChatParam */
    public $param = \RO\Cmd\ChatParam::CHATPARAM_QUERYITEMDATA;
    
    /**  @var string */
    public $guid = null;
    
    /**  @var \RO\Cmd\ItemData */
    public $data = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryItemData');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::CHAT_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ChatParam';
      $f->default   = \RO\Cmd\ChatParam::CHATPARAM_QUERYITEMDATA;
      $descriptor->addField($f);

      // OPTIONAL STRING guid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE data = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemData';
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
     * @return \RO\Cmd\QueryItemData
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
     * @return \RO\Cmd\QueryItemData
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
     * @return \RO\Cmd\QueryItemData
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ChatParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ChatParam $value
     * @return \RO\Cmd\QueryItemData
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <guid> has a value
     *
     * @return boolean
     */
    public function hasGuid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <guid> value
     *
     * @return \RO\Cmd\QueryItemData
     */
    public function clearGuid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guid> value
     *
     * @return string
     */
    public function getGuid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guid> value
     *
     * @param string $value
     * @return \RO\Cmd\QueryItemData
     */
    public function setGuid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(4);
    }
    
    /**
     * Clear <data> value
     *
     * @return \RO\Cmd\QueryItemData
     */
    public function clearData(){
      return $this->_clear(4);
    }
    
    /**
     * Get <data> value
     *
     * @return \RO\Cmd\ItemData
     */
    public function getData(){
      return $this->_get(4);
    }
    
    /**
     * Set <data> value
     *
     * @param \RO\Cmd\ItemData $value
     * @return \RO\Cmd\QueryItemData
     */
    public function setData(\RO\Cmd\ItemData $value){
      return $this->_set(4, $value);
    }
  }
}

