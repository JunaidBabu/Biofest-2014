<?php
class Sponsorship extends CI_Controller {

	public function index()
	{
			$this->load->view('header');
			$this->load->view('spons');
			$this->load->view('footer');
	}
	public function ajax()
	{
			$this->load->view('spons');
	}
}
?>
