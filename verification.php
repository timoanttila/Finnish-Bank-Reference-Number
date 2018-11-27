<?php
// @author: Timo Anttila, info@tuspe.com

// Official numbers
$numbers = array(1,3,7);

// Reference numbers from $ref
$ref_split = str_split($ref);

// Some default values
$sum = $i = 0;

// Foreach all numbers from reference
foreach($ref_split as $item){
    $sum = $item * $numbers[$i] + $sum;
    if($i != 2) $i++; else $i = 0;
}

// Get nearest 10 and then that number minus $sum is your reference verification number which is the last number.
$next = round($sum, -1);
$ref = $ref . $next - $sum;
