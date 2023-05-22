<?php
if(isset($_SESSION['accord_user']))
   {
	   $chatitem="";
	   $sql="select projname,teammentor,teammember from projectmanagement where ownerid=$login_session order by projectid desc";
	   $result=mysqli_query($db,$sql);
	   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	   {
		   $proname=$row['projname'];
		   //load mentores first
		   $teammen=explode(", ",$row['teammentor']);
		   $len=count($teammen);
		   for($x=0;$x<$len;$x++)
		   {
			   $inmen=(int)$teammen[$x];
			   $result2=mysqli_query($db,"select userid from loginstatus where userid=$inmen");
			   $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
			   $count = mysqli_num_rows($result2);
			   $actid=$row2['userid'];
			   if($count==1 && $actid!=$login_session)
			   {
				 $result3=mysqli_query($db,"select firstname,lastname from registration where id=$actid");
				 $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
				 $fname=$row3['firstname'];
				 $lname=$row3['lastname'];
				 $chatitem=$chatitem.'<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">'.$fname.' '.$lname.'</span>
					<div class="teamtag">
					<span class="pname">'.$proname.'</span>
					<span class="type">(Mentor)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>';
			   }
		   }
			   //load team members
			   $teammen=explode(", ",$row['teammember']);
				$len=count($teammen);
				for($x=0;$x<$len;$x++)
				{
			   $inmen=(int)$teammen[$x];
			   $result2=mysqli_query($db,"select userid from loginstatus where userid=$inmen");
			   $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
			   $actid=$row2['userid'];
			   $count = mysqli_num_rows($result2);
			   if($count==1 && $actid!=$login_session)
			   {
				 $result3=mysqli_query($db,"select firstname,lastname from registration where id=$actid");
				 $row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
				 $fname=$row3['firstname'];
				 $lname=$row3['lastname'];
				 $chatitem=$chatitem.'<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">'.$fname.' '.$lname.'</span>
					<div class="teamtag">
					<span class="pname">'.$proname.'</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>';
			   }
		   }
	   }
	   echo $chatitem;
   }else
   {
	   header("location:login.php");
   }
 ?>