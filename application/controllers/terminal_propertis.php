<?php
class Terminal_Propertis extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
            redirect('/login');
        }
    }

    public function list1()
    {
        $this->load->model('terminal_properties_model');//подключаем модельку
        $terminal_propertis =  $this->terminal_properties_model->get_oll();//вызываем метод модельки

        $data = array(
            'terminal_prop'=>$terminal_propertis
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('terminal_propertis/terminal_propertis',$data);//подключаем вЬюшку и передаём туда переменную
        $this->load->view('footer');
    }
    function edit($id){
        $this->load->model('miniaplicator_model');
        $this->load->model('preseta_model');
        $this->load->model('section_model');
        $this->load->model('terminal_model');
        $this->load->model('terminal_properties_model');
        $data=array(
            'id_term_prop' => $this->terminal_properties_model->get_by_id($id),
            'oll_mini' => $this->miniaplicator_model->get_oll(),
            'oll_preseta' => $this->preseta_model->get_oll(),
            'oll_sez' => $this->section_model->get_oll(),
            'oll_terminal' => $this->terminal_model->get_oll()
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('terminal_propertis/update',$data);
        $this->load->view('footer');
    }
    function update($id){
        $this->load->model('terminal_properties_model');
        $data=array(
            'id_terminal' => $_POST['terminal'],
            'id_nr_presetei' => $_POST['preseta'],
            'id_nr_mini' => $_POST['mini'],
            'id_sez' => $_POST['sez'],
            'calibrarea_sus' => $_POST['updated_calibrarea_sus'],
            'calibrarea_jos' => $_POST['updated_calibrarea_jos']
        );

        $this->terminal_properties_model->update($data,$id);
        redirect('/terminal_propertis/list1');
    }
    function delete($id){
        $this->load->model('terminal_properties_model');
        $this->terminal_properties_model->delete($id);
        redirect('/terminal_propertis/list1');
    }
    function add(){
        $this->load->model('miniaplicator_model');
        $this->load->model('preseta_model');
        $this->load->model('section_model');
        $this->load->model('terminal_model');
        $data=array(
            'oll_mini' => $this->miniaplicator_model->get_oll(),
            'oll_preseta' => $this->preseta_model->get_oll(),
            'oll_sez' => $this->section_model->get_oll(),
            'oll_terminal' => $this->terminal_model->get_oll()
        );
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('terminal_propertis/add',$data);
        $this->load->view('footer');
    }
    function insert(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('terminal', 'Terminal', 'required');
        $this->form_validation->set_rules('preseta', 'Preseta', 'required');
        $this->form_validation->set_rules('sez', 'Sez', 'required');
        $this->form_validation->set_rules('mini', 'Mini', 'required');
        $this->form_validation->set_rules('updated_calibrarea_sus', 'Calibrarea sus', 'required|numeric');
        $this->form_validation->set_rules('updated_calibrarea_jos', 'Calibrarea jos', 'required|numeric');
        if ($this->form_validation->run() == FALSE)
        {

            $this->session->set_flashdata('errors', validation_errors('<div class="error">', '</div>'));
            redirect('/terminal_propertis/add');
            return true;
        }
        $this->load->model('terminal_properties_model');
        $data=array(
            'id_terminal' => $_POST['terminal'],
            'id_nr_presetei' => $_POST['preseta'],
            'id_nr_mini' => $_POST['mini'],
            'id_sez' => $_POST['sez'],
            'calibrarea_sus' => $_POST['updated_calibrarea_sus'],
            'calibrarea_jos' => $_POST['updated_calibrarea_jos']
        );

        $this->terminal_properties_model->insert($data);
        redirect('/terminal_propertis/list1');
    }
}