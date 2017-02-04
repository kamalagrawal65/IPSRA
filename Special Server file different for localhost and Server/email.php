 		$config['protocol'] = 'smtp'; 
		$config['smtp_host'] = 'smtp.aol.com'; 
		$config['smtp_port'] = 587; 
		$config['smtp_user'] = 'ibiranet@aol.com'; 
		$config['smtp_pass'] = 'jaypeewakna'; 
		$config['mailtype'] = 'html';
		$this->load->library('email', $config); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('ibiranet@aol.com', 'IBIRA Administrator');
/*  

 		$config['protocol'] = 'smtp'; 
		$config['smtp_host'] = '172.16.73.5'; 
		$config['smtp_port'] = 25; 
		$config['smtp_user'] = 'nitin.paliwal@juit.ac.in'; 
		$config['smtp_pass'] = '12345678'; 
		$config['mailtype'] = 'html';
		$this->load->library('email', $config); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('nitin.paliwal@juit.ac.in', 'IBIRA Administrator');
*/		 		
