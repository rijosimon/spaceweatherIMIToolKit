<?php
$fileHandle=fopen("output.txt", 'w');
fwrite($fileHandle,"Test Text");
fclose($fileHandle);
?>