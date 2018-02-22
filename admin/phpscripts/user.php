<?php
  function createUser($fname, $username, $password, $email, $user1v1){
    include('connect.php');
    $ip = 0;
		$lastLogin = 0;
		$fails = 0;
    $securePass = md5($password);
    $userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$user1v1}', NULL)";
    //echo $userString;
    $userQuery = mysqli_query($link, $userString);
    if($userQuery) {
      $to = '{$email}';
			$subj = 'You just created an account';
			$msg = "Your username: {$username}\n\nYour password: {$password}\n\nPlease login your account on http://localhost/Ma_Runmin_3014_r2/admin_login.php";
			mail($email, $subj, $msg);
      redirect_to("admin_index.php");
    }else{
      $message = "There was a problem setting up this user. Maybe reconsider your hiring practices.";
      return $message;
    }

     mysqli_close($link);
  }

  function randPass(){
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $pass = array();
  $charLength = strlen($characters) -1;
  for ($i=0; $i < 6; $i++) {
    $ltrs = rand(0, $charLength);
    $pass[] = $characters[$ltrs];
  }
  return implode($pass);
}




?>
