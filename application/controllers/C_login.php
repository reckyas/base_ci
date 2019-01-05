<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends MY_controller {
	public function __construct() {
		parent::__construct();
		if($this->is_login) {
			redirect('home');
		}
	}
	public function index() {
		$this->set_css([
						base_url('resources/bootstrap/css/bootstrap.min.css'),
						base_url('resources/css/style.css')
					   ]);
		$this->v('v_login');
	}
	public function auth() {
		
	}
}