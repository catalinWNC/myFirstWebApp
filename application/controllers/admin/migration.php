<?php
class Migration extends Admin_controller {

	public function __construct(){
		parent::__construct();
	}

	public function index() {
		$this->load->library('migration');
		if (! $this->migration->current()) {
			show_error($this->migration->error_string());
		}
		else {
			echo 'Migration Worked';
		}
	}

}