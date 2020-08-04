<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
			
		$this->load->model('m_kriteria');
		$this->load->library('form_validation');
	}

	private function rules()
	{
		return [
			['field' => 'nama_kriteria', 'label' => 'Nama Kriteria', 'rules' => 'required'],
			['field' => 'bobot', 'label' => 'Bobot', 'rules' => 'required'],
		];
	}

	public function index()
	{
		$data['kriteria'] = $this->m_kriteria->getAll();

		$this->load->view('template/header');
		$this->load->view('kriteria/tampil_kriteria', $data);
		$this->load->view('template/footer');
	}

	public function insert()
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('template/header');
			$this->load->view('kriteria/tambah_kriteria', $data);
			$this->load->view('template/footer');
		} else {
			$data['id_kriteria'] = $this->input->post('id_kriteria');
			$data['nama_kriteria'] = $this->input->post('nama_kriteria');
			$data['bobot'] = $this->input->post('bobot');

			$this->m_kriteria->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Data  Kriteria berhasil disimpan")</script>');
			redirect(base_url('Kriteria'));
		}
	}

	public function edit($id)
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data["kriteria"] = $this->m_kriteria->getId($id);
			
			$this->load->view('template/header');
			$this->load->view('kriteria/edit_kriteria', $data);
			$this->load->view('template/footer');
		} else {
			$data['nama_kriteria'] = $this->input->post('nama_kriteria');
			$data['bobot'] = $this->input->post('bobot');

			$this->m_kriteria->edit($id, $data);
			$this->session->set_flashdata('pesan', '<script>alert("Data  Kriteria berhasil diubah")</script>');

			redirect(base_url('Kriteria'));
		}
	}

	public function delete($id)
	{
    	$this->m_kriteria->delete($id);
    	$this->session->set_flashdata('pesan', '<script>alert("Data  Kriteria berhasil dihapus")</script>');
    	redirect(base_url('Kriteria'));

	}

}



