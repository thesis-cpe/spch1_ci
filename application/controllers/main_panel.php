<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_panel extends CI_Controller {

	public function index()
	{
            $data['title'] = 'main control';
            $this->load->view('template/header',$data);
            $this->load->view('main_control');
            $this->load->view('template/footer');
	}
}
