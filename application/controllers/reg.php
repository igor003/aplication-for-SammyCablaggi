<?php
class Reg extends CI_Controller {
    function index(){
        $this->load->view('header');
        $this->load->view('/sign_up');
        $this->load->view('footer');
    }
    function do_reg(){
        $data = array(
     'login' => $_POST['login'],
     'password' => $_POST['password']
    );
        $this->db->insert('users', $data);
        redirect('/login');
    }
}