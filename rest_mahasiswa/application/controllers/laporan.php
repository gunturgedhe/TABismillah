<?php
Class laporan extends CI_Controller{
    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API  ="http://localhost/TABISMILLAH/rest_server/index.php";
    }

    // menampilkan data mahasiswa
    function index(){
        $data['laporan'] = json_decode($this->curl->simple_get($this->API.'/laporan'));
        $this->load->view('listk',$data);
    }

    // insert data mahasiswa
    function createk(){
        if(isset($_POST['submit'])){
            $data = array(
                'no_lap' => $this->input->post('idpel'),
                'judul' => $this->input->post('nama'),
                'jnlap'=> $this->input->post('alamat'),
                'nim'=> $this->input->post('tarif'),
                'tgl_upld'=> $this->input->post('daya'),
                'file' => $this->input->post('jml'));
            $insert = $this->curl->simple_post($this->API.'/laporan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert){
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('laporan');
        }else{
            $data['laporan'] = json_decode($this->curl->simple_get($this->API.'/laporan'));
            $this->load->view('createk',$data);
        }
    }
    
    // edit data mahasiswa
    function editk(){
        if(isset($_POST['submit'])){
            $data = array(
                'no_lap' => $this->input->post('idpel'),
                'judul' => $this->input->post('nama'),
                'jnlap'=> $this->input->post('alamat'),
                'nim'=> $this->input->post('tarif'),
                'tgl_upld'=> $this->input->post('daya'),
                'file' => $this->input->post('jml'));
            $update = $this->curl->simple_put($this->API.'/laporan', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update){
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('laporan');
        }else{
            $data['laporan'] = json_decode($this->curl->simple_get($this->API.'/kolektif'));
            $params = array('no_lap'=> $this->uri->segment(3));
            $data['laporan'] = json_decode($this->curl->simple_get($this->API.'/laporan',$params));
            $this->load->view('editk',$data);
        }
    }
 
    function delete($no_lap){
        if(empty($no_lap)){
            redirect('laporan');
        }else{
            $delete = $this->curl->simple_delete($this->API.'/laporan', array('no_lap'=>$no_lap), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete){
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else{
                $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('laporan');
        }
    }
    // function print() {
    //     $data['kolektif'] = json_decode($this->curl->simple_get($this->API.'/kolektif'));
    //     $this->load->view('print_kolektif', $data );
    // }

    //  function pdf() {
    //     $this->load->library('dompdf_gen');

    //     $data['kolektif'] = json_decode($this->curl->simple_get($this->API.'/kolektif'));

    //     $this->load->view('laporan_pdf_kolektif',$data);

    //     $paper_size = 'A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size, $orientation);

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream("laporan_kolektif.pdf", array('Attachment' =>0));
    // }
    
    // public function export()
	// {
	// 	$this->load->model('Model');
	// 	$data['kolektif'] =$this->Model->getKOLEKTIF();
 	// 	$this->load->view('laporan_excel_kolektif', $data);
	// }
}
?>