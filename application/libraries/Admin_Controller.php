<?php
class Admin_Controller extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->data['meta_title'] = "My Awsome CMS";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');

		//Log in check
		$exception_uris = array(
			'admin/user/login',
			'admin/user/logout'
			);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->user_m->loggedin() == FALSE) {
				redirect('admin/user/login');
			}
		}
	}
}