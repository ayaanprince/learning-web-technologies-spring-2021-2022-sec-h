<?php 

   $emailError = "";
   $username = "";

   if(isset($_REQUEST['submit'])){
      
      if($_REQUEST['email'] == null)
      {
         $emailError = "email is empty....";
         echo "Failed";
      }else{
         $username = $_REQUEST['email'];
         echo "Success";
      }
   }
?>