<?php
Class dosen extends CI_Controller{
    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API  ="http://localhost/TABISMILLAH/rest_server/index.php";
    }

    // menampilkan data mahasiswa
    function index(){
        $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
        $this->load->view('list',$data);
    }

    // insert data mahasiswa
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'nmdospem' => $this->input->post('nmdospem'),
                'kddospem' => $this->input->post('kddospem'));
            $insert = $this->curl->simple_post($this->API.'/dosen', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert){
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('dosen');
        }else{
            $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
            $this->load->view('create',$data);
        }
    }
    
    // edit data mahasiswa
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'nmdospem' => $this->input->post('nmdospem'),
                'kddospem' => $this->input->post('kddospem'));
            $update = $this->curl->simple_put($this->API.'/dosen', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update){
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('dosen');
        }else{
            $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
            $params = array('kddospem'=> $this->uri->segment(3));
            $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen',$params));
            $this->load->view('edit',$data);
        }
    }
 
    function delete($kddospem){
        if(empty($kddospem)){
            redirect('dosen');
        }else{
            $delete = $this->curl->simple_delete($this->API.'/dosen', array('kddospem'=>$kddospem), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete){
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('dosen');
        }
    }

    // function print() {
    //     $data['ge_pb'] = json_decode($this->curl->simple_get($this->API.'/ge_pb'));
    //     $this->load->view('print_ge_pb', $data );
    // }

    //  function pdf() {
    //     $this->load->library('dompdf_gen');

    //     $data['ge_pb'] = json_decode($this->curl->simple_get($this->API.'/ge_pb'));

    //     $this->load->view('laporan_pdf_ge_pb',$data);

    //     $paper_size = 'A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size, $orientation);

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream("laporan_ge_pb.pdf", array('Attachment' =>0));
    // }

    // public function export()
	// {
	// 	$this->load->model('Model');
	// 	$data['ge_pb'] =$this->Model->getGEPB();
 	// 	$this->load->view('laporan_excel_gepb', $data);
	// }
}
?>