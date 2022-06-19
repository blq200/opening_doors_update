<?php

@include 'config.php';
// session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h3> Hi, <span>Admin</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['admin_name']?></span></h1>
            <p>this is an admin page</p>
            <a href="login_form.php" class="btn">Log In</a>
            <a href="signup_form.php" class="btn">Sign Up</a>
            <a href="logout.php" class="btn">Log Out</a>

        </div>

    </div>
</body>
</html>