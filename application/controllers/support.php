<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Support extends CI_Controller {

    public function volunteer()
    {
        $data->title = '志愿者报名|EduRunner';
        $this->load->view('inc/post_header', $data);
        $this->load->view('support/volunteer');
        $this->load->view('inc/footer');
    }


    public function school()
    {
        $data->title = '学校报名|EduRunner';
        $this->load->view('inc/post_header', $data);
        $this->load->view('support/school');
        $this->load->view('inc/footer');
    }

    public function donate()
    {
        $data->title = '捐赠和资助|EduRunner';
        $this->load->view('inc/post_header', $data);
        $this->load->view('support/donate');
        $this->load->view('inc/footer');
    }

    public function helplist()
    {
        $data->title = '爱心榜|EduRunner';
        $this->load->view('inc/post_header', $data);
        $this->load->view('support/helplist');
        $this->load->view('inc/footer');
    }


}
