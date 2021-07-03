<?php

  require '../session.php';
  require '../database.php';



  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];

    if (intval($title)) {
    $_SESSION['error'] = 'Only Alpahbet allowed !';
    header('location: home.php');
    }
    else{

    if($title !=''){
       $insert = "INSERT INTO `home`(`title`) VALUES ('$title')";
       $query = mysqli_query($connect, $insert);

    if($query){
    
      $_SESSION['success'] = 'Success';
        header('location: home.php');
    }
    else{
      $_SESSION['error'] = 'failed !';
        header('location: home.php');
    }
    }

    else{
        $_SESSION['error'] = 'Can not be empty !';
        header('location: home.php');
  }
}
  }
  

?>