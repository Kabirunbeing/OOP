<?php
require_once 'AvoidDuplication.php';
require_once 'AvoidRedundancy.php';

$duplicationInstance = new AvoidDuplication('Duplication', 'No Duplication','Kabeer is here');
$redundancyInstance = new AvoidRedundancy('Redundancy', 'No Redundancy','Kabeer can be seen here');
$redundancyInstance = new AvoidRedundancy('fetching..','YEs here we go again','Kabir is here');
echo $duplicationInstance->getDetails() . PHP_EOL;
echo $redundancyInstance->getDetails() . PHP_EOL;


?>
