<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends CI_Controller {

	public function volunteer()
	{
		$this->load->view('inc/post_header');
		$this->load->view('support/volunteer');
		$this->load->view('inc/footer');
  }


	public function school()
	{
		$this->load->view('inc/post_header');
		$this->load->view('support/school');
    $this->load->view('inc/footer');
  }
  
  public function donate()
	{
		$this->load->view('inc/post_header');
		$this->load->view('support/donate');
    $this->load->view('inc/footer');
  }
}
