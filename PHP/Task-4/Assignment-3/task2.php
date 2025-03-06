<?php

$file = ""; 
if (file_exists($file) && is_file($file)) { 
    $sizeBytes = filesize($file); 
    $sizeMB = $sizeBytes / (1024 ** 2); 
    $sizeKB = $sizeBytes / 1024; 

    echo "\"Size In Megabyte Is " . number_format($sizeMB, 0) . "\"<br/>";
    echo "\"Size In Kilobyte Is " . number_format($sizeKB, 0) . "\"";
}

?>
