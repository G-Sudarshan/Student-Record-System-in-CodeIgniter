<?php

if(!$this->session->userdata('student_id'))
          return redirect('Login');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div align="right" >

          <?php

         echo form_open('Login/studentLogout');    
         echo form_submit(['name'=>'submit','value'=>'Log out','class'=>'btn btn-danger']); 
         echo form_close();

          ?>
                    
        </div>

	

        <center>

            <h1>student dashboard</h1>

            <?php if($msg = $this->session->flashdata('success')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-success">
                        <?= $msg ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        Welcome <?= $studentData->row()->name; ?><br><br>
        Roll no : <?= $studentData->row()->rollno; ?><br>
        Email : <?= $studentData->row()->email; ?><br>
        Department : <?= $studentData->row()->department; ?>

    </center>
</body>
</html>