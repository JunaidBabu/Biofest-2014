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
	public function biobiz(){
		$this->load->view('event/biobiz');
	}
	public function biorobotics(){
		$this->load->view('event/biorobotics');
	}
	public function forensics(){
		$this->load->view('event/forensics');
	}
	public function gelart(){
		$this->load->view('event/gelart');
	}
	public function ignobel(){
		$this->load->view('event/ignobel');
	}

	public function industry(){
		$this->load->view('event/industry');
	}
	public function openquiz(){
		$this->load->view('event/openquiz');
	}
	public function paper(){
		$this->load->view('event/paper');
	}
	public function streax(){
		$this->load->view('event/streax');
	}
	public function weboflife(){
		$this->load->view('event/weboflife');
	}
}
?>
