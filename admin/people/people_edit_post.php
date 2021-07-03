<?php

    require '../session.php';
    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id =   $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        if(empty($title) || empty($description)){
            $_SESSION['error'] = "Can not empty!";
            header ('location: people_edit.php');            
        }
        else{

        $update = "UPDATE `people` SET `title` = '$title', `description` = '$description' WHERE `id` = '$id' ";
        $query = mysqli_query($connect, $update);

        if($query){
            $_SESSION['success'] = "Updated Successfull";
            header ('location: people.php');   
        }
        else{
            $_SESSION['error'] = "Failed!";
            header ('location: people_edit.php');   
        }
}
    }