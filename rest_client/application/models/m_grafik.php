<?php
class m_grafik extends CI_Model{
 
    function get_data_stok(){
        $query = $this->db->query("SELECT nama,SUM(idpel) AS idpel FROM ge_pb GROUP BY nama");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
}