<?php

    require '../session.php';
    require '../database.php';

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $id =   $_POST['id'];
    $select = "SELECT * FROM `services_content` WHERE id = '$id' ";
    $query = mysqli_query($connect, $select);
    $current = mysqli_fetch_assoc($query);

    




     
        
        $title = $_POST['title'];
        $description = $_POST['description'];

        

    if (isset($_FILES['image']['name']) && isset($_FILES['image']['name']) !== null && !empty($_FILES['image']['name'])) {
        $current_image = $current['image'];
        $fileurl = "../services_content/images/$current_image";
        // echo 'this is if '; exit();
      if (file_exists($fileurl)) 
        {
            unlink($fileurl);
        }

        // for uploading profile picture
        $filename = $_FILES['image']['name'];
        $tempfilename = $_FILES['image']['tmp_name'];
        $expfile = explode('.', $filename);
        $filextension = $expfile[1];
        $file_name = time().rand(0000,9999).'.'.$filextension;
        $filepath = '../services_content/images/'.$file_name;
        move_uploaded_file($tempfilename, $filepath);


        // $image = $base_url.'/'.$photo_upload_dir.$file_name;


        $update = "UPDATE `services_content` SET `title` = '$title', `description` = '$description', `image` = '$file_name' WHERE `id` = '$id' ";
    }else{
                // echo 'this is if else'; exit();

        $update = "UPDATE `services_content` SET `title` = '$title', `description` = '$description' WHERE `id` = '$id' ";
    }
        $query = mysqli_query($connect, $update);

        if($query){
            $_SESSION['success'] = 'Updated Successfully';
            header ('location: services_content.php');
        }
        else{
            echo "Hoy nai";
        }
    

    }