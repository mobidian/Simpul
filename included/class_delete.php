<?php
class deleteData extends dbconnect
{
	
	public function __construct(){
		parent::__construct();	
	}
	
	public function deleteBusiness($biz_id)
	{
		$sql="update tbl_business set  delete_status=:d_status where id_business=:id_biz";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':id_biz'=>$biz_id,':d_status'=>1));
		
		$this->output =array("success"=>1,"Msg"=>"Business Deleted");
		return json_encode($this->output);
	}
	public function deleteProduct($p_id)
	{
		$sql="update tbl_product set  delete_status=:d_status where id_products=:p_id";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':p_id'=>$p_id,':d_status'=>1));
		
		$this->output =array("success"=>1,"Msg"=>"Business Deleted");
		return json_encode($this->output);
	}
	public function deletePartner($p_id)
	{
		$sql="update tbl_partner set  delete_status=:d_status where partnership_id=:p_id";
		$query=$this->conn->prepare($sql);
		$query->execute(array(':p_id'=>$p_id,':d_status'=>1));
		
		$this->output =array("success"=>1,"Msg"=>"Partnership Deleted. Please wait you are being redirected.");
		return json_encode($this->output);
	}
}
?>