<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: PhotoCmd.proto

namespace RO\Cmd {

  class PhotoMd5 extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $sourceid = 0;
    
    /**  @var int */
    public $time = 0;
    
    /**  @var int - \RO\Cmd\ESource */
    public $source = \RO\Cmd\ESource::ESOURCE_MIN;
    
    /**  @var string */
    public $md5 = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.PhotoMd5');

      // OPTIONAL UINT32 sourceid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "sourceid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM source = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "source";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESource';
      $f->default   = \RO\Cmd\ESource::ESOURCE_MIN;
      $descriptor->addField($f);

      // OPTIONAL STRING md5 = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "md5";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <sourceid> has a value
     *
     * @return boolean
     */
    public function hasSourceid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <sourceid> value
     *
     * @return \RO\Cmd\PhotoMd5
     */
    public function clearSourceid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <sourceid> value
     *
     * @return int
     */
    public function getSourceid(){
      return $this->_get(1);
    }
    
    /**
     * Set <sourceid> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoMd5
     */
    public function setSourceid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\PhotoMd5
     */
    public function clearTime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(2);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\PhotoMd5
     */
    public function setTime( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <source> has a value
     *
     * @return boolean
     */
    public function hasSource(){
      return $this->_has(3);
    }
    
    /**
     * Clear <source> value
     *
     * @return \RO\Cmd\PhotoMd5
     */
    public function clearSource(){
      return $this->_clear(3);
    }
    
    /**
     * Get <source> value
     *
     * @return int - \RO\Cmd\ESource
     */
    public function getSource(){
      return $this->_get(3);
    }
    
    /**
     * Set <source> value
     *
     * @param int - \RO\Cmd\ESource $value
     * @return \RO\Cmd\PhotoMd5
     */
    public function setSource( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <md5> has a value
     *
     * @return boolean
     */
    public function hasMd5(){
      return $this->_has(4);
    }
    
    /**
     * Clear <md5> value
     *
     * @return \RO\Cmd\PhotoMd5
     */
    public function clearMd5(){
      return $this->_clear(4);
    }
    
    /**
     * Get <md5> value
     *
     * @return string
     */
    public function getMd5(){
      return $this->_get(4);
    }
    
    /**
     * Set <md5> value
     *
     * @param string $value
     * @return \RO\Cmd\PhotoMd5
     */
    public function setMd5( $value){
      return $this->_set(4, $value);
    }
  }
}

