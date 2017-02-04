<?php
class country extends Model 
{
	function country()
	{
		parent::Model();
		$this->load->database();
	}
	function search_country($terms)
	{
		
			$sql = "SELECT1 *
						FROM finaldb
						WHERE MATCH (Name_of_Database,Keywords) AGAINST (?) > 0 OR (Name_of_Database LIKE '%$terms%' OR Keywords LIKE '%$terms%')
						";
			$query = $this->db->query($sql, array($terms));
		
		 return $query->result();
	}
}
?>
