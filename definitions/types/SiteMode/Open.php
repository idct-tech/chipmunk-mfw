<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types\SiteMode;

use IDCT\Framework\Chipmunk\Definitions\Types\Page as Page;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\SiteModeInterface as SiteModeInterface;
/**
 * Public short summary.
 *
 * Public description.
 *
 * @version 1.0
 * @author Bartosz
 */
class Open implements SiteModeInterface
{
    public function process(Page $page) {
        $sections = $page->getListOfSections();

        foreach($sections as $section) {
            foreach($section as &$block) {
                //blocks are instances of BlockType

                //we pass the object reference as it can modify itself while running
                $block->action();
            }
        }


    }
}
