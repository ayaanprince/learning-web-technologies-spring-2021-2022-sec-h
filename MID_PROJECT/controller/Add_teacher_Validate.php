<?php 
	session_start();
	require('../model/TeacherModel.php');

	if(isset($_REQUEST['submit'])){
		$tname = $_REQUEST['tname'];
		$tmail = $_REQUEST['tmail'];
		$tcname = $_REQUEST['tcname'];

		if($tname != null && $tmail != null && $tcname != null){
			
			$status = add($tname, $tmail, $tcname);

			if($status)
			{
				header('location: ../views/Dashboard.php');
			}else{
				header('location: ../views/Homepage.php');
			}

		}else{
			echo "null submission..";
		}
	}
?>