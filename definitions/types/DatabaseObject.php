<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;

use IDCT\Framework\Chipmunk\Definitions\Types\Object as Object;
use IDCT\Framework\Chipmunk\Definitions\Helpers\StringOperations as StringOperations;

/**
 * Abstract Base for everything
 *
 * @version 1.0
 * @author Bartosz
 */
abstract class DatabaseObject extends Object
{
    static public function getById($identifier) {
        $database = self::getServices()->retrieveService('database');

        $prefix = StringOperations::getClassWithoutNamespace(self);
        $databaseId = $prefix . "__" . $identifier;
        if(($pageCandidate = $database->getById($databaseId)) !== null) {
            $pageCandidate->setDatabaseId($databaseId);
            return $pageCandidate;
        }

        return null;
    }

    protected $databaseId;

    public function setDatabaseId($databaseId) {
        $this->databaseId = $databaseId;

        return $this;
    }

    public function getDatabaseId() {
        return $this->databaseId;
    }

    public function save() {
        $database = $this->getServices()->retrieveService('database');

        $database->setById($this->getDatabaseId(),array(),$this);

        return $this;
    }
}
