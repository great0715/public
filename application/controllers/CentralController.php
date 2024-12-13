<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CentralController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Central Behaviour DB",
			'route' => json_encode("central"),
		);

		$this->load_view('central/central.php', $params);
	}
}