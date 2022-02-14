<?php 

   $gender= "";
   $male=false;
   $female=false;
   $other=false;

   if(isset($_REQUEST['submit']))
   {
      $gender=$_REQUEST['gender'];
      if($gender=="male") $male=true;
      else if($gender=="female")$female=true;
      else $other=true;
   }
?>

<html>
<head>
   <title></title>
</head>
<body>
    <form method="POST" action="#">
      <fieldset>
      <legend>Gender</legend>
  <tr> 
    <td><br>
            <input type="radio" name="gender" value="<?=$male?>"> Male
            <input type="radio" name="gender" value="<?=$female?>"> Female
            <input type="radio" name="gender" value="<?=$other?>"> Other
      </td><br>
     <input type="submit" name="submit" value="Submit">
  </tr>  
</fieldset>
</form>
</body>
</html>