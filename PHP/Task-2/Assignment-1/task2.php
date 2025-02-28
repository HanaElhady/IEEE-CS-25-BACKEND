<?php 
// Test Case 1
$a = 100;
$b = 200;
$c = 300;

if( $a > $b) {
    $message = 'A Is Larger Than B';
}
elseif ($a > $c) {
    $message = 'A Is Larger Than C' ;
}
else {
    $message = 'A Is Not Larger Than B Or C' ;
}

echo $message;
// A Is Not Larger Than B Or C
?>
