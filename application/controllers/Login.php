<?php

class Login extends MY_Controller
{
	public function index()
	{
		$this->load->view('Login');
	}

	public function adminLogin()
	{
		  $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|min_length[8]');

      if($this->form_validation->run()==TRUE)
      {
         $userdata = array(
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                     );
         
         $this->load->model('LoginModel');

         $user_id = $this->LoginModel->adminLogin($userdata);
         
         if($user_id)
         {
            $this->session->set_userdata('admin_id',$user_id);
            $this->session->set_flashdata("success","You are logged in");
            redirect('Admin');
         }
         else
         {
            $this->session->set_flashdata("error","No such account exists in database");
            redirect('Login');
         }
      }
      else
      {
         $this->session->set_flashdata('login_failed','Invalid username and password');
         return redirect('Login');
      }

	}

	public function studentLogin()
	{
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required|min_length[8]');

      if($this->form_validation->run()==TRUE)
      {
         $userdata = array(
                        'email' => $this->input->post('username', TRUE),
                        'password' => $this->input->post('password', TRUE),
                     );
         $this->load->model('LoginModel');
         $user_id = $this->LoginModel->studentLogin($userdata);
         if($user_id)
         {
            $this->session->set_userdata('student_id',$user_id);
            $this->session->set_flashdata('success',"You are logged in");
            redirect('Student');
         }
         else
         {
            $this->session->set_flashdata("error","No such account exists in database");
            redirect('Login');
         }
      }
       else
      {
         $this->session->set_flashdata('login_failed','Invalid username and password');
         return redirect('Login');
      }
      

  

	}

	public function adminLogout()
	{
		$this->session->sess_destroy();
         return redirect('Login');
	}

   public function studentLogout()
   {
      $this->session->sess_destroy();
         return redirect('Login');
   }
}

?>