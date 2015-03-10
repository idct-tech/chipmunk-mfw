<?php
namespace IDCT\Framework\Chipmunk\Definitions\Interfaces;

use IDCT\Framework\Chipmunk\Definitions\Types\Route as Route;
/**
 * Interface for Chipmunk WF routers
 *
 * @version 1.0
 * @author IDCT Bartosz Pachołek [bartosz@idct.pl]

 */
interface RouterInterface
{
    /**
     * Gets the current url details
     * @return Route
     */
    public function getCurrentRoute();

    /**
     * Generates a route for a given url string
     * @param array $urlParts
     */
    public function generateRoute($url, $mode);
}
