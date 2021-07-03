<?php

    require '../session.php';
    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id =   $_POST['id'];
        $title = $_POST['title'];
        $link = $_POST['link'];

     
        $update = "UPDATE `footer` SET `title` = '$title', `link` = '$link' WHERE `id` = '$id' ";
        $query = mysqli_query($connect, $update);

        if($query){
            $_SESSION['success'] = "Updated Successfull";
            header ('location: footer.php');   
        }
        else{
            $_SESSION['error'] = "Failed!";
            header ('location: footer.php');   
        }

    }