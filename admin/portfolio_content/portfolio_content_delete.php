<?php


    require '../session.php';
    require '../database.php';

    if($_SESSION['type'] =! 1){
        $url = $base_url."page_404.php";
        echo "<script> location.href='".$url."';</script>";
    }
    else{

    $id = $_GET['id'];

    $sql = "select * from portfolio_content where id = $id";

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

  



    $delete = "DELETE FROM `portfolio_content` WHERE `id` = '$id' ";
    $query = mysqli_query($connect, $delete);

    if($query){
        $_SESSION['success'] = "Deleted Successfully";
        header ('location: portfolio_content.php');
    }
    else{
        $_SESSION['error'] = "Failed!";
        header ('location: portfolio_content.php');
    }
}