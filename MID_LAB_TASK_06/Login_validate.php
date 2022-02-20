<?php 


	session_start();
	$username = "";
	$password = "";
	$current_user = [
				'myname'=> "",'email'=>"",'username'=>"",'password'=>"",'confirm'=>"",'gender'=>"",'dob'=>""
	];
	$_SESSION['current_user'] = $current_user;
	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		if(isset($_SESSION['users'])){
			$users = $_SESSION['users'];
		}
		if(isset($users) and $username != null && $password != null){
			$okay = false;
			for($i = 0;$i < count($users);$i++)
			{
				 if (isset($users[$i])) {
			       	$user = $users[$i];
			       	$temp_username = $user['username'];
			       	$pass = $user['password'];			       	
			       	if($temp_username == $username and $pass == $password)
			       	{
			       		$okay = true;
			       		$current_user = [
							'myname'=> $users[$i]['myname'],
							'email'=>$users[$i]['email'],
							'username'=>$users[$i]['username'],
							'password'=>$users[$i]['password'],
							'gender'=>$users[$i]['gender'],
							'dob'=>$users[$i]['dob']
						];
						$_SESSION['current_user'] = $current_user;
			       		break;
			       	}
			    } 
			}
			if($okay)
			{
				$_SESSION['status'] = 'true'; 

				header('location: Dashboard.php');
			}
			else
			{
				echo "Invalid username or password";
			}
		}
		else
		{
			echo "Invalid submission";
		}
	}
?>