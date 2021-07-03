<?php

   require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if (empty($_FILES['image']['name'])) {
       $_SESSION['error'] = 'Empty !';
         header ('location: portfolio_content.php');
      }


    $image = $_FILES['image'];
    $title = $_POST['title'];
    $url = $_POST['url'];
    $class = $_POST['class'];

    $afterexplode = explode('.',$image['name']);
    $extention = $afterexplode[1];
    $format = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');

    if(in_array($extention, $format)){

      if($image['size'] < 500000){

            if($title!='' && $url!='' && $class){

                      $insert = "INSERT INTO `portfolio_content`(`title`,`url`,`class`) VALUES ('$title','$url', '$class')";
                      $query = mysqli_query($connect, $insert);

                      $id = mysqli_insert_id($connect);
                      $newfilename = $id.'.'.$extention;
                      $newfilelocation = 'images/'.$newfilename;
                      move_uploaded_file($image['tmp_name'], $newfilelocation);

                      $update = "UPDATE `portfolio_content` SET image = '$newfilename' WHERE id = '$id'";

                      if(mysqli_query($connect, $update)){
                      $_SESSION['success'] = 'Added Successfully';
                      header ('location: portfolio_content.php');
           
                      }
                      else{
                         $_SESSION['error'] = 'Add failed !';
                         header ('location: portfolio_content.php');
                      }
                    }
                    else{
                       $_SESSION['error'] = 'Can not empty !';
                         header ('location: portfolio_content.php');
                    }


      }
      else{
        $_SESSION['error'] = 'Size not allow !';
         header ('location: portfolio_content.php');
      }

 
    }

    else{
         $_SESSION['error'] = 'Invalid format!';
         header ('location: portfolio_content.php');
  }

  }

?>