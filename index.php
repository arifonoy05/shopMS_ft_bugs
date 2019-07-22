<?php
	session_start();
	include_once('db.php');
	if(isset($_SESSION['name'])){
        header("location: views/home.php");
    }
    else{
        header("location: views/login.php");
    }
?>