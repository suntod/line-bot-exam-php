<?php
require_once './config/config.php';

$checkinfile = fopen(FILE_CHECK_IN_FULLPATH, "a+") or die("Unable to open file!");
$txt = $_POST["userID"] . "\t" . $_POST["userLoc"] . "\n";
fwrite($checkinfile, $txt);
fclose($checkinfile);

//echo $_POST["userLoc"] . "<BR>" . $_POST["userID"];
$myfile = fopen(FILE_CHECK_IN_FULLPATH, "r") or die("Unable to open file!");
echo fread($myfile,filesize(FILE_CHECK_IN_FULLPATH));
fclose($myfile);
?>