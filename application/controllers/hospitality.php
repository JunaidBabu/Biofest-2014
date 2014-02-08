<?php
class Hospitality extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
			$this->load->view('hospitality');
			$this->load->view('footer');
		
	}
	public function ajax()
	{
		$this->load->view('hospitality');
	}
}
?>
