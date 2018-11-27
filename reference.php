<?php
// @author: Timo Anttila, info@tuspe.com

// Official numbers
$numbers = array(1,3,7);

// Default values
$sum = $i = 0;
$ref = 3245;

// Numbers from $ref
$ref_split = str_split($ref);

// Foreach all numbers from reference
foreach($ref_split as $item){
    $sum = $item * $numbers[$i] + $sum;
    if($i != 2) $i++; else $i = 0;
}

// Round up to nearest 10. The new number minus $sum is the reference verification number.
$ref = $ref . $sum = ceil($sum / 10) * 10 - $sum;
