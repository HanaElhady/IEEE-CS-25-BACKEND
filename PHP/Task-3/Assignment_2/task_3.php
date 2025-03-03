<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];
$new_friends = array_change_key_case(array_flip($friends), CASE_LOWER);
$new_friends = array_reverse($new_friends, true); 

echo "<pre>";
print_r($new_friends);
echo "</pre>";

?>
