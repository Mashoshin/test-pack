<?php

namespace DataLayer;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Tools\Setup;

class EmBuilder
{
	private const PATH_TO_ENTITIES = ['App\\' => __DIR__ . '/Entity'];

	/**
	 * @return EntityManagerInterface
	 * @throws ORMException
	 */
    public static function build(): EntityManagerInterface
    {
		$OrmConfig = Setup::createAnnotationMetadataConfiguration(self::PATH_TO_ENTITIES);
		return EntityManager::create(require '../config/db-config.php', $OrmConfig);
    }
}
