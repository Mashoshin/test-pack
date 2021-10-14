<?php

require 'vendor/autoload.php';

$em = \DataLayer\EmBuilder::build();

//$acc = new \DataLayer\Entity\Account();
//$acc->setId(2);
//$acc->setAddress('fdsfdsfdsfHUIdsfdsfdsfdsfdsf');
//
//$em->persist($acc);
//$em->flush();

$repo = $em->getRepository(\DataLayer\Entity\Car::class);
$car = $em->find(\DataLayer\Entity\Account::class, 1);
var_dump($repo->findAll()); die();


echo 'Created';

//$repo = $em->getRepository(\DataLayer\Entity\Car::class);

