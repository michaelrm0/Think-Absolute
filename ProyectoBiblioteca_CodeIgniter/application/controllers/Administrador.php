<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->model("AdministradorModelo");
    }

    function NuevoEstudiante()
    {
        $dato['sexo'] = $this->AdministradorModelo->ListarSexo(); 
        $dato['facultad'] = $this->AdministradorModelo->ListarFacultades(); 
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/NuevoEstudiante",$dato);
        $this->load->view('partes/pie'); 
    }

    function NuevoDocente()
    {
        $dato['sexo'] = $this->AdministradorModelo->ListarSexo(); 
    	$this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/NuevoDocente",$dato);
        $this->load->view('partes/pie'); 
    }    

    function NuevoBibliotecario()
    {
        $dato['sexo'] = $this->AdministradorModelo->ListarSexo(); 
        $dato['bibliotecas'] = $this->AdministradorModelo->ListarBibliotecas();
    	$this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/NuevoBibliotecario",$dato);
        $this->load->view('partes/pie'); 
    }

    function NuevoAdministrador()
    {
        $dato['sexo'] = $this->AdministradorModelo->ListarSexo(); 
        $dato['bibliotecas'] = $this->AdministradorModelo->ListarBibliotecas();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal',$dato);
        $this->load->view("Administrador/NuevoAdministrador");
        $this->load->view('partes/pie');        
    }

    function GuardarAdministrador()
    {   
        $this->form_validation->set_rules("txtnombres","Nombre del Administrador","required");
        $this->form_validation->set_rules("txtapellidos","Apellidos del Administrador","required");
        $this->form_validation->set_rules("txtcor","Correo del Administrador","required|is_unique[persona.CorPer]");
        $this->form_validation->set_rules("cbosexo","Sexo del Administrador","required");
        $this->form_validation->set_rules("txtdni","DNI del Administrador","required|is_unique[persona.DniPer]");
        $this->form_validation->set_rules("txtusuario","Usuario del Administrador","required|is_unique[usuario.Usuario]");
        $this->form_validation->set_rules("txtclave","Contraseña del Administrador","required");
        $this->form_validation->set_rules("cbobibli","Biblioteca a cargo del Administrador","required");
         
        if($this->form_validation->run())
        {
            $datoPer['nombres'] = strtoupper($_POST['txtnombres']);
            $datoPer['apellidos'] = strtoupper($_POST['txtapellidos']);        
            $datoPer['correo'] = $_POST['txtcor'];
            $datoPer['cbosexo'] = $_POST['cbosexo'];
            $datoPer['dni'] = $_POST['txtdni'];

            $dato['usuario'] = $_POST['txtusuario'];
            $dato['clave'] = $_POST['txtclave'];        

            $datoAdm['cbobibli'] = $_POST['cbobibli'];
            $datoPer['codusuad'] = $this->AdministradorModelo->GuardarUsuarioAdministrador($dato);
            $datoAdm['codper'] = $this->AdministradorModelo->GuardarPersona($datoPer);
            $this->AdministradorModelo->GuardarAdministrador($datoAdm);                
            redirect(base_url() ."Administrador/ListarAdministradores");  
        }else
        {
            $this->NuevoAdministrador();
        }     
    }   

    function GuardarBibliotecario()
    {
        $this->form_validation->set_rules("txtnombres","Nombre del Bibliotecario(a)","required");
        $this->form_validation->set_rules("txtapellidos","Apellidos del Bibliotecario(a)","required");
        $this->form_validation->set_rules("txtcor","Correo del Bibliotecario(a)","required|is_unique[persona.CorPer]");
        $this->form_validation->set_rules("cbosexo","Sexo del Bibliotecario(a)","required");
        $this->form_validation->set_rules("txtdni","DNI del Bibliotecario(a)","required|is_unique[persona.DniPer]");
        $this->form_validation->set_rules("txtusuario","Usuario del Bibliotecario(a)","required|is_unique[usuario.Usuario]");
        $this->form_validation->set_rules("txtclave","Contraseña del Bibliotecario(a)","required");
        $this->form_validation->set_rules("cbobibli","Biblioteca a cargo del Bibliotecario(a)","required");
        
        if($this->form_validation->run())
        {
            $datoPer['nombres'] = strtoupper($_POST['txtnombres']);
            $datoPer['apellidos'] = strtoupper($_POST['txtapellidos']);        
            $datoPer['correo'] = $_POST['txtcor'];
            $datoPer['cbosexo'] = $_POST['cbosexo'];
            $datoPer['dni'] = $_POST['txtdni'];

            $dato['usuario'] = $_POST['txtusuario'];
            $dato['clave'] = $_POST['txtclave'];        

            $datoBib['cbobibli'] = $_POST['cbobibli'];
            $datoPer['codusuad'] = $this->AdministradorModelo->GuardarUsuarioBibliotecario($dato);
            $datoBib['codper'] = $this->AdministradorModelo->GuardarPersona($datoPer);
            $this->AdministradorModelo->GuardarBibliotecario($datoBib);                
            redirect(base_url() ."Administrador/ListarBibliotecarios");  
        }else
        {
            $this->NuevoBibliotecario();
        }     
    }  

    function GuardarDocente()
    {
        $this->form_validation->set_rules("txtnombres","Nombre del Administrador","required");
        $this->form_validation->set_rules("txtapellidos","Apellidos del Administrador","required");
        $this->form_validation->set_rules("txtcor","Correo del Administrador","required|is_unique[persona.CorPer]");
        $this->form_validation->set_rules("cbosexo","Sexo del Administrador","required");
        $this->form_validation->set_rules("txtdni","DNI del Administrador","required|is_unique[persona.DniPer]");
        $this->form_validation->set_rules("txtusuario","Usuario del Administrador","required|is_unique[usuario.Usuario]");
        $this->form_validation->set_rules("txtclave","Contraseña del Administrador","required");
        
        if($this->form_validation->run())
        {
            $datoPer['nombres'] = strtoupper($_POST['txtnombres']);
            $datoPer['apellidos'] = strtoupper($_POST['txtapellidos']);        
            $datoPer['correo'] = $_POST['txtcor'];
            $datoPer['cbosexo'] = $_POST['cbosexo'];
            $datoPer['dni'] = $_POST['txtdni'];

            $dato['usuario'] = $_POST['txtusuario'];
            $dato['clave'] = $_POST['txtclave'];  
            $datoPer['codusuad'] = $this->AdministradorModelo->GuardarUsuarioDocente($dato);
            $datoAdm['codper'] = $this->AdministradorModelo->GuardarPersona($datoPer);
            $this->AdministradorModelo->GuardarDocente($datoAdm);                
            redirect(base_url() ."Administrador/ListarDocentes");  
        }else
        {        
            $this->NuevoDocente();
        }     
    }  

    function GuardarEstudiante()
    {
        $this->form_validation->set_rules("txtnombres","Nombre del Estudiante","required");
        $this->form_validation->set_rules("txtapellidos","Apellidos del Estudiante","required");
        $this->form_validation->set_rules("txtcor","Correo del Estudiante","required|is_unique[persona.CorPer]");
        $this->form_validation->set_rules("cbosexo","Sexo del Estudiante","required");
        $this->form_validation->set_rules("txtdni","DNI del Estudiante","required|is_unique[persona.DniPer]");
        $this->form_validation->set_rules("txtusuario","Usuario del Estudiante","required|is_unique[usuario.Usuario]");
        $this->form_validation->set_rules("txtclave","Contraseña del Estudiante","required");
        $this->form_validation->set_rules("cbofacu","Facultad a la que pertenece el Estudiante","required");
        $this->form_validation->set_rules("cboescu","Escuela a la que pertenece el Estudiante","required");

        
        if($this->form_validation->run())
        {
            $datoPer['nombres'] = strtoupper($_POST['txtnombres']);
            $datoPer['apellidos'] = strtoupper($_POST['txtapellidos']);        
            $datoPer['correo'] = $_POST['txtcor'];
            $datoPer['cbosexo'] = $_POST['cbosexo'];
            $datoPer['dni'] = $_POST['txtdni'];

            $dato['usuario'] = $_POST['txtusuario'];
            $dato['clave'] = $_POST['txtclave'];        

            $datoEst['codest'] = $_POST['txtcorreo'];
            $datoEst['cbofac'] = $_POST['cbofacu'];
            $datoEst['cboesc'] = $_POST['cboescu'];

            $datoPer['codusuad'] = $this->AdministradorModelo->GuardarUsuarioEstudiante($dato);

            $datoEst['codper'] = $this->AdministradorModelo->GuardarPersona($datoPer); 
            $this->AdministradorModelo->GuardarEstudiante($datoEst);
            redirect(base_url() ."Administrador/ListarEstudiantes");  
        }else
        {
            $dato['sexo'] = $this->AdministradorModelo->ListarSexo(); 
            $data['facultad'] = $_POST['cbofacu'];        
            $dato['escuela'] = $this->AdministradorModelo->ListarEscuelas($data);
            $dato['facultad'] = $this->AdministradorModelo->ListarFacultades(); 
            $this->load->view('partes/Administrador/cabecera_principal');
            $this->load->view('partes/Administrador/menu_principal');
            $this->load->view("Administrador/NuevoEstudiante",$dato);
            $this->load->view('partes/pie'); 
        }     
    }  

    function ListarAdministradores()
    {
        $dato['administradores'] = $this->AdministradorModelo->ListarAdministradores();
        $dato['bibliotecas'] = $this->AdministradorModelo->ListarBibliotecas();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListarAdministradores",$dato);
        $this->load->view('partes/pie');        
    }

    function ListarBibliotecarios()
    {
        $dato['bibliotecarios'] = $this->AdministradorModelo->ListarBibliotecarios();
        $dato['bibliotecas'] = $this->AdministradorModelo->ListarBibliotecas();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListarBibliotecarios",$dato);
        $this->load->view('partes/pie');        
    }

    function ListarDocentes()
    {
        $dato['docentes']  = $this->AdministradorModelo->ListarDocentes();
        //$listabib = $this->AdministradorModelo->ListarBibliotecas();
        //$dato['bibliotecas'] = $listabib;
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListarDocentes",$dato);
        $this->load->view('partes/pie');
    }

    function ListarEstudiantes()
    {
        $dato['estudiantes'] = $this->AdministradorModelo->ListarEstudiantes();      
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListarEstudiantes",$dato);
        $this->load->view('partes/pie');
    }    

    function DesactivarAdministrador()
    {
        $dato['codusu'] = $_POST['txtcodusu'];
        $dato['codper'] = $_POST['txtcodper'];
        $dato['codad'] = $_POST['txtcodad'];

        $this->AdministradorModelo->DesactivarAdministrador($dato);
        redirect(base_url() ."Administrador/ListarAdministradores"); 
    }

    function DesactivarBibliotecario()
    {
        $dato['codusu'] = $_POST['txtcodusu'];
        $dato['codper'] = $_POST['txtcodper'];
        $dato['codbib'] = $_POST['txtcodbib'];

        $this->AdministradorModelo->DesactivarBibliotecario($dato);
        redirect(base_url() ."Administrador/ListarBibliotecarios"); 
    }

    function DesactivarDocente()
    {
        $dato['codusu'] = $_POST['txtcodusu'];
        $dato['codper'] = $_POST['txtcodper'];
        $dato['coddoc'] = $_POST['txtcoddoc'];

        $this->AdministradorModelo->DesactivarDocente($dato);
        redirect(base_url() ."Administrador/ListarDocentes"); 
    }

    function DesactivarEstudiante()
    {
        $dato['codusu'] = $_POST['txtcodusu'];
        $dato['codper'] = $_POST['txtcodper'];
        $dato['codest'] = $_POST['txtcodest'];

        $this->AdministradorModelo->DesactivarEstudiante($dato);
        redirect(base_url() ."Administrador/ListarEstudiantes"); 
    }

    function ModificarAdministrador()
    {
        $dato['nom'] = $_POST['txtnombres'];
        $dato['ape'] = $_POST['txtapellidos'];
        $dato['sex'] = $_POST['cbosexo'];
        $dato['cor'] = $_POST['txtcorreo'];
        $dato['dni'] = $_POST['txtdni'];
        $dato['bib'] = $_POST['cbobibli'];
        $dato['codper'] = $_POST['txtcodper'];
        $dato['codad'] = $_POST['txtcodad'];        
        $this->AdministradorModelo->ModificarAdministrador($dato);
        redirect(base_url() ."Administrador/ListarAdministradores");     
    }
    
    function ListarFacultades() 
    {
        $listfac = $this->AdministradorModelo->ListarFacultades();
        echo json_encode($listfac);
    }

    function ListarEscuelas() 
    {
        $dato['facultad'] = $_POST['facultad'];
        $listesc = $this->AdministradorModelo->ListarEscuelas($dato);
        echo json_encode($listesc);
    }    
    
     function NuevoLibro() 
     {
        $data['categorias'] = $this->AdministradorModelo->ListarCategorias();
        $data['paises'] = $this->AdministradorModelo->ListarPaises();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/NuevoLibro", $data);
        $this->load->view('partes/pie');
    }

    function NuevaCategoria() 
    {
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/NuevaCategoria");
        $this->load->view('partes/pie');
    }

    function ListaCategoria() 
    {
        $data['categorias'] = $this->AdministradorModelo->ListarCategorias();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListaCategorias", $data);
        $this->load->view('partes/pie');
    }

    function Catalogo()
    {
        $data['categorias'] = $this->AdministradorModelo->ListarCategorias();
        $data['libros'] = $this->AdministradorModelo->ListarLibros();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/Catalogo",$data);
        $this->load->view('partes/pie');
    }
    
    function GuardarLibro()
    {
        $this->form_validation->set_rules("cbocategoria","Nombre del Administrador","required");
        $this->form_validation->set_rules("txtisbn","Apellidos del Administrador","required");
        $this->form_validation->set_rules("txttitulo","Sexo del Administrador","required");    
        $this->form_validation->set_rules("txtautor","Contraseña del Administrador","required");         
        $this->form_validation->set_rules("cbopais","Contraseña del Administrador","required");
         $this->form_validation->set_rules("txtanio","Contraseña del Administrador","required");
        $this->form_validation->set_rules("txteditorial","Contraseña del Administrador","required");
        $this->form_validation->set_rules("txtejemplares","Contraseña del Administrador","required");
        $this->form_validation->set_rules("txtubicacion","Contraseña del Administrador","required");


        if($this->form_validation->run())
        {
            $datoLibro['categoria'] = $_POST['cbocategoria'];
            $datoLibro['isbn'] = $_POST['txtisbn'];
            $datoLibro['titulo'] = $_POST['txttitulo'];
            $datoLibro['pais'] = $_POST['cbopais'];
            $datoLibro['anio'] = $_POST['txtanio'];
            $datoLibro['editorial'] = strtoupper($_POST['txteditorial']);
            $codLib = $this->AdministradorModelo->GuardarLibros($datoLibro);

            $datoAutor['autor'] = strtoupper($_POST['txtautor']);
            $codAut = $this->AdministradorModelo->GuardarAutores($datoAutor);

            $autorLibro['CodAutor'] = $codAut;
            $autorLibro['CodLibro'] = $codLib;
            $this->AdministradorModelo->GuardarAutorLibro($autorLibro);

            $datoLibro_facu['ejemplares'] = $_POST['txtejemplares'];
            $datoLibro_facu['ubicacion'] = $_POST['txtubicacion'];
            $datoLibro_facu['codLib'] = $codLib;
            $datoLibro_facu['codBibli'] = $_POST['txtcodbibli'];
            $this->AdministradorModelo->Guardarlibro_facu($datoLibro_facu);

            redirect(base_url() . "Administrador/Catalogo");
        }else
        {        
            $this->NuevoLibro();
        }      
    }

    function GuardarCategoria() 
    {
        $this->form_validation->set_rules("txtcategoria","Nombre de la Categoría","required");
        
        if($this->form_validation->run()) 
        {
            $datoCategoria['categoria'] = strtoupper($_POST['txtcategoria']);
            $this->AdministradorModelo->GuardarCategoria($datoCategoria);
            redirect(base_url() . "Administrador/ListaCategoria");
        }else
        {
            $this->NuevaCategoria();
        }             
    }
    
    function EliminarCategoria()
    {
        $dato['IDcategoria'] = $_GET['idCategoria'];
        $this->AdministradorModelo->EliminarCategoria($dato);
        
        redirect(base_url() . "Administrador/ListaCategoria");
    }

    function ModificarCategoria()
    {
        $dato['codcat'] = $_POST['txtcodcat'];
        $dato['nomcat'] = $_POST['txtnomcat'];

        $this->AdministradorModelo->ModificarCategoria($dato);        
        redirect(base_url() . "Administrador/ListaCategoria");
    }
    
    function ListarPrestamos()
    {
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListarPrestamos");
        $this->load->view('partes/pie');
    }

    function ListarDevolucionesPendientes()
    {
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListarDevolucionesPendientes");
        $this->load->view('partes/pie');
    }

    function ListarReservaciones()
    {
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/ListarReservaciones");
        $this->load->view('partes/pie');
    }

    function Reportes()
    {
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/Reportes");
        $this->load->view('partes/pie');
    }
    
    function  CategoriaSeleccionada(){
        $datoCat['filtcat'] = $_GET['cat'];
        $data['libros'] = $this->AdministradorModelo->FiltrarCategoria($datoCat);
        $data['categorias'] = $this->AdministradorModelo->ListarCategorias();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/Catalogo",$data);
        $this->load->view('partes/pie');
    }
    
    function Buscar(){
        $datoBus['datoBus'] = $_POST['bus'];
        $data['libros'] = $this->AdministradorModelo->Buscar($datoBus);
        $data['categorias'] = $this->AdministradorModelo->ListarCategorias();
        $this->load->view('partes/Administrador/cabecera_principal');
        $this->load->view('partes/Administrador/menu_principal');
        $this->load->view("Administrador/Catalogo",$data);
        $this->load->view('partes/pie');
    }
}
