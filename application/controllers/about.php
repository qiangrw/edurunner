<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $data->title = '组织介绍|EduRunner';
        $this->load->view('inc/post_header',$data);
        $this->load->view('about/index');
        $this->load->view('inc/footer');
    }

    public function member2011()
    {
        $data->title = '2011年团队|EduRunner';
        $this->load->view('inc/post_header',$data);
        $this->load->view('about/2011member');
        $this->load->view('inc/footer');
    }

    public function member2012()
    {
        $data->title = '2012年团队|EduRunner';
        $this->load->view('inc/post_header',$data);
        $this->load->view('about/2012member');
        $this->load->view('inc/footer');
    }
    
    public function teacher()
    {
        $data->title = '导师|EduRunner';
        $this->load->view('inc/post_header',$data);
        $this->load->view('about/teacher');
        $this->load->view('inc/footer');
    }


    public function contact()
    {
        $data->title = '联系我们|EduRunner';
        $this->load->view('inc/post_header',$data);
        $this->load->view('about/contact');
        $this->load->view('inc/footer');
    }

    public function advisory_board()
    {
        $data->title = '顾问委员会|EduRunner';
        $this->load->view('inc/post_header',$data);
        $this->load->view('about/advisory_board');
        $this->load->view('inc/footer');
    }
    
    public function core()
    {
        $data->title = '组织结构|EduRunner';
        $this->load->view('inc/post_header',$data);
        $this->load->view('about/core');
        $this->load->view('inc/footer');
    }

}
