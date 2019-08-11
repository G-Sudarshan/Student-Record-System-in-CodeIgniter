<?php

          if(!$this->session->userdata('admin_id'))
          return redirect('Login');

         ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Record</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>Student Record</h1>
<a class="btn btn-info" href=<?= base_url('Admin'); ?>  >Go to Admin Dashboard</a>

<center><?php if($msg = $this->session->flashdata('updatemsg')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-success">
                        <?= $msg ?>
                    </div>
                </div>
            </div>
        <?php endif; ?></center>

        <center><?php if($msg = $this->session->flashdata('deletemsg')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-success">
                        <?= $msg ?>
                    </div>
                </div>
            </div>
        <?php endif; ?></center>

<table class="table table-hover">
	<th>sr.no</th>
	<th>Student Name</th>
	<th>Roll no</th>
	<th>department</th>
	<th>email</th>
	<th>password</th>
	<th>Edit</th>
	<th>Delete</th>

    <?php $count = 1; ?>
	<?php foreach ($StudentRecord->result() as $student ) { ?>
	
	
	<tr>
		<td><?= $count++; ?></td>
		<td><?= $student->name; ?></td>
		<td><?= $student->rollno; ?></td>
		<td><?= $student->department; ?></td>
		<td><?= $student->email; ?></td>
		<td><?= $student->password; ?></td>
		<td>
			<?php 

				$d_data = array(                    
                   'rollno' => $student->rollno
                    );

				echo form_open('Admin/editStudent');

				echo form_hidden($d_data);
				echo form_submit(['name'=>'submit','value'=>'Edit','class'=>'btn btn-primary']); 
				echo form_close();
	?>
		</td>
		<td>
			<?php 

				$d_data = array(                    
                   'rollno' => $student->rollno
                    );

				echo form_open('Admin/deleteStudent');

				echo form_hidden($d_data);
				echo form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']); 
				echo form_close();
	        ?>
	
			
		</td>
	</tr>

	<?php } ?>
</table>
</body>
</html>