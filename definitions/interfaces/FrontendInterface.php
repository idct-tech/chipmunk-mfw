<?php
namespace IDCT\Framework\Chipmunk\Definitions\Interfaces;

use IDCT\Framework\Chipmunk\Definitions\Types\Page as Page;
use IDCT\Framework\Chipmunk\Definitions\Types\Menu as Menu;
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

    abstract public function registerPage(Page $page);
    abstract public function registerMenu(Menu $menu);

    abstract public function prepare($state, Page $page);
    abstract public function render();
}
