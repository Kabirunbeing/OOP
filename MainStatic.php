<?php

require_once 'StaticProperties.php';

StaticPropertiesExample::incrementCount();
StaticPropertiesExample::incrementCount();
StaticPropertiesExample::incrementCount();
StaticPropertiesExample::incrementCount();

echo "Current count: " . StaticPropertiesExample::getCount() . "\n"; 

echo "Direct access to count: " . StaticPropertiesExample::$count . "\n"; 

?>
