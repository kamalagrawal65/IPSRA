<?php

class Auth extends Model
{
	
		function validate()
		{
			
			$this->db->where('username',$this->input->post('username'));
//			$this->db->where('pass',md5($this->input->post('pass')));
			$this->db->where('pass',($this->input->post('pass')));
		
			$query = $this->db->get('login');
			if($query->num_rows == 1)
			{
				return $query->row();
			}
		}


		function pass_validate()
		{
			$this->db->where('u_id',$this->input->post('email'));
			$query = $this->db->get('user_login');
			if($query->num_rows() > 0)
			{
					return $query->row();
			}
		}
		
		function admin_pass_validate()
		{
			$this->db->where('username',$this->input->post('email'));
			$query = $this->db->get('login');
			if($query->num_rows() > 0)
			{
					return $query->row();
			}
		}
		
		
		function pass_validate2()
		{
			$this->db->where('u_id',$this->input->post('email'));
			$query = $this->db->get('user_login');
			if($query->num_rows == 1)
			{
				return true;
				
			}
		}
		
		function getpass()
		{
			$this->db->where('u_id',$this->input->post('email'));
			$query = $this->db->get('user_login');
			if($query->num_rows() > 0)
			{
				$member = $query->row();
				return $member;
			}
		}
		
		function u_validate()
		{
			$this->db->where('u_id',$this->input->post('username'));
			$this->db->where('u_pass',md5($this->input->post('pass')));
			
			$query = $this->db->get('user_login');
			if($query->num_rows == 1)
			{
				return true;
			}
		}
	
		
		
		function submit_query($name,$pass,$email)
		{
			$this->load->library('encrypt');
			$data = array(
               'u_name' => $name ,
               'u_pass' => md5($pass) ,
			   'pass_decode'=>$this->encrypt->encode($pass),
               
			   'u_id' => $email,
				'enc_uid'=> md5($email)
            );

			$this->db->insert('user_login', $data); 
		}
	function submit_detail($u_id,$designation,$name_of_institute,$addr_institute,$ins_country,$u_highedu,$subject_area,$about_me,$int_area,$u_contact)
		{
			$data = array(
               'u_desig' => $designation ,
               'u_ins' => $name_of_institute ,
			   'ins_address' => $addr_institute,
               'ins_country' => $ins_country ,
               'u_contact' => $u_contact ,
			   'about_me' => $about_me,
               'interest_area' => $int_area ,
            	'subject_area' => $subject_area,
				'u_highedu' => $u_highedu,
				'u_status' => "Activated"
		
            );
            
            
			$this->db->where('u_id', $u_id);
			$this->db->update('user_login', $data); 

			
		}
		function edit_detail($u_id,$designation,$name_of_institute,$addr_institute,$ins_country,$u_highedu,$subject_area,$about_me,$int_area,$u_contact,$u_name)
		{
			$data = array(
               'u_desig' => $designation ,
               'u_ins' => $name_of_institute ,
			   'ins_address' => $addr_institute,
               'ins_country' => $ins_country ,
               'u_contact' => $u_contact ,
			   'about_me' => $about_me,
               'interest_area' => $int_area,
			   'u_name' => $u_name,
				'subject_area' => $subject_area,
				'u_highedu' => $u_highedu,
			
            
		
            );
            
            
			$this->db->where('u_id', $u_id);
			$this->db->update('user_login', $data); 

			
		}
		function submit_feedback($name,$company,$designation,$query,$email)
		{
			$data = array(
               'name' => $name ,
               'company' => $company ,
               'designation' => $designation,
			   'query' => $query,
			   'email_address' => $email,
            );

			$this->db->insert('feedback', $data); 
		}
		
		function validate1()
		{
			$this->db->where('u_id',$this->session->userdata('u_id'));
			$this->db->where('u_pass',md5($this->input->post('pass')));
			$query = $this->db->get('user_login');
			if($query->num_rows == 1)
			{
				return true;
			}
		}

		function getmember()
		{
			$this->db->where('username',$this->session->userdata('username'));
			$this->db->where('pass',md5($this->input->post('pass')));
			$query = $this->db->get('login');
			if($query->num_rows() > 0)
			{
				$member = $query->row();
				return $member;
			}
		}
		function getuserinfo()
		{
			$this->db->where('u_id',$this->input->post('username'));
			$this->db->where('u_pass',md5($this->input->post('pass')));
			$query = $this->db->get('user_login');
			
			if($query->num_rows() > 0)
			{
				$member = $query->row();
				return $member;
			}
		}
		function getuser()
		{
		
			$query = $this->db->get('user_login');
			if($query->num_rows() > 0)
			{
				$member = $query->row();
				return $member;
			}
		}
		
		function changenow()
		{
				
			$this->load->library('encrypt');
				$data = array(
				'u_pass' =>md5($this->input->post('newpass')) ,       
				'pass_decode'=>$this->encrypt->encode($this->input->post('newpass')),
				    );
			$this->db->where('u_id', $this->session->userdata('u_id'));
			$this->db->update('user_login', $data);

		}

		function check($email)
		{
			$this->db->where('u_id',$email);
			$query = $this->db->get('user_login');
			if($query->num_rows == 1)
			{
				return true;
			}
		}
		
		function mark_reg($u_id)
		{
			$this->db->where('enc_uid',($u_id));
			$query = $this->db->get('user_login');
			if($query->num_rows() > 0)
			{
				$member = $query->row();
				return $member;
			}
			
		}

		
		
		
}

?>