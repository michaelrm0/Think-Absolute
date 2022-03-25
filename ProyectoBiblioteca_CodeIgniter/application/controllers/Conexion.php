<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Conexion extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("ConexionModelo");
    }

    function ingresar() {
        $tipo = $_POST['cbotipo'];
        switch ($tipo) {
            case 1: 
            {
                $dato['usuario'] = $_POST['txtusuario'];
                $dato['clave'] = $_POST['txtclave'];
                $res = $this->ConexionModelo->entrarEstudiante($dato);

                if (!$res)
                {
                    $this->session->set_flashdata("error", "El usuario y/o contraseña y/o tipo usuario son incorrectos");
                    redirect(base_url());
                } else {
                    redirect(base_url() . "Logueado/cargarEstudiante");
                }
                break;
            }
            case 2:
            {
                $dato['usuario'] = $_POST['txtusuario'];
                $dato['clave'] = $_POST['txtclave'];
                $res = $this->ConexionModelo->entrarDocente($dato);

                if (!$res) 
                {
                    $this->session->set_flashdata("error", "El usuario y/o contraseña y/o tipo usuario son incorrectos");
                    redirect(base_url());
                } else {
                    redirect(base_url() . "Logueado/cargarDocente");
                }
                break;
            }
            case 3: 
            {
                $dato['usuario'] = $_POST['txtusuario'];
                $dato['clave'] = $_POST['txtclave'];
                $res = $this->ConexionModelo->entrarBibliotecario($dato);

                if (!$res) 
                {
                    $this->session->set_flashdata("error", "El usuario y/o contraseña y/o tipo usuario son incorrectos");
                    redirect(base_url());
                } else {
                    redirect(base_url() . "Logueado/cargarBibliotecario");
                }
                break;
                }
            case 4: 
            {
                $dato['usuario'] = $_POST['txtusuario'];
                $dato['clave'] = $_POST['txtclave'];
                $res = $this->ConexionModelo->entrarAdministrador($dato);

                if (!$res)
                {
                    $this->session->set_flashdata("error", "El usuario y/o contraseña y/o tipo usuario son incorrectos");
                    redirect(base_url());
                } else {
                    redirect(base_url() . "Logueado/cargarAdministrador");
                }
                break;
            }
        }
    }

}
