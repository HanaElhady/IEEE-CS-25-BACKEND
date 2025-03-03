<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

$arr = array_combine(array_map('strtolower', $codes), $means);

echo "<pre>";
print_r($arr);
echo "</pre>";

?>
