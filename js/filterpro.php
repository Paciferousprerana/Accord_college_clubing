<?php
include("php/session.php");
if(isset($_SESSION['accord_user']))
   {
		$text = $_POST["searchval"];
		$opt = $_POST["optiontext"];
		echo $opt;
   }else
   {
	   header("location:login.php");
   }
?>