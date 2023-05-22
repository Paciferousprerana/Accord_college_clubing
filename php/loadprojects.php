<?php
if(isset($_SESSION['accord_user']))
   {
	   $my='<div class="mypro mar">
			<div class="proheader">
				<label class="fl-lt">My Documents</label>
				<div class="fl-rt add btnn"></div>
			</div>
			<div class="proname">';
	   $mentor='<div class="mypro mar">
			<div class="proheader">
				<label class="fl-lt">Mentored Documents</label>
			</div>
			<div class="proname">';
			
	   $sql = "SELECT * FROM projectmanagement where ownerid=$login_session AND ownership='o'";
		$result = mysqli_query($db,$sql);
		   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$proname=$row['projname'];
			$proid=$row['projectid'];
			$my=$my.'<div class="proitem">
							<a href="#">'.$proname.' </a>
							<div class="reviews">
							<a href="#">32 Reviews</a>
							<a href="#">12 Discussion </a>
							</div>
						</div>';
		}
		$my=$my.'</div>
		</div>';
		$result = mysqli_query($db,"SELECT * FROM projectmanagement where ownerid=$login_session AND ownership='m'");
		   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$proname=$row['projname'];
			$proid=$row['projectid'];
			$mentor=$mentor.'<div class="proitem">
							<a href="#">'.$proname.' </a>
							<div class="reviews">
							<a href="#">32 Reviews</a>
							<a href="#">12 Discussion </a>
							</div>
						</div>';
		}
		$mentor=$mentor.'</div>
		</div>';
		echo $my;
		echo $mentor;
   }else
   {
	   header("location:login.php");
   }
 ?>