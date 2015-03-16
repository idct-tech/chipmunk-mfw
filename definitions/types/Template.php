<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;
use IDCT\Framework\Chipmunk\Definitions\Types\Object as Object;
/**
 * Template short summary.
 *
 * Template description.
 *
 * @version 1.0
 * @author Bartosz
 */
class Template extends Object
{
    protected $name = "";
    protected $author = "";
    protected $version = "";

    protected $csses = array();
    protected $cssAssets = array();

    protected $jses = array();
    protected $jsAssets = array();

    public function getName() {
        return $this->name;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getVersion() {
        return $this->version;
    }

    public function getCsses() {
        return $this->csses;
    }

    public function getCssAssets() {
        return $this->cssAssets;
    }

    public function getJses() {
        return $this->jses;
    }

    public function getJsAssets() {
        return $this->jsAssets;
    }
}
