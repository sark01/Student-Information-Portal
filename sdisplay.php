<?php
	session_start();
  if($_SESSION["login_u"]!=1)
  {
    echo "<script> window.location = './slogin1.php' </script>";
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SIS(Sdisplay)</title>
		<link rel="stylesheet" href="index2.css" type="text/css"> 
	</head>
	<body>
		<div id="one"><marquee direction="left"><b>NIT-DURGAPUR</b></marquee></div>
		<ul>
  			<li><a href="some.php" >Log Out</a></li>
  			<li style="float:right"><a href="about.html" target="_blank">About</a></li>
  		</ul>
  		<h1 style="background-color: #ffffff ">Hello <?php echo $_SESSION["fname"] ?>, your details:</h1>
  		<table border="2" style="border: 1px solid black;background-color: #ffffff ">
  			<tr>
  				<th>First Name</th>
          <th>Last Name</th>
          <th>DOB</th>
          <th>Dept</th>
          <th>Roll No</th>
          <th>Reg No</th>
          <th>Email</th>
          <th>Gender</th>
          
  			</tr>
  			<tr>
  				<td><?php echo $_SESSION["fname"] ?></td>
  				<td><?php echo $_SESSION["lname"] ?> </td>
  				<td><?php echo $_SESSION["bday"] ?> </td>
		  		<td><?php echo $_SESSION["gender"] ?> </td>
		  		<td><?php echo $_SESSION["branch"] ?> </td>
		  		<td><?php echo $_SESSION["roll_no"] ?> </td>
		  		<td><?php echo $_SESSION["r_no"] ?> </td>
		  		<td><?php echo $_SESSION["email"] ?> </td>
		  	</tr>
		</table>
	</body>
</html>