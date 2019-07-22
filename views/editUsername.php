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
    <title>Edit Username</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/alphaq.css">
</head>
<body>
    <?php
    include '../control/header.php';
    ?>
    <!-- Profile Section -->
    <section class="edit-username">
        <div class="container">
            <form method="post" action="">
                <table>
                    <tr>
                        <th>Current Username</th>
                        <td><input type="text" placeholder=" Current Username"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>New Username</th>
                        <td><input type="text" placeholder=" New Username"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input id="#sub-btn" type="submit" name="submit" value="Confirm"></td>
                        <td></td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
    <!-- Profile Section -->
</body>
</html>
<?php

}
else{
header('location:Login.php');

}
?>