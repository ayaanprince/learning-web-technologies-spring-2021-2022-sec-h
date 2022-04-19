<?php 
	session_start();
	require('../model/AdminModel.php');

	if(isset($_REQUEST['submit']))
	{
		//print_r($_REQUEST);
		$username = $_REQUEST['username'];
		//print_r($username);
		$password = $_REQUEST['password'];
		//print_r($password);
		if($username != null and $password != null)
		{
			if(login($username, $password)){
				//print_r($username);
                $con = connection();
				$sql = "select * from admin where Username = '{$username}' and Password = '{$password}'";
				$res = mysqli_query($con, $sql);
				$adminid;
				if(mysqli_num_rows($res))
				{
					while($row = mysqli_fetch_assoc($res))
					{
						if($username == $row['Username'] and $password == $row['Password'])
						{
							$adminid = $row['adminid'];
							$_SESSION['current_adminid'] = $adminid;
							break;
						}
					}
				}
				header('location:../views/Dashboard.php');
			}		
				  else{
				   echo "Please insert username and password";
	            }
	            //else echo "Error";
        }
    }    
        
	
?>