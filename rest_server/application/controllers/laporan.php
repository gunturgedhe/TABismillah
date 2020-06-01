<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;

    class laporan extends REST_Controller {

        function __construct($config = 'rest') {
            parent::__construct($config);
            $this->load->database();
        }

        //Menampilkan data kontak
        function index_get() {
            $no_lap = $this->get('no_lap');
            if ($no_lap == '') {
                $laporan = $this->db->get('laporan')->result();
            } else {
                $this->db->where('no_lap', $no_lap);
                $laporan = $this->db->get('laporan')->result();
            }
            $this->response($laporan, 200);
        }

        
        //Mengirim atau menambah data kontak baru
        function index_post() {
            $data = array(
                'no_lap' => $this->input->post('idpel'),
                'judul' => $this->input->post('nama'),
                'jnlap'=> $this->input->post('alamat'),
                'nim'=> $this->input->post('tarif'),
                'tgl_upld'=> $this->input->post('daya'),
                'file' => $this->input->post('jml'));
            $insert = $this->db->insert('laporan', $data);

            if ($insert) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }

        //Memperbarui data kontak yang telah ada
        function index_put() {
            $idpel = $this->put('idpel');
            $data = array(
                'no_lap' => $this->input->put('idpel'),
                'judul' => $this->input->put('nama'),
                'jnlap'=> $this->input->put('alamat'),
                'nim'=> $this->input->put('tarif'),
                'tgl_upld'=> $this->input->put('daya'),
                'file' => $this->input->put('jml'));
            $this->db->where('no_lap', $no_lap);
            $update = $this->db->update('laporan', $data);

            if ($update) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }

        //Menghapus salah satu data kontak
        function index_delete() {
            $id = $this->delete('no_lap');
            $this->db->where('no_lap', $id);
            $delete = $this->db->delete('laporan');

            if ($delete) {
                $this->response(array('status' => 'success'), 201);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }
    }
?>