<?php
    session_start();
    include_once('../model/db.php');

    if(isset($_REQUEST['submit']))
    {

        $name = trim($_REQUEST['uname']);
        $pass = trim($_REQUEST['pass']);
        
        if($name == ""){
            echo "invalid or empty name..<br>";
        }else if($pass == ""){
            echo "invalid or empty password..";
        }else{
            
            $conn = getConnection();
            $sql = "select * from users where username='".$name."' and password='".$pass."'";
            $result = mysqli_query($conn, $sql);
           
            
            $count = mysqli_num_rows($result);
            mysqli_close($conn);
    
            if($count > 0 ){

                $_SESSION['name'] = $name;
                header('location: ../views/home.php');
            }else{
                echo "invalid username/password.";
            }
        }

    }else{
        header('location: ../views/login.php');
        //echo "Invalid request!";
    }
?>
