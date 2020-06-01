<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    require APPPATH . '/libraries/REST_Controller.php';
    use Restserver\Libraries\REST_Controller;

    class mahasiswa extends REST_Controller {

        function __construct($config = 'rest') {
            parent::__construct($config);
            $this->load->database();
        }

        //Menampilkan data kontak
        function index_get() {
            $nim = $this->get('nim');
            if ($nim == '') {
                $mahasiswa = $this->db->get('mahasiswa')->result();
            } else {
                $this->db->where('nim', $nim);
                $mahasiswa = $this->db->get('mahasiswa')->result();
            }
            $this->response($mahasiswa, 200);
        }

        
        //Mengirim atau menambah data kontak baru
        function index_post() {
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'no_hp'=> $this->input->post('no_hp'),
                'username'=> $this->input->post('username'),
                'password'=> $this->input->post('password'),
                'jurusan' => $this->input->post('jurusan'),
                'prodi' => $this->input->post('prodi'),
                'kddospem' => $this->input->post('kddospem'));
            $insert = $this->db->insert('mahasiswa', $data);

            if ($insert) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }

        //Memperbarui data kontak yang telah ada
        function index_put() {
            $nim = $this->put('nim');
            $data = array(
                'nim' => $this->input->put('nim'),
                'nama' => $this->input->put('nama'),
                'no_hp'=> $this->input->put('no_hp'),
                'username'=> $this->input->put('username'),
                'password'=> $this->input->put('password'),
                'jurusan' => $this->input->put('jurusan'),
                'prodi' => $this->input->put('prodi'),
                'kddospem' => $this->input->put('kddospem'));
            $this->db->where('nim', $nim);
            $update = $this->db->update('mahasiswa', $data);

            if ($update) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }

        //Menghapus salah satu data kontak
        function index_delete() {
            $id = $this->delete('nim');
            $this->db->where('nim', $id);
            $delete = $this->db->delete('mahasiswa');

            if ($delete) {
                $this->response(array('status' => 'success'), 201);
            } else {
                $this->response(array('status' => 'fail', 502));
            }
        }
    }
?>