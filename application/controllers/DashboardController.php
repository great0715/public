<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Dashboard",
			'route' => json_encode("dashboard"),
		);

		$this->load_view('dashboard/dashboard.php', $params);
	}
}
