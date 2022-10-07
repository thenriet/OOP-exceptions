<?php
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('red', 4, '100', 'fuel');
echo $truck->forward();
var_dump($truck);


$truck = new Truck('blue', 4, '100', 'electric');
echo $truck->forward();
var_dump($truck);

echo $truck->isFull(10);