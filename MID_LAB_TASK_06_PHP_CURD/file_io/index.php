<?php 

	/*$file = fopen('user.txt', 'r');
	$string = fread($file, filesize('user.txt'));
	echo $string;
	fclose($file);*/

	/*$file = fopen('user.txt', 'w');
	$content = "This is writting test...";
	fwrite($file, $content);
	echo "Done!";
	fclose($file);*/

	$file = fopen('user.txt', 'a');
	$content = "This is writting test...\r\n";
	fwrite($file, $content);
	echo "Done!";
	fclose($file);
?>