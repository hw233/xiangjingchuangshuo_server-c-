<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneManual.proto

namespace RO\Cmd {

  class UnsolvedUserPhoto extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $charid = 0;
    
    /**  @var string */
    public $name = null;
    
    /**  @var \RO\Cmd\UnsolvedPhoto[]  */
    public $photos = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.UnsolvedUserPhoto');

      // OPTIONAL UINT64 charid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE photos = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "photos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\UnsolvedPhoto';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\UnsolvedUserPhoto
     */
    public function clearCharid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(1);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\UnsolvedUserPhoto
     */
    public function setCharid( $value){
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
     * @return \RO\Cmd\UnsolvedUserPhoto
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
     * @return \RO\Cmd\UnsolvedUserPhoto
     */
    public function setName( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <photos> has a value
     *
     * @return boolean
     */
    public function hasPhotos(){
      return $this->_has(3);
    }
    
    /**
     * Clear <photos> value
     *
     * @return \RO\Cmd\UnsolvedUserPhoto
     */
    public function clearPhotos(){
      return $this->_clear(3);
    }
    
    /**
     * Get <photos> value
     *
     * @param int $idx
     * @return \RO\Cmd\UnsolvedPhoto
     */
    public function getPhotos($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <photos> value
     *
     * @param \RO\Cmd\UnsolvedPhoto $value
     * @return \RO\Cmd\UnsolvedUserPhoto
     */
    public function setPhotos(\RO\Cmd\UnsolvedPhoto $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <photos>
     *
     * @return \RO\Cmd\UnsolvedPhoto[]
     */
    public function getPhotosList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <photos>
     *
     * @param \RO\Cmd\UnsolvedPhoto $value
     * @return \RO\Cmd\UnsolvedUserPhoto
     */
    public function addPhotos(\RO\Cmd\UnsolvedPhoto $value){
     return $this->_add(3, $value);
    }
  }
}

