<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Information</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container" align="left">
		
		<a class="btn btn-info" href=<?= base_url('Admin/loadStudentRecord');  ?>> Back</a>
	</div>

	<center>
		
		<h2>Edit Student Information</h2>
		<div class="col-lg-6">

			<?php 

  echo form_open('Admin/updateStudent');

  echo " roll no of student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'rollno','placeholder'=>'Roll no of student ','class'=>'form-control','value'=>set_value('rollno',$studentData->rollno)]);
  echo "<br/><br/>";

  echo " name of student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'name','placeholder'=>'name of student ','class'=>'form-control','value'=>set_value('rollno',$studentData->name)]);
  echo "<br/><br/>";

  echo "department of student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'department','placeholder'=>'department of student ','class'=>'form-control','value'=>set_value('rollno',$studentData->department)]);
  echo "<br/><br/>";

  echo "email for student(It will be username of student)  &nbsp; : &nbsp;";
  echo form_input(['type'=>'email','name'=>'email','placeholder'=>'email for student ','class'=>'form-control','value'=>set_value('rollno',$studentData->email)]);
  echo "<br/><br/>";

  echo "password for student  &nbsp; : &nbsp;";
  echo form_input(['name'=>'password','placeholder'=>'password for student ','class'=>'form-control','value'=>set_value('rollno',$studentData->password)]);
  echo "<br/><br/>";


  echo form_hidden(['id'=>$studentData->id]);

  echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); 

 echo form_submit(['name'=>'submit','value'=>'Update Student Information','class'=>'btn btn-primary']);

 echo form_close();

  ?>
			


		</div>


	</center>

</body>
</html>