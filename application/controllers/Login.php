<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library("form_validation");
    }

    public function index() {
        // jika form di submit
        if ( $this->input->post() ) {
            if ( $this->user_model->doLogin() ) {
                redirect(site_url('home'));
            } else {
                $data["error"]="Invalid User Id and Password combination";
                $this->load->view('auth/index',$data);
            }
        }

        $this->load->view('auth/index');
    }

    public function logout() {
        // menghancurkan sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}

?>