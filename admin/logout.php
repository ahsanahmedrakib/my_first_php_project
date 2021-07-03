
<?php 
    require 'database.php';
    require 'session.php';

    session_destroy();
    header('location:login/login.php');
 ?>