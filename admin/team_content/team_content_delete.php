<?php


    require '../session.php';
    require '../database.php';

    $id = $_GET['id'];

    $sql = "select * from team_content where id = $id";

    $result = mysqli_query($connect, $sql);

    if ($result != false) {
       $data =  $result->fetch_assoc();
       $current_image = $data['image'];
       $fileurl = "images/$current_image";

    


      if (file_exists($fileurl)) 
        {
            unlink($fileurl);
        }
     
    }

  



    $delete = "DELETE FROM `team_content` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $delete);

    if($query){
        $_SESSION['success'] = "Deleted Successfully";
        header ('location: team_content.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: team_content.php');
    }