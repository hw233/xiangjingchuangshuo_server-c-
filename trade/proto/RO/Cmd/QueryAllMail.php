<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionMail.proto

namespace RO\Cmd {

  class QueryAllMail extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_USER_MAIL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\MailParam */
    public $param = \RO\Cmd\MailParam::MAILPARAM_QUERYALLMAIL;
    
    /**  @var \RO\Cmd\MailData[]  */
    public $datas = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryAllMail');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_USER_MAIL_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\MailParam';
      $f->default   = \RO\Cmd\MailParam::MAILPARAM_QUERYALLMAIL;
      $descriptor->addField($f);

      // REPEATED MESSAGE datas = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "datas";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\MailData';
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
     * @return \RO\Cmd\QueryAllMail
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
     * @return \RO\Cmd\QueryAllMail
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
     * @return \RO\Cmd\QueryAllMail
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\MailParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\MailParam $value
     * @return \RO\Cmd\QueryAllMail
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <datas> has a value
     *
     * @return boolean
     */
    public function hasDatas(){
      return $this->_has(3);
    }
    
    /**
     * Clear <datas> value
     *
     * @return \RO\Cmd\QueryAllMail
     */
    public function clearDatas(){
      return $this->_clear(3);
    }
    
    /**
     * Get <datas> value
     *
     * @param int $idx
     * @return \RO\Cmd\MailData
     */
    public function getDatas($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <datas> value
     *
     * @param \RO\Cmd\MailData $value
     * @return \RO\Cmd\QueryAllMail
     */
    public function setDatas(\RO\Cmd\MailData $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <datas>
     *
     * @return \RO\Cmd\MailData[]
     */
    public function getDatasList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <datas>
     *
     * @param \RO\Cmd\MailData $value
     * @return \RO\Cmd\QueryAllMail
     */
    public function addDatas(\RO\Cmd\MailData $value){
     return $this->_add(3, $value);
    }
  }
}

