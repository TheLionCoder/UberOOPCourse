<?php

require_once ('Car.php');
require_once ('UberX.php');
require_once('UberPool.php');
require_once ('Account.php');

$uberX = new UberX("AW456", new Account("Fredy Gomez", "AMS123"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("BY789", new Account("Fred Gameza", "BNT456"), "Dodge", "Ram");
$uberPool->PrintDataCar();
?>