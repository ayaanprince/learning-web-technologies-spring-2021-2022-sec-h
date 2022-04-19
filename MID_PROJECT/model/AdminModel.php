<?php 
	//session_start();
	function connection()
	{
		$con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
		return $con;
	}
	function login($username, $password)
	{
		//echo "here";
		$con = connection();
		//echo $con;
		$sql = "select * from admin where Username = '{$username}' and Password = '{$password}'";
		//echo $sql;
		$res = mysqli_query($con, $sql);
		//print_r(mysqli_num_rows($res));
		if(mysqli_num_rows($res))
		{
		    //echo "here"; 
			while($row = mysqli_fetch_assoc($res))
			{
				if($username == $row['Username'] and $password == $row['Password'])
				{
					//$_SESSION['id'] = $row['adminid'];
					$_SESSION['current_userid'] = $row['adminid'];
					//print_r($row);
					//echo "here";
					return true;
				}
			}
		}
		return false;
	}
		

	function signup($name, $username, $email, $password,$confirm, $gender, $dob){
		$con = connection();
		$ssql = "select * from admin";
		$id = 1;
		$res = mysqli_query($con, $ssql);
		if(mysqli_num_rows($res)){
			while($row = mysqli_fetch_assoc($res)){
				$temp = $row['adminid'];
				$id = max($id, $temp);
				//print_r($row);
			}
			$id += 1;
		}
		$sql = "insert into admin values ('{$id}','{$name}','{$email}','{$username}','{$password}','{$gender}','{$dob}')";
		if(mysqli_query($con, $sql))
		{
			return true;
		}else{
			return false;
		}
	}


?>