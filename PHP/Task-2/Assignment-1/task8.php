<?php

$day = "Sat";
$message = '';

if( $day == "Sat" || $day == "Sun" || $day == "Mon") {
    $message = "We Are Open All The Day";
}

elseif ($day == "Tue" || $day == "Wed") {
    $message = "We Are Open From 08:12" ;
}

elseif ($day == "Thu" || $day == "Fri") {
    $message = "We Are Closed" ;
}
else {
    $message = "Unknown Day" ;
}

echo $message;
?>
