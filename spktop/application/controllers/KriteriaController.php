<?php
defined('BASEPATH') or exit('No direct script access allowed');


class KriteriaController extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('B_kriteria_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
     if ($this->form_validation->run() == FALSE) {
      
			$this->load->view('template/header');
			$this->load->view('menu/kriteria'); // iki jane ono $data
			$this->load->view('template/footer');
     }else {
       $data['id_bk'] = $this->input->post('id_bk');
       $data['nama_kriteria'] = $this->input->post('nama_kriteria');
       $data['umur'] = $this->input->post('umur');
       $data['pengalaman'] = $this->input->post('pengalaman');
       $data['pendidikan'] = $this->input->post('pendidikan');
       $data['dokumen'] = $this->input->post('dokumen');
       $data['penampilan'] = $this->input->post('penampilan');

       $this->B_kriteria_model->insert($data);
       $this->session->set_flashdata('pesan', '<script>alert("Data  Kriteria berhasil disimpan")</script>');
       
       redirect(base_url('KriteriaControlller'));

     }
  }

}


/* End of file KriteriaController.php */
/* Location: ./application/controllers/KriteriaController.php */