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
    <title>Profile</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/alphaq.css">
</head>
<body>
    <?php
    include '../control/header.php';
    ?>
    <!-- Profile Section -->
    <section class="profile-section">
        <div class="container">
            <table>
                <tr>
                    <th>Name</th>
                    <td>: Arif Onoy</td>
                    <td></td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>: arifonoy05</td>
                    <td><a href="editUsername.php">Edit</a></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>: arifonoy05@gmail.com</td>
                    <td></td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td>+8801 XXX XXX XXX</td>
                    <td><a href="editContact.php">Edit</a></td>
                </tr>
                <tr>
                    <td><a href="updatePassword.php">Update Password</a></td>
                    <td><a href="balance.php">Show Balance</a></td>
                    <td></td>
                </tr>
            </table>
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