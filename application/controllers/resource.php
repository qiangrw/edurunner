<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resource extends CI_Controller {

	public function news()
	{
        $data->title = '彩虹行动相关新闻|EduRunner';
		$this->load->view('inc/post_header',$data);
		$this->load->view('resource/news');
		$this->load->view('inc/footer');
	}
}
