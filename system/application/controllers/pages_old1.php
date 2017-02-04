<?php
class Pages extends Controller {

 	function Pages()
	{
		parent::Controller();
		 $this->load->model('page_model');
 		$this->load->model('tree_model');
		

	}
    function index()
	{	
		
		$sql = $this->page_model->total_data();
		$data_summary = $this->page_model->data_summary();
		
		$id = "c1";
		$this->session->unset_userdata('error_message');
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		
		$this->load->view('mainsearch',array('sql'=>$sql,'results'=>$data_summary));
		$this->load->view('aboutus');
		$this->load->view('help');
		$this->load->view('mainfooter');
		
	}	
	function aboutus()
	{
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('full_aboutus');
		
		$this->load->view('mainfooter');
	
	}
	function faq()
	{
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('faq');
		
		$this->load->view('mainfooter');
	
	}

	function under_construction()
	{	
		$this->load->view('underconstruction');
	
	}	
	
	 function register()
	{	
		$sql = $this->page_model->total_data();
		$data_summary = $this->page_model->data_summary();
		$this->session->unset_userdata('error_message');
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		
		$this->load->view('mainsearch',array('sql'=>$sql,'results'=>$data_summary));
		$this->load->view('registration');
		$this->load->view('mainfooter');
		
	}
	function help()
	{
	
		$sql = $this->page_model->total_data();
		$data_summary = $this->page_model->data_summary();
		$id = "c3";
		$this->session->unset_userdata('error_message');
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		
		$this->load->view('mainsearch',array('sql'=>$sql,'results'=>$data_summary));
		$this->load->view('full_help');
		$this->load->view('mainfooter');
	}
	

		
	    function update_publication()
	{	
		$this->page_model->update_pub();
		echo $this->page_model->update_pub();
	}	
	
		
	    function view_publication($master_list_no)
	{	
		$this->session->set_userdata('master_list_no',$master_list_no);
		$data['results']=$this->page_model->view_res();
		$data['pub_results']=$this->page_model->view_pub();
		$this->load->view('view_publications',$data);

	}	
	
	
	function loginpage()
	{
		$this->session->unset_userdata('error_message');
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('login_view');
		$this->load->view('mainfooter');
	}
	
	function u_loginpage()
	{	
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('u_login_view');
		$this->load->view('mainfooter');
	}
	function contactus()
	{
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('contactus');
		$this->load->view('mainfooter');
	}
	function results_per_page()
	{
		$results_per_page = 10;
		return $results_per_page;

	}
	function makeuploader()
	{
		$this->load->view('upload_view');
	}
	
	function adsearch()
	{	
		$id = 'c2';
		$this->session->unset_userdata('error_message');
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));		
        $this->load->view('adsearch');
		$this->load->view('mainfooter');
	}
	
function browse($b_text='',$start=0)
	{	
		$id = 'c2';
//SET BROWSE TEXT
		$results_per_page=10;		
		if($this->input->post('b_text'))
		{
			$b_text=$this->input->post('b_text');
		}
		$this->session->set_userdata('b_text',$b_text);
		$browse_data = $this->page_model->browse_data($b_text);
		$total_results = $this->page_model->count_browse_results($b_text);
         $first_result = $start + 1;
         $last_result = min($start + $results_per_page, $total_results);
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));		
		$this->load->view('browse_header');
        $this->load->view('browse_results', array(
            'search_terms' => $b_text,
            'first_result' => $first_result,
            'last_result' => $last_result,
            'total_results' => $total_results,
            'results' => $browse_data
        	));
		$this->load->view('mainfooter');

	}

	function open_result($b_text)
	{
		$start=0;
		$this->session->set_userdata('qsi'," master_list = ".$b_text." ");
		$this->session->unset_userdata('si');
		$url = '/pages/adsearch1/';
		$this->adsearch2($start,$url);
		
	}
	

function browse_full($b_text='A',$start=0)
	{	
		$id = 'c2';
//SET BROWSE TEXT
		$results_per_page='10';		
		if($this->input->post('b_text'))
		{
			$b_text=$this->input->post('b_text');
		}
		$this->session->set_userdata('b_text',$b_text);
		$browse_data = $this->page_model->browse_data($b_text,$start,$results_per_page);
		$total_results = $this->page_model->count_browse_results($b_text);
		
//SET PAGE SETTING 
 		 $config['base_url'] = site_url("/pages/browse/".$b_text."/");
		 $config['total_rows']=$total_results;
		 $config['per_page']=$results_per_page;
		 $config['first_link'] = '&lt;&lt; First';
		 $config['last_link'] = 'Last &gt;&gt;';
		 $config['num_links'] = 5;
		 $config['next_link'] = 'Next &gt;';
		 $config['prev_link'] = '&lt; Previous';
		 
		 $this->pagination->initialize($config);
       
         $first_result = $start + 1;
         $last_result = min($start + $results_per_page, $total_results);
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));		
		$this->load->view('browse_header');
        $this->load->view('browse_results', array(
            'search_terms' => $b_text,
            'first_result' => $first_result,
            'last_result' => $last_result,
            'total_results' => $total_results,
            'results' => $browse_data
        	));


		$this->load->view('mainfooter');

	}

	
	
	function getquery($search_terms)
	{	
			$search_terms1=$search_terms." ";
			$search_terms2=" ".$search_terms." ";
			$search_terms3=" ".$search_terms;
			$search_terms4=$search_terms."; ";    
			$where_query = $where_query." ( ( subject_area LIKE '".$search_terms."' OR subject_area LIKE '".$search_terms1."%' OR subject_area LIKE '%".$search_terms2."%' OR subject_area LIKE '%".$search_terms4."%' OR subject_area LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR ( Keywords LIKE '".$search_terms."' OR Keywords LIKE '".$search_terms1."%' OR Keywords LIKE '%".$search_terms2."%' OR Keywords LIKE '%".$search_terms4."%' OR Keywords LIKE '%".$search_terms3."' ) ";
			$where_query = $where_query." OR  ( Name_of_Resource LIKE '".$search_terms."' OR Name_of_Resource LIKE '".$search_terms1."%' OR Name_of_Resource LIKE '%".$search_terms2."%' OR Name_of_Resource LIKE '%".$search_terms4."%' OR Name_of_Resource LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR  ( full_name_of_resource LIKE '".$search_terms."' OR full_name_of_resource LIKE '".$search_terms1."%' OR full_name_of_resource LIKE '%".$search_terms2."%' OR full_name_of_resource LIKE '%".$search_terms4."%' OR full_name_of_resource LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR  ( brief_description LIKE '".$search_terms."' OR brief_description LIKE '".$search_terms1."%' OR brief_description LIKE '%".$search_terms2."%' OR brief_description LIKE '%".$search_terms4."%' OR brief_description LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR  ( country LIKE '".$search_terms."' OR country LIKE '".$search_terms1."%' OR country LIKE '%".$search_terms2."%' OR country LIKE '%".$search_terms4."%' OR country LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR  ( year LIKE '".$search_terms."' OR year LIKE '".$search_terms1."%' OR year LIKE '%".$search_terms2."%' OR year LIKE '%".$search_terms4."%' OR year LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR  ( name_of_the_developer  LIKE '".$search_terms."' OR name_of_the_developer  LIKE '".$search_terms1."%' OR name_of_the_developer  LIKE '%".$search_terms2."%' OR name_of_the_developer  LIKE '%".$search_terms4."%' OR name_of_the_developer  LIKE '%".$search_terms3."' )";						
			$where_query = $where_query." OR  ( name_of_the_organization LIKE '".$search_terms."' OR name_of_the_organization LIKE '".$search_terms1."%' OR name_of_the_organization LIKE '%".$search_terms2."%' OR name_of_the_organization LIKE '%".$search_terms4."%' OR name_of_the_organization LIKE '%".$search_terms3."' ) )"; 
			return $where_query;
	
	}

	function getquery_old_stru($search_terms)
	{	
		$search_terms1=$search_terms." ";
			$search_terms2=" ".$search_terms." ";
			$search_terms3=" ".$search_terms;  
//			$where_query="MATCH (Subject_Coverage,Keywords,Name_of_Resource,Name_of_the_Institute) AGAINST ('".$search_terms."') > 0 " ;
//			$where_query="( MATCH (Name_of_Resource) AGAINST ('".$search_terms1."') > 0 " ;
//			$where_query=$where_query." OR MATCH (Name_of_Resource) AGAINST ('".$search_terms2."') > 0 " ;
//			$where_query=$where_query." OR MATCH (Name_of_Resource) AGAINST ('".$search_terms3."') > 0 )" ;
			$where_query = $where_query."( ( Subject_Coverage LIKE '".$search_terms1."%' OR Subject_Coverage LIKE '%".$search_terms2."%' OR Subject_Coverage LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR ( Keywords LIKE '".$search_terms1."%' OR Keywords LIKE '%".$search_terms2."%' OR Keywords LIKE '%".$search_terms3."' ) ";
			$where_query = $where_query." OR  ( Name_of_Resource LIKE '".$search_terms1."%' OR Name_of_Resource LIKE '%".$search_terms2."%' OR Name_of_Resource LIKE '%".$search_terms3."' )";
			$where_query = $where_query." OR  ( Name_of_the_Institute LIKE '".$search_terms1."%' OR Name_of_the_Institute LIKE '%".$search_terms2."%' OR Name_of_the_Institute LIKE '%".$search_terms3."' ) )"; 
			return $where_query;
	
	}	
	function adsearch1($start=0)
	{	
			$mbd=$this->input->post('mbd');
			$mbj=$this->input->post('mbi');
			$mbw=$this->input->post('mbj');
			$mbi=$this->input->post('mbp');
			$mbp=$this->input->post('mbs');
			$mbs=$this->input->post('mbw');
			
			$sfild1=$this->input->post('sfild1');
			$sfild2=$this->input->post('sfild2');
			$sfild3=$this->input->post('sfild3');
			$sfild4=$this->input->post('sfild4');
			$sfild5=$this->input->post('sfild5');
			
			$sfild1=$this->input->post('sfild1');
			$sfild2=$this->input->post('sfild2');
			$sfild3=$this->input->post('sfild3');
			$sfild4=$this->input->post('sfild4');
			$sfild5=$this->input->post('sfild5');			
			
			$s_text1=$this->input->post('s_text1');
			$s_text2=$this->input->post('s_text2');
			$s_text3=$this->input->post('s_text3');
			$s_text4=$this->input->post('s_text4');
			$s_text5=$this->input->post('s_text5');
			
			$match1=$this->input->post('match1');
			
			$si=$s_text1;
			

		
		if (!trim($s_text1.$s_text2.$s_text3.$s_text4.$s_text5))
			{
			
				$id = 'c2';
				$this->session->set_userdata('error_message','At least one search field must contain text.');
				
				$this->load->view('siteintial');
				$this->load->view('chooseheader2');
				$this->load->view('mainheader',array('id'=>$id));		
				$this->load->view('adsearch');
				$this->load->view('mainfooter');
				return;
			}
			
		$search_q="";
			
		if (trim($s_text1))
			{$search_q=$this->build_query($search_q, $match1, $sfild1, $s_text1);}
		if (trim($s_text2))
			{$search_q=$this->build_query($search_q, $match1, $sfild2, $s_text2);}
		if (trim($s_text3))
			{$search_q=$this->build_query($search_q, $match1, $sfild3, $s_text3);}
		if (trim($s_text4))
			{$search_q=$this->build_query($search_q, $match1, $sfild4, $s_text4);}
		if (trim($s_text5))
			{$search_q=$this->build_query($search_q, $match1, $sfild5, $s_text5);}
		
			$search_q = "( ".trim($search_q)." ) AND (";
			
				if ($mbd)
				{
					 $search_q =$search_q."main_clusters = '".$mbd."'";
				}
				if ($mbj)
				{
					if(substr("$search_q", -1)=="(")
					{
						$search_q =$search_q."main_clusters = '".$mbj."'";
					}
					else 
					{
						$search_q =$search_q." OR main_clusters = '".$mbj."'";
					}
				}
				if ($mbw)
				{
					if(substr("$search_q", -1)=="(")
					{
					$search_q =$search_q."main_clusters = '".$mbw."'";
					}
					else
					{ 
					$search_q =$search_q." OR main_clusters = '".$mbw."'";
					}
				}
				
				if ($mbi)
				{
					if(substr("$search_q", -1)=="(")
					{
					$search_q =$search_q."main_clusters = '".$mbi."'";
					}
					else
					{ 
					$search_q =$search_q." OR main_clusters = '".$mbi."'";
					}
				}
				if ($mbp)
				{
					if(substr("$search_q", -1)=="(")
					{
					$search_q =$search_q."main_clusters = '".$mbp."'";
					}
					else
					{ 
					$search_q =$search_q." OR main_clusters = '".$mbp."'";
					}
				}
				if ($mbs)
				{
					if(substr("$search_q", -1)=="(")
					{
					$search_q =$search_q."main_clusters = '".$mbs."'";
					}
					else
					{ 
					$search_q =$search_q." OR main_clusters = '".$mbs."'";
					}
				}
			$search_q=$search_q.")"; 
			
			
			
			if ($search_q)
			{
				$this->session->set_userdata('qsi',$search_q);
				$this->session->unset_userdata('search_query');	
				$this->session->set_userdata('si',$si);	
			}
			$url = '/pages/adsearch1/';
			$this->adsearch2($start,$url);
			
	}
	function build_query($search_q, $opr1, $field1, $text1)
	{
		if (trim($search_q))
		{
			$search_q=$search_q." ".$opr1." ";
		}
		$search_q=$search_q." ( ";
		$search_q=$search_q." (".$field1." = '".$text1."') OR ";
		$search_q=$search_q." (".$field1." Like '".$text1." %') OR ";
		$search_q=$search_q." (".$field1." Like '% ".$text1." %') OR ";
		$search_q=$search_q." (".$field1." Like '% ".$text1."') ";
		$search_q=$search_q." ) ";
		return $search_q; 
	}
	
	
	
    function search($start=0)
    {
      
	    if ($this->input->post('q'))
        {
         	$this->session->set_userdata('si',trim($this->input->post('q')));
			$this->session->unset_userdata('qsi');
			redirect('/pages/search/');
        }
		if(!$this->session->userdata('si'))
		{
			redirect('pages');
		}

			$results_per_page = $this->results_per_page();
			$search_terms = $this->session->userdata('si');
			$where_query = $this->getquery($search_terms);
			$this->session->set_userdata('qsi',$where_query);
			$url = '/pages/search/';
			$this->adsearch2($start,$url);
			
    }
    
    function adsearch2($start=0,$url)
	{	
		$results_per_page = $this->results_per_page();
 		$search_terms = $this->session->userdata('qsi');
		$search_query = $search_terms;
		
		$results = $this->page_model->search($search_query, $start, $results_per_page);
		$total_results = $this->page_model->count_search_results($search_query);
			
		$main_clusters = '';
		$main_category = '';
	    $sub_category = '';
	    if($this->session->userdata('si'))
	    {
			$search_terms=$this->session->userdata('si');
	    }
	    else 
	    {
	    	$search_terms='';
	    }
			
		$id='c10';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));		
	
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->adtreedata($search_query);
		$this->paging($total_results,$results_per_page,$url,$search_terms,$results,$start,$main_clusters,$main_category,$sub_category);
		
		$this->load->view('mainfooter');
}
	
	
	
	function advancedsearch1($advanced_search_term,$node,$st)
	{
	    $this->session->set_userdata('session_item',$advanced_search_term);
		$this->session->set_userdata('node',$node);
		$this->session->set_userdata('si',$st);
		$this->advancedsearch();
	}
	
	function advancedsearch($start=0)
	{
		 $advanced_search_term=$this->session->userdata('session_item');
		 $node=$this->session->userdata('node');
		
		 $results_per_page = $this->results_per_page();
		 
		 if($this->session->userdata('si'))
		{
			$search_terms=$this->session->userdata('si');
		}
		else 
		{
			$search_terms='';
		}
		if($this->session->userdata('search_query'))
		{
			$search_query = $this->session->userdata('search_query');
		}
		else
		{
			$search_query = $this->session->userdata('qsi');
		}
		 
		 $results = $this->page_model->advanced_search_model_new($node,$advanced_search_term,$search_query, $start, $results_per_page);
	     $total_results = $this->page_model->count_advanced_search_results_new($node,$advanced_search_term,$search_query);

	     $main_clusters = '';
		 $main_category = '';
		 $sub_category = '';
		 $url = '/pages/advancedsearch/';
		 
		
		 
		
			$id='c10';
			$this->load->view('siteintial');
			$this->load->view('chooseheader2');
			$this->load->view('mainheader',array('id'=>$id));		
        	$this->load->view('header', array('search_terms' => $search_terms));
			
		$this->adtreedata($search_query);	
		$this->paging($total_results,$results_per_page,$url,$search_terms,$results,$start,$main_clusters,$main_category,$sub_category);
	
		$this->load->view('mainfooter');

    
	}
	function advancedsearch3($main_clusters,$main_category,$sub_category,$st)
	{
		
		$this->session->set_userdata('main_clusters',$main_clusters);
		$this->session->set_userdata('main_category',$main_category);
		$this->session->set_userdata('sub_category',$sub_category);
		$this->session->set_userdata('si',$st);

		$this->advancedsearchcat3();
	}
	
	/* advancedsearchcat3 */
	
	function advancedsearchcat3($start=0)
	{
		 $main_clusters=$this->session->userdata('main_clusters');
		 $main_clusters = $this->search_category($main_clusters,'main_clusters');
		 
		 $main_category=$this->session->userdata('main_category');
		 $main_category = $this->search_category($main_category,'main_category');
		 
		 $sub_category=$this->session->userdata('sub_category');
		 $sub_category = $this->search_category($sub_category,'sub_category');
		 
		 $results_per_page = $this->results_per_page();
		 
		 if($this->session->userdata('si'))
		{
			$search_terms=$this->session->userdata('si');
		}
		else 
		{
			$search_terms='';
		}
				 
		if($this->session->userdata('search_query'))
		{
			$search_query = $this->session->userdata('search_query');
		}
		else
		{
			$search_query = $this->session->userdata('qsi');
		}
		 
		 $results = $this->page_model->advanced_search_model_31($main_clusters,$main_category,$sub_category,$search_query, $start, $results_per_page);
	     $total_results = $this->page_model->count_advanced_search_results_31($main_clusters,$main_category,$sub_category,$search_query);
		 
		 $url = '/pages/advancedsearchcat3/';

		$id='c10';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));		
       	$this->load->view('header', array('search_terms' => $search_terms));
			
		$this->adtreedata($search_query);	
		$this->paging($total_results,$results_per_page,$url,$search_terms,$results,$start,$main_clusters,$main_category,$sub_category);
		
		$this->load->view('mainfooter');
	}
	
	function advancedsearch4($main_clusters,$st)
	{
		$this->session->set_userdata('main_clusters',$main_clusters);
		$this->session->set_userdata('si',$st);
		$this->advancedsearchcat4();
	}
	
	/* advancedsearchcat4 */
	
	function advancedsearchcat4($start=0)
	{
		$main_clusters=$this->session->userdata('main_clusters');
		$main_clusters = $this->search_category($main_clusters,'main_clusters');
		$results_per_page = $this->results_per_page();
		 
		$search_terms = $this->session->userdata('si');
		$search_query = $this->session->userdata('qsi');

		$results = $this->page_model->advanced_search_model_41($main_clusters,$search_query, $start, $results_per_page);
	    $total_results = $this->page_model->count_advanced_search_results_41($main_clusters,$search_query);
		 
		$url = '/pages/advancedsearchcat4/';

		$id='c10';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));		
        $this->load->view('header', array('search_terms' => $search_terms));
			
		$this->adtreedata($search_query);	
		$this->paging($total_results,$results_per_page,$url,$search_terms,$results,$start,$main_clusters,$main_category,$sub_category);
		
		$this->load->view('mainfooter');
	}
	
	
	function search_category($category,$term)
	{
		$sql = $this->page_model->search_cat();
		$categories =  $this->check_item($sql,$term);
		$replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
		for($i=0; $i<count($categories);$i++)
		{
			$check_category = str_replace($replacements,"",$categories[$i]);
			if($check_category == $category)
			{
				$category = $categories[$i];
				break;
			}
		}
		
		return $category;
	}
	
	
	function advancedsearch2($sub,$main,$st)
	{
		$this->session->set_userdata('sub_cat',$sub);
		$this->session->set_userdata('main_cat',$main);
		$this->session->set_userdata('si',$st);
		$this->advancedsearchcat();
	
	}
	function advancedsearchcat($start=0)
	{	
	
   		 $sub_cat=$this->session->userdata('sub_cat');
		 $main_cat=$this->session->userdata('main_cat');
		 if($sub_cat == 'Others')
		 {
		 	$sub_cat = '';
		 }
		 if($this->session->userdata('search_query'))
		 {
		 $search_query = $this->session->userdata('search_query');
		 
		 }
		 else
		 {
		 $search_query = $this->session->userdata('qsi');
		  
		 }
		 
		 
		 $results_per_page = $this->results_per_page();
		 $search_terms = $this->session->userdata('si');
		 $results = $this->page_model->advanced_search_model_21($sub_cat,$main_cat,$search_query, $start, $results_per_page);
	     $total_results = $this->page_model->count_advanced_search_results_21($sub_cat,$main_cat,$search_query);
		 $sub_category= '';
		 $url = '/pages/advancedsearchcat/';
		 
		 
			$id='c10';
			$this->load->view('siteintial');
			$this->load->view('chooseheader2');
			$this->load->view('mainheader',array('id'=>$id));		
        	$this->load->view('header', array('search_terms' => $search_terms));
			
		$this->adtreedata($search_query);	
		 
			 $this->paging($total_results,$results_per_page,$url,$search_terms,$results,$start,$main_cat,$sub_cat,$sub_category);
		
		
			$this->load->view('mainfooter');
	}
	function paging($total_results,$results_per_page,$url,$search_terms,$results,$start,$main_clusters,$main_category,$sub_category)
	{
		
		 $config['base_url'] = site_url($url);
		 $config['total_rows']=$total_results;
		 $config['per_page']=$results_per_page;
		 $config['first_link'] = '&lt;&lt; First';
		 $config['last_link'] = 'Last &gt;&gt;';
		 $config['num_links'] = 5;
		 $config['next_link'] = 'Next &gt;';
		 $config['prev_link'] = '&lt; Previous';
		 
		 
		 $this->pagination->initialize($config);
        
	
         $first_result = $start + 1;
         $last_result = min($start + $results_per_page, $total_results);
		
        $this->load->view('search_results', array(
            'search_terms' => $search_terms,
			 'main_clusters' => $main_clusters,
			  'main_category' => $main_category,
			   'sub_category' => $sub_category,
            'first_result' => @$first_result,
            'last_result' => @$last_result,
            'total_results' => @$total_results,
            'results' => @$results
        ));
		
	
	
	}
	
	function adtreedata($search_terms)
	{
		$nodes = $this->tree_model->adsearch_node($search_terms);
		$total_no_of_records = $this->tree_model->ad_total_no_of_records($search_terms);
		$main_clusters = $this->check_item($nodes,'main_clusters');
			
			 for($i=0;$i<count($main_clusters);$i++)
			 {
			 $no_of_records_in_main_cluster[$i] = $this->tree_model->ad_no_of_records_in_main_cluster($main_clusters[$i],$search_terms);
			}
		 
			for($i=0;$i<count($main_clusters);$i++)
			{
			 
				 $main_category_nodes = $this->tree_model->ad_search_main_clusters($main_clusters[$i],$search_terms);
				
				$main_category[$i] = $this->check_item($main_category_nodes,'main_category'); 
				
				for($k=0;$k<count($main_category[$i]);$k++)
				{
					 $no_of_records_in_main_category[$i][$k] = $this->tree_model->ad_no_of_records_in_main_category($main_clusters[$i],$main_category[$i][$k],$search_terms);
					 
				}
				/* Other of main category */
					$others_main_category = $this->tree_model->ad_no_of_records_of_others_main_category($main_clusters[$i],$search_terms);
					 
					if($others_main_category>0)
					{
						$count_main_category = count($main_category[$i]);
						$main_category[$i][$count_main_category] = 'Others';
						$count_no_of_records_main_category = $k;
						$no_of_records_in_main_category[$i][$count_no_of_records_main_category] = $others_main_category;
					}
			
					
				for($j=0;$j<count($main_category[$i]);$j++)
				{
					$sub_category_nodes = $this->tree_model->ad_search_sub_clusters($main_clusters[$i],$main_category[$i][$j],$search_terms);
					$sub_category[$i][$j] = $this->check_item($sub_category_nodes,'sub_category');
					
					
					for($k=0;$k<count($sub_category[$i][$j]);$k++)
					{
						$no_of_records[$i][$j][$k] = $this->tree_model->ad_no_of_records($main_clusters[$i],$main_category[$i][$j],$sub_category[$i][$j][$k],$search_terms);
					}
			
					$others = $this->tree_model->ad_no_of_records_of_others($main_clusters[$i],$main_category[$i][$j],$search_terms);
					
					if($others>0)
					{
						$count_sub_category = count($sub_category[$i][$j]);
						$sub_category[$i][$j][$count_sub_category] = 'Others';
						$count_no_of_records = $k;
						$no_of_records[$i][$j][$count_no_of_records] = $others;
					}
					
					
					$count[$i] += count($sub_category[$i][$j]);
				}
			
			}
			$countallcat=0;
			for ($i=0;$i<count($count);$i++)
			{
				$countallcat+= $count[$i];
			
			}
			$year = $this->duplicate_check_item($nodes,'Year');
			$country = $this->duplicate_check_item($nodes,'Country');
			rsort($year);
			sort($country);
	    	$no_of_records_of_country = $this->ad_no_of_records_of_node($search_terms,$country,'Country');
		    $no_of_records_of_year = $this->ad_no_of_records_of_node($search_terms,$year,'Year');
			$data['country_array'] = $country;
			$data['year_array'] = $year;
			$data['main_clusters_array'] = $main_clusters;
			$data['main_category_array'] = $main_category;
			$data['sub_category_array'] = $sub_category;
			$data['all_sub_category'] = $count;
			$data['count_all_cat'] = $countallcat;
			$data['no_of_records'] = $no_of_records;
			$data['no_of_records_in_main_category'] = $no_of_records_in_main_category;
			$data['no_of_records_in_main_cluster'] = $no_of_records_in_main_cluster;
			$data['no_of_records_of_year'] = $no_of_records_of_year;
			$data['no_of_records_of_country'] = $no_of_records_of_country;
			$data['total_no_of_records'] = $total_no_of_records;
			$this->load->view('treeview1',$data); 
	 
	}
	
	function ad_no_of_records_of_node($search_terms,$node,$item)
	{
		
		for($i=0;$i<count($node);$i++)
		{
				$no_of_records_of_node[$i] = $this->tree_model->ad_no_of_records_of_node($search_terms,$node[$i],$item);
		}
		return $no_of_records_of_node;
	}
	
	
	
	function check_item($nodes,$item)
	{
		$j =0;
		$flag = 0;
		$m = 0;
		foreach($nodes as $node)
		{
			if($node->$item != '')
			{	
				$linearray = explode("`",$node->$item);
				for($i = 0; $i < count($linearray); $i++)
				{
					$linearray[$i] = trim($linearray[$i]," ");
					$array[$j] = $linearray[$i];
					$j++;
				}
			}
		}
		return $this->check($array);
	}
	function duplicate_check_item($nodes,$item)
	{
		$j =0;
		$flag = 0;
		$m = 0;
		foreach($nodes as $node)
		{
			if($node->$item != '')
			{	
				$linearray = explode(";",$node->$item);
				for($i = 0; $i < count($linearray); $i++)
				{
					$linearray[$i] = trim($linearray[$i]," ");
					$array[$j] = $linearray[$i];
					$j++;
				}
			}
		}
		return $this->check($array);
	}
	
	function check($array)
	{
		$j =0;
		$flag =0;
		for($i = 0; $i<count($array) ;$i++)
		{
			if($j == 0)
			{
				$country_array[$j] = $array[$i];
				$j++;
			}
			else
			{
				for($m = 0 ; $m < $j ; $m++)
				{
					
					if(!strcasecmp($country_array[$m],$array[$i]) )
					{
						
						$flag = 1;
						break;
					}
				}
				if($flag == 0)
				{
					$country_array[$j] = $array[$i];
					$j++;
				}
			}
			$flag = 0;
		}
		return $country_array;
	}
	
 
    
}
?>