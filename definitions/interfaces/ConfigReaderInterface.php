<?php
namespace IDCT\Framework\Chipmunk\Definitions\Interfaces;

use IDCT\Framework\Chipmunk\Definitions\Types\Config as Config;
/**
 * ConfigReader short summary.
 *
 * ConfigReader description.
 *
 * @version 1.0
 * @author Bartosz
 */
interface ConfigReaderInferface
{
    /**
     * Loads the config file, parses and return in a form of an object
     *
     * Why not string? As the main concept is to set the config in a php file -this is meant to be fast!
     *
     * @param string $configString
     * @return Config
     */
    public function loadConfig($configFilePath);
}
