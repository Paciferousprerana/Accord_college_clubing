<?php
include("php/session.php");
$incomplete="";
if(isset($_SESSION['accord_user']))
   {
	   
	  if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proname'])) {
			  $proname = mysqli_real_escape_string($db,$_POST['proname']);
			  $subint = mysqli_real_escape_string($db,$_POST['subint']); 
			  $desc = mysqli_real_escape_string($db,$_POST['desc']);
			  $ptype=implode(", ", $_POST['ptype']);
			  $own=implode(", ", $_POST['own']);
				$r= mysqli_query($db,"select institute from registration where id=$login_session");
				  $ow = mysqli_fetch_array($r,MYSQLI_ASSOC);
				  $ints=$ow['institute'];
			  if($own=="m")
			  {
				  $sql = "insert into projectmanagement(ownerid,institute,subint,projname,description,teammentor,type,ownership,ratings) values ($login_session,'$ints','$subint','$proname','$desc',$login_session,'$ptype','$own',0.0)";
				  $result = mysqli_query($db,$sql);
				  echo "".mysqli_error($db);
				  $sql="Select projectid from projectmanagement where ownerid=$login_session ORDER BY projectid DESC";
				  $result= mysqli_query($db,$sql);
				  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				  $proid=$row['projectid'];
				  $result= mysqli_query($db,"select * from otherpro where userid=$login_session");
				  $count = mysqli_num_rows($result);
				  if($count==1)
				  {
					  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
						$mentor=$row['mproid'];
						if($mentor=="")
						{
							$result = mysqli_query($db,"update otherpro set mproid='$proid'  where userid=$login_session");
					
						}else{
							$result = mysqli_query($db,"update otherpro set mproid='$mentor, $proid'  where userid=$login_session");
						}
				  }else
				  {
					  $result=mysqli_query($db,"insert into otherpro(userid,mproid) values ($login_session,'$proid')");
				  }
			  }else
			  {
					$sql = "insert into projectmanagement(ownerid,institute,subint,projname,description,teammentor,type,ownership,ratings) values ($login_session,'$ints','$subint','$proname','$desc',$login_session,'$ptype','$own',0.0)";
				  $result = mysqli_query($db,$sql);
				  $sql="Select projectid from projectmanagement where ownerid=$login_session ORDER BY projectid DESC";
				  $result= mysqli_query($db,$sql);
				  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				  $proid=$row['projectid'];
				  $result= mysqli_query($db,"select * from otherpro where userid=$login_session");
				  $count = mysqli_num_rows($result);
				  if($count==1)
				  {
					  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
						$mentor=$row['tproid'];
						if($mentor=="")
						{
							$result = mysqli_query($db,"update otherpro set tproid='$proid'  where userid=$login_session");
					
						}else{
							$result = mysqli_query($db,"update otherpro set tproid='$mentor, $proid'  where userid=$login_session");
						}
				  }else
				  {
					  $result=mysqli_query($db,"insert into otherpro(userid,tproid) values ($login_session,'$proid')");
				  }
			  }
				  $incomplete="Project Created Successful. Wait for a while.";
				  header('Refresh: 2; URL = dashboard.php');
			  }else
			  {
				  $incomplete="Project failed to create.";
			  }
		   echo $incomplete;
   }else{
	   header("location:login.php");
   }
 ?>
