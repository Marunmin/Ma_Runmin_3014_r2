<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
</head>
<body>
	<h1>welcome Company name to your admin page</h1>
	<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen">
	<link href="https://fonts.googleapis.com/css?family=Bevan&#124;Open+Sans" rel="stylesheet">
	<?php echo $_SESSION['user_name'];  ?>
	<section id="infoCon">
		<h2 id="controlHeader">USER CONTROL PANEL</h2>
		<div id="profileCon">
			<div id="buttons">
	<a href="admin_createuser.php" class="btn">Create user</a>
	<a href="phpscripts/caller.php?caller_id=logout" class="btn">Sign Out</a>
</div>		
	</div>
</section>
</body>
</html>
