<!DOCTYPE html>
<html>
<head>
	<title>Login to SRS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<center><h1>Student Record System</h1></center>

<div class="container">
	<br/><br/><br/><br/> 

	<?php if($error = $this->session->flashdata('login_failed')): ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="alert alert-dismissible alert-danger">
                        <?= $error ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- above is for flashdata  -->
	<div class="row">
            <div class="col-sm">
                        <?php echo form_open('Login/adminLogin'); ?>
                        <h2>Admin Login</h2>
                            <div class="form-group">
                                <label for="username">Username:</label>
                               <?php echo form_input(['name'=>'username','class'=>'form-control' ,'placeholder'=>'Username','value'=>set_value('username')]); ?>
                                <?php echo form_error('username'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <?php echo form_password(['name'=>'password','class'=>'form-control' ,'placeholder'=>'password','value'=>set_value('password')]); ?>
                                <?php echo form_error('password'); ?>
                            </div>
                            <div>
                               <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
      
                             form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
                            </div>
            			<?php echo form_close() ?>
            </div>

            <div class="col-sm">
                        <?php echo form_open('Login/studentLogin'); ?>
                        <h2>Student Login</h2>
                            <div class="form-group">
                            	 <label for="username">Username:</label>
                            	<?php echo form_input(['name'=>'username','class'=>'form-control' ,'placeholder'=>'Username','value'=>set_value('username')]); ?>
                                <?php echo form_error('username', '<div class="error">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                 <?php echo form_password(['name'=>'password','class'=>'form-control' ,'placeholder'=>'password','value'=>set_value('password')]); ?>
                                <?php echo form_error('username', '<div class="error">', '</div>') ?>
                            </div>
                            <div>
                                <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']),
      
                             form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
                            </div>
                        <?php echo form_close() ?>
            </div>
        </div>
    </div>

</body>
</html>