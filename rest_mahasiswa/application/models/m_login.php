<?php 

class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->curl->get_where($table,$where);
	}	
}