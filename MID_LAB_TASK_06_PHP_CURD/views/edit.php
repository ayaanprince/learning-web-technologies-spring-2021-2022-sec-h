<?php 

	$id =  $_GET['id'];
	$file = fopen('../model/user.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[0]) == $id){
			$editUser = $userArray;
			break;
		}
	}
?>

<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<a href="home.php"> Back </a> |
	<a href="../controller/logout.php"> Logout </a>

	<form method="POST" action="">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$editUser[1]?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$editUser[2]?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?=$editUser[3]?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>