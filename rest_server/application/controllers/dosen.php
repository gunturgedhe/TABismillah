<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;

    class dosen extends REST_Controller {

        function __construct($config = 'rest') {
            parent::__construct($config);
            $this->load->database();
        }

        //Menampilkan data kontak
        function index_get() {
            $kddospem = $this->get('kddospem');
            if ($kddospem == '') {
                $dosen = $this->db->get('dosen')->result();
            } else {
                $this->db->where('kddospem', $kddospem);
                $dosen = $this->db->get('dosen')->result();
            }
            $this->response($dosen, 200);
        }

        
        //Mengirim atau menambah data kontak baru
        function index_post() {
            $data = array(
                'nmdospem' => $this->input->post('nmdospem'),
                'kddospem' => $this->input->post('kddospem'));
            $insert = $this->db->insert('dosen', $data);

            if ($insert) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }

        //Memperbarui data kontak yang telah ada
        function index_put() {
            $kddospem = $this->put('kddospem');
            $data = array(
                'nmdospem' => $this->put('nmdospem'),
                'kddospem' => $this->put('kddospem'));
            $this->db->where('kddospem', $kddospem);
            $update = $this->db->update('dosen', $data);

            if ($update) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }

        //Menghapus salah satu data kontak
        function index_delete() {
            $id = $this->delete('kddospem');
            $this->db->where('kddospem', $id);
            $delete = $this->db->delete('ge_pb');

            if ($delete) {
                $this->response(array('status' => 'success'), 201);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }
    }
?>