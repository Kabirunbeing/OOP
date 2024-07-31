<?php
function sumArray($array) {
    if (empty($array)) {
        return 0;
    }
    return array_shift($array) + sumArray($array);
}

$numbers = [1, 2, 3, 4, 5];
echo sumArray($numbers); 
?>
