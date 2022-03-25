<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller 
{
	function __construct() 
    {
        parent::__construct();
        $this->load->model("AdministradorModelo");
    }

    function index()
    {
    	$data = array(
    		'Permisos' => $this->PermisosModelo->ObtenerPermisos(), 
    	);

    	$this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view('Administrador/Principal',$data);        
        $this->load->view('partes/pie');
    }
}

?>