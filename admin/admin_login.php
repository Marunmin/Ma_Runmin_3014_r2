<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel login</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Bevan&#124;Open+Sans" rel="stylesheet">
</head>
<body>
	<h1 class="hidden">Login Page</h1>
	<div id="loginCon">
		<h2 id="loginTitle">USER LOGIN</h2>
		<div id="warning"></div><?php if(!empty($message)){ echo $message;} ?>
	<form action="admin_login.php" method="post">
		<label>Username:</label>
		<input type="text" name="username" value="">
		<label>Password</label>
		<input type="password" name="password" value="">
		<input class="subm" type="submit" name="submit" value="login">
	</form>
</div>
</body>
</html>
