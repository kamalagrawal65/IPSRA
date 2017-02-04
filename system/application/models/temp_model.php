<?php
class temp_model extends Model 
{
	function temp_model()
	{
		parent::Model();
	}
	
	    function edit_tables($table1)
	{	
		
/*	$sql="ALTER TABLE feedback ADD date_time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP";
	$query = $this->db->query($sql); 	
 		$sql="update ibira set sub_category='Protein Domain Databases (Protein Classification)' where sub_category='Protein Domain Databases; Protein Classification'";
		$query = $this->db->query($sql);
		$sql="update publications set s_no=16 where s_no=456";
		$query = $this->db->query($sql);
		$sql="update publications set s_no=15 where s_no=457";
		$query = $this->db->query($sql);
		$sql="update publications set s_no=48 where s_no=458";
		$query = $this->db->query($sql);
		$sql="update publications set s_no=69 where s_no=459";
		$query = $this->db->query($sql);
		$sql="update publications set s_no=455 where s_no=460";
		$query = $this->db->query($sql);

*/
		if($this->session->userdata('logged_as') == 'admin')
		{
				$this->load->library('table');
				$sql="SELECT * FROM ".$table1;
				$query = $this->db->query($sql);
				$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" >' );
				$this->table->set_template($tmpl);
				$this->table->set_caption($table1);
				$result=$this->table->generate($query);
				return $result;
		}		
		else
		{		
				return "Tables are visible after Admin Login only";
		}
	}

		


}
?>