<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buku extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('anggota')
				 ->order_by('kode_agt', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("anggota", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($kode_agt)
	{
		
		$query = $this->db->where("kode_agt", $kode_agt)
				->get("anggota");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $kode_agt)
	{
		
		$query = $this->db->update("anggota", $data, $kode_agt);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($kode_agt)
	{
		
		$query = $this->db->delete("anggota", $kode_agt);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}