<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/signup.css">
    <title>HealthyGo</title>
    <link rel="shortcut icon" type="image/jpg" href="./image/favicon.ico"/>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="./image/logo.jpg" alt="Logo" id="login-logo" />
        </div>
        <div class="header">
            <h2>Add Admin</h2>
            <a href="dashboard.php" class="sign-in"><h3 class="text-color">Go back to dashboard </h3></a> 
        </div>
        <form id="form" action="signup.php" method="post" class="form">
            <?php //include('errors.php'); ?> 
            <div class="form-control">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter username..." id="username" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">E-mail</label>
                <input type="email" name="email" placeholder="Enter your email..." id="email" />
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" name="password_1" id="password"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Confirm Password</label>
                <input type="password" name="password_2" id="password2"/>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <!-- <div class="button-container">
                    <input type="submit" id="signup-button" name="reg_user" value="Sign Up" >
            </div> -->
            <button type="submit" name="reg_user">submit</button>
        </form>
    </div>
    <script src="./scripts/signup.js"></script>
</body>
</html>