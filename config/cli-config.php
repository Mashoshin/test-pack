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

// Tells Doctrine what mode we want
$isDevMode = true;

$ORMConfig = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

// Doctrine connection configuration
$dbParams = [
    'driver'   => 'pdo_pgsql',
    'user'     => 'admin',
    'password' => '123456',
    'dbname'   => 'ton-race',
    'port' => '5441',
    'host' => 'localhost'
];

$entityManager = EntityManager::create($dbParams, $ORMConfig);

return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));
