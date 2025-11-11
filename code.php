<?php
  session_start();
		$dbc = mysqli_connect('localhost','root','','vs_cycle');
		if (!$dbc) {
			# code...
			echo  mysqli_connect_error();
			exit();
		}
/*Add User Code*/
		if (isset($_REQUEST['r_btn'])) {
			# code...
			$first_name=($_REQUEST['first_name']);
			$last_name=($_REQUEST['last_name']);
			$email=($_REQUEST['email']);
			$password=($_REQUEST['password']);
			$confirm_password=($_REQUEST['confirm_password']);
			$q =mysqli_query($dbc,"INSERT INTO users (first_name,last_name,email,password,confirm_password) VALUES('$first_name','$last_name','$email','$password','$confirm_password')");
			if ($q) {
				# code...
				header('refresh:2;url=home.php');
			}else{
				$msg  = mysqli_error($dbc);
				$sts = "danger";
			}
		}
		/* Login process*/
		if (isset($_REQUEST['login_btn'])) {
			# code...
			$email = $_REQUEST['email'];
			$password = $_REQUEST['password'];
			$q=mysqli_query($dbc,"SELECT * FROM users WHERE email='$email' AND password='$password'");
			$count = mysqli_num_rows($q);
			if ($count==1) {
				# code...
				$msg ="Logging...";
				$sts ="success";
				$_SESSION['login']=$email;
				header('refresh:2;url=home.php');
			}else{
				$msg ="Invalid Email or Password";
				$sts ="danger";
			}
		}
		@$fetchUserLogin=mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM users WHERE email='$_SESSION[login]'"));
 ?>
