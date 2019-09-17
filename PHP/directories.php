<?php
echo getcwd()."<br>";
chdir("images");
echo getcwd();
$myfile=fopen("text.txt", "r") or die("unbale to open");
echo fread($myfile,filesize("text.txt"));
fclose($myfile);




?>