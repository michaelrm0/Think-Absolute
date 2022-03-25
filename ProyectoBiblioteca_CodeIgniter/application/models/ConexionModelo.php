<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConexionModelo extends CI_Model 
{    
    function entrarEstudiante($dato)
    {
        $this->load->database();
        $this->db->select('p.NombPer,p.ApePer,u.Usuario,u.Clave,tp.CodTip,tp.DescTip,u.EstUsu');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('estudiante e', 'e.CodPer = p.CodPer');
        $this->db->where("u.Usuario", $dato['usuario']);
        $this->db->where("u.Clave", $dato['clave']);
        $this->db->where("tp.CodTip", '1');
        $this->db->where("u.EstUsu", 'A');
        $resultados = $this->db->get();
        if ($resultados->num_rows() == 1) 
        {
            $r = $resultados->row();
            $s_estudiante = array(
                's_nomcom' => $r->NombPer . " " . $r->ApePer,
            );
            $this->session->set_userdata($s_estudiante);
            return $resultados->result();
        } else {
            return false;
        }
    }

    function entrarDocente($dato)
    {
        $this->load->database();
        $this->db->select('p.NombPer,p.ApePer,u.Usuario,u.Clave,tp.CodTip,tp.DescTip,u.EstUsu');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('docente d', 'd.CodPer = p.CodPer');
        $this->db->where("u.Usuario", $dato['usuario']);
        $this->db->where("u.Clave", $dato['clave']);
        $this->db->where("tp.CodTip", '2');
        $this->db->where("u.EstUsu", 'A');
        $resultados = $this->db->get();
        if ($resultados->num_rows() == 1) 
        {
            $r = $resultados->row();
            $s_docente = array(
                's_nomcom' => $r->NombPer . " " . $r->ApePer,
            );
            $this->session->set_userdata($s_docente);
            return $resultados->result();
        } else {
            return false;
        }
    }

    function entrarBibliotecario($dato)
    {
        $this->load->database();
        $this->db->select('p.NombPer,p.ApePer,u.Usuario,u.Clave,tp.CodTip,tp.DescTip,u.EstUsu');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('bibliotecario bib', 'bib.CodPer = p.CodPer');
        $this->db->where("u.Usuario", $dato['usuario']);
        $this->db->where("u.Clave", $dato['clave']);
        $this->db->where("tp.CodTip", '3');
        $this->db->where("u.EstUsu", 'A');
        $resultados = $this->db->get();
        if ($resultados->num_rows() == 1) 
        {
            $r = $resultados->row();
            $s_bibliotecario = array(
                's_nomcom' => $r->NombPer . " " . $r->ApePer,
            );
            $this->session->set_userdata($s_bibliotecario);
            return $resultados->result();
        } else {
            return false;
        }
    }

    function entrarAdministrador($dato)
    {
        $this->load->database();
        $this->db->select('b.NombBibli,a.CodBibli,p.NombPer,p.ApePer,u.Usuario,u.Clave,tp.CodTip,tp.DescTip,u.EstUsu');
        $this->db->from('persona p');
        $this->db->join('usuario u', 'p.CodUsu = u.CodUsu');
        $this->db->join('tipo_usuario tp', 'u.CodTip = tp.CodTip');
        $this->db->join('administrador a', 'a.CodPer = p.CodPer');
        $this->db->join('bibliotecas b', 'a.CodBibli = b.CodBibli');
        $this->db->where("u.Usuario", $dato['usuario']);
        $this->db->where("u.Clave", $dato['clave']);
        $this->db->where("tp.CodTip", '4');
        $this->db->where("u.EstUsu", 'A');
        $resultados = $this->db->get();
        if ($resultados->num_rows() == 1) 
        {
            $r = $resultados->row();
            $s_administrador = array(
                's_nomcom' => $r->NombPer . " " . $r->ApePer,
                's_codBibli' => $r->CodBibli
            );
            $this->session->set_userdata($s_administrador);
            return $resultados->result();
        } else {
            return false;
        }
    }
}