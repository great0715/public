<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AchedemController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Academic Progress Integration",
			'route' => json_encode("achedemy"),
		);

		$this->load_view('achedemy/achedemy.php', $params);
	}
}