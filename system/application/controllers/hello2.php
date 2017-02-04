<?php
class Hello2 extends Controller {
	
 	function Hello2()
	{
	parent::Controller();
	$this->load->model('myfrienddata');
	} 
	function friends()
	{
		$name = 'puneet';
		$this->load->view('myfriend',array('n'=>$name));
		$this->myfrienddata->data(array('name'=>$name));	
	}
	
	
	
	
}
?>