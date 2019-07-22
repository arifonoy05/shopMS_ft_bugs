<?php
session_start();
include_once('../model/dp.php');

if (isset($_REQUEST['submit'])) {
    $name = trim($_REQUEST['uname']);
    $pass = trim($_REQUEST['pass']);
    $email = trim($_REQUEST['email']);

    $con = getConnection();

    if ($name == "") {
        echo "empty name entered, try again";
    }
    else if( $pass == ""){
        echo "password is empty, try again";
    }
    else if( $email == ""){
        echo "empty email";
    }
    else {
        $sql = "insert into users(username, password, email)values('$name','$pass','$email')";

        $query = mysqli_query($con, $sql);

        if ($query) {
            header('location: ../views/Login.php');
        }
    }
} else {

    header('loaction: ../views/register.php');
}
