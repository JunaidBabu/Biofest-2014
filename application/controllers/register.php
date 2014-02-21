<?php
class Register extends CI_Controller {

	public function index()
	{
		//var_dump($_POST['data']);
		
		$this->load->database();

		$email="";
		$name="";
		$pass="";
		$insti="";
		$dept="";
		$type="";
		if(isset($_POST['type']))
			$type = $_POST['type'];
		if(isset($_POST['email']))
			$email = $_POST['email'];
		if(isset($_POST['name']))
			$name = $_POST['name'];
		if(isset($_POST['pass']))
			$pass = $_POST['pass'];
		if(isset($_POST['insti']))
			$insti = $_POST['insti'];
		if(isset($_POST['dept']))
			$dept = $_POST['dept'];


		if($type=="reg"){		
			$query=$this->db->get_where('users',array('email'=>$email));
			$count = $query->num_rows();
			if($count==0){
				$data = array(
	                    'name'=>$name,
	                    'email'=>$email,
	                    'password'=>md5($pass),
	                    'insti'=>$insti,
	                    'dept'=>$dept
	                    );
				$this->db->insert('users',$data); 
				$this->session->set_userdata($data);
				echo "Success";
			}else{
				echo "Email ".$email." already registered";
			}
		}else if($type=="sig"){
			$query=$this->db->get_where('users',array('email'=>$email,'password'=>md5($pass)));
			$count = $query->num_rows();
			if($count>0){
				 $row = $query->row_array(); 
				 $data = array(
	                    'name'=>$row['name'],
	                    'email'=>$row['email'],
	                    'insti'=>$row['insti'],
	                    'dept'=>$row['dept']
	                    );
				 $this->session->set_userdata($data);
				 echo "Success";
			}else{
				echo "Email and Password combination not found!";
			}
			//echo $email.$count;
		}
	
	}

}
?>
