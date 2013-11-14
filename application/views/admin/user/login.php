<div class="modal-header">
  <h4 class="modal-title">Login</h4>
  <p>Please log in to continue.</p>
</div>
<div class="modal-body">

  <?php echo validation_errors(); ?>

  <?php echo form_open('index.php/admin/user/login'); ?>

	  <div class="form-group">
		  <?php echo form_label('Email Address', 'email'); ?>
		  <?php
		  $data = array(
		  	'name' => 'email',
		  	'id' => 'email',
		  	'class' => 'form-control',
		  	);
		  echo form_input($data); 
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
	  	<?php
	  		$data = array(
	  			'type' => 'submit',
	  			'content' => 'Log In',
	  			'class' => 'btn btn-primary',
	  			);
	  		echo form_button($data);
	  	?>
	  </div>

  <?php echo form_close(); ?>

</div>