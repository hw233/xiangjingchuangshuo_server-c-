<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: UserEvent.proto

namespace RO\Cmd {

  class DepositCardInfo extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::USER_EVENT_PROTOCMD;
    
    /**  @var int - \RO\Cmd\EventParam */
    public $param = \RO\Cmd\EventParam::USER_EVENT_DEPOSIT_CARD_INFO;
    
    /**  @var \RO\Cmd\DepositTypeData[]  */
    public $card_datas = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DepositCardInfo');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::USER_EVENT_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EventParam';
      $f->default   = \RO\Cmd\EventParam::USER_EVENT_DEPOSIT_CARD_INFO;
      $descriptor->addField($f);

      // REPEATED MESSAGE card_datas = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "card_datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\DepositTypeData';
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
     * @return \RO\Cmd\DepositCardInfo
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
     * @return \RO\Cmd\DepositCardInfo
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
     * @return \RO\Cmd\DepositCardInfo
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\EventParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\EventParam $value
     * @return \RO\Cmd\DepositCardInfo
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <card_datas> has a value
     *
     * @return boolean
     */
    public function hasCardDatas(){
      return $this->_has(3);
    }
    
    /**
     * Clear <card_datas> value
     *
     * @return \RO\Cmd\DepositCardInfo
     */
    public function clearCardDatas(){
      return $this->_clear(3);
    }
    
    /**
     * Get <card_datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\DepositTypeData
     */
    public function getCardDatas($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <card_datas> value
     *
     * @param \RO\Cmd\DepositTypeData $value
     * @return \RO\Cmd\DepositCardInfo
     */
    public function setCardDatas(\RO\Cmd\DepositTypeData $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <card_datas>
     *
     * @return \RO\Cmd\DepositTypeData[]
     */
    public function getCardDatasList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <card_datas>
     *
     * @param \RO\Cmd\DepositTypeData $value
     * @return \RO\Cmd\DepositCardInfo
     */
    public function addCardDatas(\RO\Cmd\DepositTypeData $value){
     return $this->_add(3, $value);
    }
  }
}
