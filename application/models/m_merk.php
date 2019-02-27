<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_merk extends CI_Model {

	public $table='merk';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function buat_kode($value='')
	{
		$this->db->select('RIGHT(merk.id_merk,4) as kode', FALSE);
		  $this->db->order_by('id_merk','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('merk');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $ym = date('ym');
		  $kodejadi = "KTG-$ym-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}

	public function tampil_merk()
	{
		$this->db->select(["id_merk", "nama","id_merk"])
			->from($this->table);
		$query=$this->db->get_compiled_select();

		$data['result']=$this->db->query($query)->result();
		$data['total_data']=$this->db->count_all_results();
		return $data;
	}
	public function tampil_merk_pilihan()
	{
		$this->db->select(["id_merk", "nama"])
			->from($this->table);
		$query=$this->db->get_compiled_select();

		$data['result']=$this->db->query($query)->result_array();
		$data['total_data']=$this->db->count_all_results();
		return $data;
	}

	public function detail_merk($id_merk)
	{
		$this->db->select()
			->from($this->table)
			->where("id_merk", $id_merk);
		$query=$this->db->get_compiled_select();

		$data['result']=$this->db->query($query)->row();

		return $data;
	}

	public function tambah_merk($data)
	{
		$query=$this->db->set($data)->get_compiled_insert('merk');
		// print('<pre>'); print_r($query); exit();

		$this->db->query($query);
	}

	public function ubah_merk($data)
	{
		$this->db->where("id_merk", $this->input->post('id_merk'));
		$query=$this->db->set($data)->get_compiled_update('merk');
		// print('<pre>'); print_r($query); exit();

		$this->db->query($query);
	}
	public function delete($id)
	{
    // Attempt to delete the row
    $this->db->where('id_merk', $id);
    $this->db->delete('merk');
    // Was the row deleted?
    if ($this->db->affected_rows() == 1)
        return TRUE;
    else
        return FALSE;
	}
}

/* End of file m_merk.php */
/* Location: ./application/models/m_merk.php */