<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;
/**
 * ServicesContainer short summary.
 *
 * ServicesContainer description.
 *
 * @version 1.0
 * @author Bartosz
 */
class ServicesContainer
{
    protected $services = array();

    public function registerService($serviceName, $service) {
        $this->services[$serviceName] = $service;

        return $this;
    }

    public function retrieveService($serviceName) {
        if(isset($this->services[$serviceName])) {
            return $this->services[$serviceName];
        }

        return null;
    }
}
