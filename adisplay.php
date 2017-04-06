<?php
	session_start();
  if($_SESSION["login_a"]!=1)
  {
    echo "<script> window.location = './alogin1.php' </script>";
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SIS(Adisplay)</title>
		<link rel="stylesheet" href="index2.css" type="text/css"> 
	</head>
	<body>
		<div id="one"><marquee direction="left"><b>NIT-DURGAPUR</b></marquee></div>
		<ul>
  			<li><a href="some1.php" >Log Out</a></li>
  			<li style="float:right"><a href="about.html" target="_blank">About</a></li>
  		</ul>
  		<h1 style="background-color: #ffffff">List of new users</h1>
  		<table border="2" style="border: 1px solid black;background-color: #ffffff ">
		<thead>
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>DOB</th>
			<th>Dept</th>
			<th>Roll No</th>
			<th>Reg No</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Status</th>
			</tr>MM
		</thead>
		<tbody>
		<?php
		$con = mysqli_connect("localhost", "root", "", "webdlab");
		// Check connection
		if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$sql="SELECT * FROM sregistration where activate = 0";
		if ($result=mysqli_query($con,$sql)) {
		// Fetch one and one row
		$i = 1;
		while($row=mysqli_fetch_row($result)) {
		?>
		<tr>
		<td> <?php echo $row[0] ?> </td>
		<td><?php echo $row[1] ?></td>
		<td><?php echo $row[2] ?></td>
		<td><?php echo $row[4] ?></td>
		<td><?php echo $row[5] ?></td>
		<td><?php echo $row[8] ?></td>
		<td><?php echo $row[6] ?></td>
		<td><?php echo $row[3] ?></td>
		<td> <form method = "post"><button id = <?php echo $i ?> value = <?php echo $row[5] ?> name = <?php echo $i ?> > Activate  </button></form> </td>

		</tr>
		<?php $i = $i + 1;
		}
		// Free result set
		mysqli_free_result($result);
		}
		mysqli_close($con);
		?>
		</tbody>
		</table>
		<h1 style="background-color: #ffffff">List of registered users</h1>
		<table border="2" style="border: 1px solid black;background-color: #ffffff ">
		<thead>
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
		</thead>
		<tbody>
		<?php
		$con = mysqli_connect("localhost", "root", "", "webdlab");
		// Check connection
		if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$sql="SELECT * FROM sregistration where activate = 1";
		if ($result=mysqli_query($con,$sql)) {
		// Fetch one and one row
		$i = 1;
		while($row=mysqli_fetch_row($result)) {
		?>
		<tr>
		<td> <?php echo $row[0] ?> </td>
		<td><?php echo $row[1] ?></td>
		<td><?php echo $row[2] ?></td>
		<td><?php echo $row[4] ?></td>
		<td><?php echo $row[5] ?></td>
		<td><?php echo $row[8] ?></td>
		<td><?php echo $row[6] ?></td>
		<td><?php echo $row[3] ?></td>
		</tr>
		<?php $i = $i + 1;
		}
		// Free result set
		mysqli_free_result($result);
		}
		mysqli_close($con);
		?>
		</tbody>
		</table>	
	</body>
	<?php
		$j = 1;
		while($j < $i) {
			if(isset($_POST[(string)$j])) {
				echo "<script> console.log('hello'); </script>";
				echo "<script> debugger; </script>";
				$con = mysqli_connect("localhost", "root", "", "webdlab");
		// Check connection
				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				$roll_no = mysqli_real_escape_string($con, $_POST[(string)$j]);
				echo $roll_no;
				echo "<script> debugger; </script>";
				$sql="update `sregistration` set activate = 1 WHERE rollno = '".$roll_no."'";
				if ($result=mysqli_query($con,$sql)) {
					echo "<script> console.log('done'); </script>";
				}
				mysqli_close($con);
			}
					$j = $j + 1;
					
		}
				//mysqli_free_result($result);
				
			?>
	</html>