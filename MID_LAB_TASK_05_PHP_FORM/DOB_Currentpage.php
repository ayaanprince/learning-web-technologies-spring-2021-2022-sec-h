<?php 

   $dob = "";

   if(isset($_REQUEST['submit'])){
      
      $dob=$_REQUEST['dob'];

   }
?>

<html>
<head>
   <title></title>
</head>
<body>
    <form method="POST" action="#">
      <fieldset>
      <legend>Date of Birth</legend>
  <tr> 
    <td><br>
          <td><input type="date" name="dob" value="<?=$dob?>"> </td><br>
          <hr></hr>
     <input type="submit" name="submit" value="Submit">
  </tr>  
</fieldset>
</form>
</body>
</html>