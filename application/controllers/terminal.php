<?php

class Terminal extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('/login');
        }
    }
    public function list1()
    {
        $this->load->model('terminal_model');//подключаем модельку
        $terminals = $this->terminal_model->get_oll();//вызываем метод модельки
        $data = array(
            'termin' => $terminals
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('terminal/terminal', $data);//подключаем вЬюшку и передаём туда переменную
        $this->load->view('footer');
    }
    function delete($id){
        $this->load->model('terminal_model');
        $this->terminal_model->delete($id);
        redirect('/terminal/list1');
    }
    function edit($id){
        $this->load->model('terminal_model');
        $data=array(
            'terminal' => $this->terminal_model->get_by_id($id)
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('terminal/update',$data);
        $this->load->view('footer');
    }
    function update($id){
        $data=array(
            'Terminal' => $_POST['terminal']
        );
        $this->load->model('terminal_model');
        $this->terminal_model->update($data,$id);
        redirect('/terminal/list1');
}
    function add(){
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('terminal/add');
        $this->load->view('footer');
    }
    function insert(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('new_terminal', 'Terminal', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('errors', validation_errors('<div class="error">', '</div>'));
            redirect('/terminal/add');
            return true;
        }
        $this->load->model('terminal_model');
        $data=array(
            'Terminal' => $_POST['new_terminal']
        );
        $this->terminal_model->add($data);
        redirect('/terminal/list1');
    }
}