<?php
class Login extends CI_Controller
{
    function index()
    {
        $this->load->view('header');
        $this->load->view('/login');
        $this->load->view('footer');
    }

    function do_login()
    {
        $this->load->model('login_model');
        $data = $this->login_model->do_login();

        if (isset($data['login'])) {
            $this->load->library('session');
            $new_data = array(
                'login' => $data['login'],
                'password' => $data['password']
            );
            $this->session->set_userdata($new_data);
            redirect('/terminal/list1');
        } else {
            redirect('/login');
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }
}
