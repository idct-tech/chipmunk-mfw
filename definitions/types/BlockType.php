<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;
use IDCT\Framework\Chipmunk\Definitions\Types\Object as Object;
use IDCT\Framework\Chipmunk\Definitions\Helpers\StringOperations;
/**
 * BlockType short summary.
 *
 * BlockType description.
 *
 * @version 1.0
 * @author Bartosz
 */
abstract class BlockType extends Object
{
    protected $blockType;

    public function getBlockType() {
        return $this->blockType;
    }

    protected function setBlockType($blockType) {
        $this->blockType = $blockType;

        return $this;
    }

    public function __construct() {
        $this->blockType = StringOperations::getClassWithoutNamespace(this);
    }

    abstract public function action();
    abstract public function render();
}
