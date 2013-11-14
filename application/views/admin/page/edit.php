<h3><?php echo empty($page->id) ? 'Add a new page' : 'Edit page ' . $page->title; ?></h3>

<section>
	<?php echo validation_errors(); ?>
	<?php echo form_open(); ?>

	  <div class="form-group">
		  <?php echo form_label('Parent:', 'parent'); ?>
		  <?php
		  echo form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id, 'id="parent" class="form-control"'); 
		  ?>
	  </div>  

	  <div class="form-group">
		  <?php echo form_label('Title:', 'title'); ?>
		  <?php
		  $data = array(
		  	'name' => 'title',
		  	'id' => 'title',
		  	'class' => 'form-control',
		  	);
		  echo form_input($data, set_value('title', $page->title)); 
		  ?>
	  </div>

	  <div class="form-group">
		  <?php echo form_label('Slug', 'slug'); ?>
		  <?php
		  $data = array(
		  	'name' => 'slug',
		  	'id' => 'slug',
		  	'class' => 'form-control',
		  	);
		  echo form_input($data, set_value('slug', $page->slug))
		  ?>
	  </div>

	  <div class="form-group">
		  <?php echo form_label('Body', 'body'); ?>
		  <?php
		  $data = array(
		  	'name' => 'body',
		  	'id' => 'body',
		  	'class' => 'form-control tinymce',
		  	'rows' => '8',
		  	);
		  echo form_textarea($data, set_value('body', $page->body))
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