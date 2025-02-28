<?php
function multiply(...$args) {
    $result = 1;

    foreach ($args as $num) {
        if (is_numeric($num) && !is_string($num)) { 
            $result *= (int) $num; 
        }
    }

    return $result;
}

echo multiply(10, 20) . "<br>"; // 200
echo multiply("A", 10, 30) . "<br>"; // 300
echo multiply(100.5, 10, "B") . "<br>"; // 1000
?>
