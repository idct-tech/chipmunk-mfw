<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;

use IDCT\Framework\Chipmunk\Definitions\Types\ServicesContainer as ServiceContainer;

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
}
