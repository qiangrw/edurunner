<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller {

	public function intro()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/intro');
		$this->load->view('inc/footer');
	}
    
    public function course()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/course');
		$this->load->view('inc/footer');
	}
	
	public function retro()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/retro');
		$this->load->view('inc/footer');
    }

	
	public function students2012()
	{
		$this->load->view('inc/post_header');
		$this->load->view('activity/students2012');
		$this->load->view('inc/footer');
	}
}
