<?php

    require '../database.php';

        $id = $_GET['id'];

        $update = "UPDATE contact_us SET status = 1 WHERE id = $id ";
        $query = mysqli_query($connect, $update);

        if($query){
            header ('location: contact_us.php');
        }


?>