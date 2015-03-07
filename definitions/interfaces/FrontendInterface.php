<?php
namespace IDCT\Cms\Chipmunk\Definitions\Interfaces;
/**
 * FrontendInterface short summary.
 *
 * FrontendInterface description.
 *
 * @version 1.0
 * @author Bartosz
 */
abstract class FrontendInterface
{
    abstract public function registerJavascript($path);
    abstract public function getJavascriptsPath();
    abstract public function registerCss($type, $path);
    abstract public function getCsses();

    abstract public function prepare();
    abstract public function render();
}
