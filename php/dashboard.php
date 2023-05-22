<?php
include('php/session.php');
?>
<html>
<head>
<title><?php echo $login_session;?> Alliance</title>
<link rel="icon" href="img/logo2.png">
<link rel="stylesheet" href="css/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/People.css">
<link rel="stylesheet" href="css/projectmgr.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<div id="header">
	<div class="leftside">
		<div class="logodiv">Accord</div>
		<a href="#" class="Dashnav menuopt active">Dashboard</a>
		<a href="#" class="menuopt peopnav">People</a>
	</div>
	<div class="mid">
		<select name="filtertopic" id="searchoption" onchange="showproject();">
			<option value="1">Topic</option>
			<option value="2">Institute</option>
			<option value="3">Email</option>
		</select>
		<input type="text" name="searchbar" onKeypress="showproject();" />
		<button class="headersearch"><span class="glyphicon glyphicon-search"></span></button>
		<button class="fil local headerbtnact"><span class="glyphicon glyphicon-map-marker"></span></button>
		<button class="fil worldwide"><span class="glyphicon glyphicon-globe"></span></button>
	</div>
	<div class="rightside">
		<div class="profile">
		</div>
		<i class="notifbtn fa fa-bell fa-2x isnotif" aria-hidden="true"><div class="alertcount">+99</div></i>
		<i class="notifbtn fa fa-users fa-2x isnotif" aria-hidden="true"><div class="alertcount">+99</div></i>
	</div>
</div>
<div id="dashboard" onclick="showid(this.id);">
	<div class="procontainer">
		<?php include("loadprojects.php");?>
	</div>
	<div class="maincontent">
		<div id="newsfeed">
			<label class="newslabel">News Feed:</label>
			<?php include("loadnewsfeed.php"); ?>
		</div>
		<div id="peoplesec">
			<label class="peopletags">Mentors<span class="count"><i class="fa fa-users" aria-hidden="true"></i> 1231</span></label>
		<div class="mentor">
			<div class="peopledis">
				<div class="dispic"></div>
				<div class="disdetails">
					<span class="name">Banny Vishwas</span>
					<span class="proname">Face Recognition</span>
				</div>
			</div>
			<div class="peopledis">
				<div class="dispic"></div>
				<div class="disdetails">
					<span class="name">Banny Vishwas</span>
					<span class="proname">Face Recognition</span>
				</div>
			</div>
		</div>
		<label class="peopletags">Team Members<span class="count"><i class="fa fa-folder" aria-hidden="true"></i> 4 <i class="fa fa-users" aria-hidden="true"></i> 123</span></label>
		<div class="team"> 
			<div class="promem">
				<label class="projecttag"><u>Face Recognition System</u></label>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
			</div>
		</div>
		<label class="peopletags">Following<span class="count"><i class="fa fa-folder" aria-hidden="true"></i> 4 <i class="fa fa-users" aria-hidden="true"></i> 123</span></label>
		<div class="Following">
			<div class="promem">
				<label class="projecttag"><u>Projects</u></label>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project name</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project Name</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project Name</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project Name</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project Name</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project Name</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project Name</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Project Name</span>
					</div>
				</div>
			</div>
			<div class="promem">
				<label class="projecttag"><u>People</u></label>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
				<div class="peopledis">
					<div class="dispic"></div>
					<div class="disdetails">
						<span class="name">Banny Vishwas</span>
					</div>
				</div>
			</div>
		</div><label class="peopletags">Followers<span class="count"><i class="fa fa-users" aria-hidden="true"></i> 123</span></label>
		<div class="Followers">
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
			<div class="folpeo" data-toggle="tooltip" data-placement="bottom" title="User Name"></div>
		</div>
		</div>
		<div id="projectmanage">
			<label class="newslabel">Project 1: Face Recognition System</label>
		<div class="tablecontainer">
				<div class="procontrol">
					<i class="fa fa-trash" aria-hidden="true"></i>
					<i class="fa fa-download" aria-hidden="true"></i>
					<i class="fa fa-upload" aria-hidden="true"></i>
					<i class="fa fa-folder" aria-hidden="true"></i>
				</div>
				<table>
					<tr class="tbheader">
						<th class="checkbtn selectall"><input type="checkbox" name="vehicle" value="selectall"></th>
						<th class="thname">Name</th>
						<th class="datefl">Date of Upload</th>
						<th class="thdesc">Description</th>
					</tr>
					<tr class="chk1">
						<td class="checkbtn"><input type="checkbox" name="vehicle"></td>
						<td>ABC</td>
						<td>2019-02-25</td>
						<td>file or folder description sahdh asbdhsabdhasbdashbdahsbdashb</td>
					</tr>
					<tr class="chk2">
						<td class="checkbtn"><input type="checkbox" name="vehicle"></td>
						<td>ABC</td>
						<td>2019-02-25</td>
						<td>file or folder description sahdh asbdhsabdhasbdashbdahsbdashb</td>
					</tr>
					<tr class="chk3">
						<td class="checkbtn"><input type="checkbox" name="vehicle"></td>
						<td>ABC</td>
						<td>2019-02-25</td>
						<td>file or folder description sahdh asbdhsabdhasbdashbdahsbdashb</td>
					</tr>
					<tr class="chk4">
						<td class="checkbtn"><input type="checkbox" name="vehicle"></td>
						<td>ABC</td>
						<td>2019-02-25</td>
						<td>file or folder description sahdh asbdhsabdhasbdashbdahsbdashb</td>
					</tr>
					<tr class="chk5">
						<td class="checkbtn"><input type="checkbox" name="vehicle"></td>
						<td>ABC</td>
						<td>2019-02-25</td>
						<td>file or folder description sahdh asbdhsabdhasbdashbdahsbdashb</td>
					</tr>
				</table>
		</div>
		<div class="controlcont">
			<div class="projectrating">
				<a href="#" class="review reviact">Reviews & Ratings</a>
				<a href="#" class="disc">Discussion</a>
				<a href="#" class="sets">Settings</a>
			</div>
			<div class="mcont reviewsnrate">
				<div class="ratecont">
					<span class="ratecount">4.5</span>
					<span>Ratings:(100 <i class="fa fa-users" aria-hidden="true"></i>),</span>
					<span>12 Reviews</span>
				</div>
				<div class="showreviews">
					<div class="reviewmaterial">
						<div class="chatpic"></div>
						<span>this is review sd bashdjhasj dhasj dhjas hd jasdh jasd as dhajs dhajsadhjasdhjasdhjasdhjashdjasdhjash sakkasjxkas<br>wqh xusahxuashxasuxhas uhcsah cjasas chajschjashcjas hcjashc ja shcjashcjas h</span>
					</div>
				</div>
				<div class="showreviews">
					<div class="reviewmaterial">
						<div class="chatpic"></div>
						<span>this is review sd bashdjhasj dhasj dhjas hd jasdh jasd as dhajs dhajsadhjasdhjasdhjasdhjashdjasdhjash sakkasjxkas<br>wqh xusahxuashxasuxhas uhcsah cjasas chajschjashcjas hcjashc ja shcjashcjas h</span>
					</div>
				</div>
				<div class="showreviews">
					<div class="reviewmaterial">
						<div class="chatpic"></div>
						<span>this is review sd bashdjhasj dhasj dhjas hd jasdh jasd as dhajs dhajsadhjasdhjasdhjasdhjashdjasdhjash sakkasjxkas<br>wqh xusahxuashxasuxhas uhcsah cjasas chajschjashcjas hcjashc ja shcjashcjas h</span>
					</div>
				</div>
				<div class="showreviews">
					<div class="reviewmaterial">
						<div class="chatpic"></div>
						<span>this is review sd bashdjhasj dhasj dhjas hd jasdh jasd as dhajs dhajsadhjasdhjasdhjasdhjashdjasdhjash sakkasjxkas<br>wqh xusahxuashxasuxhas uhcsah cjasas chajschjashcjas hcjashc ja shcjashcjas h</span>
					</div>
				</div>
				<div class="showreviews">
					<div class="reviewmaterial">
						<div class="chatpic"></div>
						<span>this is review sd bashdjhasj dhasj dhjas hd jasdh jasd as dhajs dhajsadhjasdhjasdhjasdhjashdjasdhjash sakkasjxkas<br>wqh xusahxuashxasuxhas uhcsah cjasas chajschjashcjas hcjashc ja shcjashcjas h</span>
					</div>
				</div>
				<div class="chatcontrols">
					<i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
					<textarea placeholder="Give your Reviews.."></textarea>
				</div>
			</div>
			<div class="mcont discusb">
				<div class="showreviews">
					<div class="reviewmaterial">
						<div class="chatpic"></div>
						<span>this is review sd bashdjhasj dhasj dhjas hd jasdh jasd as dhajs dhajsadhjasdhjasdhjasdhjashdjasdhjash sakkasjxkas<br>wqh xusahxuashxasuxhas uhcsah cjasas chajschjashcjas hcjashc ja shcjashcjas h</span>
					</div>
				</div>
				<div class="chatcontrols">
					<i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
					<textarea placeholder="Give your Reviews.."></textarea>
				</div>
			</div>
			<div class="mcont prosettings">
				<form>
					<label for="proname"><b>Project Name:</b></label>
					<input type="text" name="proname" required>
					<label for="proname"><b>Subject of Interest:</b></label>
					<input type="text" name="proname" required>
					<label for="proname"><b>Description:</b></label>
					<textarea></textarea>
					<label for="proname"><b>Type:</b></label>
					<select>
						<option>Project</option>
						<option>Research</option>
						<option>Article</option>
					</select>
					<label for="proname"><b>Team Member:</b></label>
					<div class="proteam">
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
						</div>
					</div>
					<label for="proname"><b>Mentors:</b></label>
					<div class="proteam">
						<div class="peopledis">
							<div class="dispic"></div>
							<div class="disdetails">
								<span class="name">Banny Vishwas</span>
								<a href="#">Remove</a>
							</div>
						</div>
						<div class="peopledis">
							<i class="fa fa-user-plus fa-5x" aria-hidden="true"></i>
						</div>
					</div>
					<button type="submit" class="savebtn">Save</button>
				</form>
			</div>
		</div>
		</div>
		<div id="usersetting">
			<div class="generaldet">
				<div class="dispic"><a href="#"><i class="fa fa-pencil-square fa-2x" aria-hidden="true"></i></a></div>
				<div class="dets">
					<label for="proname"><b>Full Name:</b></label>
					<input type="text" name="proname" required>
					<label for="proname"><b>Phone No:</b></label>
					<input type="number" name="proname" required>
					<label for="proname"><b>Email Id:</b></label>
					<input type="email" name="proname" required>
					<label for="proname"><b>Change Password:</b></label>
					<input type="password" name="proname" required>
					<label for="proname"><b>Confirm Password:</b></label>
					<input type="password" name="proname" required>
					<label for="proname"><b>Description:</b></label>
					<textarea></textarea>
					<label for="proname"><b>Profession:</b></label>
					<input type="text" name="proname" required>
					<label for="proname"><b>Institute:</b></label>
					<input type="text" name="proname" required>
					<label for="proname"><b>Subject:</b></label>
					<input type="text" name="proname" required>
					<div class="inten">
					<label for="proname"><b>I want to use it for:</b></label>
					<select>
						<option>Project</option>
						<option>Research</option>
						<option>Articles</option>
					</select>
					<button>ADD</button>
					<table border="1">
						<tr>
							<th>Priority</th>
							<th>Name</th>
							<th>Edit</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Project</td>
							<td>
								<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
								<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
								<i class="fa fa-minus-circle" aria-hidden="true"></i>
							</td>
						</tr>
					</table>
					<label for="proname"><b>Interested In:</b></label>
					<input type="text" name="proname" required>
					<button>ADD</button>
					<table border="1">
						<tr>
							<th>Priority</th>
							<th>Name</th>
							<th>Edit</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Java</td>
							<td>
								<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
								<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
								<i class="fa fa-minus-circle" aria-hidden="true"></i>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Python</td>
							<td>
								<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
								<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
								<i class="fa fa-minus-circle" aria-hidden="true"></i>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Android</td>
							<td>
								<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
								<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
								<i class="fa fa-minus-circle" aria-hidden="true"></i>
							</td>
						</tr>
					</table>
					<button>Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="chatcontent">
		<div class="chatmember">
			<?php include("onlinestatus.php");?>
		</div>
	</div>
</div>
<div class="chatbox">
	<div class="chathead">
		<div class="perpic"></div>
		<div class="perdetails">
			<span class="peoplename">Banny Vishwas Abcd efghi...</span>
			<span class="type">(Team Member)</span>
		</div>
		<div class="percontrol">
			<div class="boxcon">
				<i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
			</div>
			<div class="lastseen">59min ago</div>
		</div>
	</div>
	<div class="chatarea">
		<div class="msgcont">
			<span class="msgsend">This is send msg.ahdbhsb chsbd chdsbchsd bchsd cbsdhcbs<span class="msgtime"> 10:00pm</span></span>
		</div>
		<div class="msgcont">
			<span class="msgrec">This is receive msg. dhjchdjschjsd hcjds chjsd chjsdcsdj<span class="msgtime"> 10:00pm</span></span>
		</div>
		<div class="msgcont">
			<span class="msgsend">This is send msg.ahdbhsb chsbd chdsbchsd bchsd cbsdhcbs<span class="msgtime"> 10:00pm</span></span>
		</div>
		<div class="msgcont">
			<span class="msgrec">This is receive msg. dhjchdjschjsd hcjds chjsd chjsdcsdj<span class="msgtime"> 10:00pm</span></span>
		</div>
		<div class="msgcont">
			<span class="msgsend">This is send msg.ahdbhsb chsbd chdsbchsd bchsd cbsdhcbs<span class="msgtime"> 10:00pm</span></span>
		</div>
		<div class="msgcont">
			<span class="msgrec">This is receive msg. dhjchdjschjsd hcjds chjsd chjsdcsdj<span class="msgtime"> 10:00pm</span></span>
		</div>
		<div class="msgcont">
			<span class="msgsend">This is send msg.ahdbhsb chsbd chdsbchsd bchsd cbsdhcbs<span class="msgtime"> 10:00pm <i class="fa fa-check-circle deliver seen" aria-hidden="true"></i></span></span>
		</div>
		<div class="msgcont">
			<span class="msgrec">This is receive msg. dhjchdjschjsd hcjds chjsd chjsdcsdj<span class="msgtime"> 10:00pm</span></span>
		</div>
		<div class="msgcont">
			<span class="msgsend">This is send msg.ahdbhsb chsbd chdsbchsd bchsd cbsdhcbs<span class="msgtime"> 10:00pm <i class="fa fa-check-circle deliver deliver" aria-hidden="true"></i></span></span>
		</div>
	</div>
	<div class="chatcontrols">
		<i class="fa fa-paperclip fa-2x" aria-hidden="true"></i>
		<i class="fa fa-picture-o fa-2x" aria-hidden="true"></i>
		<i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
		<textarea placeholder="Enter Message.."></textarea>
	</div>
</div>
<div id="usermenu">
	<div class="arrow"></div>
	<div class="usercontrol">
	<div class="userdetail">
		<div class="userdp"></div>
		<div class="usrdet">
			<span class="peoplename">Hey! Banny Vishwas</span>
			<span class="pname">(bannyvishwas2020)</span>
			<span>Followers: 1,230 people</span>
			<span>Ratings: 4.5 (1,230 people)</span>
		</div>
	</div>
		<a href="#" class="usrset">Settings</a>
		<a href="logout.php" class="logout">Sign Out</a>
	</div>
</div>
<div id="notifymenu">
	<div class="arrow"></div>
	<div class="notifycontainer">
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent">This is notification 1.</div>
		</a>
	</div>
</div>
<div id="requestmenu">
	<div class="arrow"></div>
	<div class="requestcontainer">
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Accepted Your request as Team Member of project XYZ. </div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Requested to join the team of Face Recognition.</div>
			<div class="rescontrol">
				<button class="accpt">Accept</button>
				<button class="rej">Reject</button>
			</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Requested to join the team of Face Recognition.</div>
			<div class="rescontrol">
				<button class="accpt">Accept</button>
				<button class="rej">Reject</button>
			</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Accepted Your request as Team Member of project XYZ. </div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Accepted Your request as Team Member of project XYZ. </div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Accepted Your request as Team Member of project XYZ. </div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Accepted Your request as Team Member of project XYZ. </div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Accepted Your request as Team Member of project XYZ. </div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Accepted Your request as Team Member of project XYZ. </div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Requested to join the team of Face Recognition.</div>
			<div class="rescontrol">
				<button class="accpt">Accept</button>
				<button class="rej">Reject</button>
			</div>
		</a>
		<a href="#">
			<div class="notifpic"></div>
			<div class="notifContent"><b>Banny Vishwas</b> Requested to join the team of Face Recognition.</div>
			<div class="rescontrol">
				<button class="accpt">Accept</button>
				<button class="rej">Reject</button>
			</div>
		</a>
	</div>
</div>
<div class="AddPeople">
	<div class="cross">
	<input type="text" placeholder="Search for people.."/>
	<button class="headersearch"><span class="glyphicon glyphicon-search"></span></button>
	<i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
	</div>
	<div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
	<div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
	<div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
	<div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
	<div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
	<div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
	<div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
</div>
<div class="newproject">
	<div class="cross">
	<i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i>
	</div>
				<form method="post" action="createproject.php">
					<h1 align="center">Create New Project</h1>
					<label for="proname"><b>Project Name:</b></label>
					<input type="text" name="proname" required>
					<label for="proname"><b>Subject of Interest:</b></label>
					<input type="text" name="subint">
					<label for="proname"><b>Description:</b></label>
					<textarea name="desc" placeholder="Describe your project...."></textarea>
					<label for="proname"><b>Type of work:</b></label>
					<select name="ptype[]">
						<option value="p">Project</option>
						<option value="r">Research</option>
						<option value="a">Article</option>
					</select>
					<label for="proname"><b>Type of Ownership:</b></label>
					<select name="own[]">
						<option value="o">Owner</option>
						<option value="m">Mentor</option>
					</select>
					<button type="submit" class="savebtn">Create</button>
				</form>
</div>
<div id="footer"></div>
</body>
<script>
function autoRefresh_div()
{
      $("#").load("loadmess.php");
	  // a function which will load data from other file after x seconds
}
//setInterval('autoRefresh_div()', 1000);
</script>
</html>