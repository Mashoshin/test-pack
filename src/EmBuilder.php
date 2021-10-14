<?php

namespace DataLayer;

use Doctrine\ORM\EntityManagerInterface;

class EmBuilder
{
    public static function build(): EntityManagerInterface
    {
        require 'config/cli-config.php';

        return $entityManager;
    }
}
