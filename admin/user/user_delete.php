<?php


    require '../session.php';
    require '../database.php';

    if($_SESSION['type'] =! 1){
        $url = $base_url."page_404.php";
        echo "<script> location.href='".$url."';</script>";
    }
    else{


    $id = $_GET['id'];

    $sql = "select * from user where id = $id";

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

  



    $delete = "DELETE FROM `user` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $delete);

    if($query){
        $_SESSION['success'] = "Deleted Successfully";
        header ('location: user.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: user.php');
    }
}