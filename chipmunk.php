<?php
require "vendor/autoload.php";
namespace IDCT\Framework;

use IDCT\Framework\Chipmunk\Definitions\Types\Object as Object;
use IDCT\Framework\Chipmunk\Definitions\Types\Page as Page;
use IDCT\Framework\Chipmunk\Definitions\Types\Config as Config;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\ProcessorInterface as ProcessorInterface;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\RouterInterface as RouterInterface;
use IDCT\Framework\Chipmunk\Definitions\Interfaces\FrontendInterface as FrontendInterface;

use IDCT\Framework\Chipmunk\Definitions\Types\SiteMode\Open as ModeOpen;
use IDCT\Framework\Chipmunk\Definitions\Types\SiteMode\Edit as ModeEdit;

class Chipmunk extends Object {

    protected $router;
    protected $frontend;
    protected $config;
    protected $processor;

    public function setRouter(RouterInterface $router) {
        $this->router = $router;

        return $this;
    }

    public function getRouter() {
        return $this->router;
    }

    public function setConfig(Config $config) {
        $this->config = $config;

        return $this;
    }

    public function getConfig() {
        return $this->config;
    }

    public function setFrontend(FrontendInterface $frontend) {
        $this->frontend = $frontend;

        return $this;
    }

    public function getFrontend() {
        return $this->frontend;
    }

    public function setProcessor(ProcessorInterface $processor) {
        $this->processor = $processor;

        return $this;
    }

    public function getProcessor() {
        return $this->processor;
    }

    public function run() {
        $router = $this->getRouter();
        $currentRoute = $router->getCurrentRoute();

        $state = 0; //http state code

        $page = Page::getByRoute($currentRoute);
        if($page === null) {
            $state = 404; //not found
        } else {
            $state = 200;
        }


        //by default the mode is OPEN
        $mode = new ModeOpen();

        //we need to check if there is a rule fo getting into edit mode and if so: run it
        $config = $this->getConfig();
        if(($editModeDetector = $config->getEditModeDetector) !== null) {
            if($editModeDetector($this) === true) {
                $mode = new ModeEdit();
            }
        }

        $processor = $this->getProcessor();
        $processor->process($mode, $page);



        $frontend = $this->getFrontend();
        $frontend->prepare($state, $page);


    }



}