<?php
class uploader extends Controller {

function uploader()
	{
	parent::Controller();
	$this->load->helper(array('form', 'url'));
	$this->load->model('upload_model');
	}
	
	
	function index()
	{
		if($this->session->userdata('logged_as') != 'admin')
		{
			redirect('/pages');
		}

		$total_res= $this->upload_model->total_res();
		$last_res= $this->upload_model->last_res();
		$total_pub= $this->upload_model->total_pub();
		$last_pub= $this->upload_model->last_pub();
		$total_course= $this->upload_model->total_course();
		$last_course= $this->upload_model->last_course();
		
		
		$id='c6';
		$this->load->view('siteintial');
		$this->load->view('chooseheader2');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('header', array('search_terms' => $search_terms));
		$this->load->view('admin_dashboard');
		$this->load->view('upload_form', array('error' => ' ', 'total_res'=>$total_res , 'last_res'=>$last_res , 'total_pub'=>$total_pub , 'last_pub'=>$last_pub , 'total_course'=>$total_course , 'last_course'=>$last_course ));	
		$this->load->view('mainfooter');
	}

	function do_upload()
	{
		$config['upload_path'] = $this->input->post('location');
		$config['allowed_types'] = 'xml|php';
		$config['max_size']	= '10000';
		$config['overwrite']	= TRUE;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors(" "," "));
			$id='c6';
			$this->load->view('siteintial');
			$this->load->view('chooseheader2');
			$this->load->view('mainheader',array('id'=>$id));
			$this->load->view('header', array('search_terms' => $search_terms));
			$this->load->view('admin_dashboard');
			$this->load->view('upload_form', $error);	
			$this->load->view('mainfooter');
			
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$id='c6';
			$this->load->view('siteintial');
			$this->load->view('chooseheader2');
			$this->load->view('mainheader',array('id'=>$id));
			$this->load->view('header', array('search_terms' => $search_terms));
			$this->load->view('admin_dashboard');
			$this->load->view('upload_success', $data);	
			$this->load->view('mainfooter');
			
		}
	}

	
}
?>
