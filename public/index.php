<?php


use Yaf\Application as YafApplication;
use Yaf\Response\Http;

defined('DS') || define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', dirname(__FILE__) . DS . '..' . DS . 'app' . DS);
define('ROOT_PATH', dirname(__FILE__) . DS . '..' . DS);
define('BASE_URL', "http://yafdemo.qhh/");
define('CACHE_TIME', 3600);
define('STATIC_PUBLIC', "http://yafdemo.qhh/");
$application = new YafApplication(ROOT_PATH . "config" . DS . "application.ini");
$application->bootstrap()->run();

