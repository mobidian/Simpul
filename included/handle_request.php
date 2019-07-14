 <?php
session_start();
require_once("dbconnect.php");
require_once("class_update.php");
require_once("class_select.php");
require_once("class_insert.php");
require_once("class_delete.php");

$other=new other;
$select=new selectData;
$insert=new insertData;
$update=new updateData;
$delete=new deleteData;
if(isset($_SESSION['member_id']))
{
	$idx=explode("/",$_SESSION['member_id']);
	$member_id=$idx[0];
}


if(isset($_GET['_mode']))
{
	$page=mysql_real_escape_string($_GET['_mode']);
	
	foreach ($_REQUEST as $key => $value):
		   $value =trim($value);
		   //$vars .= "$key = $value<br />";
		   $$key=$value;
	endforeach;
	
	if($page=="userLogin")
	{
		if(empty($remember))
			$remember=0;
		if($select->Login($username,$password,$remember,"userLogin")==false)
			echo "Invalid Login Details";
		else
			echo 1;
	}
	else if($page=="userReg")
	{
		$pass=rand(00000000,99999999);
		$pass=md5($pass);
		$member_code="MKTC".$pass."BS";
		$member_code=md5($member_code);
		
		if(!isset($inputNotification))
			$inputNotification=0;
			
		echo $insert->userReg($member_code,ucwords($inputFullname),$inputEmail,$inputPhone,$inputSpecialization,$inputUsername,$inputPassword,$inputNotification);
	}else if($page=="updateBio")
	{
		
		echo $update->updateBio($member_id,ucwords($inputFullname),$inputEmail,$inputPhone,$inputUsername);
	}else if($page=="updateUserPassword")
	{		
		$pword=md5($inputCurPass);
		$pword.=md5("marketcity");
		$inputCurPass=md5($pword);
		
		$pword=md5($inputConfirmPass);
		$pword.=md5("marketcity");
		$newPassword=md5($pword);
		
		if($inputConfirmPass!=$inputNewPass){
			echo json_encode(array("success"=>0,"Msg"=>"Password Mismatch. Ensure Your new password matches with comfirmed password"));
		}elseif($select->checkUserPass($member_id,$inputCurPass)){
			echo json_encode(array("success"=>0,"Msg"=>"You did not type your current password correctly."));
		}else{
		
			echo $update->updateUserPassword($member_id,$newPassword);
		}
	}
	else if($page=="loaduser")
	{
		$user_number="07035252276";
		echo $select->loaduser($user_number);
	}
	else if($page=="loadAlluser")
	{
		$myPhone=$_GET['myPhone'];
		
		echo $select->loadAlluser($myPhone);
	}
	else if($page=="loaduserlodge")
	{
		$user_number="07035252276";
		echo $select->loadLodgeName($user_number);
	}
	else if($page=="loadalllodges")
	{
		
		echo $select->loadAllLodges();
	}
	else if($page=="send")
	{   $recievername=$_GET['recievername'];
		$message=$_GET['message'];
		$name=$_GET['name'];
		$date=$_GET['date'];
        $senderNumber=$_GET['senderNumber'];
		$recieverNumber=$_GET['recieverNumber'];
		echo $insert->send($name,$message,$date,$senderNumber,$recieverNumber,$recievername);
		
	}
	else if($page=="loginPhone")
	{
		$phone=$_GET['phone'];
	

		echo $select->loginPhone($phone);
		
	}
	else if($page=="LoadUser")
	{
		$id_user=$_GET['id_user'];
	

		echo $select->LoadUser($id_user);
		
	}
	else if($page=="LodgeMate")
	{
		$lodge=$_GET['lodge'];
	    $phone=$_GET['phone'];

		echo $select->LodgeMate($lodge,$phone);
		
	}
	else if($page=="updateChat")
	{
		$Sender=$_GET['Sender'];
	    $reciever=$_GET['reciever'];

		echo $select->updateChat($Sender,$reciever);
		
	}
	else if($page=="updateChatBySeconds")
	{   
	    $myname=$_GET['myname'];
	    $recievername=$_GET['recievername'];
	    $phone=$_GET['phone'];
        $myphone=$_GET['myphone'];
		echo $select->updateChatBySeconds($phone,$myphone,$recievername,$myname);
		
	}
	else if($page=="loadAnotherLodgeMate")
	{   
	    $lodgId=$_GET['lodgId'];
	    $myPhone=$_GET['myPhone'];
		echo $select->loadAnotherLodgeMate($lodgId,$myPhone);
		
	}
	else if($page=="viewProfile")
	{   
	    $profileUserFullname=$_GET['profileUserFullname'];
	   $profileUserPhone=$_GET['profileUserPhone'];
		echo $select->viewProfile($profileUserFullname,$profileUserPhone);
		
	}
	else if($page=="lodgeGossip")
	{   
	    $gossip=$_GET['gossip'];
	    $mylodge=$_GET['mylodge'];
	    $myName=$_GET['myName'];
		$date=$_GET['date'];
		echo $insert->lodgeGossip($gossip,$mylodge,$myName,$date);
		
	}
	else if($page=="updateGossip")
	{   
	    $mylodge=$_GET['mylodge'];
		echo $select->updateGossip($mylodge);
		
	}
}
?>