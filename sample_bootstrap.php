<?php
namespace IDCT\Framework\Chipmunk;

//creating new service container
$services = new Definitions\Types\ServicesContainer();

//loading config
$configReader = new ConfigReader();
$baseConfig = new Definitions\Types\Config();
$configReader->setBaseConfig($config);  //inject base config
$config = ()->loadConfig("sample_config.php");
$services->registerService('config', $config);

//creater router
$router = new Router();
$route = new Definitions\Types\Route();
$router->setBaseRoute($route); //inject base route
$services->registerService('router', $config);

//Actions parser


//Frontend
$frontend = new Frontend();
$services->registerService('frontend', $frontend);

//passing services container to all objects
Definitions\Types\Object::setServices($services);

$chipmunk = new \IDCT\Framework\Chipmunk();
$chipmunk->setRouter($router)
         ->setFrontend($frontend)
         ->setConfig($config)
         ->run();




