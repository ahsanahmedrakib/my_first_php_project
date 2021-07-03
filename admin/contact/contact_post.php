<?php

  require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $description = $_POST['description'];

    if (intval($title)) {
      $_SESSION['error'] = 'Only Alpahbet allowed !';
      header('location: contact.php');
    }

    else{

    if($title !='' && $description != ''){
       $insert = "INSERT INTO `contact`(`title`,`description`) VALUES ('$title', '$description')";
       $query = mysqli_query($connect, $insert);

    if($query){
        $_SESSION['success'] = "Added Successfull";
        header ('location: contact.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: contact.php');
    }
    }

    else{
        $_SESSION['error'] = "Can not empty!";
        header ('location: contact.php');
  }
  }
  }

?>