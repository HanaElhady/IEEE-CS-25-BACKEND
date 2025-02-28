<?php

$num = 2; // Start from 2
$result = 1; // First output is 1

while ($num < 520) {
    echo $result . "<br>"; 
    $num = $result * 2 + 2; 
    $result = $num; 
}


// Needed Output
/*1 -- 3*2
4    -- 6
10  -- 12
22 -- 24 3
46
94
190
382
*/
?>
