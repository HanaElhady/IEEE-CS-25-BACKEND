<?php

$date = "2005-10-02";

date_default_timezone_set("Africa/Cairo");

echo date_default_timezone_get() . "<br>";

$timestamp = strtotime($date . " 15:15:15");

echo date("\"Y, F, l 'dS' H:i:s\"", $timestamp);

?>
