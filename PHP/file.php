<?php
$myfile = fopen("first.txt", "r") or die("Unable to open file!");
/*echo fread($myfile,filesize("first.txt"));*/
/*echo fgets($myfile);*/
/*while (!feof($myfile)) {
	echo fgets($myfile)."<br>";*/
/*}*/
echo fgetc($myfile);
fclose($myfile);
copy("first.txt", "second.txt");//copies the content of first file to second file;
rename("second.txt", "third.txt");//renames the old name to new name
unlink("third.txt");//deletes the file 

//fopen(filename, mode) is used to open the file
//fread(handle, length) is used to read a open file
//fgets(handle) is used to read a single line  from the file;
//feof() checks if the end of file has been reached
//fgetc(handle) reads used to read a single character from the file;

?>