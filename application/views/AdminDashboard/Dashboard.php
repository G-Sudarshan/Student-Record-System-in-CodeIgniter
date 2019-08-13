<?php

if(!$this->session->userdata('admin_id'))
  return redirect('Login');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <div  align="right">
   <div class="container">
     <a class="btn btn-danger" href=<?php echo base_url('Login/adminLogout'); ?>>Log out</a>
   </div> 
  </div>
  <div  align="right">
   <div class="container">
    <br/>
     <a class="btn btn-primary" href=<?php echo base_url('Admin/loadStudentRecord'); ?>>View Student Record</a>
   </div> 
  </div>
<center><?php if($msg = $this->session->flashdata('success')): ?>
      <div class="row">
      	<div class="col-lg-12">
      		<div class="alert alert-dismissible alert-success">
      			<?= $msg;  ?>
      			
      		</div>
      		
      	</div>

      </div>

  <?php endif; ?>

  <h2>Welcome <?= $this->session->userdata('admin_name'); ?></h2>

  <div class="container">

  	<?php 

  echo form_open('Admin/addStudent');

  echo "Enter roll no of student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'new_student_rollno','placeholder'=>'Roll no of student ','class'=>'form-control']);
  echo "<br/><br/>";

  echo "Enter name of student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'new_student_name','placeholder'=>'name of student ','class'=>'form-control']);
  echo "<br/><br/>";

  echo "Enter department of student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'new_student_department','placeholder'=>'department of student ','class'=>'form-control']);
  echo "<br/><br/>";

  echo "Enter email for student(It will be username of student)  &nbsp; : &nbsp;";
  echo form_input(['type'=>'email','name'=>'new_student_email','placeholder'=>'email for student ','class'=>'form-control']);
  echo "<br/><br/>";

  echo "Enter password for student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'new_student_password','placeholder'=>'password for student ','class'=>'form-control']);
  echo "<br/><br/>";

  echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); 

 echo form_submit(['name'=>'submit','value'=>'Add Student','class'=>'btn btn-primary']);

 echo form_close();

  ?></div>

  </center>
</body>
</html>
