<?php
namespace IDCT\Cms\Chipmunk;

use IDCT\Cms\Chipmunk\Definitions\Interfaces\ConfigReaderInferface as ConfigReaderInferface;
use IDCT\Cms\Chipmunk\Definitions\Types\Config as Config;
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
    /**
     * {@inheritdoc}
     */
    public function loadConfig($configFilePath) {
        require $configFilePath;

        $config = new Config();

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
