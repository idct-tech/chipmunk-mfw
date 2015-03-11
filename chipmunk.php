<?php
require "vendor/autoload.php";
namespace IDCT\Framework;

use IDCT\Framework\Chipmunk\Definitions\Types\Object as Object;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\RouterInterface as RouterInterface;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\FrontendInterface as FrontendInterface;

class Chipmunk extends Object {

    protected $router;

    public function setRouter(RouterInterface $router) {
        $this->router = $router;

        return $this;
    }

    public function getRouter() {
        return $this->router;
    }

    public function setFrontend(FrontendInterface $frontend) {
        $this->frontend = $frontend;

        return $this;
    }

    public function getFrontend() {
        return $this->frontend;
    }

    public function run() {

    }

}