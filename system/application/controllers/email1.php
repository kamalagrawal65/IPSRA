<?php 
  
/** 
* SENDS EMAIL WITH GMAIL 
*/
class Email1 extends Controller 
{ 

	function __construct() 
    { 
        parent::Controller(); 
    } 
  
    function index() 
    {    
  
        $config['protocol'] = 'smtp'; 
        $config['smtp_host'] = '172.16.73.5'; 
        $config['smtp_port'] = 25; 
        $config['smtp_user'] = 'nitin.paliwal@juit.ac.in'; 
        $config['smtp_pass'] = '12345678'; 
  
        $this->load->library('email', $config); 
        $this->email->set_newline("\r\n"); 
  
        $this->email->from('nitin.paliwal@juit.ac.in', 'Ibira Testing'); 
        $this->email->to('nitin.paliwal@juit.ac.in'); 
        $this->email->subject('This is an email test'); 
        $this->email->message('It is working. Great!<br>Another testing'); 

	$this->load->library('encrypt');        
	
	$text1="Hello";
	$text2=$this->encrypt->encode($text1);
	$text3=$this->encrypt->decode($text2);
	
	echo $text1."<br>".$text2."<br>".$text3;


  /*      if($this->email->send()) 
        { 
            echo 'Your email was sent, successfully.'; 
        } 
  
        else
        { 
            show_error($this->email->print_debugger()); 
        } 
*/  
  } 
} 
  
?>

