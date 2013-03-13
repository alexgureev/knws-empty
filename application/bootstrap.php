<?php

$loader = require LIBPATH . '/autoload.php';

use Symfony\Component\HttpFoundation\Request;

//require_once "entities/User.php";
//require_once "entities/Product.php";
//require_once "entities/Bug.php";

//require_once "repositories/BugRepository.php";

require_once APPPATH . '/AppKernel.php';

$kernel = new AppKernel('dev', false);

Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
