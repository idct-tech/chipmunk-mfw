<?php
namespace IDCT\Framework\Chipmunk\Definitions\Helpers;

/**
 * StringOperations short summary.
 *
 * StringOperations description.
 *
 * @version 1.0
 * @author Bartosz
 */
class StringOperations
{
    static function getClassWithoutNamespace($obj) {
        $classname = get_class($obj);

        if (preg_match('@\\\\([\w]+)$@', $classname, $matches)) {
            $classname = $matches[1];
        }

        return $classname;
    }

}
