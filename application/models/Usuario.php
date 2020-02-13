<?php
class Usuario extends CI_Model{
    public function __construct(){
        parent:: __construct();
    }

    public function createUser(){

        $data = array(
            'Nombre' => $this->input->post('Nombre'),
            'Apellido' => $this->input->post('Apellido')
        );
        return $this->db->insert('usuario',$data);

    }

    public function getAll(){
        $result =  $this->db->get('usuario');
        return $result->result_array();
    }

    public function getUser($id){
        return $this->db->get_where('usuario', array('IdUsuario' => $id))->row();
    }
}