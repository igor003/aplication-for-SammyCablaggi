<?php

class Sez extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            header('Location: /login');
        }
    }
    public function list1()
    {
        $this->load->model('section_model');//подключаем модельку
        $sez =  $this->section_model->get_oll();//вызываем метод модельки
        $data = array(
            'sez'=>$sez
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('sez/sez',$data);//подключаем вЬюшку и передаём туда переменную
        $this->load->view('footer');
    }
    function delete($id){
        $this->load->model('section_model');
        $this->section_model->delete($id);
        redirect('/sez/list1');
    }
    function edit($id){
        $this->load->model('section_model');
        $data=array(
            'sez' => $this->section_model->get_by_id($id)
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('sez/update',$data);
        $this->load->view('footer');
    }
    function update($id){
        $data=array(
            'sez' => $_POST['new_sez']
        );
        $this->load->model('section_model');
        $this->section_model->update($data,$id);
        redirect('/sez/list1');
    }
    function add(){
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('sez/add');
        $this->load->view('footer');
    }
    function insert(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('new_sez', 'Sez', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('errors', validation_errors('<div class="error">', '</div>'));
            redirect('/sez/add');
            return true;
        }
        $this->load->model('section_model');
        $data=array(
            'sez' => $_POST['new_sez']
        );
        $this->section_model->add($data);
        redirect('/sez/list1');
    }
}