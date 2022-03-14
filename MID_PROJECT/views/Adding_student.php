<html>
<head>
	<title>Adding Student Page </title>
	<table border = "1px" width = "100%"> 
		<tr>
			<td> 
				<h2 align="center"> E-Learing </h2> 
				<h5 align = "right">
				<a href="Homepage.php"> Home|</a> <a href="Login_page.php"> Login|</a> <a href="Registration.php"> Registration</a> 
				</h5> 
			</td>
		</tr>
	</table>
</head>
<body>
	<table border = "2px" height = "60%" width = "100%" shade = "noshade">
		<tr align = "center">
			<form method="POST" action="../controller/Add_student_Validate.php">			
				<h2 align = "center"> Add Student </h2>			
  	            <tr >
				<td>Name </td>
				<td>: <input type="text" name="sname" value=""> </td>
				</tr>
				<td>G-mail </td>
				<td>: <input type="text" name="smail" value=""> </td>
				</tr>	
				<td>Course Name </td>
				<td>: <input type="text" name="scname" value="">
				<input type="submit" name="submit" value="Submit"> </td>

				</tr>
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