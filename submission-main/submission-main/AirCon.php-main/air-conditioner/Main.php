<?php
require 'AirConditioner.php';

// エアコンの電源ON
$airconditioner = new AirConditioner(25,5);

$airconditioner->cool();
$airconditioner->temperatureUP();
$airconditioner->powerUP();
$airconditioner->showStatus();
?>