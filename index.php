<?php

require_once 'Car.php';

$blueCar = new Car('blue', 4, 'fuel');

try {
    $blueCar->start();
} catch (Exception $e) {
    echo $e->getMessage().'<br>';
    $blueCar->setHasParkBrake(false);
    $blueCar->start();
} finally {
    echo 'Ma voiture roule comme un donut';
}
var_dump($blueCar);
