<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HealthyGo</title>
	<link rel="shortcut icon" type="image/jpg" href="./image/favicon.ico"/>
	<link rel="stylesheet" href="./styles/login.css">
</head>
<body>
	<div class="container"  method="post" action="login.php">
		<div class="logo">
            <img src="./image/logo.jpg" alt="Logo" id="login-logo" />
        </div>
		<div class="header">
            <h1>Sign In</h1>
			<br>
            <h4>Back to <a href="index.php" class="sign-in">Home page</a> </h4>
        </div>
		<form class="login_form" action="login.php" method="post" name="form">
			<?php //include('errors.php'); ?>
			<div class="font">
				<label>Username</label>
				<input autocomplete="off" type="text" name="username" autocomplete="off">
			</div>
			<div class="font font2">
				<label>Password</label>
				<input type="password" name="password" autocomplete="off">
				<div id="pass_error">Please fill up your Password</div>
			</div>
			<div class="input-group">
				<button type="submit" name="login_user">Login</button>
  	        </div>
		</form>
	</div>	
	<script src="./scripts/login.js"></script>
</body>
</html>