<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: login.php');
	}
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome home!</h1> 

	<a href="create.php"> Create New User </a> |
	<a href="userlist.php"> Userlist </a> |
	<a href="../controller/logout.php"> Logout </a>
	
</body>
</html>