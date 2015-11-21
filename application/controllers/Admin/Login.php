<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public $username;
	public $password;
	
	public function index(){
		$this->load->view('admin/admin_login');
	}
	
	public function doLogin(){
	
		$this->load->database();
	
		isset($_POST['username']) ? $username = $_POST['username'] : $username = '';
		isset($_POST['password']) ? $password = $_POST['password'] : $password = '';
		
		$this->load->model('AdminModel');
		$username = $this->AdminModel->getUser($username,$password);
		
		if(strlen($username) > 0){
			$_SESSION["USERNAME"] = $this->username;
			echo "Login Success";
		}else{
			$this->load->view('admin/admin_login');
		}
 	}	
}
?>