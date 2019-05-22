<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}


	public function index() {

		$logged_in = $this->session->userdata('logged_in');
		$admin = $this->session->userdata('admin');
		if($logged_in) {
						redirect('member/Dashboard');
						
		}
		else if($admin){
						redirect('admin/dasbor');
			
		}
		 else {
			$data=array('title'=>'Website Laporan',
					'isi'  =>'home/index_home'
						);
			$this->load->view('layout/wrapper',$data);	
		}
		
			
	}

	public function validasi() {

		$usermail = $this->input->post('email');
		$userpass = md5($this->input->post('password'));

		$this->load->helper('security');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');

		if($this->form_validation->run() == FALSE) {
			
			redirect('home');
	
		} else {
			$this->load->model('member/Get_member');
			$res = $this->Get_member->ceklogin($usermail,$userpass);
			if($res){
				foreach ($res as $datalogin) {
					$usermail = $datalogin['email'];
					$username = $datalogin['username'];
					$userpass = $datalogin['password'];
					$userfoto = $datalogin['userfoto'];
				}
				$data2 = array(
				'username'  => $username,
				'email'  => $usermail,
				'password'  => $userpass,
				'userfoto'  => $userfoto,
				'role'  => 'member',
				'logged_in' => TRUE
				);
				$this->session->set_userdata($data2);
					redirect('member/Dashboard');

			}else{
				// jika tidak valid redirect ke login
				$this->session->set_flashdata(
							'msg', '<div class="alert alert-danger text-center"><button class="close" data-dismiss="alert" type="button">×</button>Email atau Password Salah!</div>'
						);
				redirect('home');	
			}
		}
	
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}
}