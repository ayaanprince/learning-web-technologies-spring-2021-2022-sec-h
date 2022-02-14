<?php 

   $myname = "";
   

   if(isset($_REQUEST['submit'])){
      
      $myname=$_REQUEST['myname'];

   }
?>

<html>
<head>
   <title></title>
</head>
<body>
    <form method="POST" action="#">
  <tr> 
    <td>Name</td><br>
    <td><input type="text" name="myname" value="<?=$myname?>"> </td><br>
     <input type="submit" name="submit" value="Submit">
  </tr>  

</form>
</body>
</html>