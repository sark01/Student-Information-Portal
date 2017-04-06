<!DOCTYPE html>
<html>
<head>
	<title>ADMIN REG</title>
	<link rel="stylesheet" href="index2.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
	<div id="one"><marquee direction="left"><b>NIT-DURGAPUR</b></marquee></div>
	<ul>
  		<li><a href="alogin1.php">Admin Login</a></li>
  		<li><a href="homepage.html">Home</a></li>
  		
  		<li style="float:right"><a href="about.html" target="_blank">About</a></li>
	</ul>
	<center><h3>REGISTRATION FORM</h3></center>
        <marquee class="padding-top-10" style="color:red; font-family:serif; font-weight:bold;">Please fill up all the fields properly in the below form</marquee>
    <div class="container">
    <div class="container col-md-12 padding-top-10">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Details :</div>
                <div class="panel-body">
                  <form name="form1" id="contactform" method="post" action="" enctype="multipart/form-data">
                    <div class="row">
                    <div class="padding-top-10 col-md-4">
                      <label for="firstName" class="control-label">First Name :</label>
                      <input type="text" name="f_name" class="form-control" id="firstName" placeholder="Enter your first name" onBlur="allLetter(document.form1.f_name)" />
                    </div>
                    <div class="col-md-4 padding-top-10">
                      <label for="lastName" class="control-label">Last Name :</label>
                      <input type="text" class="form-control" name="txtLname" id="lastName" placeholder="Enter your last name" onBlur="allLetter(document.form1.txtLname)" />
                    </div>
                    </div>
                    <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label class="control-label">Gender :</label>
                            <input type="radio" id="gender" name="gender" value="Male" checked>Male
                            <input type="radio" id="gender" name="gender" value="Female">Female
                        </div>
                    </div>
                    <div class="row">
                        <div class="padding-top-10 col-md-4">
                            <label for="dp" class="control-label">Profile Photo :</label>
                            <input type="file" name="image" id="dp" class="form-control" accept="image/*" onchange="loadFile(event)" />
                        </div>
                        <div class="md-col-4"><img id="output" style="width:150px;"/></div>
                    </div>

                        <script type="text/javascript">
                            var loadFile = function(event)
                            {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                        <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label for="dob" class="control-label">Date of Birth :</label>
                            <input type="date"   name="user_dob" class="form-control" id="dob" onBlur="ageCount()" />
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="age" class="control-label">Age :</label>
                            <input type="text" name="txtAge"  id="age" class="form-control" placeholder="Age will auto generate here" readonly="readonly" />
                        </div>
                    </div>    
                    <div class="row">
                    <div class="col-md-12 padding-top-10">
                      <label for="address" class="control-label">Address :</label>
                      <input type="textarea" name="user_add" class="form-control" id="address" placeholder="Enter your address" />
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-5 padding-top-10">
                      <label for="mobile" class="control-label">Mobile No :</label>
                      <input type="text" name="user_mob" maxlength="10" class="form-control" id="mobile" placeholder="Enter your mobile number" onBlur="allNumber(document.form1.user_mob)" />
                    </div>
                    <div class="col-md-7 padding-top-10">
                      <label for="email" class="control-label">Email Address :</label>
                      <input type="text" name="user_email" class="form-control" id="email" placeholder="Enter your email address" onBlur="emailValidation()" />
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4 padding-top-10">
                      <label for="username" class="control-label">Username :</label>
                      <input type="text" name="user_name" class="form-control" id="username" placeholder="Enter your username" />
                    </div>
                    <div class="col-md-4 padding-top-10">
                      <label for="password" class="control-label">Password :</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Enter a new password" />
                    </div>
                    <div class="col-md-4 padding-top-10">
                      <label for="confirmpassword" class="control-label">Confirm Password :</label>
                      <input type="password" name="txtCpass" class="form-control" id="confirmpassword" placeholder="Please confirm your password" onBlur="checkPassword()" />
                    </div>
                    </div>
                    
                    <hr>
                    <div class="row padding-top-10"><span style="padding-left:10px;">Academic Details :</span></div>
                    <div class="row">
                        <div class="padding-top-10 col-md-6">
                            <label for="tenth" class="control-label">10th Percentage :</label>
                            <input type="text" name="txtTen" class="form-control" id="tenth" placeholder="Enter your 10th board %" />
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="twelve" class="control-label">12th Percentage :</label>
                            <input type="text" name="txtTwelve" class="form-control" id="twelve" placeholder="Enter your 12th board %" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 padding-top-10">
                            <label for="program" class="control-label">Programme :</label>
                            <select id="program" name="txtProg" class="form-control">
                                <option selected="" value="">Select Programme</option>
                                
                                <option value="B.Tech">B.Tech</option>
                                <option value="M.Tech">M.Tech</option>
                                <option value="PhD">PhD</option>
                            </select>
                        </div>
                        <div class="padding-top-10 col-md-6">
                            <label for="registrationno" class="control-label">Registration No :</label>
                            <input type="text" minlength="8" name="txtRegNo" class="form-control" id="registrationno" placeholder="Enter your registration number" onBlur="allNumber(document.form1.txtRegNo)" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 padding-top-10">
                            <label for="dept" class="control-label">Department :</label>
                            <select id="dept" name="user_dept" class="form-control">
                                <option selected="" value="">Select Department</option>
                                
                                <option value="Biotechnology">Biotechnology</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Chemical Engineering">Chemical Engineering</option>
                                <option value="Computer Science Engineering">Computer Science Engineering</option>
                                <option value="Electronics And Communication Engi">Electronics And Communication Engi</option>
                                <option value="Electrical Engineering">Electrical Engineering</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                <option value="Metallurgical And Materials Engineering">Metallurgical And Materials Engineering</option>
                            </select>
                        </div>
                        <div class="padding-top-10 col-md-4">
                            <label for="roll" class="control-label">Roll No :</label>
                            <input type="text" name="user_roll" class="form-control" id="roll" placeholder="Enter your roll number" onClick="generateRoll()" />
                        </div>
                        <div class="col-md-4 padding-top-10">
                            <label for="sem" class="control-label">Semester :</label>
                            <select id="sem" name="user_sem" class="form-control">
                                <option selected="" value="">Select Semester</option>

                                <option value="First Semester">First Semester</option>
                                <option value="Second Semester">Second Semester</option>
                                <option value="Third Semester">Third Semester</option>
                                <option value="Fourth Semester">Fourth Semester</option>
                                <option value="Fifth Semester">Fifth Semester</option>
                                <option value="Sixth Semester">Sixth Semester</option>
                                <option value="Seventh Semester">Seventh Semester</option>
                                <option value="Eighth Semester">Eighth Semester</option>
                            </select>
                        </div>
                    </div>
                    <div class="padding-top-10">
                        <div class="btn-group" style="float:right;">
                                <button type="submit" method="post" >create</button>
                                <input type = "hidden" name = "submitted" value = 1>
                            
                        </div>
                    </div>
                    </form>
                </div>
            
        </div>

 	<script src="validate.js"></script>

</body>
<?php
	/* Attempt MySQL server connection. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	$link = mysqli_connect("localhost", "root", "", "webdlab");

	// Check connection
	if($link === false){
		echo "error";
	die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	// Escape user inputs for security
	if (isset($_POST['submitted']) == 1) {
	$fname = mysqli_real_escape_string($link, $_POST['f_name']);
	$lname = mysqli_real_escape_string($link, $_POST['txtLname']);
	$b_day = mysqli_real_escape_string($link, $_POST['user_dob']);
	$gender = mysqli_real_escape_string($link, $_POST['gender']);
	$branch = mysqli_real_escape_string($link, $_POST['user_dept']);
	$roll_no = mysqli_real_escape_string($link, $_POST['user_roll']);
	$email = mysqli_real_escape_string($link, $_POST['user_email']);
	$passwd = mysqli_real_escape_string($link, $_POST['password']);
	$r_no = mysqli_real_escape_string($link, $_POST['txtRegNo']);
  $prog = mysqli_real_escape_string($link, $_POST['txtProg']);
  $tenp = mysqli_real_escape_string($link, $_POST['txtTen']);
  $twelvep = mysqli_real_escape_string($link, $_POST['txtTwelve']);
  $sem = mysqli_real_escape_string($link, $_POST['user_sem']);
  $mob = mysqli_real_escape_string($link, $_POST['user_mob']);
  $add = mysqli_real_escape_string($link, $_POST['user_add']);
  $user_name = mysqli_real_escape_string($link, $_POST['user_name']);

	}
	// attempt insert query execution

	if (isset($_POST['submitted']) == 1) {
	$password = sha1($passwd);
	$sql = "INSERT INTO aregistration (firstname,lastname,dateofbirth,gender,department,rollno,email,password,registrationno,programme,tenp,twelvep,sem,mob,address,username) VALUES ('$fname', '$lname' , '$b_day','$gender' ,'$branch','$roll_no','$email','$password','$r_no','$prog','$tenp','$twelvep','$sem','$mob','$add','$user_name' )";
	}

	if (isset($_POST['submitted']) == 1) {
	if(mysqli_query($link, $sql)){
	$message = "Please login again.";
          echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script> window.location = './alogin1.php' </script>";
		} else{
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	}
	// close connection
	mysqli_close($link);
	?>
</html>
