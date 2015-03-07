<?php
namespace IDCT\Cms\Chipmunk\Definitions\Types;

use IDCT\Cms\Chipmunk\Definitions\Types\Object as Object;
/**
 * Page short summary.
 *
 * Page description.
 *
 * @version 1.0
 * @author Bartosz
 */
class Page extends Object
{
    static public function generatePageId($urlParts) {
        $id = "" ;
        foreach($urlParts as $part) {
            $id .= "__" . $part;
        }

        return $id;
    }
}
