<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;

/**
 * Route short summary.
 *
 * Route description.
 *
 * @version 1.0
 * @author Bartosz
 */
class Config
{
    protected $editModeDetector;
    protected $specialModesDetectors;
    protected $templateDirectory;
    protected $adminTemplateDirectory;

    public function setEditModeDetector(\Closure $detector) {
        $this->editModeDetector = $detector;

        return $this;
    }

    public function getEditModeDetector() {
        return $this->editModeDetector;
    }

    public function setSpecialModesDetectors(array $detectors) {
        $this->specialModesDetectors = $detectors;

        return $this;
    }

    public function getEspecialModesDetectors() {
        return $this->specialModesDetectors;
    }

    public function setTemplateDirectory($templateDirectory) {
        $this->templateDirectory = $templateDirectory;

        return $this;
    }

    public function getTemplateDirectory() {
        return $this->templateDirectory;
    }

    public function setAdminTemplateDirectory($adminTemplateDirectory) {
        $this->adminTemplateDirectory = $adminTemplateDirectory;

        return $this;
    }

    public function getAdminTemplateDirectory() {
        return $this->adminTemplateDirectory;
    }

}




