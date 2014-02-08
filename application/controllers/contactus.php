<?php
class Contactus extends CI_Controller {

	public function index()
	{
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');
	}
	public function ajax()
	{
			$this->load->view('contact');
	}
}
?>
