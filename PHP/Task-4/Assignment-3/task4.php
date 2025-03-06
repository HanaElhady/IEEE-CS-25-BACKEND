<?php

echo "\"" . basename($_SERVER['PHP_SELF']) . "\"<br/>";

echo "\"" . basename(__FILE__) . "\"<br/>";

echo "\"" . pathinfo(__FILE__, PATHINFO_BASENAME) . "\"<br/>";
$fileParts = explode(DIRECTORY_SEPARATOR, __FILE__);
echo "\"" . end($fileParts) . "\"<br/>";

?>
