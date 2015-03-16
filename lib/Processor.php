<?php
namespace IDCT\Framework\Chipmunk;

use IDCT\Framework\Chipmunk\Definitions\Interfaces\ProcessorInterface as ProcessorInterface;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\SiteModeInterface as SiteModeInterface;
use IDCT\Framework\Chipmunk\Definitions\Types\Page as Page;
/**
 * Frontend short summary.
 *
 * Frontend description.
 *
 * @version 1.0
 * @author Bartosz
 */
class Processor extends Object implements ProcessorInterface
{
    public function process(SiteModeInterface $siteMode, Page $data) {
        //the siteMode object is the real processor

        /*
         * in most cases the 'normal' mode will do really nothing to the data,
         * yet will be used for some automatic operations like email sending
         */
        $data = $siteMode->process($data);
    }
}
