<?php 
	session_start();
	//print_r($_REQUEST);
	$agency = [
		'myname' => "", 'email' => "", 'username' => "", 'password' => "", 'confirm' => "",'gender' => "",'dob'=>""
	];
	if(isset($_REQUEST['submit']))
	{
		$myname = $_REQUEST['myname'];
		$email = $_REQUEST['email'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$confirm = $_REQUEST['confirm'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];

		$okay = true;
		if($myname == null or $username == null or $email == null or $password==null or $confirm == null or  $gender ==  null or $dob == null) $ok = false;
		if(!$okay) {
			echo "Field cannot be blank";
		}
		if($confirm != $password)
		{
			echo "password and Confirm Password does not match";
		}
		else
		{
			$file = fopen('../model/admin.txt', 'r');
			$add = true;
			$name_taken = false;
			$email_taken = false;
			while(!feof($file))
			{
				$get_admin = fgets($file);
				$admin_array = explode('|', $get_agency);
				if(isset($admin_array[2]) and trim($admin_array[2]) == $username)
				{
					$name_taken = true;
					$add = false;
				}
				else if(isset($admin_array[1]) and trim($admin_array[1]) == $email)
				{
					$email_taken = true;
					$add = false;
				}
			}
			if($add){
				$get_admin = "";
				$get_admin = $myname."|".$email."|".$username."|".$password."|".$gender."|".$dob."\r\n";
				fclose($file);
				$file = fopen('../model/admin.txt', 'a');
				fwrite($file, $get_admin);
				fclose($file);
				header('location: ../views/Login_page.php');
			}
			else{
				if($name_taken) printf("This username already exists. Please select another username");
				if($email_taken) printf("This Email has already been registered.");
			}
		}
	}
?>