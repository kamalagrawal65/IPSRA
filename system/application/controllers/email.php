<?php 
  
/** 
* SENDS EMAIL WITH AOL.com 
*/
class Email extends Controller 
{ 
    function __construct() 
    { 
        parent::Controller(); 
    } 
  
    function index() 
    {    
  
/*  
 		$config['protocol'] = 'smtp'; 
		$config['smtp_host'] = 'smtp.aol.com'; 
		$config['smtp_port'] = 587; 
		$config['smtp_user'] = 'ibiranet@aol.com'; 
		$config['smtp_pass'] = 'jaypeewakna'; 
		$config['mailtype'] = 'html';
		$this->load->library('email', $config); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('ibiranet@aol.com', 'IBIRA Administrator');
 		$config['protocol'] = 'smtp'; 
		$config['smtp_host'] = '172.16.73.5'; 
		$config['smtp_port'] = 25; 
		$config['smtp_user'] = 'nitin.paliwal@juit.ac.in'; 
		$config['smtp_pass'] = '12345678'; 
		$config['mailtype'] = 'html';
		$this->load->library('email', $config); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('ibiranet@aol.com', 'IBIRA Administrator');
		 		
*/

//using config file;
    	
    	$this->load->library('email'); 
		$this->email->set_newline("\r\n"); 
		$this->email->from('ibiranet@aol.com', 'IBIRA Administrator');
    	$this->email->to('nitin.paliwal@juit.ac.in'); 
        $this->email->subject('This is an email test'); 
        $this->email->message('It is working. Great!<br>Another testing'); 
  
        if($this->email->send()) 
        { 
            echo 'Your email was sent, successfully.'; 
        } 
  
        else
        { 
            show_error($this->email->print_debugger()); 
        } 
    } 
} 
  
?>

