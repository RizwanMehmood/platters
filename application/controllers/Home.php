<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		//$msg=array();
		
		$result=$this->common_model->find('chefs', '*');
		$data['results']=$result;
		$this->load->view('CaptainFood/home',$data);		
	}
	public function menu($ChefID=0)
	{
		//$msg=array();
		
		//$result=$this->common_model->find('chefs', '*');
		//$data['results']=$result;
		if($ChefID)
		{
			$where['ChefID']=$ChefID;
			$result=$this->common_model->find('menu', '*',$where);
			$data['results']=$result;
			$this->load->view('CaptainFood/menu',$data);		
		}
	}
	
	public function SendEmail()
	{
		
		$config = Array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'm.osamamanzoor@gmail.com', // change it to yours
		'smtp_pass' => 'humayun57', // change it to yours
		'mailtype' => 'html',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE
		);

        $message = '';
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('p116011@nu.edu.pk'); // change it to yours
      $this->email->to('m.osamamanzoor@gmail.com');// change it to yours
      $this->email->subject('Resume from JobsBuddy for your Job posting');
      $this->email->message($message);
      $this->email->send();
		
	
		

	}
}
