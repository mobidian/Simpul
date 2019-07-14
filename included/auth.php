<?php 
$root_dir=$_SERVER['PHP_SELF'];

if(isset($_SESSION['member_id'])){
	//pick the session id
	$ses_member_id=$_SESSION['member_id'];
	$ses_data=explode("/",$ses_member_id);
	$member_id=$ses_data[0];
}else  if(isset($_COOKIE['member_code'])){
	//pick the session id
	$cookie_member_code=$_COOKIE['member_code'];
	$member_data= $select->getMemberUsernameByMemberCode($cookie_member_code);
	$member_username= $member_data['email'];
	$member_fullname= $member_data['fullname'];
	$member_picture= $member_data['picture'];	

}

//check if page id is set i.e value=page1 or page2 for signup
if(isset($_GET['_page']))
	$pageId=$_GET['_page'];
	//check if the session is set
if(isset($_SESSION['mc_logged'])){
	//check if the root directory is that of startup.php
	if ($root_dir=="/mktcity/startup.php"){
		if ($pageId=="page1"){
			header("location:".$select->root."register/form2");	
		}
	}//endauth script for signup page
	else if($root_dir=="/mktcity/member.php"){
		$data=$select->getMemberData($member_id);
		
		if($data==false)
			header("location:".$select->root."/members/logout");
		else
			$data=explode("*",$data);
	}//endauth script for member page
}else{
	//check if the root directory is that of startup.php
	if ($root_dir=="/mktcity/startup.php"){
		//check if the root directory is that of startup.php
		if ($pageId=="page2"){
			header("location:".$select->root."register");	
		}
	}/* endauth script for signup page*/
	if($root_dir=="/mktcity/member.php"){
		header("location:".$select->root."register");	
	}
}
?>