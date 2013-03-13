<?php
/**
 * Front-end empty project, designed with Knws framework
 *
 * PHP Version 5.2
 *
 * @category  Knws empty project
 * @package   knws-empty
 * @author    Barif <dev@knws.ru>
 * @copyright 2013 Knws (http://knws.ru)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://knws.ru
 */

defined('PUBPATH') || define('PUBPATH', dirname(__FILE__));
defined('APPPATH') || define('APPPATH', realpath(PUBPATH . '/../application/'));
defined('LIBPATH') || define('LIBPATH', realpath(PUBPATH . '/../library/'));

require APPPATH . '/bootstrap.php';

    //Knws\Instance::init();
    //Knws\Instance::run();

/*
    $path = Knws\Service\Request::getPathInfo();

    if (in_array($path, array('', '/'))) {
        Knws\Service\Response::setContent('Welcome to the homepage.');
    } elseif ($path == '/contact') {
        Knws\Service\Response::setContent('Contact us');
    } else {
        Knws\Service\Response::setContent('Page not found.', 404);
    }

    Knws\Service\Response::send();

    Knws\Service\Logger::setLogLevel(100);
    Knws\Service\Logger::info('content outputed');
*/