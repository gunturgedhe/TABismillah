<?php
Class mahasiswa extends CI_Controller{
    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://localhost/TABISMILLAH/rest_server/index.php";
    }

    // menampilkan data mahasiswa
    function index(){
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
        $this->load->view('listb',$data);
    }

    // insert data mahasiswa
    function createb(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'no_hp'=> $this->input->post('no_hp'),
                'username'=> $this->input->post('username'),
                'password'=> $this->input->post('password'),
                'jurusan' => $this->input->post('jurusan'),
                'prodi' => $this->input->post('prodi'),
                'kddospem' => $this->input->post('kddospem'));
            $insert = $this->curl->simple_post($this->API.'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert){
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('mahasiswa');
        }else{
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
            $this->load->view('createb',$data);
        }
    }
    
    // edit data mahasiswa
    function editb(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama' => $this->input->post('nama'),
                'no_hp'=> $this->input->post('no_hp'),
                'username'=> $this->input->post('username'),
                'password'=> $this->input->post('password'),
                'jurusan' => $this->input->post('jurusan'),
                'prodi' => $this->input->post('prodi'),
                'kddospem' => $this->input->post('kddospem'));
            $update = $this->curl->simple_put($this->API.'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update){
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('mahasiswa');
        }else{
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
            $params = array('nim'=> $this->uri->segment(3));
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
            $this->load->view('editb',$data);
        }
    }
 
    // delete data mahasiswa
    function delete($nim){
        if(empty($nim)){
            redirect('mahasiswa');
        }else{
            $delete = $this->curl->simple_delete($this->API.'/mahasiswa', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete){
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('mahasiswa');
        }
    }

    // function print() {
    //     $data['ge_pd'] = json_decode($this->curl->simple_get($this->API.'/ge_pd'));
    //     $this->load->view('print_ge_pd', $data );
    // }

    //  function pdf() {
    //     $this->load->library('dompdf_gen');

    //     $data['ge_pd'] = json_decode($this->curl->simple_get($this->API.'/ge_pd'));

    //     $this->load->view('laporan_pdf_ge_pd',$data);

    //     $paper_size = 'A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size, $orientation);

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream("laporan_ge_pd.pdf", array('Attachment' =>0));
    // }

    // public function export()
	// {
	// 	$this->load->model('Model');
	// 	$data['ge_pd'] =$this->Model->getGEPD();
 	// 	$this->load->view('laporan_excel_gepd', $data);
	// }
}
?>