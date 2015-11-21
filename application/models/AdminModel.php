<?php

class AdminModel extends CI_Model {
	
	public $username;
	public $password;
	
	function createUser(){
			
	}
	
	function getUser($qusername,$qpassword){
		
		$sql = "SELECT * FROM Admin WHERE username = ? AND password = ?";
		$query = $this->db->query($sql, array($qusername,$qpassword));
		
		if ($query->num_rows() > 0){
			foreach ($query->result() as $row){
				$this->username = $row->username;
			}
		}
		
		return $this->username;
	}
}
?>