<?php

    require '../session.php';
    require '../database.php';

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $id =   $_POST['id'];
    $select = "SELECT * FROM `user` WHERE id = '$id' ";
    $query = mysqli_query($connect, $select);
    $current = mysqli_fetch_assoc($query);

    




     
        
       
    $image = $_FILES['image'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


        

    if (isset($_FILES['image']['name']) && isset($_FILES['image']['name']) !== null && !empty($_FILES['image']['name'])) {
        $current_image = $current['image'];
        $fileurl = "images/$current_image";
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
        $filepath = 'images/'.$file_name;
        move_uploaded_file($tempfilename, $filepath);


        // $image = $base_url.'/'.$photo_upload_dir.$file_name;


        $update = "UPDATE `user` SET `name` = '$name', `password` = '$password',`email` = '$email', `image` = '$file_name' WHERE `id` = '$id' ";
        $_SESSION['name'] = $name;
        $_SESSION['image'] = $file_name;
    }else{
                // echo 'this is if else'; exit();

        $update = "UPDATE `user` SET `name` = '$name', `password` = '$password',`email` = '$email' WHERE `id` = '$id' ";
    }
        $query = mysqli_query($connect, $update);

        if($query){
           $_SESSION['success'] = 'Updated Successfully';
           header ('location: user.php');
        }
        else{
                      $_SESSION['error'] = 'Update Failed';
        }
    

    }