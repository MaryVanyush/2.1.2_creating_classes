<?php
declare(strict_types=1);

require_once('autoload.php');


use Object\Electronics\Television as ObjectTelevision;
use Object\Human\Student as ObjectStudent;
use Object\Technics\Transport\Car as ObjectCar;

$student1 = new ObjectStudent("Иван", 20);
echo $student1->getInfo() . "\n";
$student1->setAge(21);
echo $student1->getInfo() . "\n";

$car1 = new ObjectCar("Toyota", "Camry");
echo $car1->getCarInfo() . "\n";
$car1->setModel("Corolla");
echo $car1->getCarInfo() . "\n";

$tv1 = new ObjectTelevision("Samsung", 55);
echo $tv1->getTelevisionInfo() . "\n";
$tv1->setScreenSize(65);
echo $tv1->getTelevisionInfo() . "\n";

