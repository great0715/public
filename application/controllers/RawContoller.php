<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RawContoller extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Raw Data",
			'route' => json_encode("raw"),
		);

		$this->load_view('raw/raw.php', $params);
	}
}