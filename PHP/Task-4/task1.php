<?php

$drives = [];
foreach (range('A', 'Z') as $letter) {
    $drive = $letter . ':\\'; 
    if (is_dir($drive)) { 
        $drives[] = $drive;
    }
}

$counter = 0;
foreach ($drives as $drive) {
    if ($counter >= 2) break; 
    $totalTB = disk_total_space($drive) / (1024 ** 4); 
    echo "\"" . number_format($totalTB, 2) . " Terabyte ($drive)\"<br/>";
    $counter++;
}

?>

