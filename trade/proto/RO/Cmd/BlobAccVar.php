<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobAccVar extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\AccVar[]  */
    public $datas = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobAccVar');

      // REPEATED MESSAGE datas = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\AccVar';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(1);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\BlobAccVar
     */
    public function clearDatas(){
      return $this->_clear(1);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\AccVar
     */
    public function getDatas($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\AccVar $value
     * @return \RO\Cmd\BlobAccVar
     */
    public function setDatas(\RO\Cmd\AccVar $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\AccVar[]
     */
    public function getDatasList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\AccVar $value
     * @return \RO\Cmd\BlobAccVar
     */
    public function addDatas(\RO\Cmd\AccVar $value){
     return $this->_add(1, $value);
    }
  }
}

