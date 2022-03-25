<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EstudianteModelo extends CI_Model 
{    
    function ListarPrestamos(){
        $this->load->database();
        $this->db->select('pa.CodLib,l.TitLib,pa.FecPres,pa.FecDev,c.DescCat');
        $this->db->from('prestamo_alumno pa');
        $this->db->join("libros l","l.CodLib = pa.CodLib");
        $this->db->join("categorias c","c.CodCat = l.CodCat");
        $prestamos = $this->db->get();
        return $prestamos->result();
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
        $this->db->select('l.TitLib,l.AnioLib,a.NombAut,l.CodLib,l.EditLib,l.PaisLib');
        $this->db->from('libros l');
        $this->db->join('autores_libros al', 'l.CodLib = al.CodLib');
        $this->db->join('autor a', 'a.CodAut = al.CodAut');
        $libros = $this->db->get();
        return $libros->result();
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
    
    function traerLibro($codLibro){
        $this->load->database();
        $this->db->select('l.TitLib,l.AnioLib,a.NombAut,l.CodLib,l.EditLib,l.PaisLib');
        $this->db->from('libros l');
        $this->db->join('autores_libros al', 'l.CodLib = al.CodLib');
        $this->db->join('autor a', 'a.CodAut = al.CodAut');
        $this->db->where('l.CodLib',$codLibro['libroPres']);
        $libros = $this->db->get();
        return $libros->result();
    }
    
}