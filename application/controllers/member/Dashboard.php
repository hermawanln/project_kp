<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Dashboard
*/
class Dashboard extends CI_Controller {

    public function __construct() {

		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function index() {
        $logged_in = $this->session->userdata('logged_in');

        if($logged_in) {

				$data['judul_besar'] = 'Member System';
				$data['judul_kecil'] = 'Version 1.0.0';
				$data['output'] = '<div class="content body">
									<section id="introduction">
									  <p class="lead">
									    <b>Selamat Datang '.ucfirst($this->session->userdata('username')).'</b> di System Member Kementrian Keuangan
									  </p>
									</section><!-- /#introduction -->
									<!-- ============================================================= -->';
			$this->load->view('home/member/dasbor',$data);

		} else {

			redirect('home');	
		}
	}

}