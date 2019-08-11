<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Information </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<center>
<h3> Edit Student Record </h3>

<div class="col-lg-6">
<?php 

echo form_open("Admin/updateStudentRecord");

echo "Student Name : ";

echo form_input(['name'=>'name','class'=>'form-control' ,'placeholder'=>'name','value'=>set_value('name',$studentData->name)]); 
echo "<br/><br/>";

echo "Student Roll no : ";
echo form_input(['name'=>'rollno','class'=>'form-control' ,'placeholder'=>'name','value'=>set_value('rollno',$studentData->rollno)]); 
echo "<br/><br/>";

echo "Student Department : ";
echo form_input(['name'=>'department','class'=>'form-control' ,'placeholder'=>'name','value'=>set_value('department',$studentData->department)]); 
echo "<br/><br/>";

echo "Student email : ";

echo form_input(['type' =>'email','name'=>'email','class'=>'form-control' ,'placeholder'=>'name','value'=>set_value('email',$studentData->email)]); 
echo "<br/><br/>";

echo "Student password : ";

echo form_input(['name'=>'password','class'=>'form-control' ,'placeholder'=>'name','value'=>set_value('password',$studentData->password)]); 
echo "<br/><br/>";
//echo "<br/><br/>";

$d_data = array(                    
                   'id' => $studentData->id
               );

echo form_hidden($d_data);

echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);
      
echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']);

echo form_close();


?>

</div>

</center>
</body>
</html>