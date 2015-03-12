<?php
namespace IDCT\Framework\Chipmunk\Definitions\Interfaces;

use IDCT\Framework\Chipmunk\Definitions\Types\Page as Page;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\SiteModeInterface as SiteModeInterface;
/**
 * Interface1 short summary.
 *
 * Interface1 description.
 *
 * @version 1.0
 * @author Bartosz
 */
interface ProcessorInterface
{
    public function process(SiteModeInterface $siteMode, Page $data) {

    }
}
