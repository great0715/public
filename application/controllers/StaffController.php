<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Staff Requiring support",
			'route' => json_encode("staff"),
		);

		$this->load_view('staff/staff.php', $params);
	}
}