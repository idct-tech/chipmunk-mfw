<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;

use IDCT\Framework\Chipmunk\Definitions\Types\Route as Route;
use IDCT\Framework\Chipmunk\Definitions\Types\DatabaseObject as DatabaseObject;
use IDCT\Framework\Chipmunk\Definitions\Types\BlockType as BlockType;
/**
 * Page short summary.
 *
 * Page description.
 *
 * @version 1.0
 * @author Bartosz
 */
class Page extends DatabaseObject
{
    protected $sections = array();
    protected $customAttributes = array();

    public function newSection($name) {
        $this->sections[$name] = array();

        return $this;
    }

    public function hasSection($name) {
        return isset($this->sections[$name]);
    }

    public function getSection($name) {
        if($this->hasSection($name)) {
            return $this->sections[$name];
        }

        return null;
    }

    public function setCustomAttribute($name, $value) {
        $this->customAttributes[$name] = $value;

        return $this;
    }

    public function hasCustomAttribute($name) {
        return isset($this->customAttributes[$name]);
    }

    public function getCustomAttribute($name) {
        if($this->hasCustomAttribute($name)) {
            return $this->customAttributes[$name];
        }

        return null;
    }

    public function addContentBlock($sectionName, BlockType $block) {
        if(($section = $this->getSection($sectionName)) === null) {
            $this->newSection($sectionName);
            $section = $this->getSection($sectionName);
        }

        $section[] = $block;

        return $this;
    }

    public function removeContentBlock($sectionName, BlockType $block) {
        if(($section = $this->getSection($sectionName)) !== null) {
            foreach($section as $i => $object) {
                if($object === $block) {
                    break;
                }
            }
            unset($section[$i]);
        }

        return $this;
    }

    static public function generatePageId($urlParts) {
        $id = "" ;
        foreach($urlParts as $part) {
            $id .= "__" . $part;
        }

        return $id;
    }

    static public function getByRoute(Route $route) {
        return self::getById(self::generatePageId($route->getParts));
    }
}
