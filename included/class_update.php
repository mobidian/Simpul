<?php
class updateData extends dbconnect
{
	private $output;
	
	public function __construct(){
		parent::__construct();	
	}
	

	
	public function updateChatRecord($chat_id)
	{
		$sql="update tbl_chat set status=:status where chat_id=:chat_id";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':status'=>"old",':chat_id'=>$chat_id));
	}
	public function updateUserPassword($member_id,$newPassword)
	{
		$sql="update tbl_member set password=:newPassword where id_member=:member_id and delete_status=:d_status";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':member_id'=>$member_id,':newPassword'=>$newPassword,':d_status'=>0));
		
		$this->output =array("success"=>1,"Msg"=>"Your Password had been changed successfully.");
		return json_encode($this->output);
	}
	
	
}
?>