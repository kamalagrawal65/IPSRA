<?php
class temp extends Controller {

	function temp()
	{
		parent::Controller();

		$this->load->model('temp_model');

	}
	function show_table($table1)
	{
		$result=$this->temp_model->edit_tables($table1);
		$this->load->view('inst_courses_data',array('result'=>$result));
	}
	
	
	
	
}
?>