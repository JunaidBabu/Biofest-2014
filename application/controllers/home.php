<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('email'))
			echo "Welcome ".$this->session->userdata('name')." <a href=".base_url('index.php/beta/logout').">Logout</a>";
		else
			//echo $this->session->userdata($data);
			$this->load->view('header');
			$this->load->view('welcome_message');
			$this->load->view('footer');
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
	public function ajax()
	{
			$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */	