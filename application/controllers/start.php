<?php
class Start extends CI_Controller {
    public function  index(){
        $this->load->view('header');
        $this->load->view('start');
        $this->load->view('footer');
    }
}
