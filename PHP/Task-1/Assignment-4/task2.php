<?php
$a = "10";

// First Method
$num = (int) $a;
echo $num . "\n";  
echo gettype($num) . "\n";  

// Second Method
$num = $a + 1 -1;
echo $num . "\n";  
echo gettype($num) . "\n";  

//Third Method
$num = intval($a);
echo $num . "\n";  
echo gettype($num) . "\n";  

//Fourth Method
settype($a, "integer");
echo $a . "\n";  
echo gettype($a) . "\n";  

//Fifth Method
$num = (int) round($a);
echo $num . "\n";  // 10
echo gettype($num) . "\n";  // integer

?>
