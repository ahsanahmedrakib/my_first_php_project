<?php



    require '../session.php';
    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // $logo = $_FILES['logo'];

         if (empty($_FILES['logo']['name'])) {
       $_SESSION['error'] = 'Empty !';
         header ('location: logo.php');
    }

        $afterExplode = explode('.', $logo['name']);

        $extension = $afterExplode[1];

        $format = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');

        if(in_array($extension, $format)){
            
            if($logo['size'] < 5000000){

                

               $insert_data= "INSERT INTO `logo`(`name`) VALUES ('$name')";
               $query=mysqli_query($connect, $insert_data);

                $id = mysqli_insert_id($connect);
                $new_file_name = $id.'.'.$extension;
                $new_file_location = 'logo/'.$new_file_name;
                move_uploaded_file($logo['tmp_name'], $new_file_location);

                $update = "UPDATE `logo` SET logo = '$new_file_name' WHERE id = $id";
                if(mysqli_query($connect, $update)){
                    $_SESSION['success'] = 'Logo Added Successfully';
                    header ('location: logo.php');
                }
                else{
                    $_SESSION['error'] = 'Failed!';
                    header ('location: logo.php');
                }

            }
            else{
                    $_SESSION['error'] = 'Size not allow!';
                    header ('location: logo.php');
            }

        }
        else{
                    $_SESSION['error'] = 'Invalid Format!';
                    header ('location: logo.php');
        }

    }