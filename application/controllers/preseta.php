<?php

class Preseta extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('/login');
        }
    }
    public function list1()
    {
        $this->load->model('preseta_model');//подключаем модельку
        $this->load->model('terminal_model');
        $this->load->model('miniaplicator_model');

        $presetele =  $this->preseta_model->get_oll();//вызываем метод модельки

        $data = array(
             'pres'=>$presetele
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('preseta/preseta',$data);//подключаем вЬюшку и передаём туда переменную
        $this->load->view('footer');
    }
    function delete($id){
        $this->load->model('preseta_model');
        $this->preseta_model->delete($id);
        redirect('/preseta/list1');
    }
    function edit($id){
        $this->load->model('preseta_model');
        $data=array(
            'preseta' => $this->preseta_model->get_by_id($id)
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('preseta/update',$data);
        $this->load->view('footer');
    }
    function update($id){
        $data=array(
            'nr_presetei' => $_POST['new_preseta']
        );
        $this->load->model('preseta_model');
        $this->preseta_model->update($data,$id);
        redirect('/preseta/list1');
    }
    function add(){
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('preseta/add');
        $this->load->view('footer');
    }
    function insert(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('new_preseta', 'Preseta', 'required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('errors', validation_errors('<div class="error">', '</div>'));
            redirect('/preseta/add');
            return true;
        }
        $this->load->model('preseta_model');
        $data=array(
            'nr_presetei' => $_POST['new_preseta']
        );
        $this->preseta_model->add($data);
        redirect('/preseta/list1');
    }
}