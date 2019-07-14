<?php
class insertData extends dbconnect
{
	private $output;
	public function __construct(){
		parent::__construct();	
	}

	
	public function send($name,$message,$date,$senderNumber,$recieverNumber,$recievername){
				$sql="insert into tbl_chat(name,message,dateOfchat,sender_Number,reciever_Number,status,recievername) values(:name,:message,:dateOfchat,:sender_Number,:reciever_Number,:status,:recievername)";
			$query=$this->conn->prepare($sql);
			$query->execute(array(':name'=>$name,':message'=>$message,':dateOfchat'=>$date,':sender_Number'=>$senderNumber,':reciever_Number'=>$recieverNumber,':status'=>"new",':recievername'=>$recievername));
		
		/*mysql_query("insert into  tbl_chat SET name='$name', message='$massege' , dateOfchat='$date'") or die("cannot save image no sucess ".mysql_error()); */
	}
	
	public function lodgeGossip($gossip,$mylodge,$myName,$date)
	{
		$sql="insert into tbl_gossip(gossip,gossip_owner,gossip_lodge,gossip_date) values(:gossip,:gossip_owner,:gossip_lodge,:gossip_date)";
			$query=$this->conn->prepare($sql);
			$query->execute(array(':gossip'=>$gossip,':gossip_owner'=>$myName,':gossip_lodge'=>$mylodge,':gossip_date'=>$date));
	}
	
}
?>