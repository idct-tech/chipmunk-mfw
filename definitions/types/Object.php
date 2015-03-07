<?php
namespace IDCT\Cms\Chipmunk\Definitions\Types;

use IDCT\Cms\Chipmunk\Definitions\Types\ServicesContainer as ServiceContainer;
use IDCT\Cms\Chipmunk\Definitions\Helpers\StringOperations as StringOperations;
/**
 * Abstract Base for everything
 *
 * @version 1.0
 * @author Bartosz
 */
abstract class Object
{
    static protected $services;

    static public function getServices() {
        return self::$services;
    }

    static public function setServices(ServiceContainer $services) {
        self::$services = $services;
    }

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
