<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in();
  if(isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    $password = randPass();
    $email = $_POST['email'];
    $user1v1 = $_POST['user1v1'];
    if(empty($user1v1)) {
      $message = "Please select a user level.";
    }else{
      $result = createUser($fname, $username, $password, $email, $user1v1);
      $message = $result;
    }
  }
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create New User</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Bevan&#124;Open+Sans" rel="stylesheet">
</head>
<body>
	<h1 class="ttls">Create User</h1>
  <?php if(!empty($message)){echo $message;}?>
  <div class = "container">
  <form class = "userForm" action="admin_createuser.php" method="post">
    <label>First name:</label>
    <input required class = "blank" type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;}?>"><br><br>
    <label>Username:</label>
    <input required class = "blank" type="text" name="username" value="<?php if(!empty($username)){echo $username;}?>"><br><br>
    <label>Password:</label>
    <input required class = "blank" type="text" name="password" value="<?php if(!empty($password)){echo $password;}?>"><br><br>
    <label>Email:</label>
    <input required class = "blank" type="text" name="email" value="<?php if(!empty($email)){echo $email;}?>"><br><br>
    <label>User Level:</label>
    <select name="user1v1">
      <option value="">Please select a user level</option>
      <option value="2">Web Admin</option>
      <option value="1">Web Master</option>
    </select><br><br>
    <input class="sumb" type="submit" name="submit" value="Create User">
  </form>
</body>
</html>
