<?php

$str = 'aAa';
$num = 3;
$char = "_";

echo strtolower(str_repeat($str . $char, $num - 1) . $str);
?>
