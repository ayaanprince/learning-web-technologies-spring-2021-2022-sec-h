<?php 
	session_start();
	require('../model/AdminModel.php');
	//print_r($_REQUEST);
	if(isset($_POST['submit']))
	{
		$myname = $_POST['myname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];

		if($myname != null and $username != null and $email != null and $password != null and $confirm != null and $gender != null and $dob !=null){
			
			if(signup($myname,$username,$email,$password,$confirm,$gender,$dob)){
				header('location: ../views/Login_page.php');
			}else{
				echo "An error occured, please try again";
			}
		}
		else{
			echo "Please check if informations are okay";
		}
	}
?>