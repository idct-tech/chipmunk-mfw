<?php
namespace IDCT\Framework\Chipmunk;

use IDCT\Framework\Chipmunk\Definitions\Interfaces\ConfigReaderInferface as ConfigReaderInferface;
use IDCT\Framework\Chipmunk\Definitions\Types\Config as Config;
/**
 * ConfigReader short summary.
 *
 * ConfigReader description.
 *
 * @version 1.0
 * @author Bartosz
 */
class ConfigReader implements ConfigReaderInferface
{
    protected $baseConfig;

    public function setBaseConfig(Config $config) {
        $this->baseConfig = $config;

        return $this;
    }

    public function getBaseConfig()
    {
        return $this->baseConfig;
    }

    /**
     * {@inheritdoc}
     */
    public function loadConfig($configFilePath) {
        require $configFilePath;

        $config = clone $this->getBaseConfig();

        if(isset($editModeDetector)) {
            $config->setEditModeDetector($editModeDetector);
        }

        if(isset($specialModeDetectors)) {
            $config->setSpecialModesDetectors($specialModeDetectors);
        }

        if(isset($templateDirectory)) {
            $config->setTemplateDirectory($templateDirectory);
        }

        if(isset($adminTemplateDirectory)) {
            $config->setAdminTemplateDirectory($adminTemplateDirectory);
        }

        return $config;
    }
}
