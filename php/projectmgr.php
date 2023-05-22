<?php

?>
<html>
<head>
<title>Alliance</title>
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
		<a href="index.php" class="menuopt active">Dashboard</a>
		<a href="#" class="menuopt">People</a>
	</div>
	<div class="mid">
		<select>
			<option>Topic</option>
			<option>Institute</option>
			<option>People</option>
		</select>
		<input type="text"/>
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
<div id="dashboard">
	<div class="procontainer">
		<div class="mypro mar">
			<div class="proheader">
				<label class="fl-lt">My Documents</label>
				<div class="fl-rt complete btnn"></div>
				<div class="fl-rt ongoing btnn"></div>
				<div class="fl-rt add btnn"></div>
			</div>
			<div class="proname">
				<div class="proitem">
					<a href="#">Project 1: XYZ </a>
					<div class="reviews">
					<a href="#">32 Reviews</a>
					<a href="#">12 Discussion </a>
					</div>
				</div>
				<div class="proitem">
					<a href="#">Article 2: hello</a>
					<div class="reviews">
					<a href="#">32 Reviews</a>
					<a href="#">12 Discussion </a>
					</div>
				</div>
				<div class="proitem">
					<a href="#">Research Paper 1: ABC</a>
					<div class="reviews">
					<a href="#">32 Reviews</a>
					<a href="#">12 Discussion </a>
					</div>
				</div>
				</div>
			</div>
		<div class="mypro mar">
			<div class="proheader">
				<label class="fl-lt">Mentored Documents</label>
				<div class="fl-rt complete btnn"></div>
				<div class="fl-rt ongoing btnn"></div>
				<div class="fl-rt add btnn"></div>
			</div>
			<div class="proname">
				<div class="proitem">
					<a href="#">Project 1: AXB</a>
					<div class="reviews">
					<a href="#">32 Reviews</a>
					<a href="#">12 Discussion </a>
					</div>
				</div>
				<div class="proitem">
					<a href="#">Article 2: hello</a>
					<div class="reviews">
					<a href="#">32 Reviews</a>
					<a href="#">12 Discussion </a>
					</div>
				</div>
				<div class="proitem">
					<a href="#">Research Paper 1: ABC</a>
					<div class="reviews">
					<a href="#">32 Reviews</a>
					<a href="#">12 Discussion </a>
					</div>
				</div>
				</div>
			</div>
	</div>
	<div class="vrdiv"></div>
	<div class="maincontent">
		<label class="newslabel">Project 1: Face Recognition System</label>
		<div class="tablecontainer">
				<div class="procontrol">
					<i class="fa fa-trash" aria-hidden="true"></i>
					<i class="fa fa-download" aria-hidden="true"></i>
					<i class="fa fa-upload" aria-hidden="true"></i>
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
	<div class="vrdiv vr-2"></div>
	<div class="chatcontent">
		<div class="chatmember">
			<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">Banny Vishwas</span>
					<div class="teamtag">
					<span class="pname">Hackathon</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>
			<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">Banny Vishwas</span>
					<div class="teamtag">
					<span class="pname">Hackathon</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>
			<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">Banny Vishwas</span>
					<div class="teamtag">
					<span class="pname">Hackathon</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>
			<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">Banny Vishwas</span>
					<div class="teamtag">
					<span class="pname">Hackathon</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>
			<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">Banny Vishwas</span>
					<div class="teamtag">
					<span class="pname">Hackathon</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>
			<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">Banny Vishwas</span>
					<div class="teamtag">
					<span class="pname">Hackathon</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>
			<div class="chatitem">
				<div class="chatpic">
					<div class="status"></div>
				</div>
				<div class="chatdetails">
					<span class="peoplename">Banny Vishwas</span>
					<div class="teamtag">
					<span class="pname">Hackathon</span>
					<span class="type">(Team Member)</span>
					</div>
					<div class="showmess">+1
					</div>
				</div>
			</div>
		</div>
		<div class="chatsearch">
			<input type="text"/>
			<button class="chatmemsearch"><span class="glyphicon glyphicon-search"></span></button>
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
		<a href="#">Settings</a>
		<a href="#">Sign Out</a>
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
	</div><div class="peopledis">
		<div class="dispic"></div>
		<div class="disdetails">
			<span class="name">Banny Vishwas</span>
			<a href="#">Send Request</a>
		</div>
	</div>
</div>
<div id="footer"></div>
</body>
</html>