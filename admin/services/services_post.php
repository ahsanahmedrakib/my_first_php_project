<?php

  require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $description = $_POST['description'];

    if($title !='' && $description != ''){
       $insert = "INSERT INTO `services`(`title`,`description`) VALUES ('$title', '$description')";
       $query = mysqli_query($connect, $insert);

    if($query){
      $_SESSION['success'] = "Data Added Successfully";
      header ('location: services.php');
    }
    else{
      $_SESSION['error'] = "Failed!";
      header ('location: services.php');
    }
    }

    else{
      $_SESSION['error'] = "Can not be empty";
      header ('location: services.php');
  }

  }

?>