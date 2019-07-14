<?php

class selectData extends dbconnect
{
	private $output;
	private $output2;
	private $url;
	public function __construct(){
		parent::__construct();	
	}
	//login function
	public function Login($username,$password,$remember,$category)
	{
		$pword=md5($password);
		$pword.=md5("marketcity");
		$mpassword=md5($pword);
	
		if($category=="userLogin")
			$sql="select * from  tbl_member where email=:username or username=:username and password=:password and delete_status=:d_status";
		else if($category=="adminLogin")
			$sql="";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':username'=>$username,':password'=>$mpassword,':d_status'=>0));
		
		$query->bindColumn("email",$xemail);
		$query->bindColumn("password",$xpassword);
		$query->bindColumn("member_code",$member_code);
		$query->bindColumn("id_member",$id_member);
		
		if($query->rowCount()==0)
			return false;
		else
		{
			while($query->fetch(PDO::FETCH_ASSOC))
			{
				if($mpassword==$xpassword)
				{
					$_SESSION['member_code']=$member_code;
					$_SESSION['member_id']=$id_member."/".$member_code;
					$_SESSION['mc_logged']=TRUE;
					
					//for coockies
					if(($remember==1)){
						
					  setcookie("member_code", $member_code, time()+60*24*60*60, "/"); // 60 days; 24 hours; 60 mins; 60secs
					  
					}else{
						setcookie("member_code", '', time()-42000, '/');
					}
					return true;
				}
				else
					return false;
			}
		}
	}
	
	public function checkExistingData($email,$phone)
	{
		$sql="select * from tbl_member where email=:email or phone=:phone and delete_status=:d_status";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':email'=>$email,':phone'=>$phone,':d_status'=>0));
		
		if($query->rowCount()>0)
			return false;
		else
			return true;
	}
	public function checkExistingEmail($email)
	{
		$sql="select * from tbl_member where email=:email delete_status=:d_status";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':email'=>$email,':d_status'=>0));
		
		if($query->rowCount()>0)
			return false;
		else
			return true;
	}
	public function checkExistingPhone($phone)
	{
		$sql="select * from tbl_member where phone=:phone delete_status=:d_status";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':phone'=>$phone,':d_status'=>0));
		
		if($query->rowCount()>0)
			return false;
		else
			return true;
	}
	
	
	public function checkUserPass($member_id,$inputCurPass)
	{		
		$sql="select * from tbl_member where id_member=:member_id and password=:inputCurPass and delete_status=:d_status";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':member_id'=>$member_id,':inputCurPass'=>$inputCurPass,':d_status'=>0));
		
		if($query->rowCount()>0)
			return false;
		else
			return true;
	}
	
	public function getCategory($type)
	{
		$sql="select * from tbl_productcat order by product_title asc";
		$query=$this->conn->prepare($sql);
		$query->execute();
		
		$query->bindColumn("id_product",$id_product);
		$query->bindColumn("product_title",$title);
		$query->bindColumn("url_title",$url);
		
		while($query->fetch(PDO::FETCH_BOTH))
		{
			if($type=="link")
				echo '<li><a href="'.$this->root.'product/'.$url.'" >'.$title.'</a></li>';
			else if($type=="select")
				echo '<option value="'.$url.'">'.$title.'</option>';
		}
	}
	
	
	public function loadLodgeName($user_number)
	{	
		
		$sql="select * from tbl_user where user_number=:user_number limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_number'=>$user_number));
		
		
		$query->bindColumn("user_lodge",$user_lodge);
		
		if($query->rowCount()==0)
			$this->output= "No Product yet. Please select another from the categories list.";
		else
		{                  
			$this->output='';
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output =json_encode($user_lodge);
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output =json_encode($user_lodge);
	}
	public function updateGossip($mylodge)
	{	
		
		$sql="select * from tbl_gossip where gossip_lodge=:gossip_lodge";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':gossip_lodge'=>$mylodge));
		
		$query->bindColumn("gossip_id",$gossip_id);
		$query->bindColumn("gossip",$gossip);
		$query->bindColumn("gossip_owner",$gossip_owner);
		$query->bindColumn("gossip_lodge",$gossip_lodge);
		$query->bindColumn("gossip_date",$gossip_date);
			
		if($query->rowCount()==0)
			$this->output= "nothing";
		else
		{                  
			
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output .="Gossip From: <b>".$gossip_owner."</b>:  ".$gossip."  | In: ".$gossip_lodge."   |  Date: ".$gossip_date."</br>"; 
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output;
	}
	public function loginPhone($phone)
	{	
		
		$sql="select * from tbl_user where user_number=:user_number limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_number'=>$phone));
		
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		
		if($query->rowCount()==0)
			$this->output= "No Product yet. Please select another from the categories list.";
		else
		{                  
			
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output =json_encode($user_id.'*'.$user_full_name.'*'.$user_school.'*'.$user_lodge.'*'.$user_gender);
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output =json_encode($user_id.'*'.$user_full_name.'*'.$user_school.'*'.$user_lodge.'*'.$user_gender);
	}
	
	public function viewProfile($profileUserFullname,$profileUserPhone)
	{	
		
		$sql="select * from tbl_user where user_number=:user_number  and user_full_name=:ser_full_name limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_number'=>$profileUserPhone,':ser_full_name'=>$profileUserFullname));
		
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		$query->bindColumn("user_number",$user_number);
		$query->bindColumn("College",$College);
		$query->bindColumn("dept",$dept);
		if($query->rowCount()==0)
			$this->output= "No Product yet. Please select another from the categories list.";
		else
		{                  
			
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output =json_encode($user_id.'*'.$user_full_name.'*'.$user_school.'*'.$user_lodge.'*'.$user_gender.'*'.$user_number.'*'.$College.'*'.$dept);
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output =json_encode($user_id.'*'.$user_full_name.'*'.$user_school.'*'.$user_lodge.'*'.$user_gender.'*'.$user_number.'*'.$College.'*'.$dept);
	}
	public function LoadUser($id_user)
	{	

		$sql="select * from tbl_user where user_id=:user_id limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_id'=>$id_user));
		
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		$query->bindColumn("user_number",$user_number);
		$query->bindColumn("status",$status);
		if($query->rowCount()==0)
			$this->output= "No Product yet. Please select another from the categories list.";
		else
		{                  
			
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output =json_encode($user_id.'*'.$user_full_name.'*'.$user_school.'*'.$user_lodge.'*'.$user_gender.'*'.$user_number.'*'.$status);
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output =json_encode($user_id.'*'.$user_full_name.'*'.$user_school.'*'.$user_lodge.'*'.$user_gender.'*'.$user_number.'*'.$status);
	}
	public function updateChat($Sender,$reciever)
	{	

		$sql="select * from tbl_chat where sender_Number=:sender_Number and reciever_Number=:reciever_Number or sender_Number=:reciever_Number and reciever_Number=:sender_Number";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':sender_Number'=>$Sender,':reciever_Number'=>$reciever));
		
		
		$query->bindColumn("chat_id",$chat_id);
		$query->bindColumn("name",$name);
		$query->bindColumn("message",$message);
		$query->bindColumn("dateOfchat",$dateOfchat);
		$query->bindColumn("sender_Number",$sender_Number);
		$query->bindColumn("reciever_Number",$reciever_Number);
		if($query->rowCount()==0)
			$this->output= "<p>No Chat yet.</p>";
		else
		{                  
			
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
				$this->output .="<p><b>".$name."</b>: ".$message."  |  ".$dateOfchat."</p>"; 
					
					//$this->output .=$chat_id.'*'.$name.'*'.$message.'*'.$dateOfchat.'*'.$sender_Number.'*'.$reciever_Number;
			}
				            
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output.'';
	}
	public function updateChatBySeconds($phone,$myphone,$recievername,$myname)
	{	
/*	$sql="select * from tbl_chat where reciever_Number=:reciever_Number and recievername=:recievername and name=:myname and status=:status limit 1";*/
		$sql="select * from tbl_chat where  recievername=:myname and name=:recievername and status=:status limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':status'=>"new",':recievername'=>$recievername,':myname'=>$myname));
		
		
		$query->bindColumn("chat_id",$chat_id);
		$query->bindColumn("name",$name);
		$query->bindColumn("message",$message);
		$query->bindColumn("dateOfchat",$dateOfchat);
		$query->bindColumn("sender_Number",$sender_Number);
		$query->bindColumn("reciever_Number",$reciever_Number);
		if($query->rowCount()==0)
			{
			}
		else
		{                  
			
			while($query->fetch(PDO::FETCH_BOTH))
			{	
			
			  if($myphone==$reciever_Number){
				  $this->output .="<p><b>".$name."</b>:  ".$message."  |  ".$dateOfchat."</p>"; 
			  }
			  else{
				  $this->output .="am not the owner";
			  }
				//$this->output .="<p><b>".$name."</b>: message ".$message."  date ".$dateOfchat."</p>"; 
				@updateData::updateChatRecord($chat_id);
				
			}
	            
		}
		
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output;
	}
public function LodgeMate($lodge,$phone)
	{	
		
		$sql="select * from tbl_user where user_lodge=:user_lodge and user_number!=:phone";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_lodge'=>$lodge,':phone'=>$phone));
		
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		$query->bindColumn("user_number",$user_number);
		$query->bindColumn("status",$status);
		if($query->rowCount()==0)
			$this->output= "No User Yet.";
		else
		{                  

			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output .='<div id="tryuser"> <ul data-role="listview"  data-inset="true"> 
		<a href="#lmp" ><img src="icons/77-ekg.png" /><input type="button" id="" onClick="update('.$user_id.');" name="user_full_name" value="['.$user_full_name.']'.'" /></a>: '.$status.'</hr>';
			}
				$this->output .=' </ul></div>';
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output;
	}public function loadAlluser($myPhone)
	{	
		
		$sql="select * from tbl_user where  user_number!=:phone";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':phone'=>$myPhone));
		
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		$query->bindColumn("user_number",$user_number);
		if($query->rowCount()==0)
			$this->output= "No User Found";
		else
		{                  

			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output .=' <ul>
		<a href="#lmp" ><input type="button" id="" onClick="update('.$user_id.');"  value="['.$user_full_name.'               ]'.'" /></a>';
			}
				$this->output .=' </ul>';
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output;
	}
	public function loadInnerLodgeMate($lodge_name)
	{	
		
		$sql="select * from tbl_user where 	user_lodge=:user_lodge";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_lodge'=>$lodge_name));
		
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		$query->bindColumn("user_number",$user_number);
		if($query->rowCount()==0)
		{
			//$this->output= "No User Found in this Lodge";
		}
		else
		{                  

			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					@$return.=$user_full_name;
			}
				//$this->output .=' </ul>';
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			return $return;
	}
	public function loadAnotherLodgeMate($lodgId,$myPhone)
	{	
		
		$sql="select * from tbl_lodge where lodge_id=:lodge_id limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':lodge_id'=>$lodgId));
		
		
		$query->bindColumn("lodge_id",$lodge_id);
		$query->bindColumn("lodge_name",$lodge_name);
		$query->bindColumn("school_id",$school_id);
	
		if($query->rowCount()==0)
		{
			//$this->output= "No User Found in this Lodge";
		}
		else
		{                  
           
			while($query->fetch(PDO::FETCH_BOTH))
			{	
					
					///////////////////////////////query for inner Lodge/////////////////////////////////////////
									$sql="select * from tbl_user where 	user_lodge=:user_lodge and user_number!=:myPhone";
									
									$query=$this->conn->prepare($sql);
									$query->execute(array(':user_lodge'=>$lodge_name,':myPhone'=>$myPhone));
									
									
									$query->bindColumn("user_id",$user_id);
									$query->bindColumn("user_full_name",$user_full_name);
									$query->bindColumn("user_school",$user_school);
									$query->bindColumn("user_lodge",$user_lodge);
									$query->bindColumn("user_gender",$user_gender);
									$query->bindColumn("user_number",$user_number);
									$query->bindColumn("status",$status);
									if($query->rowCount()==0)
									{
								     $this->output= "No User Found in this Lodge";
									}
									else
									{                  
									
									while($query->fetch(PDO::FETCH_BOTH))
									{	
									
									       $this->output .='<div id="tryuser"> <ul data-role="listview"  data-inset="true"> 
		<a href="#lmp" ><img src="icons/77-ekg.png" /><input type="button" id="" onClick="update('.$user_id.');" name="user_full_name" value="['.$user_full_name.']'.'" /></a>: '.$status.'</hr>';
			}
				$this->output .=' </ul></div>';
									}
								
					//////////////////////////////////////////////////////////////////////////
					
					
					
			}
				
		}
		
			echo $this->output;
	}
	/*public function updateChat()
	{	
		
		$sql="select * from tbl_chat where who:who ORDER BY DESC limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':who'=>0));
		
		
		$query->bindColumn("name",$name);
		$query->bindColumn("message",$message);
		$query->bindColumn("dateOfchat",$date);
		
		if($query->rowCount()==0)
			$this->output= "";
		else
		{                  
			$this->output='';
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output =json_encode($name." ".$message." ".$date);
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output =json_encode($name." ".$message." ".$date);
	}*/
	/*public function loaduser($user_number)
	{	
		
		$sql="select * from tbl_user where user_number=:user_number limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_number'=>$user_number));
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_number",$user_number);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		$query->bindColumn("user_email",$user_email);
		
		$_SESSION['lodge']=$user_lodge;
        $_SESSION['number']=$user_number; 
		                                          
		if($query->rowCount()==0)
			$this->output= "No Product yet. Please select another from the categories list.";
		else
		{                  
			$this->output='';
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output =json_encode($user_full_name. "  From ". $user_school." Living in ".$user_lodge);
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output =json_encode($user_full_name. "  From ". $user_school." Living in ".$user_lodge);
			
	}*/
	
	public function loadUserLodgeMate()
	{	
		$lodge=$_SESSION['lodge'];
		$sql="select * from tbl_user where user_lodge=:user_lodge limit 1";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':user_number'=>$lodge));
		
		$query->bindColumn("user_id",$user_id);
		$query->bindColumn("user_number",$user_number);
		$query->bindColumn("user_full_name",$user_full_name);
		$query->bindColumn("user_school",$user_school);
		$query->bindColumn("user_lodge",$user_lodge);
		$query->bindColumn("user_gender",$user_gender);
		$query->bindColumn("user_email",$user_email);
		                                          
		if($query->rowCount()==0)
			$this->output= "No Product yet. Please select another from the categories list.";
		else
		{                  
			$this->output='';
			while($query->fetch(PDO::FETCH_BOTH))
			{	
				
					$this->output =json_encode($user_full_name. "  From ". $user_school." Living in ".$user_lodge);
			}
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output =json_encode($user_full_name. "  From ". $user_school." Living in ".$user_lodge);
	}
	
	public function loadAllLodges()
	{	
		//$lodge=$_SESSION['lodge'];
		$sql="select * from tbl_lodge where school_id=:value order by lodge_name ASC";
		
		$query=$this->conn->prepare($sql);
		$query->execute(array(':value'=>1));
		
		$query->bindColumn("lodge_id",$lodge_id);
		$query->bindColumn("lodge_name",$lodge_name);
		$query->bindColumn("school_id",$school_id);
	
		                                          
		if($query->rowCount()==0)
			$this->output= "No Lodge Found.";
		else
		{                  
			$this->output='<form id="k">
                
              
			<ul data-role="listview"  data-inset="true">';
				$num=0;
			while($query->fetch(PDO::FETCH_BOTH))
			{	
			
					$this->output .=' <ul data-role="listview"  data-inset="true"> 
		<a href="#page" ><img src="icons/77-ekg.png" /><input type="button" id="" onClick="getAnotherLodge('.$lodge_id.');"  value="['.$lodge_name.'               ]'.'" /></a></hr>';
			}
				$this->output .=' </ul>';
				
		}
		//$this->output =array("success"=>1,"Msg"=>$user_full_name);
			echo $this->output;
	}
	
}
?>