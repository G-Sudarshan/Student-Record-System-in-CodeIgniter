<?php

class Admin extends MY_Controller{

	public function index()
	{
		$admin_id = $this->session->userdata('admin_id');
		$this->load->model('AdminModel');
        $admin_name = $this->AdminModel->getAdminName($admin_id);
   	    $this->session->set_userdata('admin_name',$admin_name);
		$this->load->view('AdminDashboard/Dashboard');
	}

	public function addStudent()
	{
	  $new_student_rollno = $this->input->post('new_student_rollno');
      $new_student_name = $this->input->post('new_student_name');
      $new_student_department = $this->input->post('new_student_department');
      $new_student_email = $this->input->post('new_student_email');
      $new_student_password = $this->input->post('new_student_password');

      $admin_name = $this->session->userdata('admin_name');
      

   	  $this->load->model('AdminModel');
   	  $this->AdminModel->addStudent($new_student_rollno, $new_student_name, $new_student_department, $new_student_email, $new_student_password,$admin_name );
   	  $this->session->set_flashdata('addmsg','Student added successfully !');

   	  	

   	 return redirect('Admin');

		
	}

	public function loadStudentRecord()
	{
		$this->load->model('AdminModel');
		$StudentRecord = $this->AdminModel->getStudentRecord();
		$this->load->view('AdminDashboard/StudentRecord',['StudentRecord' => $StudentRecord]);

	}

	public function editStudent()
	{
		$rollno = $this->input->post('rollno');
		$this->load->model('AdminModel');
		$studentData =  $this->AdminModel->getStudentDataToEdit($rollno);
		
		//print_r($studentData);
		//$data = $studentData->result();
		$this->load->view('AdminDashboard/EditStudent',['studentData' => $studentData]);

	}

	public function updateStudentRecord()
	{
	$useradata = array(
	  'rollno' => $this->input->post('rollno'),
      'name' => $this->input->post('name'),
      'department' => $this->input->post('department'),
      'email' => $this->input->post('email'),
      'password' => $this->input->post('password'),
      
       );	


      $id = $this->input->post('id');

      $this->load->model('AdminModel');

      $this->AdminModel->updateStudentRecord( $useradata ,$id);

      $this->session->set_flashdata('updatemsg','Student Record Updated Successfully !');

      redirect('Admin/loadStudentRecord');


		
	}

	public function deleteStudent()
	{
		$rollno =  $this->input->post('rollno');

		$this->load->model('AdminModel');

		$this->AdminModel->deleteStudent($rollno);

		$this->session->set_flashdata('deletemsg','Student Record deleted Successfully !');

		 redirect('Admin/loadStudentRecord');

	}
}

?>