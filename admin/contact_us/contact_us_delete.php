<?php


    require '../session.php';
    require '../database.php';

    $id = $_GET['id'];


    if($_SESSION['type'] =! 1){
        $url = $base_url."page_404.php";
        echo "<script> location.href='".$url."';</script>";
    }
    else{

    $delete = "DELETE FROM `contact_us` WHERE `id` = '$id' ";

    $query = mysqli_query($connect, $delete);

    if($query){
        $_SESSION['success'] = "Deleted Successfull";
        header ('location: contact_us.php');
    }
    else{
        $_SESSION['error'] = "Failed";
        header ('location: contact_us.php');
    }
}