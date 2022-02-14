<?php 

   $email = "";
  

   if(isset($_REQUEST['submit'])){
      
      $email =$_REQUEST['email'];

   }
?>

<html>
<head>
   <title></title>
</head>
<body>
    <form method="POST" action="#">
  <tr> 
    <td>Email</td><br>
    <td><input type="email" name="email" value="<?=$email?>"> </td><br>
     <input type="submit" name="submit" value="Submit">
  </tr>  

</form>
</body>
</html>