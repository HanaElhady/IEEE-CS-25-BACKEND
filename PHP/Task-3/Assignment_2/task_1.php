<?php
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];


$friends = array_change_key_case($friends, CASE_LOWER);
$new_friends = array_chunk($friends, 2, true);
print_r($new_friends);
?>
