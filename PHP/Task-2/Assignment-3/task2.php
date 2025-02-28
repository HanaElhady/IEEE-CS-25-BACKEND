<?php
function get_arguments(...$args) {
    $all = implode(" ", $args);
    return $all;
}

echo get_arguments("Hello", "Elzero", "Web", "School")."<br>"; // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
?>
