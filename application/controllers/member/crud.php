<?php
/**
 * PHP Crud
 *
 * LICENSE
 *
 * Atlet Nasional is released with licensing, using MIT license (license.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package     Crud Controller
 * @copyright   Copyright (c) 2016, Agung Sugiarto
 * @license		  MIT
 * @version     1.0.0
 * @author      Agung Sugiarto <sugiartoagung92@gmail.com>
 *
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Crud atlet
*/
class Crud extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		// load library grocery_crud
		$this->load->library('Grocery_CRUD');
	}


    public function view_crud($output = NULL) {

		$this->load->view('home/member/dasbor',$output);
	}

    public function index() {
		/**
		 * Cek jika session ogin
		 */
		if($this->session->userdata('logged_in')) {

			$this->view_crud((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		/**
		 * Jika session tidak login
		 */
		} else {
			redirect('home');
		}
	}


    public function app() {
        $crud = new grocery_CRUD();
        $crud->set_table('app');
        $crud->set_subject('Permintaan Akun Aplikasi');
        $crud->fields('nama', 'nip', 'unker', 'jabatan', 
                        'alamat', 'telp', 'hp', 'email', 'nm_pgw',  
                        'nip_pgw', 'unit_kerja', 'jbtn', 'telpon', 'henphone',
                        'email_dinas', 'aplikasi');
        $crud->display_as('nip','NIP');
        $crud->display_as('unker','Unit Kerja');
        $crud->display_as('jbtn','Jabatan');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nm_pgw','Nama Pegawai');
        $crud->display_as('nip_pgw','NIP Pegawai');
        $crud->display_as('telpon','Telp Pegawai');
        $crud->display_as('henphone','Hp Pegawai');


        $crud->callback_add_field('nama', function($value) {
            return '<b>I.	Penanggung Jawab Struktural</b><br><input type="text" name="nama" value="'.$value.'"/> '; 
        });

        $crud->callback_add_field('nm_pgw', function($value) {
            return '<b>II.	Identitas Pegawai</b><br><input type="text" name="nm_pgw" value="'.$value.'" />  '; 
        });

        $crud->callback_read_field('nama', function($value) {
            return '<b>I.	Penanggung Jawab Struktural</b><br> '.$value.' '; 
        });

      
        $crud->callback_read_field('nm_pgw', function($value) {
            return '<b>II.	Identitas Pegawai</b><br> '.$value.' '; 
        });

        $crud->callback_add_field('aplikasi', function() {
            return '<input type="radio" name="aplikasi" value="Persuratan" /> Persuratan  &nbsp;
                        <input type="radio" name="aplikasi" value="Nadine" /> Nadine &nbsp; <input type="radio" name="aplikasi" value="DAMS" /> DAMS'; 
        });
            
        // $crud->unset_fields('cetak','tiket','nm_kpl','nip_kpl','kepala','lokasi','is_confirm');
        // $crud->unset_columns(array('cetak','tiket','nm_kpl','nip_kpl','kepala','lokasi','is_confirm'));
            
          
        $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);
                 
    }

     public function sf() {
        $crud = new grocery_CRUD();
        $crud->set_table('sharing');
        $crud->set_subject('Sharing Folder');
        $crud->fields('nama', 'nip', 'pangkat', 'jabatan', 'unker',
                        'telp', 'hp', 'nama_file', 'platform', 'media',
                        'server', 'nm_user', 'akses');   
        
        $crud->display_as('kode_sh','ID');
        $crud->display_as('nama_file','Nama Folder');
        $crud->display_as('nm_user','Nama User');
        $crud->display_as('jbtn','Jabatan');
        $crud->display_as('unker','Unit Kerja');
        $crud->display_as('akses','Hak Akses');
        $crud->display_as('nm_kepala','Nama Kepala');
        $crud->display_as('nip_kpl','NIP Kepala');
        $crud->display_as('is_confirm','Status');
            
        $crud->callback_add_field('platform', function() {
            return '<input type="radio" name="platform" value="Windows" /> Windows  &nbsp;
                 <input type="radio" name="platform" value="Linux" /> Linux &nbsp; <input type="radio" name="platform" value="lainnya" /> lainnya'; 
        });
            
        // $crud->unset_fields('cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm');
        // $crud->unset_columns(array('cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
          
        $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }
    
    
     public function akin() {
        $crud = new grocery_CRUD();
        $crud->set_table('akunindividu');
        $crud->set_subject('Akun Individu');
        $crud->fields('nama', 'ttl', 'jenkel', 'status', 'masa_laku',
                        'nip', 'pangkat', 'jabatan', 'unit_kerja', 'alamat',
                        'telp', 'hp', 'nama_akun','layanan');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('jenkel','Jenis Kelamin');
        $crud->display_as('status','Status Pegawai');
        $crud->display_as('masa_laku','Berlaku s.d');
        $crud->display_as('nip','NIP');
        $crud->display_as('nama_akun','Nama Usulan Akun');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('layanan','Jenis Layanan');

            
        $crud->callback_add_field('jenkel', function() {
            return '<input type="radio" name="jenkel" value="Laki - Laki" /> Laki - Laki  &nbsp;
                        <input type="radio" name="jenkel" value="Perempuan" /> Perempuan '; 
        });

        $crud->callback_add_field('status', function() {
            return '<input type="radio" name="status" value="Pegawai" /> Pegawai  &nbsp;
                        <input type="radio" name="status" value="Lainnya" /> Lainnya '; 
        });
        $crud->field_type('layanan','multiselect',array('Surat Elektronik' => 'Surat Elektronik', 'Internet' => 'Internet'));
         
            
        // $crud->unset_fields('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas','is_confirm');
        // $crud->unset_columns(array('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','is_confirm','kepala','hal','petugas','is_confirm'));
            
          
        $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function asus() {
        $crud = new grocery_CRUD();
        $crud->set_table('akunkhusus');
        $crud->set_subject('Akun Khusus');
        $crud->fields('usulan_akun', 'layanan', 'masa', 'nama', 'nip',
                        'jabatan', 'unit_kerja', 'alamat', 'telp','hp',
                        'surat_elk', 'keterangan'); 
        $crud->display_as('is_confirm','Status');
        $crud->display_as('jenkel','Jenis Kelamin');
        $crud->display_as('surat_elk','Alamat Surat Elektronik');
        $crud->display_as('masa','Berlaku s.d');
        $crud->display_as('nip_pmhn','NIP Pemohon');
        $crud->display_as('nip','NIP');
        $crud->display_as('usulan_akun','Nama Usulan Akun');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('alamat','Alamat Kantor');
        $crud->display_as('layanan','Jenis Layanan');
        $crud->display_as('nm_kpl','Nama Kepala');
        $crud->display_as('nip_kpl','NIP Kepala');

            
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
        $crud->callback_field('nama', function() {
            return '<b>Penanggung Jawab Struktural</b><br><input type="text" name="nama" /> '; 
        });

      
        $crud->callback_read_field('nama', function ($value, $primary_key) {
            return '<b>Penanggung Jawab Struktural</b><br> '.$value ; 
        });
        $crud->callback_add_field('usulan_akun', function() {
            return '<input type="text" minlength="6" maxlength="20" name="usulan_akun" placeholder="6 s.d. 20 karakter">'; 
        });
             

        $crud->callback_add_field('layanan', function() {
            return '<input type="radio" name="layanan" value="Surat Elektronik" /> Surat Elektronik  &nbsp;
                        <input type="radio" name="layanan" value="Internet" /> Internet '; 
        });
            
        // $crud->unset_fields('nip_eslon','eslon','pemohon','nip_pmhn','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm');
        // $crud->unset_columns(array('nip_eslon','pemohon','nip_pmhn','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
          
        $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function grup() {
        $crud = new grocery_CRUD();
        $crud->set_table('permintaangrup');
        $crud->set_subject('Permintaan Akun Video Conference');
        $crud->fields('usulan', 'berlaku', 'nama',
                        'nip', 'jabatan', 'unit_kerja', 'alamat', 'telp',
                        'hp', 'surat_elektronik', 'nm_agt', 'nip_agt', 'akun',
                        'keterangan');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('usulan','Usulan nama grup');
        $crud->display_as('surat_elektronik','Alamat Surat Elektronik');
        $crud->display_as('berlaku','Berlaku s.d');
        $crud->display_as('alamat','Alamat Kantor');
        $crud->display_as('nip_pmhn','NIP Pemohon');
        $crud->display_as('nip','NIP');
        $crud->display_as('nama_akun','Nama Usulan Akun');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('nm_agt','Nama Anggota');
        $crud->display_as('nip_agt','NIP Anggota');
        $crud->display_as('akun','[Akun]@kemenkeu.go.id');

        
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
        
        $crud->callback_field('nama', function($value) {
            return '<b>Penanggung Jawab Struktural</b><br><input type="text" name="nama" value="'.$value.'" /> '; 
        });

      
        $crud->callback_read_field('nama', function ($value, $primary_key) {
            return '<b>Penanggung Jawab Struktural</b><br> '.$value ; 
        });
        
        // $crud->unset_fields('tanggal','ptgs','nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas');
        // $crud->unset_columns(array('tanggal','ptgs','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','is_confirm','hal','petugas'));
        
        $crud->callback_add_field('nama_akun', function() {
            return '<input type="text" minlength="6" maxlength="20" name="nama_akun" placeholder="6 s.d. 20 karakter">'; 
        });
        $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function mail() {
        $crud = new grocery_CRUD();
        $crud->set_table('kouta_mail');
        $crud->set_subject('Kuota Mail');
        $crud->fields('nama', 'nip', 'pangkat',
                        'jabatan', 'unit_kerja', 'telp', 'hp', 'alasan',
                        'kapasitas');   
        $crud->display_as('kode_km','ID');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nip','NIP');
        $crud->display_as('alasan','Alasan Penambahan');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('kapasitas','Kuota Area');
        $crud->display_as('nama_kpl','Nama Kepala');
        $crud->display_as('nip_kpl','NIP Kepala');

            
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
         
        $crud->callback_add_field('kapasitas', function() {
            return '<input type="text" name="kapasitas" /> MB'; 
        });

        $crud->callback_read_field('kapasitas', function($value) {
            return "$value MB"; 
        });
            
        // $crud->unset_fields('nip_eslon','eslon','lokasi','cetak','nama_kpl','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas');
        // $crud->unset_columns(array('nip_eslon','eslon','lokasi','cetak','nama_kpl','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas'));
            
          
        $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }
    
     public function akun_domain() {
        $crud = new grocery_CRUD();
        $crud->set_table('akun_domain');
        $crud->set_subject('Penonaktifan Akun Domain');
        $crud->fields('nama', 'nip', 'unit_kerja',
                        'jabatan', 'alamat', 'telp', 'hp', 'email',
                        'nama_pgw', 'nip_pgw', 'unker', 'jbtn', 'telpon',
                        'hendphone', 'alamat_email', 'username', 'alasan');
        $crud->display_as('kode_ad','ID');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nip','NIP');
        $crud->display_as('nip_pgw','NIP Pegawai');
        $crud->display_as('nama_pgw','Nama Pegawai');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('jbtn','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('unker','Unit Kerja');
        $crud->display_as('telpon','Telp');
        $crud->display_as('hendphone','Hp');
            
            
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
        $crud->callback_field('nama', function($value) {
            return '<b>I.	Penanggung Jawab Struktural</b><br><input type="text" name="nama" value="'.$value.'"/> '; 
        });

      
        $crud->callback_read_field('nama', function ($value, $primary_key) {
            return '<b>I.	Penanggung Jawab Struktural</b><br> '.$value ; 
        });
        $crud->callback_field('nama_pgw', function($value) {
            return '<b>II.	Identitas Pegawai</b><br><input type="text" name="nama_pgw" value="'.$value.'"/> '; 
        });

        $crud->callback_read_field('nama_pgw', function($value, $primary_key) {
            return '<b>II.	Identitas Pegawai</b><br>'.$value ; 
        });
            
           
        // $crud->unset_fields('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm');
        // $crud->unset_columns(array('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
        $crud->field_type('alasan','multiselect',array('Pensiun' => 'Pensiun', 'Meninggal' => 'Meninggal', 'Mengundurkan Diri' => 'Mengundurkan Diri', 'Lainnya' => 'Lainnya'));
         
          
        $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

       public function pendampingan() {
             $crud = new grocery_CRUD();
			$crud->set_table('pendampingan');
            $crud->set_subject('Pendampingan Video Conference');
            
              $crud->display_as('jenkel','Jenis Kelamin');
              $crud->display_as('surat_elk','Alamat Surat Elektronik');
               $crud->display_as('masa','Berlaku s.d');
               $crud->display_as('nip_pmhn','NIP Pemohon');
               $crud->display_as('nip','NIP');
               $crud->display_as('usulan_akun','Nama Usulan Akun');
               $crud->display_as('jabatan','Jabatan/Golongan');
               $crud->display_as('unit_kerja','Unit Kerja');
            $crud->display_as('layanan','Jenis Layanan');

            
            //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
            
              $crud->callback_add_field('mulai', function() {
       return '<input type="time" name="mulai" >'; 
        });

          $crud->callback_add_field('selesai', function() {
       return '<input type="time" name="selesai" >'; 
        });
             
            
            $crud->unset_fields('nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas');
            $crud->unset_columns(array('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
          
           $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
            $output = $crud->render();
			$this->view_crud($output);

          }

            public function akun_video() {
             $crud = new grocery_CRUD();
			$crud->set_table('akunvideo');
            $crud->set_subject('Permintaan Akun Video Conference');
            
              $crud->display_as('jenkel','Jenis Kelamin');
              $crud->display_as('surat_elk','Alamat Surat Elektronik');
               $crud->display_as('masa','Berlaku s.d');
               $crud->display_as('nip_pmhn','NIP Pemohon');
               $crud->display_as('nip','NIP');
               $crud->display_as('nama_akun','Nama Usulan Akun');
               $crud->display_as('jabatan','Jabatan/Golongan');
               $crud->display_as('unit_kerja','Unit Kerja');
            $crud->display_as('layanan','Jenis Layanan');

            
            //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
            
             
            
            $crud->unset_fields('tanggal','ptgs','nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','is_confirm','hal','petugas');
            $crud->unset_columns(array('tanggal','ptgs','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
             $crud->callback_add_field('nama_akun', function() {
       return '<input type="text" minlength="6" maxlength="20" name="nama_akun" placeholder="6 s.d. 20 karakter">'; 
        });
           $crud->unset_delete()->unset_edit()->unset_print()->unset_export();
            $output = $crud->render();
			$this->view_crud($output);

          }

        
    
}
