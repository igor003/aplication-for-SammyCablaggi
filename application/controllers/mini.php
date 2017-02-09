<?php

class Mini extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('/login');
        }
    }
    public function list1()
    {
        $this->load->model('miniaplicator_model');//подключаем модельку
        $minis =  $this->miniaplicator_model->get_oll();//вызываем метод модельки
        $data = array(
            'mini'=>$minis
        );
        $this->load->view('header');//подключаем вЬюшку и передаём туда переменную
        $this->load->view('nav');
        $this->load->view('mini/mini',$data);
        $this->load->view('footer');
    }
    function delete($id){
        $this->load->model('miniaplicator_model');
        $this->miniaplicator_model->delete($id);
        redirect('/mini/list1');
    }
    function edit($id){
        $this->load->model('miniaplicator_model');
        $data=array(
            'mini' => $this->miniaplicator_model->get_by_id($id)
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('mini/update',$data);
        $this->load->view('footer');
    }
    function update($id){
        $data=array(
            'nr_mini' => $_POST['new_mini']
        );
        $this->load->model('miniaplicator_model');
        $this->miniaplicator_model->update($data,$id);
        redirect('/mini/list1');
    }
    function add(){
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('mini/add');
        $this->load->view('footer');
    }
    function insert(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('new_mini', 'Mini','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('errors', validation_errors('<div class="error">', '</div>'));
            redirect('/preseta/add');
            return true;
        }
        $this->load->model('miniaplicator_model');
        $data=array(
            'nr_mini' => $_POST['new_mini']
        );
        $this->miniaplicator_model->add($data);
        redirect('/mini/list1');
    }
}