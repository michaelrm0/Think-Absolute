<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PermisoModelo extends CI_Model 
{   
	function ObtenerPermisos()
	{
		$this->db->select('p.*,m.NomMen');
		$this->db->from('permisos p');
		$this->db->join('menu m','p.CodMen=m.CodMen');	 	
		$this->db->join('tipo_usuario tp','p.CodTip=tp.CodTip');
		$resultado = $this->db->get();
		return $resultado->result();
	}
}

?>