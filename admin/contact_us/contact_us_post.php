<?php



  require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];





    if($name !='' && $email != ''){
       $insert = "INSERT INTO `contact_us`(`name`,`email`,`message`) VALUES ('$name', '$email', '$message')";
       $query = mysqli_query($connect, $insert);

       

    if($query != false){
        $_SESSION['success'] = "Added Successfull";
        header ('location: ../../index.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: ../../index.php');
    }
    }

    else{
        $_SESSION['error'] = "Can not empty!";
        header ('location: ../../index.php');
  }
  
  }

?>