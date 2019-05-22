<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {
	  public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		// load library grocery_crud
		$this->load->library('grocery_CRUD');
	}

	public function view_crud($output = NULL) {

		$this->load->view('admin/dasbor/dasbor_view',$output);
	}

	public function index() {
		/**
		 * Cek jika session ogin
		 */
		if($this->session->userdata('admin')) {

			$this->view_crud((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		/**
		 * Jika session tidak login
		 */
		} else {
			redirect('admin/login');
		}
	}

	public function plus() {
		 $crud = new grocery_CRUD();
		$crud->set_table('user');
            $crud->set_subject('User');
            
		$crud->callback_column('level',array($this,'_callback_colomn_level'));
		$crud->callback_column('status',array($this,'_callback_colomn_status'));
        $crud->field_type('password', 'password');

		 $crud->callback_add_field('level', function() {
       return '<input type="radio" name="level" value="0" /> Member  &nbsp;
                 <input type="radio" name="level" value="1" /> TIK  &nbsp;
				 <input type="radio" name="level" value="4" /> Admin  &nbsp;'; 
        });

				$crud->set_field_upload('userfoto', 'assets/uploads/files/cabor');
				$crud->callback_before_upload(array($this, '_valid_images'));
				$crud->callback_edit_field('user_password',array($this,'set_userpassword_input_to_empty'));

		 $crud->callback_add_field('status', function() {
       return '<input type="radio" name="status" value="1" /> Aktif  &nbsp;
                 <input type="radio" name="status" value="0" /> Tidak Aktif  &nbsp;';
		 });
		 $crud->callback_before_insert(array($this,'encrypt_password_callback'));
		 $crud->callback_before_update(array($this,'encrypt_password_callback'));
		 
            $output = $crud->render();
			$this->view_crud($output);
	}

	public function _callback_colomn_level($value, $row)
		{
			if ($value==0)
			{
				return "Member";	
			}
			else if($value==1)
			{
				return "TIK";
			}
			else if($value==4)
			{
				return "Admin";
			}
		}

		public function _callback_colomn_status($value, $row)
		{
			if ($value==1)
			{
				return "Aktif";	
			}
			else 
			{
				return "Tidak Aktif";
			}
		}

		function encrypt_password_callback($post_array) {
			$post_array['password'] = md5($post_array['password']);
			
			return $post_array;
		}    
		
		public function _valid_images($files_to_upload, $field_info)
  {
    if ($files_to_upload[$field_info->encrypted_field_name]['type'] != ('image/png' || 'image/jpg' || 'image/jpeg'))
    {
      return 'Maaf ! Gambar yang diperbolehkan hanya bertipe PNG / JPG / JPEG';
    }
    return true;
	}
	
	function set_userpassword_input_to_empty() {
		return "<input type='password' class='form-control' name='user_password' value='' />";
}
}