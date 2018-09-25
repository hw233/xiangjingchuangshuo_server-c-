<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class ShareFirstMvp extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $mvpid = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ShareFirstMvp');

      // OPTIONAL UINT32 mvpid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "mvpid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <mvpid> has a value
     *
     * @return boolean
     */
    public function hasMvpid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <mvpid> value
     *
     * @return \RO\Cmd\ShareFirstMvp
     */
    public function clearMvpid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <mvpid> value
     *
     * @return int
     */
    public function getMvpid(){
      return $this->_get(2);
    }
    
    /**
     * Set <mvpid> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareFirstMvp
     */
    public function setMvpid( $value){
      return $this->_set(2, $value);
    }
  }
}
