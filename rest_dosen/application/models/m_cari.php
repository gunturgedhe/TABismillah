<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class m_cari extends CI_Model {    
  public function __construct(){
    parent::__construct();
    // $this->db->database();
  }
    public function get_keyword($keyword){
      $this->db->select('*');
      $this->db->from('ge_pb');
      $this->db->like('idpel', $keyword);
      $this->db->or_like('nama', $keyword);
      $query = $this->db->get();
      return $query->result();
    }

    public function gepd($keyword){
        $this->db->select('*');
        $this->db->from('ge_pd');
        $this->db->like('idpel', $keyword);
        $this->db->or_like('nama', $keyword);
        $query = $this->db->get();
        return $query->result();  
      }

      public function kolektif($keyword){
        $this->db->select('*');
        $this->db->from('kolektif');
        $this->db->like('idpel', $keyword);
        $this->db->or_like('nama', $keyword);
        $query = $this->db->get();
        return $query->result();  
      }

      public function phasapb($keyword){
        $this->db->select('*');
        $this->db->from('tgphasa_pb');
        $this->db->like('idpel', $keyword);
        $this->db->or_like('nama', $keyword);
        $query = $this->db->get();
        return $query->result();
      }

      public function phasapd($keyword){
        $this->db->select('*');
        $this->db->from('tgphasa_pd');
        $this->db->like('idpel', $keyword);
        $this->db->or_like('nama', $keyword);
        $query = $this->db->get();
        return $query->result();
      }

  }

?>