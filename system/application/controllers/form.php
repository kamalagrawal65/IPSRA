<?php

class form extends Controller {

function form()
{
	parent::Controller();
}	
	
		  function login()
		  {
		  	$id=='c6';
				$this->session->unset_userdata('error_message');	
				$this->load->library('validation');
					
				$rules['username'] = "required";
				$rules['pass'] = "required";
				
				
				$this->validation->set_rules($rules);
				$fields['username']	= '';
				
				$this->validation->set_fields($fields);
					
				if ($this->validation->run() == FALSE)
				{
					
					$this->session->unset_userdata('error_message');
					$id='c10';
					$this->load->view('siteintial');
					$this->load->view('chooseheader1');
					$this->load->view('logoheader');
					$this->load->view('mainheader',array('id'=>$id));
					$this->load->view('logoimage');
					$this->load->view('login_view');
					$this->load->view('mainfooter');
					
				}
				else
				{
					$this->load->model('auth');
					$memberObj = $this->auth->validate();
					if($memberObj) // If the user’s credentials validated…
					{		
						$data = array(
								'username' => $memberObj->username,
								'pass' => $memberObj->pass,
								'decode_pass' => $memberObj->decode_pass,
								'logged_in' => TRUE,
								'logged_as' => 'admin'
								);
								
						$this->session->set_userdata($data);
						redirect('form/layout');
						
					}
					else
					{
						
						$this->session->set_userdata('error_message','It seems your username or password is incorrect, please try again.');
						
						$id='c10';
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('login_view');
						$this->load->view('mainfooter');
					
					}	
				}
	  	}

	public function logout()
	{
		$this->session->destroy();
		/*$this->session->*/
		redirect('pages');
	}

		function forget_password()
	{	
		
		$this->session->unset_userdata('error_message');
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('forget_password');
		$this->load->view('mainfooter');
		
	}
	
			function admin_forget_password()
	{	
		
		$this->session->unset_userdata('error_message');
		
		$this->load->view('siteintial');
		$this->load->view('chooseheader1');
		$this->load->view('logoheader');
		$this->load->view('mainheader',array('id'=>$id));
		$this->load->view('logoimage');
		$this->load->view('admin_forget_password');
		$this->load->view('mainfooter');
		
	}
	
		  function ret_password()
		  {
				$this->session->unset_userdata('error_message');	
				$this->load->library('validation');
					
				$rules['email'] = "required";
				
				$this->validation->set_rules($rules);
				$fields['email']	= '';
				
				$this->validation->set_fields($fields);
					
				if ($this->validation->run() == FALSE)
				{
					
					$this->session->unset_userdata('error_message');
					$id='c10';
					$this->load->view('siteintial');
					$this->load->view('chooseheader1');
					$this->load->view('logoheader');
					$this->load->view('mainheader',array('id'=>$id));
					$this->load->view('logoimage');
					$this->load->view('forget_password');
					$this->load->view('mainfooter');
					
				}
				else
				{
					$this->load->model('auth');
					$memberObj  = $this->auth->pass_validate();
					if($memberObj ) // If the user’s credentials validated…
					{		
						$data = array(
								'u_id' => $memberObj->u_id,
								'u_name' => $memberObj->u_name,
								'pass_decode' => $memberObj->pass_decode,
								);
						//echo "<b>Password is  : ".$data[u_pass]; 
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('send_password');
						$this->load->view('mainfooter');

					// sending User Password by Mail
					
						$this->load->library('encrypt');						
						 
				        $to=$this->input->post('email'); 
				        $sub="Your IBIRA Password"; 
				        $mess=('<br>Dear '.$data[u_name].',<br><br>Your IBIRA Password is : '.$this->encrypt->decode($data[pass_decode]).'<br><br> IBIRA Administrator'); 
						$this->send_mail($to,$sub,$mess);
					}
					else
					{
						
						$this->session->set_userdata('error_message','This email is not Registred, please try again.');
						
						$id='c10';
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('forget_password');
						$this->load->view('mainfooter');
					
					}	
				}
	  	}
	
		  function admin_ret_password()
		  {
				$this->session->unset_userdata('error_message');	
				$this->load->library('validation');
					
				$rules['email'] = "required";
				
				$this->validation->set_rules($rules);
				$fields['email']	= '';
				
				$this->validation->set_fields($fields);
					
				if ($this->validation->run() == FALSE)
				{
					
					$this->session->unset_userdata('error_message');
					$id='c10';
					$this->load->view('siteintial');
					$this->load->view('chooseheader1');
					$this->load->view('logoheader');
					$this->load->view('mainheader',array('id'=>$id));
					$this->load->view('logoimage');
					$this->load->view('admin_forget_password');
					$this->load->view('mainfooter');
					
				}
				else
				{
					$this->load->model('auth');
					$memberObj  = $this->auth->admin_pass_validate();
					if($memberObj ) // If the user’s credentials validated…
					{		
						$data = array(
								'username' => $memberObj->username,
								'pass' => $memberObj->pass,
								'decode_pass' => $memberObj->decode_pass,
								);
						//echo "<br><b>Password is  : ".$data[pass]; 
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('send_password');
						$this->load->view('mainfooter');

					// sending User Password by Mail
					
						$this->load->library('encrypt');						
						 
				        $to=$this->input->post('email'); 
				        $sub="Your IBIRA Password"; 
//				        $mess=('<br>Dear '.$data[u_name].',<br><br>Your IBIRA Password is : '.$this->encrypt->decode($data[decode_pass]).'<br><br> IBIRA Administrator'); 
				        $mess=('<br>Dear '.$data[u_name].',<br><br>Your IBIRA Password is : '.$data[pass].'<br><br> IBIRA Administrator');
						$this->send_mail($to,$sub,$mess);
					}
					else
					{
						
						$this->session->set_userdata('error_message','This Admin is not Registred, please try again.');
						
						$id='c10';
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('admin_forget_password');
						$this->load->view('mainfooter');
					
					}	
				}
	  	}
	  	
	
	function u_login()
		  {
		  		$this->session->unset_userdata('error_message');
				$this->load->library('validation');
					
				$rules['username'] = "required";
				$rules['pass'] = "required";
				
				
				$this->validation->set_rules($rules);
				$fields['username']	= '';
				$fields['pass']	= '';
				$this->validation->set_fields($fields);
					
				if ($this->validation->run() == FALSE)
				{
						$id='c10';
						$this->session->unset_userdata('error_message');
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('u_login_view');
						$this->load->view('mainfooter');
					
					
				}
				else
				{
					$this->load->model('auth');
					$query = $this->auth->u_validate();
					if($query) // If the user’s credentials validated…
					{		

						$memberObj = $this->auth->getuserinfo();
						if(!$memberObj->u_status)
						{
						
						$this->session->set_userdata('error_message','This Email id is not yet Activated<br>');
						
						$id='c10';
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('u_login_view');
						$this->load->view('mainfooter');
						return ;
						}
							
											$data = array(
											'u_id' => $memberObj->u_id,
											'enc_uid' => $memberObj->enc_uid,
											'u_name' => $memberObj->u_name,
											'u_pass' => $memberObj->u_pass,
											'designation' => $memberObj->u_desig,
											'name_of_institute' => $memberObj->u_ins,
											'addr_institute' => $memberObj->ins_address,
											'ins_country' => $memberObj->ins_country,
											'u_contact' => $memberObj->u_contact,
											'about_me' => $memberObj->about_me,
											'int_area' => $memberObj->interest_area,
											'subject_area' => $memberObj->subject_area,
											'u_highedu' => $memberObj->u_highedu,
											'u_logged_in' => TRUE,
											'logged_as' => 'user'
									);
						$this->session->set_userdata($data);
						redirect('form/u_layout');
					}
					else
					{
						$id='c10';
						$this->session->set_userdata('error_message','It seems your username or password is incorrect, please try again.');
						
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('u_login_view');
						$this->load->view('mainfooter');
					
					}	
				}
	  	}

	public function u_logout()
	{
		$this->session->destroy();
		/*$this->session->*/
		redirect('pages');
	}
	
	public function layout()
	{
	/*$this->load->view('admin/layout');*/
		$id='c6';
			if($this->session->userdata('logged_as') == 'admin')
			{
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('admin_dashboard');
						$this->load->view('mainfooter');
			}
			else
			{
				//echo 'Administrator data not Display';
				redirect('/pages');
			}
	}

	
		public function u_layout()
	{
			if($this->session->userdata('u_id'))
			{
						//echo 'Hello '.$this->session->userdata('u_id'); 
						redirect('/user');		
			}
			else
			{
				//echo 'User data not Display';
				redirect('/pages');
			}
	}
	
	
	function edit_info()
	{
	$edit = true;
	$this->session->set_userdata('edit_flag',$edit);
	$this->full_reg();
	}

	function full_reg()
	{
		$this->load->library('validation');
		
		
		if($this->session->userdata('edit_flag'))
		{
		$rules['u_name'] = "required|min_length[5]|max_length[50]";
		}	
		$rules['designation'] = "required|min_length[5]|max_length[50]";
		$rules['name_of_institute'] = "required|min_length[5]|max_length[50]";
		$rules['addr_institute'] = "required|min_length[5]|max_length[250]";
		$rules['ins_country'] = "required|min_length[2]|max_length[50]";
		$this->validation->set_rules($rules);
		if($this->session->userdata('edit_flag'))
		{
		$fields['u_name']	= '';
		}
		$fields['designation']	= '';
		$fields['name_of_institute'] = '';
		$fields['addr_institute']	= '';
		$fields['ins_country'] = '';
		$fields['u_contact']	= '';
		$fields['about_me']	= '';
		$fields['int_area']	= '';
		
		$this->validation->set_fields($fields);

	if ($this->validation->run() == FALSE)
		{
		
			if($this->session->userdata('edit_flag'))
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
			else
			{
			$this->load->view('siteintial');
			$this->load->view('chooseheader1');
			$this->load->view('logoheader');
			$this->load->view('mainheader',array('id'=>$id));
			$this->load->view('logoimage');
			$this->load->view('full_info');
			$this->load->view('mainfooter');
			}
		}
	
		else
		{
			if($this->session->userdata('edit_flag'))
			{
				$u_name = $this->input->post('u_name');
			}				
			$u_id= $this->session->userdata('u_id');					
			$enc_uid= $this->session->userdata('enc_uid');
			$designation = $this->input->post('designation');
			$name_of_institute = $this->input->post('name_of_institute');
			$addr_institute = $this->input->post('addr_institute');
			$ins_country = $this->input->post('ins_country');
			$u_highedu = $this->input->post('u_highedu');
			$subject_area = $this->input->post('subject_area');
			$about_me = $this->input->post('about_me');
			$int_area = $this->input->post('int_area');
			$u_contact = $this->input->post('u_contact');
						
						$this->load->model('auth');
						if($this->session->userdata('edit_flag'))
						{
						$this->auth->edit_detail($u_id,$designation,$name_of_institute,$addr_institute,$ins_country,$u_highedu,$subject_area,$about_me,$int_area,$u_contact,$u_name);
						$data = array(
								'designation' => $designation,
								'name_of_institute' => $name_of_institute,
								'addr_institute' => $addr_institute,
								'ins_country' => $ins_country,
								'u_contact' => $u_contact,
								'about_me' => $about_me,
								'subject_area' => $subject_area,
								'u_highedu' => $u_highedu,
								'int_area' => $int_area,
								'u_name' => $u_name,
						);
						$this->session->set_userdata($data);
						$this->session->unset_userdata('edit_flag');
						}
						else
						{
						$memberObj=$this->auth->mark_reg($enc_uid);
						if ($memberObj)
						{
							$data = array(
							'u_id' => $memberObj->u_id,
							'u_name' => $memberObj->u_name,
							);
						}			
						$u_id=$data[u_id];
						$u_name=$data[u_name];
						$this->auth->submit_detail($u_id,$designation,$name_of_institute,$addr_institute,$ins_country,$u_highedu,$subject_area,$about_me,$int_area,$u_contact);
						$data = array(
						'u_id'=> $u_id,
						'u_name'=> $u_name,
						'designation' => $designation,
						'name_of_institute' => $name_of_institute,
						'addr_institute' => $addr_institute,
						'ins_country' => $ins_country,
						'u_contact' => $u_contact,
						'about_me' => $about_me,
						'int_area' => $int_area,
						'subject_area' => $subject_area,
						'u_highedu' => $u_highedu,
									);
						$this->session->set_userdata($data);
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
 	}

 	function send_mail($to,$sub,$mess)
 	{ 
/*
//LOCAL Setting for Webmail Server

 		$config['protocol'] = 'smtp'; 
		$config['smtp_host'] = '172.16.73.5'; 
		$config['smtp_port'] = 25; 
		$config['smtp_user'] = 'nitin.paliwal@juit.ac.in'; 
		$config['smtp_pass'] = '12345678'; 
		$config['mailtype'] = 'html';
		$this->load->library('email', $config); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('nitin.paliwal@juit.ac.in', 'IBIRA Administrator');
		 		

//global address for AOL
 		$config['protocol'] = 'smtp'; 
		$config['smtp_host'] = 'smtp.aol.com'; 
		$config['smtp_port'] = 587; 
		$config['smtp_user'] = 'ibiranet@aol.com'; 
		$config['smtp_pass'] = 'jaypeewakna'; 
		$config['mailtype'] = 'html';
		$this->load->library('email', $config); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('ibiranet@aol.com', 'IBIRA Administrator');
*/		

// Using Config File 		
				  
		$this->load->library('email'); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('ibiranet@aol.com', 'IBIRA Administrator');
 		$this->email->to($to); 
		$this->email->bcc('shriram2576@gmail.com');
		$this->email->subject($sub); 
		$this->email->message($mess); 
        $this->email->send();
 	}
 	
 	
	function reg()
	{
		$this->load->library('validation');
			
		$rules['username'] = "required|min_length[5]|max_length[30]";
		$rules['pass'] = "required|min_length[5]|max_length[12]";
		$rules['email'] = "required|valid_email";
		
		$this->validation->set_rules($rules);
		
		$fields['username']	= '';
		$fields['email']	= '';
		$fields['pass'] = '';
		
		
		$this->validation->set_fields($fields);
		
		if ($this->validation->run() == FALSE)
		{
			$id='c1';
			$this->load->view('siteintial');
			$this->load->view('chooseheader1');
			$this->load->view('logoheader');
			$this->load->view('mainheader',array('id'=>$id));
			$this->load->view('logoimage');
			$this->load->view('registration');
			$this->load->view('mainfooter');
		}
		else
		{
					$email = $this->input->post('email');
					$this->load->model('auth');
					$query = $this->auth->check($email);
					if(!$query) // If the user’s credentials validated…
					{	
									
						$name = $this->input->post('username');
						$pass = $this->input->post('pass');
						$email = $this->input->post('email');
						$this->load->model('auth');
						$this->auth->submit_query($name,$pass,$email);
						$to=$this->input->post('email'); 
				        $sub="Activate Your IBIRA Registartion"; 
				        $mess=('<br>Dear '.$name.',<br><br>Thank you for your registration.<br><br>Your IBIRA Password is : '.$pass);
				        $mess=$mess."<br><br>Click following link to activate your Registration";
				        $mess=$mess."<br>or copy and paste it in your browsers Address Bar";
				        $mess=$mess."<br><br><a href='".base_url()."form/active_reg/".md5($email)."'>";
				        $mess=$mess.base_url()."/form/active_reg/".md5($email)."</a>";
				        $mess=$mess."<br><br>IBIRA Administrator";
				        
				        $this->send_mail($to,$sub,$mess);
//						echo $mess;
						$id='c1';
						
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('send_confirm');
						$this->load->view('mainfooter');
						
					}
					else
					{
					$this->load->model('page_model');
					$sql = $this->page_model->total_data();
					$data_summary = $this->page_model->data_summary();
		
						$id='c1';
						$this->session->set_userdata('error_message','Your Email id already exist.');
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('mainsearch',array('sql'=>$sql,'results'=>$data_summary));
						$this->load->view('registration');
						$this->load->view('mainfooter');
					}
		}
  	}

		function active_reg($u_id)
		{
			$data = array('u_id' => $email,'u_name' => $name,'u_pass' => $pass);
			$this->load->model('auth');
			$memberObj=$this->auth->mark_reg($u_id);
			if ($memberObj)
			{
				$data = array(
				'enc_uid' => $memberObj->enc_uid,
				);
			$this->session->set_userdata($data);

				
				redirect('user/fill_info');
			}
			else 
			{
			$this->session->set_userdata('error_message','This Email id is not yet Activated<br>');
						
						$id='c10';
						$this->load->view('siteintial');
						$this->load->view('chooseheader1');
						$this->load->view('logoheader');
						$this->load->view('mainheader',array('id'=>$id));
						$this->load->view('logoimage');
						$this->load->view('u_login_view');
						$this->load->view('mainfooter');
				}	
						
		}
	
	function feedback()
	{
		$this->load->library('validation');
			
		$rules['name'] = "required|min_length[5]";
		$rules['company'] = "required";
		$rules['designation'] = "required";
		$rules['email'] = "required|valid_email";
		
		$this->validation->set_rules($rules);
		
		$fields['name']	= '';
		$fields['email']	= '';
		$fields['company'] = '';
		$fields['designation'] = '';
		
		$this->validation->set_fields($fields);
		
		if ($this->validation->run() == FALSE)
		{
			$this->load->view('siteintial');
			$this->load->view('chooseheader1');
			$this->load->view('logoheader');
			$this->load->view('mainheader',array('id'=>$id));
			$this->load->view('logoimage');
			$this->load->view('contactus');
			$this->load->view('mainfooter');
		}
		else
		{
			$name = $this->input->post('name');
			$company = $this->input->post('company');
			$designation = $this->input->post('designation');
			$query = $this->input->post('query');
			$email = $this->input->post('email');
			$this->load->model('auth');
			$this->auth->submit_feedback($name,$company,$designation,$query,$email);
			$this->load->view('siteintial');
			$this->load->view('chooseheader1');
			$this->load->view('logoheader');
			$this->load->view('mainheader',array('id'=>$id));
			$this->load->view('logoimage');
			$this->load->view('query_submitted_view');
			$this->load->view('mainfooter');
		}
  	}
	
	public function changepassword()
	{
		$this->session->unset_userdata('error_message');
			if($this->session->userdata('u_id'))
			{
				$this->load->library('validation');
				$rules['pass'] = "required";
				$rules['newpass'] = "required|matches[confirmpass]";
				$rules['confirmpass'] = "required";
			$this->validation->set_rules($rules);

			if ($this->validation->run() == FALSE)
			{
				$id='c5';
				$this->load->view('siteintial');
				$this->load->view('chooseheader2');
				$this->load->view('mainheader',array('id'=>$id));		
				$this->load->view('header', array('search_terms' => $search_terms));
				$this->load->view('userdashboard');
				$this->load->view('changepwd');
				$this->load->view('mainfooter');
			}
			else
			{
				
				$this->load->model('auth');
				$query = $this->auth->validate1();
				
				if($query) // If the user’s credentials validated…
				{		
					
					$memberObj = $this->auth->changenow();
					$id='c5';
					$this->load->view('siteintial');
					$this->load->view('chooseheader2');
					$this->load->view('mainheader',array('id'=>$id));		
					$this->load->view('header', array('search_terms' => $search_terms));
					$this->load->view('userdashboard');
					$this->load->view('success_changepwd');
					$this->load->view('mainfooter');
				}
				else
				{
					$this->session->set_userdata('error_message','It seems your username or password is incorrect, please try again.');
					$id='c5';
					$this->load->view('siteintial');
					$this->load->view('chooseheader2');
					$this->load->view('mainheader',array('id'=>$id));		
					$this->load->view('header', array('search_terms' => $search_terms));
					$this->load->view('userdashboard');
					$this->load->view('changepwd');
					$this->load->view('mainfooter');
				}	 
			}
	}
			else
			{
				redirect('pages');
			}
	}

}
?>