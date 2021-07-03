<?php

    require '../session.php';
    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id =   $_POST['id'];
        $title = $_POST['title'];

        $update = "UPDATE `home` SET `title` = '$title' WHERE `id` = '$id' ";
        $query = mysqli_query($connect, $update);

        if($query){
            $_SESSION['success'] = 'Update Successfull';
            header ('location: home.php');
        }
        else{
            $_SESSION['error'] = 'Update failed!';
            echo "Hoy nai";
        }

    }