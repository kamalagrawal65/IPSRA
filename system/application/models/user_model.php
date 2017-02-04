<?php
class user_model extends Model 
{
	function user_model()
	{
		parent::Model();
	}
	
	function last_res()
	{
		$sql = "SELECT MAX(master_list) as Total_Records FROM ibira ";
		$query = $this->db->query($sql);
	 	return $query->row()->Total_Records;
	} 
	
	function check_searches($u_id)
		{
			$q_text = "SELECT * FROM u_query where u_id='".$u_id."' order by q_time desc";
			$query = $this->db->query($q_text);
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
		}
	
	function check_query($term,$u_id)
		{
			$this->db->where('u_id',$u_id);
			$this->db->where('q_query',$term);
			$query = $this->db->get('u_query');
			if($query->num_rows() > 0)
			{
				$member = $query->row();
				return $member;
			}
		}

	function check_query_name($name,$u_id)
		{
			$this->db->where('u_id',$u_id);
			$this->db->where('q_name',$name);
			$query = $this->db->get('u_query');
			if($query->num_rows() > 0)
			{
				return true;
			}
		}
		
	function saveresult($term,$search_terms,$u_id)
	{	
		$data = array(
              	'q_query' => $term ,
			  	'q_name' => $search_terms, 
	           	'u_id' => $u_id,
				'enc_uid'=> $this->session->userdata('enc_uid'),
           		);	
		$this->db->insert('u_query', $data); 
	}

	function load_query($q_id,$enc_uid)
	{
		$q_no = (int)$q_id;
		$this->db->where('enc_uid',$enc_uid);
		$this->db->where('q_no',$q_no);
		$query = $this->db->get('u_query');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
	}
	
	function del_query($q_id,$enc_uid)
	{
		$q_no = (int)$q_id;
		$this->db->where('enc_uid',$enc_uid);
		$this->db->where('q_no',$q_no);
        $this->db->delete('u_query');
	}	
	

	function del_pub($master_list_no,$s_no)
	{
		$s_no = (int)$s_no;
		$master_list_no = (int)$master_list_no;
		$this->db->where('s_no',$s_no);
        $this->db->delete('publications');
        $sql="update ibira set view_pub='' where ibira.master_list=".$master_list_no;
		$query = $this->db->query($sql);
        $sql="update ibira,publications set ibira.view_pub='Yes' where ibira.master_list=publications.master_list";
		$query = $this->db->query($sql);
	}	

	function del_course($master_list_no,$s_no)
	{
		$s_no = (int)$s_no;
		$master_list_no = (int)$master_list_no;
		$this->db->where('s_no',$s_no);
        $this->db->delete('inst_courses');
        $sql="update ibira set view_course='' where ibira.master_list=".$master_list_no;
		$query = $this->db->query($sql);
        $sql="update ibira,inst_courses set ibira.view_course='Yes' where ibira.master_list=inst_courses.master_list";
		$query = $this->db->query($sql);
	}	
	
	
	function del_res($master_list_no)
	{
		$master_list_no = (int)$master_list_no;
		$this->db->where('master_list',$master_list_no);
        $this->db->delete('ibira');
        return "<h1>Resource has been Deleted</h1><h2>Close This Wndow and Refrsh Original Window to Continue</h2>";
	}	
	
	
	function edit_res()
	{	
		$master_list_no=$this->session->userdata('master_list_no');
		$sql="select * from ibira where master_list =".$master_list_no;
		$query = $this->db->query($sql);
		return $query->result();
	}

	function save_res($data)
	{	
		$this->db->where('master_list',(int)$this->session->userdata('master_list_no'));
		$this->db->update('ibira', $data); 
		return true;
	}
	
	function insert_res($data)
	{	
		$this->db->insert('ibira', $data); 
		return true;
	}
	
	function insert_pub($data)
	{	
		$this->db->insert('publications', $data); 
        $sql="update ibira,publications set ibira.view_pub='Yes' where ibira.master_list=publications.master_list";
        $query = $this->db->query($sql);
		return true;
	}
	
	
	function edit_pub()
	{	
		$s_no=$this->session->userdata('s_no');
		$sql="select * from publications where s_no =".$s_no;
		$query = $this->db->query($sql);
		return $query->result();
	}

	
	function save_pub($data)
	{	
		$this->db->where('s_no',(int)$this->session->userdata('s_no'));
		$this->db->update('publications', $data); 
		return true;
	}
	
	function insert_course($data)
	{	
		
		$data1 = array ('view_course'  => 'Yes');
		$this->db->where('master_list',(int)$this->session->userdata('master_list_no'));
		$this->db->update('ibira', $data1); 
		$this->db->insert('inst_courses', $data); 
		return "<h1>Course Inserted. <br>Close this Window and Click View Courses Link</h1>";
	}

	function edit_course()
	{	
		$s_no=$this->session->userdata('course_s_no');
		$sql="select * from inst_courses where s_no =".$s_no;
		$query = $this->db->query($sql);
		return $query->result();
	}

	function save_course($data)
	{	
		$this->db->where('s_no',(int)$this->session->userdata('course_s_no'));
		$this->db->update('inst_courses', $data); 
		return true;
	}

	function view_feedback()
	{	
		$this->load->library('table');
		$query = $this->db->query("SELECT * FROM feedback order by date_time desc");
		$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" >' );
		$this->table->set_template($tmpl);
		$this->table->set_caption('<h1>Feedback Entered by users of IBIRA</h1>');
		$result=$this->table->generate($query);
		return $result;
	}

	function view_duplicate()
	{	
		$sql = "SELECT Name_of_Resource,main_clusters,main_category,sub_category, count(*) as 'duplicate_resources' FROM ibira group by Name_of_Resource,main_clusters,main_category,sub_category having count(*) > 1  order by main_clusters,main_category,sub_category,Name_of_Resource ";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function show_duplicate($Name_of_Resource1)
	{	
		$sql = "SELECT Name_of_Resource,main_clusters,main_category,sub_category, count(*) as 'duplicate_resources' FROM ibira group by Name_of_Resource,main_clusters,main_category,sub_category"; 
		$sql = $sql." having count(*) > 1  and Name_of_Resource = '".$Name_of_Resource1."'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function all_duplicate()
	{	
		$sql = "SELECT Name_of_Resource, count(*) as 'duplicate_resources' FROM ibira group by Name_of_Resource having count(*) > 1  order by duplicate_resources desc, Name_of_Resource ";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function show_all_duplicate($Name_of_Resource1)
	{	
		$sql = "SELECT Name_of_Resource, count(*) as 'duplicate_resources' FROM ibira group by Name_of_Resource"; 
		$sql = $sql." having count(*) > 1  and Name_of_Resource = '".$Name_of_Resource1."'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	function show_all()
	{	
		return $this->db->list_tables();
	}
	
	function show_table($table1)
	{
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