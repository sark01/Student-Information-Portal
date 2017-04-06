<?php 
session_start();
if(isset($_SESSION["login_u"])) {
 if($_SESSION["login_u"]==1)
  {
    echo "<script> window.location = './sdisplay.php' </script>";
  }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SIS(Slogin)</title>
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
			<p>STUDENT LOGIN</p>
			<form class="login-form"  name="registration" method="post" onSubmit="">
				<input type="text"  name="user_name" placeholder="username" required="true"/>
				<input type="password"  name="user_password" placeholder="password" required="true"/>
				<button>login</button>
				<input type = "hidden" name = "submitted" value = 1>
				<p class="message">Not registered? <a href="ssignup1.php">Create an account</a></p>
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
			$sql="SELECT * FROM `sregistration` where `username` ='". $username. "' AND `password` ='". $phash. "' AND activate=1";
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
						$_SESSION["fname"] = $row[0];
  						$_SESSION["lname"] = $row[1];
  						$_SESSION["bday"] = $row[2];
		  				$_SESSION["gender"] = $row[10]; 
		  				$_SESSION["branch"]  = $row[5];
		  				$_SESSION["roll_no"] = $row[8];
		  			 	$_SESSION["r_no"] = $row[6];
		  				$_SESSION["email"] = $row[3];
						$row=mysqli_fetch_row($result);

						mysqli_free_result($result);
	
					}
					$_SESSION["login_u"]=1;
					echo "<script> window.location = './sdisplay.php' </script>";
				}
			}
		}
		else {
			echo "No result";
		}
	mysqli_close($con);
	?>
</html>