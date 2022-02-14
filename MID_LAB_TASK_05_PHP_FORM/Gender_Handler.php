<?php 

   $genderError = "";
   $gender = "";

   if(isset($_REQUEST['submit'])){
      
      if($_REQUEST['gender'] == null)
      {
         $genderError = "gender is empty....";
         echo "Failed";
      }else{
         $gender = $_REQUEST['gender'];
         echo "Success";
      }
   }
?>