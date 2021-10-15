<?php

use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require 'vendor/autoload.php';

$config = new PhpFile(__DIR__ . '/migrations.php');

$paths = [
    'App\\' => __DIR__ . "/../src/Entity",
];

$ORMConfig = Setup::createAnnotationMetadataConfiguration($paths);

// Doctrine connection configuration
$dbParams = [
    'driver'   => getenv('DB_DRIVER'),
    'user'     => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'dbname'   => getenv('DB_NAME'),
    'host' => getenv('DB_HOST')
];

$entityManager = EntityManager::create($dbParams, $ORMConfig);

return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));
