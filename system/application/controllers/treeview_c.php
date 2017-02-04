<?php
class treeview_c extends Controller {
 


	function treeview_c()
	{
		parent::Controller();
	}
	function maketree()
	{
		$this->load->view('treeview');
	}
	function country()
	{
		 $this->load->model('country');
		$data['states'] = $this->country->search_country();
		
		$this->load->view('treeview',$data);
	}
	
	
	
}
?>
