<?php
namespace IDCT\Cms\Chipmunk\Definitions\Types;

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

}




