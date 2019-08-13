<?php

class LoginModel extends CI_Model{

	public function adminLogin($userdata)
	{
		$this->db->select('*');
		$this->db->from('admin_user_db');
		$this->db->where($userdata);
		$query = $this->db->get();

		return $query->row()->id;


	}

	public function studentLogin($userdata)
	{
		$this->db->select('*');
		$this->db->from('student_user_db');
		$this->db->where($userdata);
		$query = $this->db->get();

		return $query->row()->id;
	}
}

?>