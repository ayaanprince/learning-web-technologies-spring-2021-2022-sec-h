<?php 
	session_start();
	if(isset($_REQUEST['submit']))
	{
		//print_r($_REQUEST['submit']);
		$tname = $_REQUEST['tname'];
		$tmail = $_REQUEST['tmail'];
		$tcname= $_REQUEST['tcname'];
		$file = fopen('../model/teacher.txt', 'r');
		$id = 1;
		while (!feof($file)) {
			$string = fgets($file);
			$teacherarray = explode('|', $string);
			$id = max($id, $teacherarray[6]);
		}
		$id += 1;
		fclose($file);
		if($tname == "" or $tmail == "" or $tcnamer == "")
		{
			echo "Fields cannot be empty";
		}
		$file = fopen('../model/teacher.txt', 'a');
		$teacher = $tname."|".$tmail."|".$tcname."\r\n";

		//print($agent);
		fwrite($file, $teacher);
		fclose($file);
		header('location: ../views/Adding_teacher.php');
	}
	else
	{
		echo "Error";
	}
?>