<?php

Class search Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_cari');
        $this->load->helper('form');
    }

    function index(){
        $this->load->view('list', $data);
    }

    public function search()
    {
        $keyword    =   $this->input->post('keyword');
        $data['ge_pb']    =   $this->m_cari->get_keyword($keyword);
        $this->load->view('list',$data);
    }

    public function searchpd()
    {
        $keyword    =   $this->input->post('keyword');
        $data['ge_pd']    =   $this->m_cari->gepd($keyword);
        $this->load->view('listb',$data);
    }

    public function searchkolektif()
    {
        $keyword    =   $this->input->post('keyword');
        $data['kolektif']    =   $this->m_cari->kolektif($keyword);
        $this->load->view('listk',$data);
    }

    public function phasapb()
    {
        $keyword    =   $this->input->post('keyword');
        $data['tgphasa_pb']    =   $this->m_cari->phasapb($keyword);
        $this->load->view('listy',$data);
    }

    public function phasapd()
    {
        $keyword    =   $this->input->post('keyword');
        $data['tgphasa_pd']    =   $this->m_cari->phasapd($keyword);
        $this->load->view('listm',$data);
    }

}

?>