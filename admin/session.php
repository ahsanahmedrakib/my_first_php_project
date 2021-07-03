<?php
	session_start();

	if (!isset($_SESSION['id'])) {
		header('location: http://localhost/cuda/admin/login/login.php');
	}

?>