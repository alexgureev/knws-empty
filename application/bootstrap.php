<?php
$loader = require '../library/autoload.php';

require_once "entities/User.php";
require_once "entities/Product.php";
require_once "entities/Bug.php";

if (!class_exists("Doctrine\Common\Version", false)) {
    require_once "bootstrap_doctrine.php";
}

require_once "repositories/BugRepository.php";

/*
 *
require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

 */