<?php
$target='index.php'; 
header('HTTP/1.1 301 Moved Permanently');
header("Location: $target\n\n");?>
