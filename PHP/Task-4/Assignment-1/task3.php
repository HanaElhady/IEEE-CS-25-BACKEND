<?php

$months = 2; 
$days = 5;
$time = time() + (86400 * (30 * $months + $days));

setcookie("site[layout]", "boxed", $time, "/");
setcookie("site[font]", "Swat", $time, "/");
setcookie("site[color]", "blue", $time, "/");


setcookie("site[layout]", "", time() - 3600, "/");

?>
