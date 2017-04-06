<?php 
session_start();
if(isset($_SESSION["login_a"])) {
 if($_SESSION["login_a"]==1)
  {
    echo "<script> window.location = './adisplay.php' </script>";
  }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SIS(Alogin)</title>
		<link rel="stylesheet" href="index2.css" type="text/css">
	</head>
	<body   onload="document.registration.user_name.focus();">
	<div id="one"><marquee direction="left"><b>NIT-DURGAPUR</b></marquee></div>
	<ul>
  		<li><a href="homepage.html">Home</a></li>
  		<li style="float:right"><a href="about.html" target="_blank">About</a></li>
	</ul>
	<div class="login-page"> 
		<div class="form">
			<p>ADMIN LOGIN</p>
			<form class="login-form"  name="registration" method="post" onSubmit="">
				<input type="text"  name="user_name" placeholder="username" required="true"/>
				<input type="password"  name="user_password" placeholder="password" required="true"/>
				<button>login</button>
				<input type = "hidden" name = "submitted" value = 1>
			</form>
		</div>
	</div>
	
	
	</body>
	<?php
		$con = mysqli_connect("localhost", "root", "", "webdlab");
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		if (isset($_POST['submitted']) == 1) {
			$username = mysqli_real_escape_string($con, $_POST['user_name']);
			$password = mysqli_real_escape_string($con, $_POST['user_password']);
			$phash = sha1($password);
			$sql="SELECT * FROM `aregistration` where `username` ='". $username. "' AND `password` ='". $phash. "'";
			$result=mysqli_query($con,$sql);
			if ($result) {
				$row=mysqli_fetch_row($result);
				if(!$row) {
					$message = "Wrong Credentials";
					echo "<script type='text/javascript'>alert('$message');</script>";
				} else {
					$message = "Success";
					echo "<script type='text/javascript'>alert('$message');</script>";

					while($row) {
						$row=mysqli_fetch_row($result);

						mysqli_free_result($result);
	
					}
					$_SESSION["login_a"]=1;
					echo "<script> window.location = './adisplay.php' </script>";
				}
			}
		}
		else {
			echo "No result";
		}
	mysqli_close($con);
	?>
</html>