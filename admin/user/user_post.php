<?php

   require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if (empty($_FILES['image']['name'])) {
       $_SESSION['error'] = 'Empty !';
         header ('location: user.php');
      }


    $image = $_FILES['image'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $afterexplode = explode('.',$image['name']);
    $extention = $afterexplode[1];
    $format = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');

    if(in_array($extention, $format)){

      if($image['size'] < 500000){

                      $insert = "INSERT INTO `user`(`name`,`email`,`password`,`type`) VALUES ('$name','$email', '$password', '$type')";
                      $query = mysqli_query($connect, $insert);

                      $id = mysqli_insert_id($connect);
                      $newfilename = $id.'.'.$extention;
                      $newfilelocation = 'images/'.$newfilename;
                      move_uploaded_file($image['tmp_name'], $newfilelocation);

                      $update = "UPDATE `user` SET image = '$newfilename' WHERE id = '$id'";

                      if(mysqli_query($connect, $update)){
                      $_SESSION['success'] = 'Added Successfully';
                      header ('location: user.php');
           
                      }
                      else{
                         $_SESSION['error'] = 'Add failed !';
                         header ('location: user.php');
                      }
      }
      else{
        $_SESSION['error'] = 'Size not allow !';
         header ('location: user.php');
      }

 
    }

    else{
         $_SESSION['error'] = 'Invalid format!';
         header ('location: team_content.php');
  }

  }

?>