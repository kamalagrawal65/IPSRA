<?php
class Hello extends Controller {
	var $name;
	var $color;
	var $sitename;
 	function Hello()
	{
	parent::Controller();
	$this->name = 'puneet';
	$this->color = 'red';
	
	} 
	function you($firstname='',$lastname='')
	{
	/*$data['name'] = $this->name;
	$data['color'] = $this->color;
*/
	$data['name']= ($firstname) ? $firstname.' '.$lastname : $this->name;
	$data['color'] = $this->color;
	$data['sitename'] =  $this->config->site_url();
	$this->load->view('you_view', $data);
	}
}
?>