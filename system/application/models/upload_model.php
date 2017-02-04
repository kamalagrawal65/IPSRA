<?php
class upload_model extends Model 
{
	function upload_model()
	{
		parent::Model();
	}
	
	function insert_data($file,$data)
	{
		if($this->db->insert($file, $data))
			return TRUE;		
		else 
			return FALSE; 
	}

	function total_res()
	{
		$sql = "SELECT count(*) as Total_Records FROM ibira ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	function last_res()
	{
		$sql = "SELECT MAX(master_list) as Total_Records FROM ibira ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	
	
	function total_pub()
	{
		$sql = "SELECT count(*) as Total_Records FROM publications ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	
	function last_pub()
	{
		$sql = "SELECT MAX(s_no) as Total_Records FROM publications ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	
	function total_course()
	{
		$sql = "SELECT count(*) as Total_Records FROM inst_courses ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	
	function last_course()
	{
		$sql = "SELECT MAX(s_no) as Total_Records FROM inst_courses ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	
	function update_ibira()
	{	
		$sql = "UPDATE ibira SET main_category ='' WHERE main_category  IS NULL";
		$query = $this->db->query($sql);
		$sql = "UPDATE ibira SET sub_category='' WHERE sub_category IS NULL";
		$query = $this->db->query($sql);
		
	}
	
	
}




?>