<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index() {
		$logged_in = $this->session->userdata('admin');
		if($logged_in) {
						redirect('admin/dasbor');
						
		} else {
			$data=array('title'=>'Login Administrator',
					'isi'  =>'admin/login_view'
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
			
			redirect('admin/login');
	
		} else {
			$this->load->model('admin/Get_admin');
			$res = $this->Get_admin->ceklogin($usermail,$userpass);
			if($res){
				foreach ($res as $datalogin) {
					$usermail = $datalogin['email'];
					$username = $datalogin['username'];
					$userole = $datalogin['level'];
					$userpass = $datalogin['password'];
				}
				$data2 = array(
					'username' => $username,
					'email' => $usermail,
					'password' => $userpass,
					'role'  => 'admin',
					'admin' => TRUE
					);

				
				$this->session->set_userdata($data2);
					redirect('admin/dasbor');

			}else{
				$this->load->model('helpdesk/Get_helpdesk');
				$res = $this->Get_helpdesk->ceklogin($usermail,$userpass);
				if($res){
					foreach ($res as $datalogin) {
						$usermail = $datalogin['email'];
						$username = $datalogin['username'];
						$userole = $datalogin['level'];
						$userpass = $datalogin['password'];
					}

					if($userole==1){
						$data2 = array(
							'username' => $username,
							'email' => $usermail,
							'password' => $userpass,
							'role'  => 'TIK',
							'TIK' => TRUE
							);
						$this->session->set_userdata($data2);
						redirect('helpdesk/TIK');
					}else if($userole==2){
						$data2 = array(
								'username' => $username,
								'email' => $usermail,
								'password' => $userpass,
								'role'  => 'BMN',
								'BMN' => TRUE
						);
						$this->session->set_userdata($data2);
						redirect('helpdesk/BMN');
					}
					else if($userole==3){
						$data2 = array(
								'username' => $username,
								'email' => $usermail,
								'password' => $userpass,
								'role'  => 'RT',
								'RT' => TRUE
						);
						$this->session->set_userdata($data2);
						redirect('helpdesk/RT');
					}
				}
				else{	// jika tidak valid redirect ke login
					$this->session->set_flashdata(
								'msg', '<div class="alert alert-danger text-center"><button class="close" data-dismiss="alert" type="button">×</button>Email atau Password Salah!</div>'
							);
					redirect('admin/login');
				}	
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}
}