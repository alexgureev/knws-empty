<?php
// bootstrap_doctrine.php

// See :doc:`Configuration <../reference/configuration>` for up to date autoloading details.
use Doctrine\ORM\Tools\Setup;

// Create a simple "default" Doctrine ORM configuration for XML Mapping
$isDevMode = true;
//$config = Setup::createXMLMetadataConfiguration(__DIR__."/config/mappings/xml", $isDevMode);
// or if you prefer yaml or annotations
//$config = Setup::createAnnotationMetadataConfiguration(__DIR__."/entities", $isDevMode);
$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/configs/"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'knws',
    'password' => 'fVNrJPsKF2UqxvPoqtnG',
    'dbname'   => 'knws'
);

// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);
