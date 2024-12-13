<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PeriodsController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Periods Causing Concern",
			'route' => json_encode("periods"),
		);

		$this->load_view('periods/periods.php', $params);
	}
}