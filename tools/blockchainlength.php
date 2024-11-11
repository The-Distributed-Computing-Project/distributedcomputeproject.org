<?php
$directory = "../blockchain/";
//$filecount = count(glob($directory . "*"));
//echo "There were $filecount files";
 
$output = exec("ls -l $directory | egrep -c '^-'");
echo $output;
?>
