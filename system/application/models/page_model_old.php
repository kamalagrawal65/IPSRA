<?php
class Page_model extends Model
{
    function Page_model()
    {
        parent::Model();
 
        // Make the database available to all the methods
        $this->load->database();
    }
	function database()
	{
		$database = 'ibira';
		return $database;
	}
	
	    function update_pub()
	{	
		$sql="update ibira,publications set ibira.view_pub='Yes' where ibira.master_list=publications.master_list";
		$query = $this->db->query($sql);
		return "Publication Records Updated.<br>Close this Window.";
	}
	
	    function view_res()
	{	
		
		$master_list_no=$this->session->userdata('master_list_no');
		$sql="select * from ibira where master_list =".$master_list_no;
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function view_pub()
	{	
		$master_list_no=$this->session->userdata('master_list_no');
		$sql="select * from publications where master_list =".$master_list_no;
		$query = $this->db->query($sql);
		return $query->result();
		
	}
	
	function search($terms, $start = 0, $results_per_page = 0)
    	{
    		$database = $this->database();
			// Determine whether we need to limit the results
			if ($results_per_page > 0)
			{
				$limit = "LIMIT $start, $results_per_page";
			}
			else
			{
				$limit = '';
			}
			// Execute our SQL statement and return the result
						$sql = "SELECT * FROM $database 
						WHERE $terms 
						$limit";
						$query = $this->db->query($sql);
			return $query->result();
	}
	
	function count_search_results($terms)
    {
      			$database = $this->database();

	    // Run SQL to count the total number of search results
        $sql = "SELECT COUNT(*) AS count
				FROM $database
				WHERE $terms";
        $query = $this->db->query($sql, array($terms));
        return $query->row()->count;
    }
	
    function browse_data($terms, $start = 0, $results_per_page = 0)
    	{
    		$database = $this->database();
			// Determine whether we need to limit the results
			if ($results_per_page > 0)
			{
				$limit = " LIMIT $start, $results_per_page";
			}
			else
			{
				$limit = '';
			}
		$sql="select * from ibira where Name_of_Resource like '";
		$sql=$sql.$terms."%' order by Name_of_Resource".$limit;
		$query = $this->db->query($sql);	
		return $query->result();
	}
	
	function count_browse_results($terms)
    {
      			$database = $this->database();

	    // Run SQL to count the total number of search results
		$sql="SELECT COUNT(*) AS count from ibira where Name_of_Resource like '";
		$sql=$sql.$terms."%' ";
		$query = $this->db->query($sql);
      	return $query->row()->count;
    }
	
    	
	function search_cat()
	{
				$database = $this->database();

		$sql = "SELECT *
					FROM $database";
		$query = $this->db->query($sql);
		return $query->result();
	}
	 function advanced_search_model_new($node,$ast,$terms, $start = 0, $results_per_page = 0)
    {
		$database = $this->database();
        // Determine whether we need to limit the results
        if ($results_per_page > 0)
        {
            
			$limit = "LIMIT $start, $results_per_page";
        }
        else
        {
            $limit = '';
        }
 
        // Execute our SQL statement and return the result
       
			$sql = "SELECT * FROM $database	WHERE $terms 
					and ( MATCH ($node) AGAINST (?) > 0 OR ( $node LIKE '%$ast%') )
					$limit";
							  
							  $query = $this->db->query($sql,array($ast));
	
	 	return $query->result();
	  
    }
	
	
	
	
	function count_advanced_search_results_new($node,$ast,$terms)
    {
       			$database = $this->database();

	    // Run SQL to count the total number of search results
        $sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms
					    and ( MATCH ($node) AGAINST (?) > 0  OR ( $node LIKE '%$ast%') )
						";
        $query = $this->db->query($sql, array($terms, $ast));
        return $query->row()->count;
    }
	
	
	
	
	/*advance2*/
	 function advanced_search_model_21($sub_cat,$main_cat,$terms, $start = 0, $results_per_page = 0)
    {
       			$database = $this->database();

	    // Determine whether we need to limit the results
        if ($results_per_page > 0)
        {
            
			$limit = "LIMIT $start, $results_per_page";
        }
        else
        {
            $limit = '';
        }
 
        // Execute our SQL statement and return the result
       
			$sql = "SELECT *
						FROM $database
						WHERE $terms
						AND ( (main_category = '$sub_cat')  )
						AND ( (main_clusters = '$main_cat') )
						$limit";
			
        	$query = $this->db->query($sql, array($terms));
	
	 	return $query->result();
	  
    }
	
	
	
	
	function count_advanced_search_results_21($sub_cat,$main_cat,$terms)
    {
				$database = $this->database();

        // Run SQL to count the total number of search results
        $sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms
						AND ( (main_category = '$sub_cat')  )
						AND ( (main_clusters = '$main_cat')   )
						";
      $query = $this->db->query($sql, array($terms));
        return $query->row()->count;
    }
	
	
	
		
	function advanced_search_model_31($main_clusters,$main_category,$sub_category,$terms, $start=0, $results_per_page=0)
    {
        // Determine whether we need to limit the results
       			$database = $this->database();
 		if ($results_per_page > 0)
        {
			$limit = "LIMIT $start, $results_per_page";
        }
        else
        {
            $limit = '';
        }
 
        // Execute our SQL statement and return the result
		if($sub_category == 'Others')
		{
			$sub_category = '';	
		}	
		
	 	 $sql = "SELECT *
						FROM $database
						WHERE  $terms
						AND ( (main_clusters = '$main_clusters')  )
						AND ( (main_category = '$main_category') ) 
						AND ( (sub_category = '$sub_category')   )
						$limit";
			$query = $this->db->query($sql, array($terms));
	 	return $query->result();
    }
    
		
		
		
	/*advance3*/
	
	
	function count_advanced_search_results_31($main_clusters,$main_category,$sub_category,$terms)
    {
      			$database = $this->database();

	    // Run SQL to count the total number of search results
       if($sub_category == 'Others')
		{
			$sub_category = '';	
		}	
	    $sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms
						AND ( (main_clusters = '$main_clusters') )
						AND ( (main_category = '$main_category')  ) 
						AND ( (sub_category = '$sub_category')  )
						";
      $query = $this->db->query($sql, array($terms));
        return $query->row()->count;
    }
	
   
	
		
	function advanced_search_model_41($main_clusters,$terms, $start=0, $results_per_page=0)
    {
        // Determine whether we need to limit the results
       			$database = $this->database();
 		if ($results_per_page > 0)
        {
			$limit = "LIMIT $start, $results_per_page";
        }
        else
        {
            $limit = '';
        }
 
        // Execute our SQL statement and return the result
		if($sub_category == 'Others')
		{
			$sub_category = '';	
		}	
		
	 	 $sql = "SELECT *
						FROM $database
						WHERE  $terms
						AND ( (main_clusters = '$main_clusters')  )
						
						$limit";
			$query = $this->db->query($sql, array($terms));
	 	return $query->result();
    }
    
		
		
		
	/*advance3*/
	
	
	function count_advanced_search_results_41($main_clusters,$terms)
    {
      			$database = $this->database();

	    // Run SQL to count the total number of search results
       if($sub_category == 'Others')
		{
			$sub_category = '';	
		}	
	    $sql = "SELECT COUNT(*) AS count
						FROM $database
						WHERE $terms
						AND ( (main_clusters = '$main_clusters') )
						
						";
      $query = $this->db->query($sql, array($terms));
        return $query->row()->count;
    }
	    
	
	function data_summary()
	{
		$sql = "SELECT main_clusters as Category,count(*) as Records FROM ibira group by main_clusters";
		$query = $this->db->query($sql);
	 	return $query->result();
	} 
	function total_data()
	{
		$sql = "SELECT count(*) as Total_Records FROM ibira ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	
	
}
?>