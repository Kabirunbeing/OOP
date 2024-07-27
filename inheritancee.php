<?php
require_once 'inheritance.php';

$firstInstance = new Book('Cosmos','Kabeer',12);
$secondInstance = new Book('1984','George Well',1984);

echo $firstInstance->getTitle();
echo $secondInstance->getAuthor();
echo $firstInstance . PHP_EOL;
echo $secondInstance . PHP_EOL;
?>
