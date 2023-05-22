<?php
if(isset($_SESSION['accord_user']))
   {
	   $feed="";
	   $check="bannyvishwas";
	   $result=mysqli_query($db,"select institute,interestedin from registration where id=$login_session");
	   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	   $inter=explode(", ",$row['interestedin']);
	   $count=count($inter);
	   $interestlist='"'.implode('","',$inter).'"';
	   $insti=$row['institute'];
	   //echo $interestlist;
	   //echo $insti;
	   $query=mysqli_query($db,"select ownerid,projectid from projectmanagement,registration where projectmanagement.institute='$insti' AND projectmanagement.subint IN($interestlist) order by ratings desc");
	  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
	   {
		   $projectid=$row['projectid'];
		   $userid=$row['ownerid'];
		   $get="p".$projectid."u".$userid;
			if((stripos($check,$get)+1==1) && ($userid!=$login_session))
			{
				$sql1=mysqli_query($db,"select * from registration where id=$userid");
				$res1=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
				$sql2=mysqli_query($db,"select * from projectmanagement where projectid=$projectid");
				$res2=mysqli_fetch_array($sql2,MYSQLI_ASSOC);
				$proname=$res2['projname'];
				$intname=$res2['institute'];
				$ratings=$res2['ratings'];
				$fname=$res1['firstname'];
				$lname=$res1['lastname'];
				$prof=$res1['profession'];
				if($prof=='s')
				{
					$prof="Student";
				}else
				{
					$prof="Teacher";
				}
				//$reviews=$res2['ratings'];
				//$totalfollowers=$res2['ratings'];
				$check=$check.$get;
				$feed=$feed.'<div class="newsitem">
				<div class="itemdetail">
				<div class="propic">
				</div>
				<div class="details">
					<h4>'.$proname.'</h4>
					<h5>'.$intname.'</h5>
					<h5>'.$fname.' '.$lname.' ('.$prof.')</h5>
					<p><img src="img/rating.png" class="itemico">:'.$ratings.'  <img src="img/reviews.png" class="itemico">:123  <img src="img/followers.png" class="itemico">:1245</p>
				</div>
				</div>
				<div class="itemcontrol">
				<button class="requestbtn">Request As Team</button>
				<button class="followbtn">Follow</button>
				</div>
				</div>';
			}
	   }
	   echo $feed;
   }else
   {
	   header("location:login.php");
   }
 ?>