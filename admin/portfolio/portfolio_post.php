<?php

  require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $description = $_POST['description'];

    if (intval($title)) {
      $_SESSION['error'] = 'Only Alpahbet allowed !';
      header('location: portfolio.php');
    }

    else{

    if($title !='' && $description != ''){
       $insert = "INSERT INTO `portfolio`(`title`,`description`) VALUES ('$title', '$description')";
       $query = mysqli_query($connect, $insert);

    if($query){
        $_SESSION['success'] = "Added Successfull";
        header ('location: portfolio.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: portfolio.php');
    }
    }

    else{
        $_SESSION['error'] = "Can not empty!";
        header ('location: portfolio.php');
  }
  }
  }

?>