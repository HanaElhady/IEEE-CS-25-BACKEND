<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for ($start; $start < count($mix); $start++) {
    if (gettype($mix[$start]) === 'integer' && $mix[$start] !== 1) {
        echo $mix[$start] . "<br>";
    }
}
// Needed Output
/*
2
3
4
*/
?>
