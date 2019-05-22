<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dasbor extends CI_Controller {


	 public function __construct() {
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}
	public function index() {
        $logged_in = $this->session->userdata('admin');

        if($logged_in) {

				$data['judul_besar'] = 'Admin System';
				$data['judul_kecil'] = 'Version 1.0.0';
				$data['output'] = '<div class="content body">
									<section id="introduction">
									  <p class="lead">
									    <b>Selamat Datang Admin '.ucfirst($this->session->userdata('username')).'</b> di System Member Kementrian Keuangan
									  </p>
									</section><!-- /#introduction -->
									<!-- ============================================================= -->';
			$this->load->view('admin/dasbor/dasbor_view',$data);

		} else {

			redirect('admin/login');	
		}
	}
	
}