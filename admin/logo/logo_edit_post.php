<?php

    require '../session.php';
    require '../database.php';

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $id =   $_POST['id'];
    $select = "SELECT * FROM `logo` WHERE id = '$id' ";
    $query = mysqli_query($connect, $select);
    $current = mysqli_fetch_assoc($query);



        

    if (isset($_FILES['logo']['name']) && isset($_FILES['logo']['name']) !== null && !empty($_FILES['logo']['name'])) {
        $current_image = $current['logo'];
        $fileurl = "logo/$current_image";
        // echo 'this is if '; exit();
      if (file_exists($fileurl)) 
        {
            unlink($fileurl);
        }

        // for uploading profile picture
        $filename = $_FILES['logo']['name'];
        $tempfilename = $_FILES['logo']['tmp_name'];
        $expfile = explode('.', $filename);
        $filextension = $expfile[1];
        $file_name = time().rand(0000,9999).'.'.$filextension;
        $filepath = 'logo/'.$file_name;
        move_uploaded_file($tempfilename, $filepath);


        // $image = $base_url.'/'.$photo_upload_dir.$file_name;


        $update = "UPDATE `logo` SET `logo` = '$file_name' WHERE `id` = '$id' ";
    }else{
                // echo 'this is if else'; exit();

        $update = "UPDATE `logo` SET  WHERE `id` = '$id' ";
    }
        $query = mysqli_query($connect, $update);

        if($query){
           $_SESSION['success'] = 'Updated Successfully';
                    header ('location: logo.php');
        }
        else{
            $_SESSION['error'] = 'Failed!';
                    header ('location: logo.php');
        }
    

    }