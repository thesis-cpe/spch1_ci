<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authorize extends CI_Controller {

    public function index() {
        $data['title'] = 'Login';

        $this->load->view('template/header', $data);
        $this->load->view('login');
        $this->load->view('template/footer');
    }

}
