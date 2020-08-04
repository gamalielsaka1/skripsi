<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakaryawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
			
		$this->load->model('m_datakaryawan');
		$this->load->library('form_validation');
	}

	private function rules()
	{
		return [
			['field' => 'ktp', 'label' => 'KTP', 'rules' => 'required'],
			['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
			['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],
			['field' => 'no_tlp', 'label' => 'No telpon', 'rules' => 'required']
		];
	}

	public function index()
	{
		$data['datakaryawan'] = $this->m_datakaryawan->getAll();
		$data['id_karyawan'] = $this->m_datakaryawan->jukuk_karyawan();
		$this->load->view('template/header');
		$this->load->view('datakaryawan/tampil_datakaryawan',$data);
		$this->load->view('template/footer');
	}

	public function insert()
	{

		$this->form_validation->set_rules($this->rules());
		

		if ($this->form_validation->run() === FALSE) {
			$data['juka'] = $this->m_datakaryawan->jukuk_karyawan();
			$this->load->view('template/header');
			$this->load->view('datakaryawan/tambah_datakaryawan',$data);
			$this->load->view('template/footer');

		} else {
			$data['id_karyawan'] = $this->input->post('id_karyawan');
			$data['ktp'] = $this->input->post('ktp');
			$data['nama'] = $this->input->post('nama');
			$data['alamat'] = $this->input->post('alamat');
			$data['no_tlp'] = $this->input->post('no_tlp');

			$this->m_datakaryawan->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Data Karyawan berhasil disimpan")</script>');
			redirect(base_url('Datakaryawan'));
		}
	}

	public function edit($id)
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data["datakaryawan"] = $this->m_datakaryawan->getId($id);
			
			$this->load->view('template/header');
			$this->load->view('datakaryawan/edit_datakaryawan', $data);
			$this->load->view('template/footer');
		} else {
			$data['ktp'] = $this->input->post('ktp');
			$data['nama'] = $this->input->post('nama');
			$data['alamat'] = $this->input->post('alamat');
			$data['no_tlp'] = $this->input->post('no_tlp');

			$this->m_datakaryawan->edit($id, $data);
			$this->session->set_flashdata('pesan', '<script>alert("Data Karyawan berhasil diubah")</script>');

			redirect(base_url('Datakaryawan'));
		}
	}

	public function delete($id)
	{
    	$this->m_datakaryawan->delete($id);
    	$this->session->set_flashdata('pesan', '<script>alert("Data Karyawan berhasil dihapus")</script>');
    	redirect(base_url('Datakaryawan'));

	}

}



