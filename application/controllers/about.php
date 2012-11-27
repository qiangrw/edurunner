<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

  public function index()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/index');
    $this->load->view('inc/footer');
  }

  public function activity()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/activity');
    $this->load->view('inc/footer');
  }

  public function member2011()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/2011member');
    $this->load->view('inc/footer');
  }

  public function member2012()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/2012member');
    $this->load->view('inc/footer');
  }

  public function link()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/link');
    $this->load->view('inc/footer');
  }

  public function contact()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/contact');
    $this->load->view('inc/footer');
  }
  
  public function advisory_board()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/advisory_board');
    $this->load->view('inc/footer');
  }
  public function youth_advisory_board()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/youth_advisory_board');
    $this->load->view('inc/footer');
  }
  public function core()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/core');
    $this->load->view('inc/footer');
  }
  public function faq()
  {
    $this->load->view('inc/post_header');
    $this->load->view('about/faq');
    $this->load->view('inc/footer');
  }
}
