<!DOCTYPE html>
<html>
<head>
	<title>Login to SRS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<center><h1>student record system</h1></center>
<?php if($error = $this->session->flashdata('login_failed')): ?>
      <div class="row">
      	<div class="col-lg-12">
      		<div class="alert alert-dismissible alert-danger">
      			<?= $error;  ?>
      			
      		</div>
      		
      	</div>

      </div>

  <?php endif; ?>
<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h2>Admin Login</h2>
			<?php echo form_open('Login/adminLogin');  ?>
			<div class="form-group">
				<label for="username">
					Username :
				</label>
				<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username']); 

				echo form_error('username'); ?>
			</div>

			<div class="form-group">
				<label for="password">
					Password :
				</label>
				<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); 

				echo form_error('password'); ?>
			</div>
			<div>
				<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); 

					echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);

					echo form_close();
				 ?>
			</div>

		</div>

		<div class="col-sm">

			<h2>Student Login</h2>
			<?php echo form_open('Login/studentLogin');  ?>
			<div class="form-group">
				<label for="username">
					Username :
				</label>
				<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username']); 

				echo form_error('username'); ?>
			</div>

			<div class="form-group">
				<label for="password">
					Password :
				</label>
				<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); 

				echo form_error('password'); ?>
			</div>
			<div>
				<?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); 

					echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']);

					echo form_close();
				 ?>
			</div>
			
		</div>


	</div>
</div>
</body>
</html>