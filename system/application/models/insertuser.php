<?php
class insertuser extends Model 
{
	function insertuser()
	{
		parent::Model();
		$this->load->database();
	}
	function getdata()
	{
		$query = $this->db->query('SELECT * FROM news ORDER BY sno DESC LIMIT 4');
		return $query->result();
	}
	
}
?>
