<h3><?php echo empty($user->id) ? 'Add a new user' : 'Edit user ' . $user->name; ?></h3>

<section>
	<?php echo validation_errors(); ?>
	<?php echo form_open(); ?>

	  <div class="form-group">
		  <?php echo form_label('Name:', 'name'); ?>
		  <?php
		  $data = array(
		  	'name' => 'name',
		  	'id' => 'name',
		  	'class' => 'form-control',
		  	);
		  echo form_input($data, set_value('name', $user->name)); 
		  ?>
	  </div>

	  <div class="form-group">
		  <?php echo form_label('Email', 'email'); ?>
		  <?php
		  $data = array(
		  	'name' => 'email',
		  	'id' => 'email',
		  	'class' => 'form-control',
		  	);
		  echo form_input($data, set_value('email', $user->email))
		  ?>
	  </div>

	  <div class="form-group">
		  <?php echo form_label('Password', 'password'); ?>
		  <?php
		  $data = array(
		  	'name' => 'password',
		  	'id' => 'password',
		  	'class' => 'form-control',
		  	);
		  echo form_password($data)
		  ?>
	  </div>

	  <div class="form-group">
		  <?php echo form_label('Password Confirm', 'password_confirm'); ?>
		  <?php
		  $data = array(
		  	'name' => 'password_confirm',
		  	'id' => 'password_confirm',
		  	'class' => 'form-control',
		  	);
		  echo form_password($data)
		  ?>
	  </div>

	  <div class="form-group">
	  	<?php
	  		$data = array(
	  			'type' => 'submit',
	  			'content' => 'Save',
	  			'class' => 'btn btn-primary',
	  			);
	  		echo form_button($data);
	  	?>
	  </div>

  	<?php echo form_close(); ?>
</section>