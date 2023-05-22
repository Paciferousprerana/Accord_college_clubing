<?php
include("php/config.php");
session_start();
if(isset($_SESSION['accord_user']))
   {
	   header("location:dashboard.php");
   }
   $incomplete="";
   $alred="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['birthDate']) && isset($_POST['phoneNumber']) && isset($_POST['institute']) && isset($_POST['cpassword']) && isset($_POST['prof']) && isset($_POST['gend']) && isset($_POST['want'])){
      if($_POST['cpassword']==$_POST['password']){
	  // username and password sent from form 
      $fname = mysqli_real_escape_string($db,$_POST['firstName']);
      $lname = mysqli_real_escape_string($db,$_POST['lastName']); 
      $email = mysqli_real_escape_string($db,$_POST['email']); 
      $pass = mysqli_real_escape_string($db,$_POST['password']); 
      $dob = mysqli_real_escape_string($db,$_POST['birthDate']); 
      $pno = mysqli_real_escape_string($db,$_POST['phoneNumber']); 
      $ints = mysqli_real_escape_string($db,$_POST['institute']); 
      $prof = mysqli_real_escape_string($db,$_POST['prof']); 	  
      $gend = mysqli_real_escape_string($db,$_POST['gend']); 
	  $want=implode(", ", $_POST['want']);
	  $inste=implode(", ", $_POST['technology']);
	  $sql = "SELECT email FROM registration WHERE email = '$email'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
	  if($count>0)
	  {
		  $alred="User Already Exists.";
	  }
	  else
	  {
		//Insertion
      $sql = "Insert into registration(firstname,lastname,email,password,dob,phone,institute,profession,want,interestedin,gender) values ('$fname','$lname','$email','$pass','$dob',$pno,'$ints','$prof','$want','$inste','$gend')";
      $result = mysqli_query($db,$sql);
	  $result = mysqli_query($db,"select id from registration where email='$email'");
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $usrid=$row['id'];
      if($result){
		  $result = mysqli_query($db,"insert into loginstatus values($userid)");
		  $_SESSION['accord_user'] = $usrid;
		 $_SESSION['LAST_ACTIVITY'] = time();
		  header("location:dashboard.php");
		} else{
			$incomplete="Sorry, Some Error Occurs.";
		}  
	  }
	}else
	{
		$incomplete="Password Doesn't match.";
	}
   }else
   {
	   $incomplete="Please fill the form. And Required Fields.";
   }
}
?>
<html>
<head>
<title>Accord</title>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/reg.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>
<span class="text">Accord</span>
<div class="container formcn">
            <form class="form-horizontal" role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h2>Registration</h2>
				<h1><?php echo $incomplete;?></h1>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name*:</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" placeholder="First Name" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name*:</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" placeholder="Last Name" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email*:</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" placeholder="Email" class="form-control" name= "email" required>
						<h1><?php echo $alred;?></h1>
					</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password*:</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password*:</label>
                    <div class="col-sm-9">
                        <input type="password" name="cpassword" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth*:</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthDate" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Phone number*:</label>
                    <div class="col-sm-9">
                        <input type="number" min="1000000000" max="9999999999" name="phoneNumber" placeholder="Phone number" class="form-control" required>
                        <span class="help-block">Your phone number won't be disclosed anywhere </span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Institute*:</label>
                    <div class="col-sm-9">
                        <input type="text" name="institute" placeholder="Institute" class="form-control" autofocus required>
                    </div>
                </div>
				<div class="form-group">
                       <label for="Height" class="col-sm-3 control-label">Profession*: </label>
                    <div class="col-sm-9">
					<div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-success">Student
						<input type="radio" name="prof" value="s" autocomplete="off" checked>
						<span class="glyphicon glyphicon-ok"></span>
						</label>
						<label class="btn btn-success">Teacher
						<input type="radio" name="prof" value="t" autocomplete="off" checked>
						<span class="glyphicon glyphicon-ok"></span>
						</label>
						</div>
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">Use For My*: </label>
                    <div class="col-sm-9">
					<div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-success">Projects
						<input type="checkbox" name="want[]" value="p" autocomplete="off" checked>
						<span class="glyphicon glyphicon-ok"></span>
						</label>
						<label class="btn btn-success">Research
						<input type="checkbox" name="want[]" value="r"  autocomplete="off" checked>
						<span class="glyphicon glyphicon-ok"></span>
						</label>
						<label class="btn btn-success">Articles
						<input type="checkbox" name="want[]" value="a"  autocomplete="off" checked>
						<span class="glyphicon glyphicon-ok"></span>
						</label>
					</div>
                    </div>
                </div>
                 <div class="form-group">
                       <label for="Height" class="col-sm-3 control-label">Interested In: </label>
                    <div class="col-sm-9">
					<div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-success">Java
						<input type="checkbox" name="technology[]" value="Java"  autocomplete="off" checked>
						<span class="glyphicon glyphicon-ok"></span>
						</label>
						<label class="btn btn-success">Python
						<input type="checkbox" name="technology[]" value="Python"  autocomplete="off" checked>
						<span class="glyphicon glyphicon-ok"></span>
						</label>
						</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender*:</label>
                    <div class="col-sm-6">
						<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-success">Male
										<input type="radio" name="gend" value="m" autocomplete="off">
										<span class="glyphicon glyphicon-ok"></span>
									</label>
                                <label class="btn btn-success">Female
										<input type="radio" name="gend" value="f" autocomplete="off">
										<span class="glyphicon glyphicon-ok"></span>
									</label>
						</div>
					</div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <span class="help-block">*Required fields</span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
			<br>
			<a href="login.php">I already have an account?</a><!-- /form -->	
</div>		<!-- ./container -->
</body>
</html>