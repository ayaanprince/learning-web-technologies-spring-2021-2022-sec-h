<?php 
	session_start();
	$id =$_SESSION['current_adminid'];
	$con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
    //$con = connection();
	 $sql = "select * from admin where adminid = '{$id}'";
	 $res = mysqli_query($con, $sql);
	 $row =  mysqli_fetch_assoc($res);
	 //$username = $row['Username'];
	// $name = $row['Name'];
	 //$email = $row['Email'];
	// $gender = $row['Gender'];
	// $dob = $row['DOB'];
	 if(isset($_POST['submit']))
	{
		$myname = $_POST['myname'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$sql = "update admin set Name='{$myname}',
		Email='{$email}',
		Gender='{$gender}',
		DOB='{$dob}' 
		where adminid = '{$id}'";
		$res = mysqli_query($con, $sql);
		header('location:../views/Profile.php');


	}
?>