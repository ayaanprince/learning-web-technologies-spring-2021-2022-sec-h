<html>
<head>
	<title>Adding Teacher Page </title>
	<table border = "1px" width = "100%"> 
		<tr>
			<td> 
				<h2 align="center"> E-Learing </h2> 
				<h5 align = "right">
				<a href="Homepage.php"> Home|</a> <a href="Login_page.php"> Login|</a> <a href="Registration.php"> Registration|</a><a href="Logout.php"> Logout</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table border = "2px" height = "60%" width = "100%" shade = "noshade">
		<tr align = "center">
			<form method="POST" action="../controller/Add_teacher_Validate.php">
				<h2 align = "center"> Add Teacher </h2>						
  	            <tr >
				<td>Name </td>
				<td>: <input type="text" name="tname" value=""> </td>
				</tr>
				<td>G-mail </td>
				<td>: <input type="text" name="tmail" value=""> </td>
				</tr>	
				<td>Course Name </td>
				<td>: <input type="text" name="tcname" value="">
				<input type="submit" name="submit" value="Submit">
				 </td>
				</tr>	
				<a href = "Add_teacher.php">  </a>			
		</tr>
	</table>
	<table width = "100%" border = "1px">
		<tr height = "50px">
			<td align = "center"> Copyright @ <h align="center">www.facebook.com/e-learing </h>	
			 </td>


		</tr>
	</table>
</body>
</html>