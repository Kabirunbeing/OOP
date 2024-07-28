<?php

require_once 'ProtectedProperties.php';

$protected = new ProtectedProperties();
echo $protected->getName();

$protected->setName("i am setting the value here");
echo $protected->getName(); 

?>
