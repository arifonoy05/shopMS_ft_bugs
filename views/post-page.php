<?php
	session_start();
	include_once('../model/db.php');
	if(isset($_SESSION['name'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>

        <!-- css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/alphaq.css">
</head>
<body>
    <?php
        include_once '../control/header.php';
        for($i=0; $i<5; $i++)
        {
            include '../control/posts.php';
        }
    ?>
</body>
</html>
<?php

}
else{
header('location:Login.php');

}
?>