<?php
function greeting($name, $gender = null) {
    if ($gender === "Male") {
        return "Hello Mr $name\n";
    } elseif ($gender === "Female") {
        return "Hello Miss $name\n";
    } else {
        return "Hello $name\n";
    }
}

echo greeting("Osama", "Male")."<br>";   // Hello Mr Osama
echo greeting("Eman", "Female")."<br>";  // Hello Miss Eman
echo greeting("Sameh");           // Hello Sameh
?>
