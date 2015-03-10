<?php
namespace IDCT\Framework\Chipmunk\Definitions\Interfaces;
/**
 * BlockTypeInterface short summary.
 *
 * BlockTypeInterface description.
 *
 * @version 1.0
 * @author Bartosz
 */
interface BlockTypeInterface
{
    abstract public function action();
    abstract public function render();
    abstract public function editAction();
    abstract public function editRender();

    abstract public function setTemplate($name);
}
