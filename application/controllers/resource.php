<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource extends CI_Controller {

	public function news()
	{
		$this->load->view('inc/post_header');
		$this->load->view('resource/news');
		$this->load->view('inc/footer');
	}
}
