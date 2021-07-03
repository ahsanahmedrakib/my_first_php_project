<?php

  require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $percentage = $_POST['percentage'];

    if (intval($title)) {
      $_SESSION['error'] = 'Only Alpahbet allowed !';
      header('location: skills_content.php');
    }

    else{

    if($title !='' && $percentage != ''){
       $insert = "INSERT INTO `skills_content`(`title`,`percentage`) VALUES ('$title', '$percentage')";
       $query = mysqli_query($connect, $insert);

    if($query){
        $_SESSION['success'] = "Added Successfull";
        header ('location: skills_content.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: skills_content.php');
    }
    }

    else{
        $_SESSION['error'] = "Can not empty!";
        header ('location: skills_content.php');
  }
  }
  }

?>