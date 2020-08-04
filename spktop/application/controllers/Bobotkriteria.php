<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bobotkriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
			
    	$this->load->model('m_bobotkriteria');
		$this->load->model('m_datakaryawan');
		$this->load->model('m_bobotumur');
		$this->load->model('m_bobotpendidikan');
		$this->load->model('m_bobotpengalaman');
		$this->load->model('m_bobotdokumen');
		$this->load->model('m_bobotpenampilan');
		$this->load->library('form_validation');
	}

	private function rules()
	{
		return [
			['field' => 'nama', 'label' => 'Nama', 'rules' => 'required'],
			['field' => 'umur', 'label' => 'Umur', 'rules' => 'required'],
			['field' => 'pendidikan', 'label' => 'Pendidikan', 'rules' => 'required'],
      		['field' => 'pengalaman', 'label' => 'Pengalaman', 'rules' => 'required'],
      		['field' => 'dokumen', 'label' => 'Dokumen', 'rules' => 'required'],
      		['field' => 'penampilan', 'label' => 'Penampilan', 'rules' => 'required']

		];
	}

	public function index()
	{
		$data['bobotkriteria'] = $this->m_bobotkriteria->getAll();
		$data['id_bk'] = $this->m_bobotkriteria->jukuk_bobotkriteria();
		$this->load->view('template/header');
		$this->load->view('bobotkriteria/tampil_bobotkriteria',$data);
		$this->load->view('template/footer');
	}
	private function listDataKaryawan(){
		$data_kar = $this->m_datakaryawan->getAll();
		foreach ($data_kar as $key) {
			$list_kar[$key->nama] = $key->id_karyawan." -- ".$key->nama;
		}
		return $list_kar;
	}
	private function listDataUmur(){
		$data_umur = $this->m_bobotumur->getAll();
		foreach ($data_umur as $key) {
			$list_umur[$key->u_bobot] = $key->umur." -- ".$key->u_bobot;
		}
		return $list_umur;
	}
	private function listDataPendidikan(){
		$data_pendidikan = $this->m_bobotpendidikan->getAll();
		foreach ($data_pendidikan as $key) {
			$list_pendidikan[$key->pd_bobot] = $key->pendidikan." -- ".$key->pd_bobot;
		}
		return $list_pendidikan;
	}
	private function listDataPengalaman(){
		$data_pengalaman = $this->m_bobotpengalaman->getAll();
		foreach ($data_pengalaman as $key) {
			$list_pengalaman[$key->pg_bobot] = $key->pengalaman." -- ".$key->pg_bobot;
		}
		return $list_pengalaman;
	}
	private function listDataDokumen(){
		$data_dokumen = $this->m_bobotdokumen->getAll();
		foreach ($data_dokumen as $key) {
			$list_dokumen[$key->d_bobot] = $key->dokumen." -- ".$key->d_bobot;
		}
		return $list_dokumen;
	}
	private function listDataPenampilan(){
		$data_penampilan = $this->m_bobotpenampilan->getAll();
		foreach ($data_penampilan as $key) {
			$list_penampilan[$key->pm_bobot] = $key->penampilan." -- ".$key->pm_bobot;
		}
		return $list_penampilan;
	}
	public function insert()
	{

		$this->form_validation->set_rules($this->rules());
		

		if ($this->form_validation->run() === FALSE) {
     		$data['jukabk'] = $this->m_bobotkriteria->jukuk_bobotkriteria();
	  		$data['datakaryawan'] = $this->listDataKaryawan();
			$data['bobotumur'] = $this->listDataUmur();
			$data['bobotpendidikan'] = $this->listDataPendidikan();			
			$data['bobotpengalaman'] = $this->listDataPengalaman();
			$data['bobotdokumen'] = $this->listDataDokumen();
			$data['bobotpenampilan'] = $this->listDataPenampilan();
			$this->load->view('template/header');
			$this->load->view('bobotkriteria/tambah_bobotkriteria',$data);
			$this->load->view('template/footer');

		} else {
			$data['id_bk'] = $this->input->post('id_bk');
      		$data['nama'] = $this->input->post('nama');
      		$data['umur'] = $this->input->post('umur');
      		$data['pendidikan'] = $this->input->post('pendidikan');
      		$data['pengalaman'] = $this->input->post('pengalaman');
			$data['dokumen'] = $this->input->post('dokumen');
      		$data['penampilan'] = $this->input->post('penampilan');

			var_dump($data);
			$this->m_bobotkriteria->insert($data);
			$this->session->set_flashdata('pesan', '<script>alert("Bobot Kriteria berhasil disimpan")</script>');
			redirect(base_url('Bobotkriteria'));
		}
	}

	public function edit($id)
	{

		$this->form_validation->set_rules($this->rules());

		if ($this->form_validation->run() === FALSE) {
			$data["bobotkriteria"] = $this->m_bobotkriteria->getId($id);
			$data['datakaryawan'] = $this->listDataKaryawan();
			$data['bobotumur'] = $this->listDataUmur();
			$data['bobotpendidikan'] = $this->listDataPendidikan();			
			$data['bobotpengalaman'] = $this->listDataPengalaman();
			$data['bobotdokumen'] = $this->listDataDokumen();
			$data['bobotpenampilan'] = $this->listDataPenampilan();
			
			$this->load->view('template/header');
			$this->load->view('bobotkriteria/edit_bobotkriteria', $data);
			$this->load->view('template/footer');
		} else {
      		$data['id_bk'] = $this->input->post('id_bk');
      		$data['nama'] = $this->input->post('nama');
     		$data['umur'] = $this->input->post('umur');
     		$data['pengalaman'] = $this->input->post('pengalaman');
     		$data['pendidikan'] = $this->input->post('pendidikan');
     		$data['dokumen'] = $this->input->post('dokumen');
     		$data['penampilan'] = $this->input->post('penampilan');

			$this->m_bobotkriteria->edit($id, $data);
			$this->session->set_flashdata('pesan', '<script>alert("Bobot Kriteria berhasil diubah")</script>');

			redirect(base_url('Bobotkriteria'));
		}
	}

	public function delete($id)
	{
    	$this->m_bobotkriteria->delete($id);
    	$this->session->set_flashdata('pesan', '<script>alert("Bobot Kriteria berhasil dihapus")</script>');
    	redirect(base_url('Bobotkriteria'));

	}

}



