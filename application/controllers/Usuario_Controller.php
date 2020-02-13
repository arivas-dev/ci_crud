<?php

class Usuario_Controller extends CI_Controller{

    public function getUsers(){
        
        
    }

    function __construct()
    {
        parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');

    }
    public function index(){
        

        $this->load->model('Usuario','u',true);
        $datos['users'] = $this->u->getAll();
        $this->load->view('Lista_Usuarios', $datos);
    }

    public function createUser(){
        
        $this->load->view('Create');
    }

    public function addUser(){

        $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('Apellido', 'Apellido', 'required');


        if ($this->form_validation->run() == FALSE){
            redirect(base_url('index.php/Usuario_Controller/createUser'));
        }else{
            $this->load->model('Usuario','u',true);
            $this->u->createUser();
           redirect(base_url('index.php'));
        }
    }
    
    public function toEdit($id){
        $this->load->model('Usuario','u',true);
        $item = $this->u->getUser($id);
        $this->load->view('EditUsuario',array('item'=>$item));
    }
}