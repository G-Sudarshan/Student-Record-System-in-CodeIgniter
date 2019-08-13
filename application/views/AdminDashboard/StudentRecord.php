<!DOCTYPE html>
<html>
<head>
	<title>Student Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

   <div align="left"><div class="container">
	<a class="btn btn-info" href=<?= base_url('Admin');  ?>> Go to Admin Dashboard</a></div></div>

	<center><?php if($msg = $this->session->flashdata('msg')): ?>
      <div class="row">
      	<div class="col-lg-12">
      		<div class="alert alert-dismissible alert-success">
      			<?= $msg;  ?>
      			
      		</div>
      		
      	</div>

      </div>

  <?php endif; ?></center>

	<center><h1>Student Record</h1>
		<br/><br/>
		<div class="container">

			<table class="table table-hover">

				<th>sr no.</th>
				<th>Student Name</th>
				<th>Roll no</th>
				<th>Deapartment</th>
				<th>Email</th>
				<th>Password</th>
				<th>Edit</th>
				<th>Delete</th>
				
				<?php  $count = 1; ?>
				<?php foreach ($studentRecord->result() as $student) { ?>

					<tr>
						<td><?= $count++; ?></td>
						<td><?= $student->name; ?></td>
						<td><?= $student->rollno; ?></td>
						<td><?= $student->department; ?></td>
						<td><?= $student->email; ?></td>
						<td><?= $student->password; ?></td>
						<td>
							<?php

							$rollno = $student->rollno;

							?>
							<a class="btn btn-primary" href=<?= base_url('Admin/editStudent?var1='.$rollno);  ?>> Edit</a></td>
						<td>

							<a class="btn btn-danger" href=<?= base_url('Admin/deleteStudent?var1='.$rollno);  ?>> Delete</a></td>
					</tr>
					
			<?php	} ?>

			</table>


			



		</div>


</center>
</body>
</html>