<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HeadController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Head of Department",
			'route' => json_encode("head"),
		);

		$this->load_view('head/head.php', $params);
	}
}