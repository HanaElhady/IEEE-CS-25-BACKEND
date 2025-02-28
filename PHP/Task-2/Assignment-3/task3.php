<?php
function sum_all(...$args) {
    return array_reduce($args, function($sum, $num) {
        return $num == 5 ? $sum : $sum + ($num == 10 ? 20 : $num);
    }, 0);
}

echo sum_all(10, 12, 5, 6, 6, 10) . "\n"; // Output: 64
echo sum_all(5, 10, 5, 10) . "\n"; // Output: 40
?>
