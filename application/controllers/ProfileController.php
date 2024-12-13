<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Profile",
			'route' => json_encode("profile"),
		);

		$this->load_view('profile/profile.php', $params);
	}
}
