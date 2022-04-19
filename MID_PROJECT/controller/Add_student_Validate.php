<?php 
	session_start();
	require('../model/StudentModel.php');


	if(isset($_REQUEST['submit'])){
		$sname = $_REQUEST['sname'];
		$smail = $_REQUEST['smail'];
		$scname = $_REQUEST['scname'];

		if($sname != null && $smail != null && $scname != null){

			
			$status = add($sname, $smail, $scname);

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