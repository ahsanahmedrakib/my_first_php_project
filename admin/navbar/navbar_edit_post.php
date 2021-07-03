<?php

    require '../session.php';
    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id =   $_POST['id'];
        $menu = $_POST['menu'];
        if(!empty($menu)){
        $update = "UPDATE `navbar` SET `menu` = '$menu' WHERE `id` = '$id' ";
        $query = mysqli_query($connect, $update);

        if($query){
            $_SESSION['success'] = "Updated Succesffuly";
            header ('location: navbar.php');
        }
        else{
            $_SESSION['error'] = "Failed!";
            header ('location: navbar.php');
        }
        }
        else{
            $_SESSION['error'] = "Can not empty!";
            header ('location: navbar.php');
        }

    }