

<?php

    $host_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "cuda";


    $connect = mysqli_connect("$host_name", "$username", "$password", "$database_name");

        if($connect){
           
        }
        else{
            echo "Unsuccessfull Database!";
        }