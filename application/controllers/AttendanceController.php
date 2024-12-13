<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttendanceController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Attendance",
			'route' => json_encode("attendance"),
		);

		$this->load_view('attendance/attendance.php', $params);
	}
}