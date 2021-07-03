<?php

  require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

 
        $title = $_POST['title'];
        $link = $_POST['link'];

    if (intval($facebook)) {
      $_SESSION['error'] = 'Only Alpahbet allowed !';
      header('location: footer.php');
    }

    else{

    if($title !='' && $link!=''){
       $insert = "INSERT INTO `footer`(`title`,`link`) VALUES ('$title', '$link')";
       $query = mysqli_query($connect, $insert);

    if($query){
        $_SESSION['success'] = "Added Successfull";
        header ('location: footer.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: footer.php');
    }
    }

    else{
        $_SESSION['error'] = "Can not empty!";
        header ('location: footer.php');
  }
  }
  }

?>