<?php 

   $unameError = "";
   $username = "";

   if(isset($_REQUEST['submit'])){
      
      if($_REQUEST['myname'] == null)
      {
         $unameError = "myname is empty....";
         echo "Failed";
      }else{
         $username = $_REQUEST['myname'];
         echo "Success";
      }
   }
?>