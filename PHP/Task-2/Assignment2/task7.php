<?php

$mix = [1, 2, "A", "B", "C", 3, 4];
$numCounter = 0;
$letterCounter = 0;

for($index = 0 ; $index < count($mix) ; $index++) {
    if(gettype($mix[$index]) === 'integer') {
        $numCounter ++;
    }
    elseif (gettype($mix[$index]) === 'string') {
        $letterCounter++;
    }
}
echo "$numCounter Numbers Printed <br> $letterCounter Letters Ignored";
// Needed Output
/*
"4 Numbers Printed"
"3 Letters Ignored"
*/
?>
