<?php
   include("php/session.php");
   if(session_destroy()) {
	   $sql=mysqli_query($db,"delete from loginstatus where userid=$login_session");
      header("Location:login.php");
   }
?>