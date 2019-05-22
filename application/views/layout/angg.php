<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct(){
		
		parent ::__construct();

		//load model
		$this->load->model('model_angg'); 

	}

	public function index()
	{
		$data = array(

			'title' 	=> 'Data Anggota',
			'data_angg'	=> $this->model_angg->get_all(),

		);

		$this->load->view('data_angg', $data);
	}

	public function tambah()
	{
		$data = array(

			'title' 	=> 'Tambah Data Anggota'

		);

		$this->load->view('tambah_angg', $data);
	}

	public function simpan()
	{
		$data = array(

			'kode_agt'  	        => $this->input->post("kode_agt"),
			'nama' 	                => $this->input->post("nama"),
			'nip'   		        => $this->input->post("nip"),
			'akun'	    	    	=> $this->input->post("akun"),
			
		);

		$this->model_angg->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			                                    </div>');

		//redirect
		redirect('angg/');

	}

	public function edit($kode_agt)
	{
		$kode_agt = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Anggota',
			'data_angg' => $this->model_angg->edit($kode_agt)

		);

		$this->load->view('edit_angg', $data);
	}

	public function update()
	{
		$id['kode_agt'] = $this->input->post("kode_agt");
		$data = array(

			
	    	'kode_agt'  	        => $this->input->post("kode_agt"),
			'nama' 	                => $this->input->post("nama"),
			'nip'   		        => $this->input->post("nip"),
			'akun'	    	    	=> $this->input->post("akun"),

		);

		$this->model_angg->update($data, $kode_agt);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
			                                    </div>');

		//redirect
		redirect('angg/');

	}

	public function hapus($kode_agt)
	{
		$id['kode_agt'] = $this->uri->segment(3);
		
		$this->model_angg->hapus($kode_agt);

		//redirect
		redirect('angg/');

	}

}
