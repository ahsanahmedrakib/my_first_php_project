      <?php

      require 'database.php';

         // define variables and set to empty values
         $nameErr = $emailErr = $passwordErr = "";
         $name = $email = $password = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];


               if(empty($name)){
               echo "Name den";
               }
               if(empty($email)){
                  echo "Email den";
               }
               if(empty($password)){
                  echo "Password den";
               }
               else{


                $check = "SELECT COUNT(*) as rakib FROM `user` WHERE `email` = '$email' ";
                $query = mysqli_query($connect, $check);
                $after = mysqli_fetch_assoc($query);
                if($after['rakib'] == 1){
                    $emailErr = "Email already exist"; 
                }
                else{








                    $insert = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
                    $query = mysqli_query($connect, $insert);

                    if($query){
                        header ('location: login.php');
                    }
                    else{
                        echo "Hoy nai";
                    }

                }

               }

            
           
         }





         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
?>



<?php
        // require 'database.php';

        // if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //     $name = $_POST['name'];
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];

        //     if(empty($name)){
        //         echo "Nam den"."<br>";
        //     }
        //     if(empty($email)){
        //         echo "Mail den"."<br>";
        //     }
        //     if(empty($password)){
        //         echo "Password den"."<br>";
        //     }
            
        //         $check = "SELECT COUNT(*) as rakib FROM `users` WHERE `email` = '$email' ";
        //         $query = mysqli_query($connect, $check);
        //         $after = mysqli_fetch_assoc($query);
        //         if($after['rakib'] == 1){
        //             echo "Email already exist";
        //         }
        //         else{

        //             $insert = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        //             $query = mysqli_query($connect, $insert);

        //             if($query){
        //                 header ('location: login.php');
        //             }
        //             else{
        //                 echo "Hoy nai";
        //             }

        //         }
            


        // }