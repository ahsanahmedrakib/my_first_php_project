<?php

    require '../session.php';
    require '../database.php';

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $id =   $_POST['id'];
    $select = "SELECT * FROM `team_content` WHERE id = '$id' ";
    $query = mysqli_query($connect, $select);
    $current = mysqli_fetch_assoc($query);

 
       
    $image = $_FILES['image'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $description = $_POST['description'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linked_in = $_POST['linked_in'];
    $email = $_POST['email'];


        

    if (isset($_FILES['image']['name']) && isset($_FILES['image']['name']) !== null && !empty($_FILES['image']['name'])) {
        $current_image = $current['image'];
        $fileurl = "images/$current_image";

        
    

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


        $update = "UPDATE `team_content` SET `name` = '$name', `designation` = '$designation',`description` = '$description',`facebook` = '$facebook',`twitter` = '$twitter',`linked_in` = '$linked_in',`email` = '$email', `image` = '$file_name' WHERE `id` = '$id' ";
    }
    else{
                

        $update = "UPDATE `team_content` SET `name` = '$name', `designation` = '$designation',`description` = '$description',`facebook` = '$facebook',`twitter` = '$twitter',`linked_in` = '$linked_in',`email` = '$email' WHERE `id` = '$id' ";
    }
        $query = mysqli_query($connect, $update);

        if($query){
           $_SESSION['success'] = 'Updated Successfully';
           header ('location: team_content.php');
        }
        else{
                      $_SESSION['error'] = 'Update Failed';
        }
    

    }