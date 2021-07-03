<?php

    session_start();

    require '../database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // if(empty($email)){
        //     echo "Email den";
        // }
        // if(empty($password))
        //     echo "Password den";
        // }

        if($email !='' && $password != ''){

                    $select = "SELECT * FROM user WHERE email='$email' AND password='$password'";

                    $query = mysqli_query($connect, $select);
                    $after = mysqli_fetch_assoc($query);
                
                
                    if($after != false){

                        $_SESSION['id'] = $after['id'];
                        $_SESSION['name'] = $after['name'];
                        $_SESSION['email'] = $after['email'];
                        $_SESSION['image'] = $after['image'];
                        $_SESSION['type'] = $after['type'];


                        if($_SESSION['type'] != 1) {
                            header('location: ../navbar/navbar.php');
                        }
                        else{
                            header('location: ../user/user.php');
                        }
                    }
                    else{
                        $emailErr = "Wrong email or password";
                        include 'login.php';
                    }
                }
                else{
                    $emailErr = "Please insert your email";
                    include 'login.php';
                }
    }

?>