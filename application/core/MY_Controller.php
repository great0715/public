 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class MY_Controller extends CI_Controller{

    public function __construct(){
       parent::__construct();
       $this->isLogined();
    }

    public function load_view($page_name, $params){
        $this->data = array(
           "page" => APPPATH.'views/'.$page_name,
           "params" => $params
        );

        $this->load->view('main_layout', $this->data);
    }

    public function isLogined(){
        if(isset($this->session->userdata['user_id']) && $this->session->userdata['user_id'] > 0){
        }else{
            redirect('/login');
        }
    }
  }