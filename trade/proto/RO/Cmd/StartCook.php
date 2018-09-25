<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneFood.proto

namespace RO\Cmd {

  class StartCook extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_FOOD_PROTOCMD;
    
    /**  @var int - \RO\Cmd\FoodParam */
    public $param = \RO\Cmd\FoodParam::FOODPARAM_START_COOK;
    
    /**  @var int - \RO\Cmd\ECookType */
    public $cooktype = null;
    
    /**  @var \RO\Cmd\BriefItemInfo[]  */
    public $material = array();
    
    /**  @var int */
    public $recipe = null;
    
    /**  @var boolean */
    public $skipanimation = false;
    
    /**  @var int[]  */
    public $recipes = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.StartCook');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_FOOD_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\FoodParam';
      $f->default   = \RO\Cmd\FoodParam::FOODPARAM_START_COOK;
      $descriptor->addField($f);

      // OPTIONAL ENUM cooktype = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "cooktype";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ECookType';
      $descriptor->addField($f);

      // REPEATED MESSAGE material = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "material";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\BriefItemInfo';
      $descriptor->addField($f);

      // OPTIONAL UINT32 recipe = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "recipe";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL skipanimation = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "skipanimation";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // REPEATED UINT32 recipes = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "recipes";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
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
     * @return \RO\Cmd\StartCook
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
     * @return \RO\Cmd\StartCook
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
     * @return \RO\Cmd\StartCook
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\FoodParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\FoodParam $value
     * @return \RO\Cmd\StartCook
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <cooktype> has a value
     *
     * @return boolean
     */
    public function hasCooktype(){
      return $this->_has(3);
    }
    
    /**
     * Clear <cooktype> value
     *
     * @return \RO\Cmd\StartCook
     */
    public function clearCooktype(){
      return $this->_clear(3);
    }
    
    /**
     * Get <cooktype> value
     *
     * @return int - \RO\Cmd\ECookType
     */
    public function getCooktype(){
      return $this->_get(3);
    }
    
    /**
     * Set <cooktype> value
     *
     * @param int - \RO\Cmd\ECookType $value
     * @return \RO\Cmd\StartCook
     */
    public function setCooktype( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <material> has a value
     *
     * @return boolean
     */
    public function hasMaterial(){
      return $this->_has(4);
    }
    
    /**
     * Clear <material> value
     *
     * @return \RO\Cmd\StartCook
     */
    public function clearMaterial(){
      return $this->_clear(4);
    }
    
    /**
     * Get <material> value
     *
     * @param int $idx
     * @return \RO\Cmd\BriefItemInfo
     */
    public function getMaterial($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <material> value
     *
     * @param \RO\Cmd\BriefItemInfo $value
     * @return \RO\Cmd\StartCook
     */
    public function setMaterial(\RO\Cmd\BriefItemInfo $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <material>
     *
     * @return \RO\Cmd\BriefItemInfo[]
     */
    public function getMaterialList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <material>
     *
     * @param \RO\Cmd\BriefItemInfo $value
     * @return \RO\Cmd\StartCook
     */
    public function addMaterial(\RO\Cmd\BriefItemInfo $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <recipe> has a value
     *
     * @return boolean
     */
    public function hasRecipe(){
      return $this->_has(5);
    }
    
    /**
     * Clear <recipe> value
     *
     * @return \RO\Cmd\StartCook
     */
    public function clearRecipe(){
      return $this->_clear(5);
    }
    
    /**
     * Get <recipe> value
     *
     * @return int
     */
    public function getRecipe(){
      return $this->_get(5);
    }
    
    /**
     * Set <recipe> value
     *
     * @param int $value
     * @return \RO\Cmd\StartCook
     */
    public function setRecipe( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <skipanimation> has a value
     *
     * @return boolean
     */
    public function hasSkipanimation(){
      return $this->_has(6);
    }
    
    /**
     * Clear <skipanimation> value
     *
     * @return \RO\Cmd\StartCook
     */
    public function clearSkipanimation(){
      return $this->_clear(6);
    }
    
    /**
     * Get <skipanimation> value
     *
     * @return boolean
     */
    public function getSkipanimation(){
      return $this->_get(6);
    }
    
    /**
     * Set <skipanimation> value
     *
     * @param boolean $value
     * @return \RO\Cmd\StartCook
     */
    public function setSkipanimation( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <recipes> has a value
     *
     * @return boolean
     */
    public function hasRecipes(){
      return $this->_has(7);
    }
    
    /**
     * Clear <recipes> value
     *
     * @return \RO\Cmd\StartCook
     */
    public function clearRecipes(){
      return $this->_clear(7);
    }
    
    /**
     * Get <recipes> value
     *
     * @param int $idx
     * @return int
     */
    public function getRecipes($idx = NULL){
      return $this->_get(7, $idx);
    }
    
    /**
     * Set <recipes> value
     *
     * @param int $value
     * @return \RO\Cmd\StartCook
     */
    public function setRecipes( $value, $idx = NULL){
      return $this->_set(7, $value, $idx);
    }
    
    /**
     * Get all elements of <recipes>
     *
     * @return int[]
     */
    public function getRecipesList(){
     return $this->_get(7);
    }
    
    /**
     * Add a new element to <recipes>
     *
     * @param int $value
     * @return \RO\Cmd\StartCook
     */
    public function addRecipes( $value){
     return $this->_add(7, $value);
    }
  }
}

