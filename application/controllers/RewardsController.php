<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RewardsController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Rewards",
			'route' => json_encode("rewards"),
		);

		$this->load_view('rewards/rewards.php', $params);
	}
}