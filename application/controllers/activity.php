<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller {

	public function intro()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/intro');
		$this->load->view('inc/footer');
	}
	
	public function retro2012()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/retro2012');
		$this->load->view('inc/footer');
	}
	
	public function retro2011()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/retro2011');
		$this->load->view('inc/footer');
	}
	
	public function students2012()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/students2012');
		$this->load->view('inc/footer');
	}
}
