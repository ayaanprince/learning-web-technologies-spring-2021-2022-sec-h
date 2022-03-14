<?php 
	session_start();
	$file = fopen('../model/tmp.txt', 'w');
	fwrite($file, "");
	fclose($file);
	if(isset($_REQUEST['submit']))
	{
		$username = $_SESSION['current_user']['username'];
		$myname = $_REQUEST['myname'];
		$email =  $_REQUEST['email'];
		$gender =  $_REQUEST['gender'];
		$dob =  $_REQUEST['dob'];
		
		if($myname == "" or  $email == "" or $gender == "" or $dob=="") 
		{
			echo "Fields cannot be left empty";
		}
		else
		{
			$file = fopen('../model/admin.txt', 'r');
			$tmp = fopen('../Model/tmp.txt', 'w');

			while(!feof($file))
			{
				$get_admin = fgets($file);
				$admin_array = explode('|', $get_admin);
				
				if(isset($admin_array[0]) and trim($admin_array[0]) == $username)
				{
					continue;
				}
				fwrite($tmp, $get_admin);
			}
			$string = $myname."|".$email."|".$gender."|".$dob."\r\n";
			fwrite($tmp, $string);
			fclose($file);
			fclose($tmp);
			$tmpp = fopen('../model/tmp.txt', 'r');
			$file = fopen('../model/admin.txt', 'w');
			$tmp = fread($tmpp, filesize('../model/tmp.txt'));
			fwrite($file, $tmp);
			//$current_user['username'] = $username;
			//$current_user['password'] = $password;
			$current_user['email'] = $email;
			$current_user['myname'] = $myname;
			$current_user['gender'] = $gender;
			$current_user['dob'] = $dob;

			//print_r($current_user);
			$_SESSION['current_user'] = $current_user;
			header('location: ../views/Profile.php');
		}
	}
	else
	{
		echo "Error";
	}
?>