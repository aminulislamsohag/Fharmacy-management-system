<?php 


session_start();
if (isset($_SESSION['auth'])) {
	if ($_SESSION['auth'] == 1) {
		header("location:admin_portal.php");
	}
}
else{
	if (isset($_COOKIE['auther'])) {
		if ($_COOKIE['auther'] == true) {
		   header("location:admin_portal.php");	
		}
	}

} 


include "../php_lib/connection.php";


$notify = "";
if (isset($_POST['sign_btn'])) {
	$email = $_POST['admin_email'];
	$pass = md5($_POST['admin_pass']);
	$loggedin = isset($_POST['keep_login'])?1:0; // it's a contidion...

$loginQuery = "SELECT * FROM admins WHERE email='$email' AND password='$pass' ";

$resultlogin = $conn->query($loginQuery);



	if ($resultlogin->num_rows > 0) {
		while ($result = $resultlogin->fetch_assoc()) {
			$username = $result['name'];
		}

		$_SESSION['username'] = $username;
		$_SESSION['auth']=1;

		if ($loggedin == 1) {
			setcookie('auther',true,time()+(60*60*24*10),'/'); 
		}
		header("location:admin_portal.php");
	}
	else{
		$notify = "Invalid email or password";
	}


	
}

 ?>




<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">

	<!--link css file -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/login_admin.css">
	<title>Login protal</title>
	<link rel="favicon icon" href="">


</head>
<body>


	<br><br>

<!------ login fron start for admin---------->
  <div class="login-wrap">
   <div class="login-html">
<div class="header">
	<p text align="center">Welcome to Admin Panel</p>
</div>
   	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "post">

        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>

        <div class="login-form">

	          <div class="sign-in-htm">

	                <div class="group">
	                  <label for="user" class="label">Username or Email</label>
	                  <input id="user" type="text" class="input" name="admin_email" placeholder="Enter Email" >
	                </div>

	                <div class="group">
	                  <label for="pass" class="label">Password</label>
	                  <input id="pass" type="password" class="input" name="admin_pass" placeholder="Enter Password">
	                </div>

	                <div class="group">
	                <label for="" class="label">
					<input type="checkbox" name="keep_login">keep me log in.</label><br>
				    </div>


	                <div class="group">
	                  <input type="submit" class="button" name="sign_btn" value="Sign In">
	                </div>

	                 <div class="pas_invd"> <?php echo $notify; ?></div>

	                <div class="hr"></div>
	          </div>

	              <div class="for-pwd-htm">
	                <div class="group">
	                  <label for="user" class="label">Username or Email</label>
	                  <input id="user" type="text" class="input" name="admin_email_rs" placeholder="Enter Email">
	                </div>
	                <div class="group">
	                  <input type="submit" class="button" name="rest_btn" value="Reset Password">
	                </div>
	                <div class="hr"></div>
	              </div>
             </div>

       </form>
  </div>
</div>
<!------ login fron for admin end---------->




</body>
</html>