<?php
class Profile extends CI_Controller {

	public function index()
	{
		
		$email="";
		$name="";
		$pass="";
		$insti="";
		$dept="";
		$type="";
		$message="";
		if(isset($_POST['type']))
			$type = $_POST['type'];
		
		if(isset($_POST['name']))
			$name = $_POST['name'];
		if(isset($_POST['pass1']))
			$pass = $_POST['pass1'];
		if(isset($_POST['insti']))
			$insti = $_POST['insti'];
		if(isset($_POST['dept']))
			$dept = $_POST['dept'];

		$this->load->view('header');
		if(isset($_POST['email'])){
			if($this->session->userdata('name')){
					$email = $_POST['email'];
					$data = array(
	                    'name'=>$name,
	                    'email'=>$email,
	                    'password'=>md5($pass),
	                    'insti'=>$insti,
	                    'dept'=>$dept
	                    );
					 $this->db->where('email', $email);
					 $this->db->update('users', $data);
					 $this->session->set_userdata($data);
					
					 echo "<p class='text-center bg-success'>Profile updated</p>";
				}
		}
		
			
			
			
			if($this->session->userdata('name'))
				$this->load->view('profile');
			else
				echo "<p class='text-center bg-danger'>Please login to view this page</p>";
			$this->load->view('footer');
	}
	public function ajax()
	{
			$this->load->view('profile');
	}
}
?>
