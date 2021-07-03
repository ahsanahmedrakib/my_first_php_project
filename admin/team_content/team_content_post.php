<?php

   require '../session.php';
  require '../database.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

      if (empty($_FILES['image']['name'])) {
       $_SESSION['error'] = 'Empty !';
         header ('location: team_content.php');
      }


    $image = $_FILES['image'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $description = $_POST['description'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linked_in = $_POST['linked_in'];
    $email = $_POST['email'];

    $afterexplode = explode('.',$image['name']);
    $extention = $afterexplode[1];
    $format = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');

    if(in_array($extention, $format)){

      if($image['size'] < 500000){


              if($name!='' && $designation != '' && $description!=''){

                      $insert = "INSERT INTO `team_content`(`name`,`designation`,`description`,`facebook`,`twitter`,`linked_in`,`email`) VALUES ('$name','$designation', '$description', '$facebook', '$twitter', '$linked_in', '$email')";
                      $query = mysqli_query($connect, $insert);

                      $id = mysqli_insert_id($connect);
                      $newfilename = $id.'.'.$extention;
                      $newfilelocation = 'images/'.$newfilename;
                      move_uploaded_file($image['tmp_name'], $newfilelocation);

                      $update = "UPDATE `team_content` SET image = '$newfilename' WHERE id = '$id'";

                      if(mysqli_query($connect, $update)){
                      $_SESSION['success'] = 'Added Successfully';
                      header ('location: team_content.php');
           
                      }
                      else{
                         $_SESSION['error'] = 'Add failed !';
                         header ('location: team_content.php');
                      }
                        }
                        else{
                          $_SESSION['error'] = 'Can not empty !';
                         header ('location: team_content.php');
                        }


      }
      else{
        $_SESSION['error'] = 'Size not allow !';
         header ('location: team_content.php');
      }

 
    }

    else{
         $_SESSION['error'] = 'Invalid format!';
         header ('location: team_content.php');
  }

  }

?>