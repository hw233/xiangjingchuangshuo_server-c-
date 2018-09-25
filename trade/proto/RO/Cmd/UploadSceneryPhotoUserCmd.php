<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class UploadSceneryPhotoUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_UPLOAD_SCENERY_PHOTO;
    
    /**  @var int - \RO\Cmd\EAlbumType */
    public $type = \RO\Cmd\EAlbumType::EALBUMTYPE_SCENERY;
    
    /**  @var int */
    public $sceneryid = null;
    
    /**  @var string */
    public $policy = null;
    
    /**  @var string */
    public $signature = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.UploadSceneryPhotoUserCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_UPLOAD_SCENERY_PHOTO;
      $descriptor->addField($f);

      // OPTIONAL ENUM type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EAlbumType';
      $f->default   = \RO\Cmd\EAlbumType::EALBUMTYPE_SCENERY;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sceneryid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sceneryid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING policy = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "policy";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING signature = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "signature";
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
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
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
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
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
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
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
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function clearType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EAlbumType
     */
    public function getType(){
      return $this->_get(3);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EAlbumType $value
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function setType( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sceneryid> has a value
     *
     * @return boolean
     */
    public function hasSceneryid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sceneryid> value
     *
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function clearSceneryid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sceneryid> value
     *
     * @return int
     */
    public function getSceneryid(){
      return $this->_get(4);
    }
    
    /**
     * Set <sceneryid> value
     *
     * @param int $value
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function setSceneryid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <policy> has a value
     *
     * @return boolean
     */
    public function hasPolicy(){
      return $this->_has(5);
    }
    
    /**
     * Clear <policy> value
     *
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function clearPolicy(){
      return $this->_clear(5);
    }
    
    /**
     * Get <policy> value
     *
     * @return string
     */
    public function getPolicy(){
      return $this->_get(5);
    }
    
    /**
     * Set <policy> value
     *
     * @param string $value
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function setPolicy( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <signature> has a value
     *
     * @return boolean
     */
    public function hasSignature(){
      return $this->_has(6);
    }
    
    /**
     * Clear <signature> value
     *
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function clearSignature(){
      return $this->_clear(6);
    }
    
    /**
     * Get <signature> value
     *
     * @return string
     */
    public function getSignature(){
      return $this->_get(6);
    }
    
    /**
     * Set <signature> value
     *
     * @param string $value
     * @return \RO\Cmd\UploadSceneryPhotoUserCmd
     */
    public function setSignature( $value){
      return $this->_set(6, $value);
    }
  }
}

