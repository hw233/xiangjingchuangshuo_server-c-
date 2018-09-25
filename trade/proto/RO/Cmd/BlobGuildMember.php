<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildCmd.proto

namespace RO\Cmd {

  class BlobGuildMember extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\GuildMember[]  */
    public $members = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobGuildMember');

      // REPEATED MESSAGE members = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "members";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildMember';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <members> has a value
     *
     * @return boolean
     */
    public function hasMembers(){
      return $this->_has(1);
    }
    
    /**
     * Clear <members> value
     *
     * @return \RO\Cmd\BlobGuildMember
     */
    public function clearMembers(){
      return $this->_clear(1);
    }
    
    /**
     * Get <members> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildMember
     */
    public function getMembers($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <members> value
     *
     * @param \RO\Cmd\GuildMember $value
     * @return \RO\Cmd\BlobGuildMember
     */
    public function setMembers(\RO\Cmd\GuildMember $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <members>
     *
     * @return \RO\Cmd\GuildMember[]
     */
    public function getMembersList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <members>
     *
     * @param \RO\Cmd\GuildMember $value
     * @return \RO\Cmd\BlobGuildMember
     */
    public function addMembers(\RO\Cmd\GuildMember $value){
     return $this->_add(1, $value);
    }
  }
}

