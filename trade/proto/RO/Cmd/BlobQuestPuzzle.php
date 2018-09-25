<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class BlobQuestPuzzle extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\QuestPuzzle[]  */
    public $puzzles = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.BlobQuestPuzzle');

      // REPEATED MESSAGE puzzles = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "puzzles";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\QuestPuzzle';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <puzzles> has a value
     *
     * @return boolean
     */
    public function hasPuzzles(){
      return $this->_has(1);
    }
    
    /**
     * Clear <puzzles> value
     *
     * @return \RO\Cmd\BlobQuestPuzzle
     */
    public function clearPuzzles(){
      return $this->_clear(1);
    }
    
    /**
     * Get <puzzles> value
     *
     * @param int $idx
     * @return \RO\Cmd\QuestPuzzle
     */
    public function getPuzzles($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <puzzles> value
     *
     * @param \RO\Cmd\QuestPuzzle $value
     * @return \RO\Cmd\BlobQuestPuzzle
     */
    public function setPuzzles(\RO\Cmd\QuestPuzzle $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <puzzles>
     *
     * @return \RO\Cmd\QuestPuzzle[]
     */
    public function getPuzzlesList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <puzzles>
     *
     * @param \RO\Cmd\QuestPuzzle $value
     * @return \RO\Cmd\BlobQuestPuzzle
     */
    public function addPuzzles(\RO\Cmd\QuestPuzzle $value){
     return $this->_add(1, $value);
    }
  }
}

