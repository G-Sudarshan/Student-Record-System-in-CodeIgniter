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
        
        <div align="right" >

          <?php

         echo form_open('Login/adminLogout');    
         echo form_submit(['name'=>'submit','value'=>'Log out','class'=>'btn btn-danger']); 
         echo form_close();

          ?>
          <div align="right">

            <?php

         echo form_open('Admin/loadStudentRecord');    
         echo form_submit(['name'=>'submit','value'=>'View Student Record','class'=>'btn btn-primary']); 
         echo form_close();

          ?>
            
          </div>
                    
        </div>
        <center>  

      <h2>    Welcome <?= $this->session->userdata('admin_name') ?> </h2><br><br>

      <?php if($msg = $this->session->flashdata('addmsg')): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-dismissible alert-success">
                        <?= $msg ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
      <h3>Add a new Student Record</h3><br><br>


          <?php

            echo form_open('Admin/addStudent');

            

            echo "Enter Roll no of Student &nbsp; :&nbsp; ";
            echo form_input(['name'=>'new_student_rollno','placeholder'=>' Roll no of Student','value'=>set_value('student_rollno')]);
            echo "<br/>"; echo "<br/>";


            echo "Enter Name of Student &nbsp; :&nbsp; ";
            echo form_input(['name'=>'new_student_name','placeholder'=>' Name of Student','value'=>set_value('student_name')]);   
            echo "<br/>"; echo "<br/>";

            echo "Enter department of Student &nbsp; :&nbsp; ";
            echo form_input(['name'=>'new_student_department','placeholder'=>' Department of Student','value'=>set_value('student_department')]);   
            echo "<br/>"; echo "<br/>";

            echo "Enter email to be alloted for Student (it will be its username) &nbsp; :&nbsp; ";
            echo form_input(['type'=>'email','name'=>'new_student_email','placeholder'=>' email for Student','value'=>set_value('student_password')]);   
            echo "<br/>"; echo "<br/>";

            echo "Enter password to be alloted for Student &nbsp; :&nbsp; ";
            echo form_input(['name'=>'new_student_password','placeholder'=>' password of Student','value'=>set_value('student_password')]);   
            echo "<br/>"; echo "<br/>"; echo "<br/>"; echo "<br/>";




           echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);

           echo form_submit(['name'=>'submit','value'=>'Add Student','class'=>'btn btn-success']);


           echo form_close();


          ?>


         
        </center>

          </body>
        </html>


         