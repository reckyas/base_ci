<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_controller extends CI_controller {
	protected $is_login;
	public $title,
		   $css,
		   $js;
	public function __construct () {
		parent::__construct();
		$this->is_login = (!$this->session->userdata('loged')) ? FALSE : $this->session->userdata('loged');
	}
	public function v($view) {
		return $this->load->view($view);
	}
	public function set_css($css) {
		if(is_array($css)) {
			foreach($css as $link) {
				$this->css .= '<link rel="stylesheet" href="' . $link . '" />';
			}
		} else {
			$this->css = '<link rel="stysheet" href="' . $css . '" />';
		}
	}
	public function set_js($js) {
		if(is_array($js)) {
			foreach($js as $link) {
				$this->css .= '<script src="' . $link . '"></script>';
			}
		} else {
			$this->js = '<script src="' . $link . '"></script>';
		}
	}
}