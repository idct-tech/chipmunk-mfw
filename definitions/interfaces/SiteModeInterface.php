<?php
namespace IDCT\Framework\Chipmunk\Definitions\Interfaces;

use IDCT\Framework\Chipmunk\Definitions\Types\Page as Page;
/**
 * SiteModeInterface short summary.
 *
 * SiteModeInterface description.
 *
 * @version 1.0
 * @author Bartosz
 */
interface SiteModeInterface
{
    public function process(Page $page);
    public function traverseBlocks($section);
}
