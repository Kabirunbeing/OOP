<?php

require_once 'Encapsulation.php';

$person = new Person();
$person->setName("John");
$person->setAge(30);
$person->setPracticing('M practicing encapsulation');

echo "Name: " . $person->getName() . "\n";  
echo "Age: " . $person->getAge() . "\n";    
echo $person->getPracticing()
?>
