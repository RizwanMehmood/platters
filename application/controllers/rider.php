<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rider extends CI_Controller {
	public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('user_id'))) {
            redirect(base_url().'admin/login');
        }
    }
	
	public function index()
	{
	
		redirect(base_url().'admin/rider/rider_list');
			
	}
	
	public function riderList()
	{
			$this->load->view('admin/rider/rider_list');
		
	}
}
