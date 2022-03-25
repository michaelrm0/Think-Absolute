<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorModelo extends CI_Model 
{    
    function ListarSexo()
    {
        $this->load->database();
        $this->db->select('s.CodSex,s.DescSex');
        $this->db->from('sexo s');
        $this->db->where('EstSex','A');
        $query = $this->db->get();
        return $query->result(); 
    }

    function ListarPaises()
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('paises');        
        $query = $this->db->get();
        return $query->result(); 
    }

    /*function ValidarUsuario($dato)
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('usuario');
        $this->db->where('Usuario',$dato['usuario']);
        $query = $this->db->get();
        return count($query->result()); 
    }*/

    function ContarAdministradores()
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('administrador');      
        $this->db->where('EstAdFac','A');  
        $query = $this->db->get();        
        $contad = count($query->result()); 
        $s_contad = array(
            's_contad' => $contad,
        );
        $this->session->set_userdata($s_contad);
    }

    function ContarBibliotecarios()
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('bibliotecario');  
        $this->db->where('EstBibli','A');        
        $query = $this->db->get();
        $contbi = count($query->result()); 
        $s_contbi = array(
            's_contbi' => $contbi,
        );
        $this->session->set_userdata($s_contbi);
    }

    function ContarDocentes()
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('docente');   
        $this->db->where('EstDoc','A');       
        $query = $this->db->get();
        $contdo = count($query->result()); 
        $s_contdo = array(
            's_contdo' => $contdo,
        );
        $this->session->set_userdata($s_contdo);
    }

    function ContarEstudiantes()
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('estudiante'); 
        $this->db->where('EstEst','A');         
        $query = $this->db->get();
        $contes = count($query->result()); 
        $s_contes = array(
            's_contes' => $contes,
        );
        $this->session->set_userdata($s_contes);
    }

    function ContarCategorias()
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('categorias'); 
        $this->db->where('EstCat','A');         
        $query = $this->db->get();
        $contcat = count($query->result()); 
        $s_contcat = array(
            's_contcat' => $contcat,
        );
        $this->session->set_userdata($s_contcat);
    }

    function ContarLibros()
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('libros'); 
        $this->db->where('EstLib','A');         
        $query = $this->db->get();
        $contlib = count($query->result()); 
        $s_contlib = array(
            's_contlib' => $contlib,
        );
        $this->session->set_userdata($s_contlib);
    }

    function GuardarUsuarioAdministrador($dato)
    {
        $this->load->database();
        $this->db->set('Usuario', $dato['usuario']);
        $this->db->set('Clave', $dato['clave']);        
        $this->db->set('CodTip','4');        
        $this->db->insert('usuario');
        return $this->db->insert_id();
    }

    function GuardarUsuarioBibliotecario($dato)
    {
        $this->load->database();
        $this->db->set('Usuario', $dato['usuario']);
        $this->db->set('Clave', $dato['clave']);        
        $this->db->set('CodTip','3');        
        $this->db->insert('usuario');
        return $this->db->insert_id();
    }

    function GuardarUsuarioDocente($dato)
    {
        $this->load->database();
        $this->db->set('Usuario', $dato['usuario']);
        $this->db->set('Clave', $dato['clave']);        
        $this->db->set('CodTip','2');        
        $this->db->insert('usuario');
        return $this->db->insert_id();
    }
    
    function GuardarUsuarioEstudiante($dato)
    {
        $this->load->database();
        $this->db->set('Usuario', $dato['usuario']);
        $this->db->set('Clave', $dato['clave']);        
        $this->db->set('CodTip','1');        
        $this->db->insert('usuario');
        return $this->db->insert_id();
    }

    function EliminarUsuarioAdministrador($dato)
    {
        $this->load->database();
        $this->db->where('CodUsu', $dato);
        $this->db->delete('usuario');
    }

    /*function ValidarPersona($dato)
    {
        $this->load->database();
        $this->db->select('*');        
        $this->db->from('persona');
        $this->db->or_where('DniPer',$dato['dni']);
        $this->db->or_where('CorPer',$dato['correo']);
        $query = $this->db->get();
        return count($query->result()); 
    }*/

    function GuardarPersona($dato) 
    {
        $this->load->database();
        $this->db->set('NombPer', $dato['nombres']);
        $this->db->set('ApePer', $dato['apellidos']);        
        $this->db->set('DniPer', $dato['dni']);
        $this->db->set('CorPer', $dato['correo']);
        $this->db->set('CodSex', $dato['cbosexo']);
        $this->db->set('CodUsu', $dato['codusuad']);                    
        $this->db->insert('persona');
        return $this->db->insert_id();
    }

    function GuardarAdministrador($dato) 
    {
        $this->load->database();
        $this->db->set('CodPer', $dato['codper']);
        $this->db->set('CodBibli',$dato['cbobibli']);
        $this->db->insert('administrador');
        return $this->db->insert_id();
    }

    function GuardarBibliotecario($dato)
     {
        $this->load->database();
        $this->db->set('CodPer', $dato['codper']);
        $this->db->set('CodBibli',$dato['cbobibli']);
        $this->db->insert('bibliotecario');
        return $this->db->insert_id();
    }

    function GuardarDocente($dato) 
    {
        $this->load->database();
        $this->db->set('CodPer', $dato['codper']);
        //$this->db->set('CodBibli',$dato['cbobibli']);
        $this->db->insert('docente');
        return $this->db->insert_id();
    }

    function GuardarEstudiante($dato) 
    {
        $this->load->database();
        $this->db->set('CodEst',$dato['codest']);
        $this->db->set('CodPer', $dato['codper']);
        $this->db->set('CodEsc',$dato['cboesc']);        
        $this->db->insert('estudiante');
        return $this->db->insert_id();
    }

    function ListarAdministradores()
    {
        $this->load->database();
        $this->db->select('b.NombBibli,p.NombPer,p.ApePer,p.TelPer,p.CorPer,p.DniPer,p.CodPer,u.CodUsu,a.CodAd,u.Usuario,u.Clave,s.DescSex');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('administrador a', 'a.CodPer = p.CodPer');
        $this->db->join('bibliotecas b', 'a.CodBibli = b.CodBibli');
        $this->db->join('sexo s', 'p.CodSex = s.CodSex');
        $this->db->where("tp.CodTip", '4');
        $this->db->where("u.EstUsu", 'A');
        $query = $this->db->get();
        return $query->result();
    }

    function ListarBibliotecarios()
    {
        $this->load->database();
        $this->db->select('b.NombBibli,p.NombPer,p.ApePer,p.TelPer,p.CorPer,p.DniPer,p.CodPer,u.CodUsu,bib.CodBib,u.Usuario,u.Clave,s.DescSex');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('bibliotecario bib', 'bib.CodPer = p.CodPer');
        $this->db->join('bibliotecas b', 'bib.CodBibli = b.CodBibli');
        $this->db->join('sexo s', 'p.CodSex = s.CodSex');
        $this->db->where("tp.CodTip", '3');
        $this->db->where("u.EstUsu", 'A');
        $query = $this->db->get();
        return $query->result();
    }

    function ListarDocentes()
    {
        $this->load->database();
        $this->db->select('p.NombPer,p.ApePer,p.TelPer,p.CorPer,p.DniPer,p.CodPer,u.CodUsu,d.CodDoc,u.Usuario,u.Clave,s.DescSex');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('docente d', 'd.CodPer = p.CodPer');        
        $this->db->join('sexo s', 'p.CodSex = s.CodSex');
        $this->db->where("tp.CodTip", '2');
        $this->db->where("u.EstUsu", 'A');
        $query = $this->db->get();
        return $query->result();
    }

    function ListarEstudiantes()
    {
        $this->load->database();
        $this->db->select('p.NombPer,p.ApePer,p.TelPer,p.CorPer,p.DniPer,p.CodPer,u.CodUsu,e.CodEst,esc.NombEsc,f.NombFacu,u.Usuario,u.Clave,s.DescSex');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('estudiante e', 'e.CodPer = p.CodPer');
        $this->db->join('escuela esc', 'esc.CodEsc = e.CodEsc');
        $this->db->join('facultad f', 'f.CodFacu = esc.CodFacu');
        $this->db->join('sexo s', 'p.CodSex = s.CodSex');
        $this->db->where("tp.CodTip", '1');
        $this->db->where("u.EstUsu", 'A');
        $query = $this->db->get();
        return $query->result();
    }

    function DesactivarAdministrador($dato)
    {
        $this->load->database();
        $this->db->set('EstUsu', 'I');
        $this->db->where('CodUsu',$dato['codusu']);
        $this->db->update('usuario');

        $this->db->set('EstPer', 'I');
        $this->db->where('CodPer',$dato['codper']);
        $this->db->update('persona');

        $this->db->set('EstAdFac', 'I');
        $this->db->where('CodAd',$dato['codad']);
        $this->db->update('administrador');
    }

    function DesactivarBibliotecario($dato)
    {
        $this->load->database();
        $this->db->set('EstUsu', 'I');
        $this->db->where('CodUsu',$dato['codusu']);
        $this->db->update('usuario');

        $this->db->set('EstPer', 'I');
        $this->db->where('CodPer',$dato['codper']);
        $this->db->update('persona');

        $this->db->set('EstBibli', 'I');
        $this->db->where('CodBib',$dato['codbib']);
        $this->db->update('bibliotecario');
    }

    function DesactivarDocente($dato)
    {
        $this->load->database();
        $this->db->set('EstUsu', 'I');
        $this->db->where('CodUsu',$dato['codusu']);
        $this->db->update('usuario');

        $this->db->set('EstPer', 'I');
        $this->db->where('CodPer',$dato['codper']);
        $this->db->update('persona');

        $this->db->set('EstDoc', 'I');
        $this->db->where('CodDoc',$dato['coddoc']);
        $this->db->update('docente');
    }

    function DesactivarEstudiante($dato)
    {
        $this->load->database();
        $this->db->set('EstUsu', 'I');
        $this->db->where('CodUsu',$dato['codusu']);
        $this->db->update('usuario');

        $this->db->set('EstPer', 'I');
        $this->db->where('CodPer',$dato['codper']);
        $this->db->update('persona');

        $this->db->set('EstEst', 'I');
        $this->db->where('CodEst',$dato['codest']);
        $this->db->update('estudiante');
    }

    function ModificarAdministrador($dato)
    {
        $this->load->database();
        /*$this->db->set('EstUsu', 'I');
        $this->db->where('CodUsu',$dato['codusu']);
        $this->db->update('usuario');*/
        $this->db->set('NombPer', $dato['nom']);        
        $this->db->set('ApePer',$dato['ape']);
        $this->db->set('DniPer',$dato['dni']);
        $this->db->set('CodSex',$dato['sex']);
        $this->db->set('CorPer',$dato['cor']);
        $this->db->where('CodPer',$dato['codper']);
        $this->db->update('persona');

        $this->db->set('CodBibli', $dato['bib']);
        $this->db->where('CodAd',$dato['codad']);
        $this->db->update('administrador');
    }

    function ListarBibliotecas()
    {
        $this->load->database();
        $this->db->select("b.NombBibli,b.CodBibli");
        $this->db->from('bibliotecas b');
        $this->db->where('EstBibli','A');
        $query = $this->db->get();
        return $query->result();
    }

    function ListarFacultades()
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('facultad'); 
        $this->db->where("EstFacu ", 'A');
        $query = $this->db->get();
        return $query->result();
    }

    function ListarEscuelas($dato)
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('escuela');
        $this->db->where("CodFacu", $dato['facultad']);
        $this->db->where("EstEsc", 'A');
        $query = $this->db->get();
        return $query->result();
    }
    
    function ListarCategorias() {
        $this->load->database("a.CodCat,a.DescCat");
        //$this->db->order_by("DescCat", "asc");
        $this->db->where("EstCat", "A");
        $categorias = $this->db->get('categorias a');
        return $categorias->result();
    }

    function ListarLibros() {
        $this->load->database();
        $this->db->select('l.TitLib,l.AnioLib,a.NombAut');
        $this->db->from('libros l');
        $this->db->join('autores_libros al', 'l.CodLib = al.CodLib');
        $this->db->join('autor a', 'a.CodAut = al.CodAut');
        $libros = $this->db->get();
        return $libros->result();
    }

    function GuardarLibros($dato) {
        $this->load->database();
        $this->db->set('CodCat', $dato['categoria']);
        $this->db->set('isbnLib', $dato['isbn']);
        $this->db->set('TitLib', $dato['titulo']);
        $this->db->set('PaisLib', $dato['pais']);
        $this->db->set('AnioLib', $dato['anio']);
        $this->db->set('EditLib', $dato['editorial']);
        $this->db->insert('libros');
        return $this->db->insert_id();
    }
    
    function GuardarAutores($dato) {
        $this->load->database();
        $this->db->set('NombAut', $dato['autor']);
        $this->db->insert('autor');
        return $this->db->insert_id();
    }

    function GuardarAutorLibro($dato) {
        $this->load->database();
        $this->db->set('CodAut', $dato['CodAutor']);
        $this->db->set('CodLib', $dato['CodLibro']);
        $this->db->insert('autores_libros');
    }

    function Guardarlibro_facu($dato) {
        $this->load->database();
        $this->db->set('CodLib', $dato['codLib']);
        $this->db->set('CodBibli', $dato['codBibli']);
        $this->db->set('CantLib', $dato['ejemplares']);
        $this->db->set('UbicacionLib', $dato['ubicacion']);
        $this->db->insert('libro_facubiblio');
    }

    function GuardarCategoria($dato) {
        $this->load->database();
        $this->db->set('DescCat', $dato['categoria']);
        $this->db->insert('categorias');
    }

    function EliminarCategoria($id) {
        $this->load->database();
        $this->db->set("EstCat","I");
        $this->db->where("CodCat",$id['IDcategoria']);
        $this->db->update('categorias');
    }

    function ModificarCategoria($dato)
    {
        $this->load->database();
        $this->db->set("DescCat",$dato['nomcat']);
        $this->db->where("CodCat",$dato['codcat']);
        $this->db->update('categorias');
    }
    
    function FiltrarCategoria($cat){
        $this->load->database();
        $this->db->select("l.TitLib,l.AnioLib,a.NombAut");
        $this->db->from('libros l');
        $this->db->join('autores_libros al', 'l.CodLib = al.CodLib');
        $this->db->join('autor a', 'a.CodAut = al.CodAut');
        /*$this->db->join('categorias c', 'l.CodCat = c.CodCat');*/
        $this->db->where("l.CodCat",$cat['filtcat']);
        $query = $this->db->get();
        return $query->result();
    }
    
    function Buscar($bus){
        $this->load->database();
        $this->db->select("l.TitLib,l.AnioLib,a.NombAut");
        $this->db->from('libros l');
        $this->db->join('autores_libros al', 'l.CodLib = al.CodLib');
        $this->db->join('autor a', 'a.CodAut = al.CodAut');
        $this->db->like("l.TitLib",$bus['datoBus']);
        $this->db->or_like("NombAut",$bus['datoBus']);
        $query = $this->db->get();
        return $query->result();
    }
}