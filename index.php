<?php
require_once 'Car.php';
require_once 'Bicycle.php';

$myCar = new Car('red', 5, 'gas');
echo $myCar->start() . PHP_EOL;
echo $myCar->forward() . PHP_EOL;
echo $myCar->brake() . PHP_EOL;

$bike = new Bicycle('blue');
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
