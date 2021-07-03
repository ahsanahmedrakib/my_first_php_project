<?php

   require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if (empty($_FILES['image']['name'])) {
       $_SESSION['error'] = 'Empty !';
         header ('location: people_content.php');
      }


    $image = $_FILES['image'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];

    $afterexplode = explode('.',$image['name']);
    $extention = $afterexplode[1];
    $format = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');

    if(in_array($extention, $format)){

      if($image['size'] < 500000){

            if($description!='' && $name!='' && $designation!=''){

                      $insert = "INSERT INTO `people_content`(`name`,`designation`,`description`) VALUES ('$name','$designation', '$description')";
                      $query = mysqli_query($connect, $insert);

                      $id = mysqli_insert_id($connect);
                      $newfilename = $id.'.'.$extention;
                      $newfilelocation = 'images/'.$newfilename;
                      move_uploaded_file($image['tmp_name'], $newfilelocation);

                      $update = "UPDATE `people_content` SET image = '$newfilename' WHERE id = '$id'";

                      if(mysqli_query($connect, $update)){
                      $_SESSION['success'] = 'Added Successfully';
                      header ('location: people_content.php');
           
                      }
                      else{
                         $_SESSION['error'] = 'Add failed !';
                         header ('location: people_content.php');
                      }
                    }
                      else{
                          $_SESSION['error'] = 'Can not empty';
                          header ('location: people_content.php');
                      }
      }
      else{
        $_SESSION['error'] = 'Size not allow !';
         header ('location: people_content.php');
      }

 
    }

    else{
         $_SESSION['error'] = 'Invalid format!';
         header ('location: people_content.php');
  }

  }

?>