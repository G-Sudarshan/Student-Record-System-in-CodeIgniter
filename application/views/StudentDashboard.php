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
	<center>
		<h1>Student Dashboard</h1>

		<?php if($msg = $this->session->flashdata('success')): ?>
      <div class="row">
      	<div class="col-lg-12">
      		<div class="alert alert-dismissible alert-success">
      			<?= $msg;  ?>
      			
      		</div>
      		
      	</div>

      </div>

  <?php endif; ?>
  <div  align="right">
   <div class="container">
     <a class="btn btn-danger" href=<?php echo base_url('Login/studentLogout'); ?>>Log out</a>
   </div> 
  </div>

  Welcome <?= $studentData->row()->name; ?><br/><br/>
  Roll no : <?= $studentData->row()->rollno; ?><br/>
  Email : <?= $studentData->row()->email; ?><br/>
  Department : <?= $studentData->row()->department; ?><br/>




</center>

</body>
</html>