<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class merk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			redirect(site_url('auth'));
		}
		$this->load->model('m_merk', 'mod');
	}


	public function index()
	{
		$data['title']='Tabel merk';
		//$data['kodeunik'] = $this->m_merk->buat_kode();
		$data['result']=$this->mod->tampil_merk()['result'];
		$data['total_data']=$this->mod->tampil_merk()['total_data'];

		// print('<pre>'); print_r($data); exit();
		$this->parser->parse('merk/merk_tampil', $data);
	}

	public function tambah()
	{
		$data['title']='Tambah merk';
		$data['kodeunik'] = $this->mod->buat_kode();
		$this->parser->parse('merk/merk_tambah', $data);
	}

	public function tambah_proses()
	{
		$data=[
			"id_merk"	=> $this->input->post('id_merk'),
			"nama"	=> $this->input->post('nama'),
			
		];

		$this->mod->tambah_merk($data);
		redirect(site_url('merk'));
	}

	public function ubah($id)
	{
		$data['title']='Ubah merk';
		$data['result']=$this->mod->detail_merk($id);
		$this->parser->parse('merk/merk_ubah', $data);
	}

	public function ubah_proses()
	{
		$data=[
			"id_merk"	=> $this->input->post('id_merk'),
			"nama"	=> $this->input->post('nama')
		];

		$this->mod->ubah_merk($data);
		redirect(site_url('merk'));
	}
	public function delete($id)
	{
		 $this->mod->delete($id);
		redirect(site_url('merk'));
	}
}

/* End of file merk.php */
/* Location: ./application/controllers/merk.php */