<?php 

   $dobError = "";
   $username = "";

   if(isset($_REQUEST['submit'])){
      
      if($_REQUEST['dob'] == null)
      {
         $dobError = "dob is empty....";
         echo "Failed";
      }else{
         $username = $_REQUEST['dob'];
         echo "Success";
      }
   }
?>