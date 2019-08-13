<?php

class StudentModel extends CI_Model{

	public function getStudentData($student_id)
	{
		$data = $this->db->select(['name','rollno','department','email'])->from('student_user_db')->where('id',$student_id)->get();

		return $data;
	}
}

?>