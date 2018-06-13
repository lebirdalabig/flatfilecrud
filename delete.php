<?php

$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");

$line = "";
$i=0;
while(!feof($myfile))
{
	if($i == $_GET['ctr']){
		$tempLine = fgets($myfile);
	}else{
		$tempLine = fgets($myfile);	
		$line = $line.$tempLine;
	}
	$i++;
}
fclose($myfile);
$handle = fopen("newfile.txt", "w+");
file_put_contents("newfile.txt", $line);
fclose($handle);

header("Location: index.php");

?>