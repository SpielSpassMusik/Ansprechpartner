<?php
$file = "wartungsarbeiten.html";
$handle = fopen($file, "r");
$template = fread($handle, filesize($file));
fclose($handle);
die($template);
?>
