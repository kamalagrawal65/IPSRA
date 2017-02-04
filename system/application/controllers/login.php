<?php
class Login extends Controller {
	
 	function Login()
	{
		parent::Controller();
	} 
	function login_page()
	{
		$this->load->view('login_view');
	}
}
?>