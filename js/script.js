var a=$(window).height();
var selectchkcount=0;
$(document).ready(function(){
	 $(".fa-user-plus").click(function() {
	   $(".AddPeople").show();
	   event.stopPropagation();
   });
   
   $(".newproject").click(function() {
	   event.stopPropagation();
   });
   $(".AddPeople").click(function() {
	   event.stopPropagation();
   });
   $(".add").click(function() {
	   $(".newproject").show();
	   event.stopPropagation();
   });
   $(".newproject i").click(function() {
	   $(".newproject").hide();
	   event.stopPropagation();
   });
	$(document).click( function(){
    $('#usermenu').hide();
	$(".notifbtn").removeClass("alertact");
	$("#notifymenu").hide();
	$("#requestmenu").hide();
	$(".newproject").hide();
	$(".AddPeople").hide();
	});
	//Click on dashboard
	$(".Dashnav").click(function(){
		$("#newsfeed").show();
		$("#peoplesec").hide();
		$("#projectmanage").hide();
		$("#usersetting").hide();
	});
	$(".peopnav").click(function(){
		$("#newsfeed").hide();
		$("#peoplesec").show();
		$("#projectmanage").hide();
		$("#usersetting").hide();
	});
	$(".proitem a").click(function(){
		$("#newsfeed").hide();
		$("#peoplesec").hide();
		$("#projectmanage").show();
		$("#usersetting").hide();
	});
	$(".usrset").click(function(){
		$("#newsfeed").hide();
		$("#peoplesec").hide();
		$("#projectmanage").hide();
		$("#usersetting").show();
		$(document).click();
	});
	//user setting menu
	$('#usermenu').click( function(event){
    event.stopPropagation();
	});
	
	$('.profile').click( function(event){
		event.stopPropagation();
		$('#usermenu').toggle();
		$("#notifymenu").hide();
		$(".notifbtn").removeClass("alertact");
		$("#requestmenu").hide();
	});
	
	//Notification buttons Alerts
	$('.notifbtn').click( function(event){
		$('#usermenu').hide();
      $(".notifbtn").removeClass("alertact");
		$(this).addClass("alertact");
		$(this).removeClass("isnotif");
		var clname=this.className;
		if(clname.indexOf("users")!=-1)
		{
			$(".fa-users .alertcount").hide();
			$("#requestmenu").show();
			$("#notifymenu").hide();
		}else{
			$("#notifymenu").show();
			$("#requestmenu").hide();
			$(".fa-bell .alertcount").hide();
		}
		event.stopPropagation();
	});
	
	//toggle filter button
	$(".fil").click(function() {
      $(".fil").removeClass("headerbtnact");
      $(this).addClass("headerbtnact");
   });
   $(".menuopt").click(function() {
      $(".menuopt").removeClass("active");
      $(this).addClass("active");
   });
   $(".chatitem").click(function() {
	   $(".chatbox").show();
	   $(".showmess").hide();
   });
   $(".fa-times-circle-o").click(function() {
	   $(".chatbox").hide();
   });
   
   //table tr click list
   $(".tablecontainer tr").click(function() {
	   var gnam=this.className;
	   if(gnam.indexOf("tbheader")!=-1){
		   if($('.selectall input').prop('checked'))
			{
				$('.checkbtn input').prop('checked', false);
			}else
			{
				$('.checkbtn input').prop('checked', true);
			}  
	   }else if(gnam.indexOf("chk")!=-1)
	   {
			if($("."+this.className+" input").prop('checked'))
			   {
					$("."+this.className+" input").prop('checked',false);
			   }else
			   {
					$("."+this.className+" input").prop('checked',true);
			   }
	   }
   });
   
   //Project Manager //
   $(".projectrating a").click(function() {
	$(".projectrating a").removeClass("reviact");
	$(this).addClass("reviact");
	var na=this.className;
	if(na.indexOf("review")!=-1)
	{
		$(".reviewsnrate").show();
		$(".discusb").hide();
		$(".prosettings").hide();
	}else if(na.indexOf("disc")!=-1)
	{
		$(".reviewsnrate").hide();
		$(".discusb").show();
		$(".prosettings").hide();
		
	}else
	{
		$(".reviewsnrate").hide();
		$(".discusb").hide();
		$(".prosettings").show();
		
	}
   });
   $(".cross i").click(function() {
	   $(".AddPeople").hide();
   });
});
$(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - a) {
           //Ajax Load Script
    }
});
var back=0;
//Filter
function showproject() {
	var searchval=$(".mid input").val();
	var searchopt=$("#searchoption").val();
	var optiontext="";
    if (searchval == "") {
		$('#newsfeed').show();
		//$('#newsfeed').append("");
        return;
    } else {
		//$('#newsfeed').hide();
		if(searchopt==1)
		{
			optiontext="projname";
		}else if(searchopt==2)
		{
			optiontext="institute";
		}else
		{
			optiontext="email";
		}
        $.ajax({
			  type: "POST",
			  dataType: 'json',
			  cache: false,
			  url: "filterpro.php",
			  data: { searchval: searchval,
			        optiontext: optiontext },
			  success: function(data){
				  //$('#newsfeed').append(data);
				  alert(data);
			  }
			});
    }
}