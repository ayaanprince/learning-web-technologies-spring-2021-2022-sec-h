<?php 
	session_start();
	if(isset($_REQUEST['submit']))
	{
		//print_r($_REQUEST['submit']);
		$sname = $_REQUEST['sname'];
		$smail = $_REQUEST['smail'];
		$scname= $_REQUEST['scname'];
		$file = fopen('../model/student.txt', 'r');
		$id = 1;
		while (!feof($file)) {
			$string = fgets($file);
			$studentarray = explode('|', $string);
			$id = max($id, $studentarray[6]);
		}
		$id += 1;
		fclose($file);
		if($sname == "" or $smail == "" or $scnamer == "")
		{
			echo "Fields cannot be empty";
		}
		$file = fopen('../model/student.txt', 'a');
		$student = $sname."|".$smail."|".$scname."\r\n";

		//print($agent);
		fwrite($file, $student);
		fclose($file);
		header('location: ../views/Adding_student.php');
	}
	else
	{
		echo "Error";
	}
?>