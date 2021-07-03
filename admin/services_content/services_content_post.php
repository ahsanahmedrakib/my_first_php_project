<?php

  require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (empty($_FILES['image']['name'])) {
       $_SESSION['error'] = 'Empty !';
         header ('location: services_content.php');
    }

    $image = $_FILES['image'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $afterexplode = explode('.',$image['name']);
    $extention = $afterexplode[1];
    $format = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');

    if(in_array($extention, $format)){

      if($image['size'] < 500000){

            if($title!='' && $description!=''){

            

                      $insert = "INSERT INTO `services_content`(`title`,`description`) VALUES ('$title', '$description')";
                      $query = mysqli_query($connect, $insert);

                      $id = mysqli_insert_id($connect);
                      $newfilename = $id.'.'.$extention;
                      $newfilelocation = '../services_content/images/'.$newfilename;
                      move_uploaded_file($image['tmp_name'], $newfilelocation);

                      $update = "UPDATE `services_content` SET image = '$newfilename' WHERE id = '$id'";
                      if(mysqli_query($connect, $update)){
                        $_SESSION['success'] = 'Added Successfull';
                        header ('location: services_content.php');
                      }
                      else{
                         $_SESSION['error'] = 'Add failed !';
                         header ('location: services_content.php');
                      }
                  }
                  else{
                        $_SESSION['error'] = 'Can not empty !';
                         header ('location: services_content.php');
                  }
      
      
                    }
      else{ 
        $_SESSION['error'] = 'Size not allow !';
         header ('location: services_content.php');
      }

 
    }

    else{
         $_SESSION['error'] = 'Invalid format!';
         header ('location: services_content.php');
  }

  }

?>