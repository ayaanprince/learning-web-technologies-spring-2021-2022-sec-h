<?php 

   $unameError = "";
   $username = "";

   if(isset($_REQUEST['submit'])){
      
      if($_REQUEST['username'] == null){
         $unameError = "username is empty....";
      }else{
         $username = $_REQUEST['username'];
         echo "Success";
      }
   }
?>

<html>
<head>
	<title></title>
</head>
<body>
    <form method="POST" action="">
  <tr> 
  	 <td>Name</td><br>
  	 <td><input type="text" name="myname" value=""> </td><br>
     <input type="submit" name="submit" value="Submit">
  </tr>	

</form>
</body>
</html>