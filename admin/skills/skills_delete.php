<?php


    require '../session.php';
    require '../database.php';

    if($_SESSION['type'] =! 1){
        $url = $base_url."page_404.php";
        echo "<script> location.href='".$url."';</script>";
    }
    else{


    $id = $_GET['id'];

    $delete = "DELETE FROM `skills` WHERE `id` = '$id' ";

    $query = mysqli_query($connect, $delete);

    if($query){
        $_SESSION['success'] = "Deleted Successfull";
        header ('location: skills.php');
    }
    else{
        $_SESSION['error'] = "Failed";
        header ('location: skills.php');
    }
}