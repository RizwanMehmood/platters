<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		//$msg=array();
		
		$result=$this->common_model->find('chefs', '*');
		$data['results']=$result;
		$this->load->view('home',$data);		
	}
	
}
