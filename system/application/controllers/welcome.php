<?php

class Welcome extends Controller {

	function Welcome()
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
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */