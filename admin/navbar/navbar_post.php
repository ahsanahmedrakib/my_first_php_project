<?php

  include '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){


  $menu = $_POST["menu"]      ;



if (intval($menu)) {
  $_SESSION['error'] = 'Only Alpahbet allowed !';
  header('location: navbar.php');
}
else{



    if($menu !=''){
       $insert = "INSERT INTO `navbar`(`menu`) VALUES ('$menu')";
       $query = mysqli_query($connect, $insert);

    if($query){
    $_SESSION['success'] = 'Added Succesfull !';
      header ('location: navbar.php');
    }
    else{
        $_SESSION['error'] = 'failed !';
        header('location: navbar.php');
    }
    }

    else{
        $_SESSION['error'] = 'Navbar can not be empty !';
        header('location: navbar.php');
  }
}

  }

?>