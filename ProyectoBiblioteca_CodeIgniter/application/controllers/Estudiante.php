<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->Model("EstudianteModelo");
    }
    
    function Prestamos(){
        $data['prestamos'] = $this->EstudianteModelo->ListarPrestamos();
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/Prestamos",$data);
        $this->load->view('partes/pie'); 
    }
    
    function Devoluciones(){
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/Devoluciones");
        $this->load->view('partes/pie'); 
    }
    
    function reportes(){
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/reportes");
        $this->load->view('partes/pie'); 
    }
    
    function nuevoPrestamo(){
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/nuevoprestamo");
        $this->load->view('partes/pie'); 
    }
    
    function Libros(){
        $data['categorias'] = $this->EstudianteModelo->ListarCategorias();
        $data['libros'] = $this->EstudianteModelo->ListarLibros();
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/Libros",$data);
        $this->load->view('partes/pie'); 
    }
    
    function ListaCategoria() {
        $data['categorias'] = $this->EstudianteModelo->ListarCategorias();
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiantemenu_principal');
        $this->load->view("Estudiante/ListaCategorias", $data);
        $this->load->view('partes/pie');
    }
    
    function  CategoriaSeleccionada(){
        $datoCat['filtcat'] = $_GET['cat'];
        $data['libros'] = $this->EstudianteModelo->FiltrarCategoria($datoCat);
        $data['categorias'] = $this->EstudianteModelo->ListarCategorias();
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/Libros",$data);
        $this->load->view('partes/pie');
    }
    
    function Buscar(){
        $datoBus['datoBus'] = $_POST['bus'];
        $data['libros'] = $this->EstudianteModelo->Buscar($datoBus);
        $data['categorias'] = $this->EstudianteModelo->ListarCategorias();
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/Libros",$data);
        $this->load->view('partes/pie');
    }
    
    function PrestarLibro(){
        $data['libroPres'] = $_GET['libro'];
        $datosLib['camLibros'] = $this->EstudianteModelo->traerLibro($data);
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/hola",$datosLib);
        $this->load->view('partes/pie');
    }
    
   /* function Reservaciones(){
        $this->load->view('partes/Estudiante/cabecera_principal');
        $this->load->view('partes/Estudiante/menu_principal');
        $this->load->view("Estudiante/Reservaciones");
        $this->load->view('partes/pie'); 
    }*/
}