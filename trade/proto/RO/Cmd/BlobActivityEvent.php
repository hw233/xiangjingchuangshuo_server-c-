<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobActivityEvent extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\AERewardItem[]  */
    public $rewarditems = array();
    
    /**  @var \RO\Cmd\ActivityEventCnt[]  */
    public $eventcnt = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobActivityEvent');

      // REPEATED MESSAGE rewarditems = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "rewarditems";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\AERewardItem';
      $descriptor->addField($f);

      // REPEATED MESSAGE eventcnt = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "eventcnt";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\ActivityEventCnt';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <rewarditems> has a value
     *
     * @return boolean
     */
    public function hasRewarditems(){
      return $this->_has(1);
    }
    
    /**
     * Clear <rewarditems> value
     *
     * @return \RO\Cmd\BlobActivityEvent
     */
    public function clearRewarditems(){
      return $this->_clear(1);
    }
    
    /**
     * Get <rewarditems> value
     *
     * @param int $idx
     * @return \RO\Cmd\AERewardItem
     */
    public function getRewarditems($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <rewarditems> value
     *
     * @param \RO\Cmd\AERewardItem $value
     * @return \RO\Cmd\BlobActivityEvent
     */
    public function setRewarditems(\RO\Cmd\AERewardItem $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <rewarditems>
     *
     * @return \RO\Cmd\AERewardItem[]
     */
    public function getRewarditemsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <rewarditems>
     *
     * @param \RO\Cmd\AERewardItem $value
     * @return \RO\Cmd\BlobActivityEvent
     */
    public function addRewarditems(\RO\Cmd\AERewardItem $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <eventcnt> has a value
     *
     * @return boolean
     */
    public function hasEventcnt(){
      return $this->_has(2);
    }
    
    /**
     * Clear <eventcnt> value
     *
     * @return \RO\Cmd\BlobActivityEvent
     */
    public function clearEventcnt(){
      return $this->_clear(2);
    }
    
    /**
     * Get <eventcnt> value
     *
     * @param int $idx
     * @return \RO\Cmd\ActivityEventCnt
     */
    public function getEventcnt($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <eventcnt> value
     *
     * @param \RO\Cmd\ActivityEventCnt $value
     * @return \RO\Cmd\BlobActivityEvent
     */
    public function setEventcnt(\RO\Cmd\ActivityEventCnt $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <eventcnt>
     *
     * @return \RO\Cmd\ActivityEventCnt[]
     */
    public function getEventcntList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <eventcnt>
     *
     * @param \RO\Cmd\ActivityEventCnt $value
     * @return \RO\Cmd\BlobActivityEvent
     */
    public function addEventcnt(\RO\Cmd\ActivityEventCnt $value){
     return $this->_add(2, $value);
    }
  }
}
