<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller {

	public function intro()
	{
        $data->title = '活动介绍|EduRunner';
		$this->load->view('inc/post_header',$data);
		$this->load->view('activity/intro');
		$this->load->view('inc/footer');
	}
    
    public function course()
	{
        $data->title = '课程理念|EduRunner';
		$this->load->view('inc/post_header',$data);
		$this->load->view('activity/course');
		$this->load->view('inc/footer');
	}
	
	public function retro()
	{
        $data->title = '往期活动回顾|EduRunner';
		$this->load->view('inc/post_header',$data);
		$this->load->view('activity/retro');
		$this->load->view('inc/footer');
    }

}
