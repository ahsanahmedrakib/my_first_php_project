<?php

    require '../session.php';
    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id =   $_POST['id'];
        $title = $_POST['title'];
        $percentage = $_POST['percentage'];

        if(empty($title) || empty($percentage)){
            $_SESSION['error'] = "Can not empty!";
            header ('location: skills_content_edit.php');            
        }
        else{

        $update = "UPDATE `skills_content` SET `title` = '$title', `description` = '$percentage' WHERE `id` = '$id' ";
        $query = mysqli_query($connect, $update);

        if($query){
            $_SESSION['success'] = "Updated Successfull";
            header ('location: skills_content.php');   
        }
        else{
            $_SESSION['error'] = "Failed!";
            header ('location: skills_content_edit.php');   
        }
}
    }