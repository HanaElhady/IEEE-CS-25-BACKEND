<?php

$nums = [1, 13, 12, 20, 51, 17, 30];

for($index = 0 ; $index < count($nums) ; $index++) {
    if($nums[$index] % 2 == 0) {
        echo $nums[$index] / 2 . "<br>";
    }
    
}
// Needed Output
/*
6
10
15
*/
?>
