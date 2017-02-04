<?php
class tree_model extends Model 
{
	function tree_model()
	{
		parent::Model();
		$this->load->database();
		
	}
	function database()
	{
		$database = 'ibira';
		return $database;
	}
	
	function adsearch_node($terms)
	{
			$database = $this->database();
			$sql = "SELECT *
						FROM $database
						WHERE $terms	";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
			$query = $this->db->query($sql);
		
		 return $query->result();
	}
	
	function ad_total_no_of_records($terms)
	{
		$database = $this->database();
		$sql = "SELECT COUNT(*) AS count
								FROM $database
								WHERE $terms
								";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql);
				 return $query->row()->count;
	}
	function ad_no_of_records_in_main_cluster($main_clusters,$terms)
	{
		$database = $this->database();
		$sql = "SELECT COUNT(*) AS count
								FROM $database
								WHERE $terms   AND (main_clusters = (?)  )	";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql, array($main_clusters) );
				 return $query->row()->count;
	}
	
	function ad_search_main_clusters($main_clusters,$terms)
	{
		$database = $this->database();
		$sql = "SELECT *
						FROM $database
						WHERE $terms 
						AND (main_clusters = (?)  )
						";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql, array($main_clusters) );
		return $query->result();
	}
	function ad_no_of_records_in_main_category($main_clusters,$main_category,$terms)
	{
			$database = $this->database();
			$sql = "SELECT COUNT(*) AS count
								FROM $database
								WHERE $terms   
								AND ((main_clusters = (?)  ) AND  ( main_category = (?)) ) 	";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
			$query = $this->db->query( $sql, array($main_clusters,$main_category) );
				 return $query->row()->count;
		
	}
	function ad_no_of_records_of_others_main_category($main_clusters,$terms)
	{
		$database = $this->database();
		$main_category = '';
		$sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms 
						AND ((main_clusters = (?)  ) AND  ( main_category = (?) ) )  	";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql, array($main_clusters,$main_category) );
		 return $query->row()->count;
	}
	function ad_search_sub_clusters($main_clusters,$main_category,$terms)
	{
		$database = $this->database();
		$sql = "SELECT *
						FROM $database
						WHERE $terms 
						AND ((main_clusters = (?)  ) AND  ( main_category = (?)) )	";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql, array($main_clusters,$main_category) );
		return $query->result();
	}
	
	function ad_no_of_records($main_clusters,$main_category,$sub_category,$terms)
	{
		$database = $this->database();
		$sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms 
						AND ((main_clusters = ('$main_clusters')  ) 
						AND ( main_category = ('$main_category')) 
						AND  (  sub_category = ('$sub_category') ) )	";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql, array($main_clusters,$main_category,$sub_category) );
		 return $query->row()->count;
	}
	function ad_no_of_records_of_others($main_clusters,$main_category,$terms)
	{
		$database = $this->database();
		$sub_category = '';
		$sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms 
						AND ((main_clusters = (?)  ) AND  ( main_category = (?)) AND  ( sub_category = (?) ) )	";
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql, array($main_clusters,$main_category,$sub_category) );
		 return $query->row()->count;
	}
	function ad_no_of_records_of_node($terms,$node,$item)
	{
		$database = $this->database();
		$sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms 
						AND ( ( MATCH ($item) AGAINST (?) > 0 OR ( $item LIKE '%$node%')   ) )";
					
//chages by nitin 22_04_2011
			$sql = $sql ." order by main_clusters, main_category, sub_category"; 
		$query = $this->db->query( $sql, array($node) );
		 return $query->row()->count;
	}
	
	
}
?>
