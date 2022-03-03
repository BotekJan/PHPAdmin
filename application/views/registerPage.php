 <?php
   if ($message) {
      if (is_array($message)) {
         foreach ($message as $key => $value) {
            if ($value != '') {

               echo '<div class="alert alert-danger">' . $value . ' </div>';
            }
         }
      } else {
         echo '<div class="alert alert-danger">' . $message . ' </div>';
      }
   }
   ?>
 <?php echo form_open('RegisterUser'); ?>
 <div class="form-group">
    <?php
      echo form_label('Username', 'name');
      echo form_input('name', isset($username) ? $username : '', 'class="form-control"');
      ?>
 </div>
 <div class="form-group">
    <?php
      echo form_label('Password', 'password');
      echo form_password('password', '', 'class="form-control"');

      echo form_label('Repeat password', 'passwordRepeat');
      echo form_password('passwordRepeat', '', 'class="form-control"');
      ?>
 </div>
 <?php
   echo form_submit('submit', 'Submit', 'class="btn btn-primary"');
   echo form_close();
   ?>