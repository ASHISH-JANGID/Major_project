<?php
	session_start();
	unset($_SESSION['email']);
          //echo "logged_out";
          header("Location: ../index.php");


?>
