<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('M_hasil');
        $this->load->model('m_datakaryawan');
        $this->load->model('m_kriteria');
        $this->load->model('m_bobotkriteria');
        $this->load->library('form_validation');
    }

    
    
    public function index()
    {
        $query = $this->db->query('select * from bobotkriteria');
        $bbt = $this->db->query('select bobot from kriteria');
        $ku = $this->db->query('SELECT bobot FROM kriteria where kriteria.id_kriteria=1');
        $kpd = $this->db->query('SELECT bobot FROM kriteria where kriteria.id_kriteria=2');
        $kpg = $this->db->query('SELECT bobot FROM kriteria where kriteria.id_kriteria=3');
        $kd = $this->db->query('SELECT bobot FROM kriteria where kriteria.id_kriteria=4');
        $kpn = $this->db->query('SELECT bobot FROM kriteria where kriteria.id_kriteria=5');
        $result = $this->M_hasil->getData();

        $this->load->view('template/header');
        $this->load->view('hasil/tampil_hasil', compact('query', 'bbt', 'ku', 'kpd', 'kpg', 'kd','kpn', 'result'));    
        $this->load->view('template/footer');
    }



}