<?php
$start = 10;
$end = 0;
$stop = 3;

for($start ; $start >= $stop ; $start--) {
    if($start < 10 ) {
        echo '0';
    }
    echo $start . "<br>";
}
// Needed Output
/*10
09
08
07
06
05
04
03
*/
?>
