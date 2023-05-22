<?php
   include('config.php');
   session_start();
   $user_check = $_SESSION['accord_user'];
   $ses_sql = mysqli_query($db,"select id from registration where id =$user_check ");  
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['id'];
	   if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 6000)) {
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();
		$sql=mysqli_query($db,"delete from loginstatus where userid=$login_session");
	// destroy session data in storage
		}
	$_SESSION['LAST_ACTIVITY'] = time();
   if(!isset($_SESSION['accord_user'])){
      header("location:../Accord/");
   }
?>