<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_cari extends CI_Model {    
  public function __construct(){
    parent::__construct();
    // $this->db->database();
    }
    public function get_keyword($keyword){
      $this->db->select('*');
      $this->db->from('dosen');
      $this->db->like('kddospem', $keyword);
      $this->db->or_like('nmdospem', $keyword);
      $query = $this->db->get();
      return $query->result();
    }

    public function gepd($keyword){
      $this->db->select('*');
      $this->db->from('mahasiswa');
      $this->db->like('nim', $keyword);
      $this->db->or_like('nama', $keyword);
      $query = $this->db->get();
      return $query->result();  
    }

    public function kolektif($keyword){
      $this->db->select('*');
      $this->db->from('laporan');
      $this->db->like('no_lap', $keyword);
      $this->db->or_like('nim', $keyword);
      $query = $this->db->get();
      return $query->result();  
    }
  }

?>