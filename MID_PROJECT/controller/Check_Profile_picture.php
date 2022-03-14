<?php 
  session_start();
  if(isset($_REQUEST['submit'])){

    print_r($_FILES['browse']);

    $src = $_FILES['browse']['tmp_name'];
    $temp = explode(".", $_FILES["browse"]["name"]);
    $newfilename = round(microtime(true)). '.' . end($temp);
    if(move_uploaded_file($_FILES["browse"]["tmp_name"], "../views/upload/" . $newfilename)){
      $_SESSION['Adminpic'] = $newfilename;
      header('location: ../views/Profile.php');
    }
    else echo "Error";
    
  }
  else echo "Error";
?>