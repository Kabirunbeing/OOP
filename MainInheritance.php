<?php
require_once 'AvoidDuplication.php';
require_once 'AvoidRedundancy.php';

$duplicationInstance = new AvoidDuplication('Duplication', 'No Duplication');
$redundancyInstance = new AvoidRedundancy('Redundancy', 'No Redundancy');
$redundancyInstance = new AvoidRedundancy('fetching..','YEs here we go again');
echo $duplicationInstance->getDetails() . PHP_EOL;
echo $redundancyInstance->getDetails() . PHP_EOL;

?>
