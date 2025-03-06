<?php

$months = 2; 
$days = 5;
$time = time() + (86400 * (30 * $months + $days));

setcookie("site[layout]", "boxed", $time, "/");
setcookie("site[font]", "Swat", $time, "/");
setcookie("site[color]", "blue", $time, "/");

if (isset($_COOKIE['site'])) { 
    $siteCookies = [
        'site' => [
            'color' => $_COOKIE['site']['color'] ,
            'font' => $_COOKIE['site']['font'] ,
            'layout' => $_COOKIE['site']['layout']
        ]
    ];

    echo "<pre>";
    print_r($siteCookies);
    echo "</pre>";

    echo "Your Color Is {$siteCookies['site']['color']} And Your Font Is {$siteCookies['site']['font']}";
} 

?>
