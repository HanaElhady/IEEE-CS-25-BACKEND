<?php

date_default_timezone_set("Africa/Cairo");

$date = "1990-10-01";

$days = strtotime($date) / (60 * 60 * 24);
$years = $days / 365;

echo "From Epoch Time Till $date Is Approximately " . number_format($days, 1) . " Days<br/>";
echo "From Epoch Time Till $date Is Approximately " . number_format($years, 1) . " Years";

?>
