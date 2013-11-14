<h3><?php echo empty($article->id) ? 'Add a new article' : 'Edit article ' . $article->title; ?></h3>

<section>
	<?php echo validation_errors(); ?>
	<?php echo form_open(); ?>

	   <div class="form-group">
		  <?php echo form_label('Publication Date:', 'pubdate'); ?>
		  <?php
		  $data = array(
		  	'name' => 'pubdate',
		  	'id' => 'pubdate',
		  	'class' => 'form-control datepicker',
		  	);
		  echo form_input($data, set_value('pubdate', $article->pubdate)); 
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
		  echo form_input($data, set_value('title', $article->title)); 
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
		  echo form_input($data, set_value('slug', $article->slug))
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
		  echo form_textarea($data, set_value('body', $article->body))
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

<script>
	$(function(){
		$('.datepicker').datepicker({ format : 'yyyy-mm-dd' })
	});
</script>