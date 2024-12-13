<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TutorController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Tutor",
			'route' => json_encode("tutor"),
		);

		$this->load_view('tutor/tutor.php', $params);
	}
}