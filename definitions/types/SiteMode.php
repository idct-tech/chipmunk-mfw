<?php
namespace IDCT\Framework\Chipmunk\Definitions\Types;
/**
 * SiteMode short summary.
 *
 * SiteMode description.
 *
 * @version 1.0
 * @author Bartosz
 */
abstract class SiteMode
{
    protected $mode = 'undefined';

    abstract public function process(Page $page);
}
