<?php

class AdminModel extends CI_Model
{
	public function getAdminName($admin_id)
	{
		$name = $this->db->select('name')->from('admin_user_db')->where('id',$admin_id)->get();
		return $name->row()->name;
	}

	public function addStudent($new_student_rollno, $new_student_name, $new_student_department, $new_student_email, $new_student_password, $admin_name )
	{
		return $this->db->insert('student_user_db' , ['rollno' => $new_student_rollno , 'name' => $new_student_name , 'department' => $new_student_department , 'email' => $new_student_email , 'password' => $new_student_password ,'created_by' => $admin_name ] );
	}

	public function getStudentRecord()
	{
		$data = $this->db->get('student_user_db');
		return $data;
	}

	public function getStudentDataToEdit($rollno)
	{
		$data =  $this->db->where('rollno',$rollno)->get('student_user_db');

		
		return $data->row();
	}

	public function updateStudentRecord( $useradata ,$id)
	{

		$this->db->set($useradata);
        $this->db->where('id', $id);
        $this->db->update('student_user_db');
	}

	public function deleteStudent($rollno)
	{
		$this->db->where('rollno', $rollno);
        $this->db->delete('student_user_db');
	}

} 


?>