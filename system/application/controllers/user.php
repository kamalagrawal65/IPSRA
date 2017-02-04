<?php
class user extends Controller {

	function user()
	{
		parent::Controller();
		$this->load->model('user_model');
	}

	function index()
	{
		if(!$this->session->userdata('u_id'))
		{
			//echo 'User not Login';
			redirect('/pages');
				
		}
		$id='c5';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('userdashboard');
		$this->load->view('info');
		$this->load->view('mainfooter');
	}

	function add_new_resource()
	{
		$id='c4';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('userdashboard');
		$this->load->view('submit_resource');
		$this->load->view('mainfooter');
	}

		function add_admin_resource()
	{
		$last_res= $this->user_model->last_res();
		$this->session->set_userdata('last_resource',$last_res);
		$this->load->view('add_admin_resource');
	}
	
	
	function view_searches()
	{
		$id='c5';
		$u_id=$this->session->userdata('u_id');
		$results = $this->user_model->check_searches($u_id);
		$this->session->unset_userdata('error_message');
		if (!$results)
		{
			$this->session->set_userdata('error_message',"You have not saved any query yet.");
		}
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('userdashboard');
		$this->load->view('saved_query',array('results'=>$results));
		$this->load->view('mainfooter');
	}

	function run_saved_query($q_id,$enc_uid)
	{
		$id='c5';
		$u_id=$this->session->userdata('$u_id');
		$load_query = $this->user_model->load_query($q_id,$enc_uid);
		if (!$load_query)
		{
			//$this->session->set_userdata('error_message',"Query Not Found. Try again");
			redirect(base_url().'pages');
		}
		else
		{
			foreach($load_query as $result)
			{
				$this->session->set_userdata('qsi',$result->q_query);
				$this->session->set_userdata('si',"");
			}

			redirect(base_url().'pages/adsearch2');
		}
	}

	function con_del_query($q_id,$q_name,$enc_uid)
	{
		$id='c5';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('userdashboard');
		$this->load->view('con_del_query',array('q_id'=>$q_id,'q_name'=>$q_name));
		$this->load->view('mainfooter');
	}

	function del_query()
	{
		$q_id=$this->input->post('q_id');
		$enc_uid=$this->session->userdata('enc_uid');
		$this->user_model->del_query($q_id,$enc_uid);
		redirect(base_url().'user/view_searches');
	}

	function getinfo()
	{
		$id='c5';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('userdashboard');
		$this->load->view('info');
		$this->load->view('mainfooter');
	}

	function editinfo()
	{
		$id='c5';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('userdashboard');
		$this->load->view('edit_info');
		$this->load->view('mainfooter');
	}

	function changepwd()
	{
		$this->session->unset_userdata('error_message');
		$id='c5';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('userdashboard');
		$this->load->view('changepwd');
		$this->load->view('mainfooter');
	}

	function fill_info()
	{
		$id='c5';
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('full_info');
		$this->load->view('mainfooter');
	}

	function save_query()
	{
		$id='c5';
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('save_query');
		$this->load->view('mainfooter');
	}

	function saveresult()
	{
		$this->session->unset_userdata('error_message');
		$id='c5';
		$this->session->unset_userdata('error_message');
		$this->load->library('validation');
		$rules['q_name'] = "required|min_length[5]|max_length[50]";
		$this->validation->set_rules($rules);
		$fields['q_name']	= '';
		$this->validation->set_fields($fields);

		if ($this->validation->run() == FALSE)
		{
			$this->load->view('siteintial');
			$this->load->view('chooseheader1');
			$this->load->view('logoheader');
			$this->load->view('mainheader',array('id'=>$id));
			$this->load->view('logoimage');
			$this->load->view('save_query');
			$this->load->view('mainfooter');
		}
		else
		{
			$term=$this->session->userdata('qsi');
			$search_terms=$this->input->post('q_name');
			$u_id=$this->session->userdata('u_id');
			$query=$this->user_model->check_query_name($search_terms,$u_id);
			$memberObj = $this->user_model->check_query($term,$u_id);
			if ($memberObj||$query)
			{
				$q_name = $memberObj->q_name;
				$q_time = $memberObj->q_time;

				$f = true;
				$this->session->set_userdata('flag',$f);
				if ($query)
				{
					$this->session->set_userdata('error_message',"This Query Name already used by you ".$q_time);
				}
				else
				{
					$this->session->set_userdata('error_message',"This Query is already saved as '".$q_name."' on ".$q_time);
				}

				$this->load->view('siteintial');
				$this->load->view('chooseheader1');
				$this->load->view('logoheader');
				$this->load->view('mainheader',array('id'=>$id));
				$this->load->view('logoimage');
				$this->load->view('save_query');
				$this->load->view('mainfooter');
			}
			else
			{

				$this->user_model->saveresult($term,$search_terms,$u_id);
				$f = true;
				$this->session->set_userdata('flag',$f);
				redirect('pages/adsearch2');

			}
		}

	}

	function edit_resource($master_list_no)
	{

		if($this->session->userdata('logged_as') == 'admin')
		{

			$this->session->set_userdata('master_list_no',$master_list_no);
			$results=$this->user_model->edit_res();
			$this->load->view('edit_resource',array('results'=>$results));

		}
		else
		{
			redirect('pages');
		}

	}

	function update_resource()
	{
		$data = array (
			'nar_sr_no' => $this->input->post('nar_sr_no'), 
			'main_clusters' => $this->input->post('main_clusters'), 
			'main_category' => $this->input->post('main_category'), 
			'sub_category' => $this->input->post('sub_category'), 
			'Name_of_Resource' => $this->input->post('Name_of_Resource'), 
			'url_of_resource' => $this->input->post('url_of_resource'), 
			'full_name_of_resource' => $this->input->post('full_name_of_resource'), 
			'brief_description' => $this->input->post('brief_description'), 
			'subject_area' => $this->input->post('subject_area'), 
			'name_of_the_organization' => $this->input->post('name_of_the_organization'), 
			'url_of_the_organization' => $this->input->post('url_of_the_organization'), 
			'address_of_the_organization' => $this->input->post('address_of_the_organization'), 
			'publisher' => $this->input->post('publisher'), 
			'state' => $this->input->post('state'), 
			'Country' => $this->input->post('Country'), 
			'publishing_since' => $this->input->post('publishing_since'), 
			'isi_if_2009' => $this->input->post('isi_if_2009'), 
			'indexing_abstracting' => $this->input->post('indexing_abstracting'), 
			'frequency' => $this->input->post('frequency'), 
			'issn_online' => $this->input->post('issn_online'), 
			'issn_print' => $this->input->post('issn_print'), 
			'editorial_board' => $this->input->post('editorial_board'), 
			'editorial_contact' => $this->input->post('editorial_contact'), 
			'editor' => $this->input->post('editor'), 
			'Year' => $this->input->post('Year'), 
			'contact_person' => $this->input->post('contact_person'), 
			'contact_email' => $this->input->post('contact_email'), 
			'language' => $this->input->post('language'), 
			'department_center' => $this->input->post('department_center'), 
			'dbt_designated_center' => $this->input->post('dbt_designated_center'), 
			'computing_facility' => $this->input->post('computing_facility'), 
			'database_development' => $this->input->post('database_development'), 
			'software_tools_developed' => $this->input->post('software_tools_developed'), 
			'publication_history' => $this->input->post('publication_history'), 
			'areas_of_research' => $this->input->post('areas_of_research'), 
			'research_grant_support' => $this->input->post('research_grant_support'), 
			'name_of_the_developer' => $this->input->post('name_of_the_developer'), 
			'address_of_the_developer' => $this->input->post('address_of_the_developer'), 
			'accesibility' => $this->input->post('accesibility'), 
			'keywords' => $this->input->post('keywords'), 
			'associated_institutes' => $this->input->post('associated_institutes'), 
			'associated_country' => $this->input->post('associated_country'), 
			'view_pub' => $this->input->post('view_pub'),
			'view_course' => $this->input->post('view_course'), 
			'inventor' => $this->input->post('inventor'), 
			'assignee' => $this->input->post('assignee'), 
			'application_no' => $this->input->post('application_no'), 
			'filed_on' => $this->input->post('filed_on'), 
			'source' => $this->input->post('source') 
		);
		$this->user_model->save_res($data);
		redirect('pages/open_result/'.$this->session->userdata('master_list_no'));
	}

		function insert_resource()
	{
		//		echo "Inside editing";
		if($this->session->userdata('logged_as') == 'admin')
		{
			$this->session->set_userdata('total_resources',$this->session->userdata('total_resources')+1);
			$this->session->set_userdata('master_list_no',$this->session->userdata('total_resources'));
			$data = array (
				'master_list' => $this->session->userdata('total_resources'),
				'nar_sr_no' => $this->input->post('nar_sr_no'), 
				'main_clusters' => $this->input->post('main_clusters'), 
				'main_category' => $this->input->post('main_category'), 
				'sub_category' => $this->input->post('sub_category'), 
				'Name_of_Resource' => $this->input->post('Name_of_Resource'), 
				'url_of_resource' => $this->input->post('url_of_resource'), 
				'full_name_of_resource' => $this->input->post('full_name_of_resource'), 
				'brief_description' => $this->input->post('brief_description'), 
				'subject_area' => $this->input->post('subject_area'), 
				'name_of_the_organization' => $this->input->post('name_of_the_organization'), 
				'url_of_the_organization' => $this->input->post('url_of_the_organization'), 
				'address_of_the_organization' => $this->input->post('address_of_the_organization'), 
				'publisher' => $this->input->post('publisher'), 
				'state' => $this->input->post('state'), 
				'Country' => $this->input->post('Country'), 
				'publishing_since' => $this->input->post('publishing_since'), 
				'isi_if_2009' => $this->input->post('isi_if_2009'), 
				'indexing_abstracting' => $this->input->post('indexing_abstracting'), 
				'frequency' => $this->input->post('frequency'), 
				'issn_online' => $this->input->post('issn_online'), 
				'issn_print' => $this->input->post('issn_print'), 
				'editorial_board' => $this->input->post('editorial_board'), 
				'editorial_contact' => $this->input->post('editorial_contact'), 
				'editor' => $this->input->post('editor'), 
				'Year' => $this->input->post('Year'), 
				'contact_person' => $this->input->post('contact_person'), 
				'contact_email' => $this->input->post('contact_email'), 
				'language' => $this->input->post('language'), 
				'department_center' => $this->input->post('department_center'), 
				'dbt_designated_center' => $this->input->post('dbt_designated_center'), 
				'computing_facility' => $this->input->post('computing_facility'), 
				'database_development' => $this->input->post('database_development'), 
				'software_tools_developed' => $this->input->post('software_tools_developed'), 
				'publication_history' => $this->input->post('publication_history'), 
				'areas_of_research' => $this->input->post('areas_of_research'), 
				'research_grant_support' => $this->input->post('research_grant_support'), 
				'name_of_the_developer' => $this->input->post('name_of_the_developer'), 
				'address_of_the_developer' => $this->input->post('address_of_the_developer'), 
				'accesibility' => $this->input->post('accesibility'), 
				'keywords' => $this->input->post('keywords'), 
				'associated_institutes' => $this->input->post('associated_institutes'), 
				'associated_country' => $this->input->post('associated_country'), 
				'view_pub' => $this->input->post('view_pub'), 
				'inventor' => $this->input->post('inventor'), 
				'assignee' => $this->input->post('assignee'), 
				'application_no' => $this->input->post('application_no'), 
				'filed_on' => $this->input->post('filed_on'), 
				'source' => $this->input->post('source') 
			);
			$this->user_model->insert_res($data);
			redirect('pages/open_result/'.$this->session->userdata('total_resources'));
		}
		else
			{
				redirect('pages');
			}
		}
	
	
	
	function edit_pub($s_no)
	{
		//		echo "Inside editing";
		if($this->session->userdata('logged_as') == 'admin')
		{

			$this->session->set_userdata('s_no',$s_no);
			$results=$this->user_model->edit_pub();
			$this->load->view('edit_pub',array('results'=>$results));

		}
		else
		{
			redirect('pages');
		}

	}
	function del_pub($master_list_no,$s_no)
	{
		$this->user_model->del_pub($master_list_no,$s_no);
		redirect(base_url().'pages/view_publication/'.$master_list_no);
	}

	function del_course($master_list_no,$s_no)
	{
		$this->user_model->del_course($master_list_no,$s_no);
		redirect(base_url().'pages/view_cources/'.$master_list_no);
	}
	
	function del_res($master_list_no)
	{
		echo $this->user_model->del_res($master_list_no);
	}
	
	function add_pub($s_no)
	{
		//		echo "Inside editing";
		if($this->session->userdata('logged_as') == 'admin')
		{
			$this->session->set_userdata('s_no',$s_no);
			$this->load->view('add_pub');
		}
		else
		{
			redirect('pages');
		}

	}
	
	
	function update_pub()
	{
			$data = array (
				'master_list'  => $this->input->post('master_list'), 
				'ref_type'  => $this->input->post('ref_type'), 
				'ref_no'  => $this->input->post('ref_no'), 
				'rec_no'  => $this->input->post('rec_no'), 
				'contributors'  => $this->input->post('contributors'), 
				'complete_address'  => $this->input->post('complete_address'), 
				'title_of_the_paper'  => $this->input->post('title_of_the_paper'), 
				'secondry_title'  => $this->input->post('secondry_title'), 
				'full_title'  => $this->input->post('full_title'), 
				'pages'  => $this->input->post('pages'), 
				'volume'  => $this->input->post('volume'), 
				'issue_no'  => $this->input->post('issue_no'), 
				'edition'  => $this->input->post('edition'), 
				'pub_keywords'  => $this->input->post('pub_keywords'), 
				'pub_year'  => $this->input->post('pub_year'), 
				'pub_date'  => $this->input->post('pub_date'), 
				'issn'  => $this->input->post('issn'), 
				'ass_no'  => $this->input->post('ass_no'), 
				'abstract'  => $this->input->post('abstract'), 
				'notes'  => $this->input->post('notes'), 
				'pubmed_urls'  => $this->input->post('pubmed_urls'), 
				'electronic_resource_number'  => $this->input->post('electronic_resource_number'), 
				'pap_language'  => $this->input->post('pap_language'), 
			);
		$this->session->set_userdata('master_list_no',$this->input->post('master_list'));
		$this->user_model->save_pub($data);
		redirect('pages/view_publication/'.$this->session->userdata('master_list_no'));
	}
	
	function insert_pub()
	{
			$data = array (
				'master_list'  => $this->session->userdata('s_no'), 
				'ref_type'  => $this->input->post('ref_type'), 
				'ref_no'  => $this->input->post('ref_no'), 
				'rec_no'  => $this->input->post('rec_no'), 
				'contributors'  => $this->input->post('contributors'), 
				'complete_address'  => $this->input->post('complete_address'), 
				'title_of_the_paper'  => $this->input->post('title_of_the_paper'), 
				'secondry_title'  => $this->input->post('secondry_title'), 
				'full_title'  => $this->input->post('full_title'), 
				'pages'  => $this->input->post('pages'), 
				'volume'  => $this->input->post('volume'), 
				'issue_no'  => $this->input->post('issue_no'), 
				'edition'  => $this->input->post('edition'), 
				'pub_keywords'  => $this->input->post('pub_keywords'), 
				'pub_year'  => $this->input->post('pub_year'), 
				'pub_date'  => $this->input->post('pub_date'), 
				'issn'  => $this->input->post('issn'), 
				'ass_no'  => $this->input->post('ass_no'), 
				'abstract'  => $this->input->post('abstract'), 
				'notes'  => $this->input->post('notes'), 
				'pubmed_urls'  => $this->input->post('pubmed_urls'), 
				'electronic_resource_number'  => $this->input->post('electronic_resource_number'), 
				'pap_language'  => $this->input->post('pap_language'), 
			);

		$this->session->set_userdata('master_list_no',$this->session->userdata('s_no'));
		$this->user_model->insert_pub($data);
		redirect('pages/open_result/'.$this->session->userdata('master_list_no'));
	}
	
	
	
	
	function add_courses($master_list_no)
	{
		if($this->session->userdata('logged_as') == 'admin')
		{
			$this->session->set_userdata('master_list_no',$master_list_no);
			$results=$this->user_model->edit_res();
			$this->load->view('add_course',array('results'=>$results));
		}
		else
		{
			redirect('pages');
		}
	}
	
	function insert_course()
	{
			$data = array (
				'master_list'  => $this->session->userdata('master_list_no'), 
				'department' => $this->input->post('department'),
				'course_name' => $this->input->post('course_name'),
				'eligiibility' => $this->input->post('eligiibility'),
				'course_url' => $this->input->post('course_url'),
				'available_since' => $this->input->post('available_since'),
				'sujects' => $this->input->post('sujects'),
				'distance_mode' => $this->input->post('distance_mode'),
				'degree_type' => $this->input->post('degree_type'),
				'course_duration' => $this->input->post('course_duration'),
				'degree_requirements' => $this->input->post('degree_requirements'),
				'university' => $this->input->post('university')
					
			);
		echo $this->user_model->insert_course($data);
	}
	
	function edit_course($sno)
	{
		$this->session->set_userdata('course_s_no',$sno);
		if($this->session->userdata('logged_as') == 'admin')
		{
			$this->session->set_userdata('s_no',$s_no);
			$results=$this->user_model->edit_course();
			$this->load->view('edit_course',array('results'=>$results));
		}
		else
		{
			redirect('pages');
		}
		
	}
	
	function save_course()
	{
			$data = array (
				'master_list' => $this->input->post('master_list'),
				'department' => $this->input->post('department'),
				'course_name' => $this->input->post('course_name'),
				'eligiibility' => $this->input->post('eligiibility'),
				'course_url' => $this->input->post('course_url'),
				'available_since' => $this->input->post('available_since'),
				'sujects' => $this->input->post('sujects'),
				'distance_mode' => $this->input->post('distance_mode'),
				'degree_type' => $this->input->post('degree_type'),
				'course_duration' => $this->input->post('course_duration'),
				'degree_requirements' => $this->input->post('degree_requirements'),
				'university' => $this->input->post('university')
			
			);
			$this->user_model->save_course($data);
			redirect('pages/view_cources/'.$this->session->userdata('master_list_no'));
	}
	
	function view_feedback()
	{
		$result=$this->user_model->view_feedback();
		$this->load->view('view_feedback',array('result'=>$result));
	}

	function view_duplicate()
	{
		$result=$this->user_model->view_duplicate();
		$this->load->view('view_duplicate',array('results'=>$result));
	}
	
	function show_duplicate($Name_of_Resource)
	{
		$results=$this->user_model->show_duplicate($Name_of_Resource);
		foreach($results as $result)
		{
		$qsi=" Name_of_Resource='".$result->Name_of_Resource."' and ";
		$qsi=$qsi." main_clusters='".$result->main_clusters."' and ";
		$qsi=$qsi." main_category='".$result->main_category."' and ";
		$qsi=$qsi." sub_category='".$result->sub_category."'";
		//echo $qsi; 
		$this->session->set_userdata('qsi',$qsi);
		$this->session->unset_userdata('si');
		$url = '/pages/adsearch1';
		redirect('/pages/adsearch2');  
		}
	}


	function all_duplicate()
	{
		$result=$this->user_model->all_duplicate();
		$this->load->view('all_duplicate',array('results'=>$result));
	}
	
	function show_all_duplicate($Name_of_Resource)
	{
		$results=$this->user_model->show_all_duplicate($Name_of_Resource);
		foreach($results as $result)
		{
		$qsi=" Name_of_Resource='".$result->Name_of_Resource."'";
		//echo $qsi; 
		$this->session->set_userdata('qsi',$qsi);
		$this->session->unset_userdata('si');
		$url = '/pages/adsearch1';
		redirect('/pages/adsearch2');  
		}
	}
	
	
	function show_all()
	{
		$results=$this->user_model->show_all();
		$id='c6';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('admin_dashboard');
		$this->load->view('show_all',array('results'=>$results));
		$this->load->view('mainfooter');
	}
	
	function show_table($table1)
	{
		$result=$this->user_model->show_table($table1);
		$this->load->view('show_table',array('result'=>$result));
	}
	
	
}
?>