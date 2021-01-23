<?php
// bootstrap.php
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once "vendor/autoload.php";

function getEntityManager(): EntityManager
{
    // Create a simple "default" Doctrine ORM configuration for Annotations
    $isDevMode = true;
    $proxyDir = null;
    $cache = null;
    $useSimpleAnnotationReader = false;
    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
    $conn = array(
        'driver' => 'pdo_sqlite',
        'path' => __DIR__ . '/db.sqlite',
    );

// obtaining the entity manager
    return EntityManager::create($conn, $config); // Todo: Catch exception
}
