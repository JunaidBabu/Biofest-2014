<?php
class Events extends CI_Controller {

	public function index()
	{
			$this->load->view('header');
			$this->load->view('events');
			$this->load->view('footer');
	}
	public function ajax()
	{
			$this->load->view('events');
	}
}
?>
