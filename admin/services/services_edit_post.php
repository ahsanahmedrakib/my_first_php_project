<?php

    require '../session.php';
    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id =   $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

    if($title !='' && $description != ''){
        $update = "UPDATE `services` SET `title` = '$title', `description` = '$description' WHERE `id` = '$id' ";
        $query = mysqli_query($connect, $update);


        if($query){
      $_SESSION['success'] = "Data Updated Successfully";
            header ('location: services.php');
        }
        else{
      $_SESSION['error'] = "Failed!";
      header ('location: services.php');
        }
    }
    else{
      $_SESSION['error'] = "Can not be empty!";
      header ('location: services.php');
    }


    }