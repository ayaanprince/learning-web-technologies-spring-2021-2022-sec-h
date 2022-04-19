
<?php 
	
	function connection()
	{
		$con = mysqli_connect('localhost', 'root', '', 'e-learningdb');
		return $con;
	}	

	function add($sname,$smail,$scname)
	{
		$conn = connection();
		$sql = "insert into student values ('{$sname}','{$smail}','{$scname}')";
		echo $sql;
		if(mysqli_query($conn,$sql)){
			return true;
		}else{
			return false;
		}

	}	
		function getAllUser(){
		$conn = getConnection();
	}

	function getUserById($id){
		$conn = getConnection();
	}

	function updateUser($user){
		$conn = getConnection();
	}


?>