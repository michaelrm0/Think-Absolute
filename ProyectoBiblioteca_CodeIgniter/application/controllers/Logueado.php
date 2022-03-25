<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logueado extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function cargarEstudiante()
    {
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view('Estudiante/Principal');        
        $this->load->view('partes/pie');
        
    }

    public function cargarDocente() 
    {
        $this->load->view('partes/Docente/cabecera_principal');
        $this->load->view('partes/Docente/menu_principal');
        $this->load->view('Docente/Principal');        
        $this->load->view('partes/pie');
    }

    public function cargarBibliotecario() 
    {
        $this->load->view('partes/Bibliotecario/cabecera_principal');
        $this->load->view('partes/Bibliotecario/menu_principal');
        $this->load->view('Bibliotecario/Principal');        
        $this->load->view('partes/pie');
    }

    public function cargarAdministrador()
    {        
        $this->load->model("AdministradorModelo");
        $this->AdministradorModelo->ContarAdministradores();
        $this->AdministradorModelo->ContarBibliotecarios();
        $this->AdministradorModelo->ContarDocentes();
        $this->AdministradorModelo->ContarEstudiantes();
        $this->AdministradorModelo->ContarCategorias();
        $this->AdministradorModelo->ContarLibros();

        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view('Administrador/Principal');        
        $this->load->view('partes/pie');
    }

    public function desconectarAdministrador()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
