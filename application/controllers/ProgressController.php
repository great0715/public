<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProgressController extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$params = array(
			'title' => "Progress Leader",
			'route' => json_encode("progress"),
		);

		$this->load_view('progress/progress.php', $params);
	}
}