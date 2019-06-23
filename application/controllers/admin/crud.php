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

		$this->load->view('admin/dasbor/dasbor_view',$output);
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
        $crud->columns('kode_app', 'is_confirm', 'nama', 'nip', 'unker', 'jabatan', 
                        'alamat', 'telp', 'hp', 'email', 'nm_pgw',  
                        'nip_pgw', 'unit_kerja', 'jbtn', 'telpon', 'henphone',
                        'email_dinas', 'aplikasi', 'lokasi', 'kepala', 'nm_kpl',
                        'nip_kpl', 'tiket', 'cetak');
        $crud->display_as('kode_app','ID');   
        $crud->display_as('is_confirm','Status');   
        $crud->display_as('nm_pgw','Nama Pegawai');
        $crud->display_as('nip_pgw','NIP Pegawai');
        $crud->display_as('jbtn','Jabatan');
        $crud->display_as('telpon','Telp Pegawai');
        $crud->display_as('henphone','Hp Pegawai');
        $crud->display_as('unker','Unit Kerja');
        $crud->display_as('nip','NIP');
        $crud->display_as('nm_kpl','Nama Kepala');
        $crud->display_as('nip_kpl','NIP Kepala');

        $crud->callback_field('nama', function($value) {
            return '<b>I.	Penanggung Jawab Struktural</b><br><input type="text" name="nama" value="'.$value.'"/> '; 
        });

        $crud->callback_field('nm_pgw', function($value) {
            return '<b>II.	Identitas Pegawai</b><br><input type="text" name="nm_pgw" value="'.$value.'" />  '; 
        });

        $crud->callback_read_field('nama', function($value) {
            return '<b>I.	Penanggung Jawab Struktural</b><br>'.$value.' '; 
        });

        $crud->callback_read_field('nm_pgw', function($value) {
            return '<b>II.	Identitas Pegawai</b><br>'.$value.'  '; 
        });

        $crud->callback_add_field('aplikasi', function() {
            return '<input type="radio" name="aplikasi" value="Persuratan" /> Persuratan  &nbsp;
                        <input type="radio" name="aplikasi" value="Nadine" /> Nadine &nbsp; <input type="radio" name="aplikasi" value="DAMS" /> DAMS'; 
        });

        $crud->callback_edit_field('aplikasi', function($value) {
            return '<input type="radio" name="aplikasi" value="Persuratan" '.($value == 'Persuratan' ? 'checked' : '').'/> Persuratan  &nbsp;
                        <input type="radio" name="aplikasi" value="Nadine" '.($value == 'Nadine' ? 'checked' : '').' /> Nadine &nbsp; 
                        <input type="radio" name="aplikasi" value="DAMS" '.($value == 'DAMS' ? 'checked' : '').' /> DAMS'; 
        });
            
          
        $crud->unset_export();
        $output = $crud->render();
		$this->view_crud($output);
                 
    }


     public function sf() {
        $crud = new grocery_CRUD();
        $crud->set_table('sharing');
        $crud->set_subject('Sharing Folder');
        $crud->columns('kode_sh', 'is_confirm', 'nama', 'nip', 'pangkat', 'jabatan', 'unker',
                        'telp', 'hp', 'nama_file', 'platform', 'media',
                        'server', 'nm_user', 'akses', 'dibuat', 'kepala',
                        'nm_kepala', 'nip_kpl', 'nomor', 'cetak', 'oleh',
                        'hal', 'tiket', 'petugas', 'nip');
        $crud->display_as('kode_sh','ID');
        $crud->display_as('nama_file','Nama Folder');
        $crud->display_as('nm_user','Nama User');
        $crud->display_as('jbtn','Jabatan');
        $crud->display_as('unker','Unit Kerja');
        $crud->display_as('akses','Hak Akses');
        $crud->display_as('nm_kepala','Nama Kepala');
        $crud->display_as('nip_kpl','NIP Kepala');
        $crud->display_as('is_confirm','Status');

        
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
        $crud->callback_add_field('platform', function() {
            return '<input type="radio" name="platform" value="Windows" /> Windows  &nbsp;
                        <input type="radio" name="platform" value="Linux" /> Linux &nbsp; <input type="radio" name="platform" value="lainnya" /> lainnya'; 
        });
        $crud->callback_edit_field('platform', function($value) {
            return '<input type="radio" name="platform" value="Windows" '.($value == 'Windows' ? 'checked' : '').'/> Windows  &nbsp;
                    <input type="radio" name="platform" value="Linux" '.($value == 'Linux' ? 'checked' : '').'/> Linux &nbsp; 
                    <input type="radio" name="platform" value="lainnya" '.($value == 'lainnya' ? 'checked' : '').'/> lainnya'; 
        });
        
        // $crud->unset_fields('cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm');
        // $crud->unset_columns(array('cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
        
        
        $crud->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }
    
    
     public function akin() {
        $crud = new grocery_CRUD();
        $crud->set_table('akunindividu');
        $crud->set_subject('Akun Individu');
        $crud->columns('kode_akun', 'is_confirm', 'nama', 'ttl', 'jenkel', 'status',
                        'masa_laku', 'nip', 'pangkat', 'jabatan', 'unit_kerja',
                        'alamat', 'telp', 'hp', 'nama_akun', 'layanan',
                        'lokasi', 'kepala', 'eslon', 'nip_eslon', 'tiket',
                        'dibuat', 'petugas');    
        $crud->display_as('kode_akun','ID');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('jenkel','Jenis Kelamin');
        $crud->display_as('status','Status Pegawai');
        $crud->display_as('masa_laku','Berlaku s.d');
        $crud->display_as('nip','NIP');
        $crud->display_as('nama_akun','Nama Usulan Akun');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('layanan','Jenis Layanan');

            
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
        $crud->callback_add_field('jenkel', function() {
            return '<input type="radio" name="jenkel" value="Laki - Laki" /> Laki - Laki  &nbsp;
                        <input type="radio" name="jenkel" value="Perempuan" /> Perempuan '; 
        });
        $crud->callback_edit_field('jenkel', function($value) {
            return '<input type="radio" name="jenkel" value="Laki - Laki" '.($value == 'Laki - Laki' ? 'checked' : '').'/> Laki - Laki  &nbsp;
                        <input type="radio" name="jenkel" value="Perempuan" '.($value == 'Perempuan' ? 'checked' : '').'/> Perempuan '; 
        });

        $crud->callback_add_field('status', function() {
            return '<input type="radio" name="status" value="Pegawai" /> Pegawai  &nbsp;
                        <input type="radio" name="status" value="Lainnya" /> Lainnya '; 
        });
        $crud->callback_edit_field('status', function($value) {
            return '<input type="radio" name="status" value="Pegawai" '.($value == 'Pegawai' ? 'checked' : '').'/> Pegawai  &nbsp;
                        <input type="radio" name="status" value="Lainnya" '.($value == 'Lainnya' ? 'checked' : '').'/> Lainnya '; 
        });
        $crud->field_type('layanan','multiselect',array('Surat Elektronik' => 'Surat Elektronik', 'Internet' => 'Internet'));
         
            
        // $crud->unset_fields('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas','is_confirm');
        // $crud->unset_columns(array('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','is_confirm','kepala','hal','petugas','is_confirm'));
            
          
        $crud->unset_print()->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function asus() {
        $crud = new grocery_CRUD();
        $crud->set_table('akunkhusus');
        $crud->set_subject('Akun Khusus');
        $crud->columns('kode_khusu', 'is_confirm', 'usulan_akun', 'layanan', 'masa',
                        'nama', 'nip', 'jabatan', 'unit_kerja', 'alamat',
                        'telp', 'hp', 'surat_elk', 'keterangan', 'lokasi',
                        'pemohon', 'nip_pmhn', 'kepala', 'nm_kpl', 'nip_kpl',
                        'tiket', 'dibuat', 'petugas');
        $crud->display_as('kode_khusu','ID');
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
        
        $crud->callback_field('nama', function($value) {
            return '<b>Penanggung Jawab Struktural</b><br><input type="text" name="nama" value="'.$value.'" /> '; 
        });

      
        $crud->callback_read_field('nama', function ($value, $primary_key) {
            return '<b>Penanggung Jawab Struktural</b><br> '.$value ; 
        });
        $crud->callback_add_field('usulan_akun', function() {
            return '<input type="text" minlength="6" maxlength="20" name="usulan_akun" placeholder="6 s.d. 20 karakter">'; 
        });
        $crud->callback_edit_field('usulan_akun', function($value) {
            return '<input type="text" minlength="6" maxlength="20" name="usulan_akun" value="'.$value.'" placeholder="6 s.d. 20 karakter">'; 
        });
             

        $crud->callback_add_field('layanan', function() {
            return '<input type="radio" name="layanan" value="Surat Elektronik" /> Surat Elektronik  &nbsp;
                        <input type="radio" name="layanan" value="Internet" /> Internet '; 
        });

        $crud->callback_edit_field('layanan', function($value) {
            return '<input type="radio" name="layanan" value="Surat Elektronik" '.($value == 'Surat Elektronik' ? 'checked' : '').' /> Surat Elektronik  &nbsp;
                        <input type="radio" name="layanan" value="Internet" '.($value == 'Internet' ? 'checked' : '').'/> Internet '; 
        });
            
        // $crud->unset_fields('nip_eslon','eslon','pemohon','nip_pmhn','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm');
        // $crud->unset_columns(array('nip_eslon','pemohon','nip_pmhn','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
          
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function grup() {
        $crud = new grocery_CRUD();
        $crud->set_table('permintaangrup');
        $crud->set_subject('Permintaan Akun Video Conference');
        $crud->columns('kode_grup', 'is_confirm', 'usulan', 'berlaku', 'nama',
                        'nip', 'jabatan', 'unit_kerja', 'alamat', 'telp',
                        'hp', 'surat_elektronik', 'nm_agt', 'nip_agt', 'akun',
                        'keterangan', 'lokasi', 'kepala', 'eslon', 'nip_eslon',
                        'pemohon', 'nip_pmhn', 'tiket', 'cetak');
        $crud->display_as('kode_grup','ID');
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
        
        
        
        // $crud->unset_fields('tanggal','ptgs','nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas');
        // $crud->unset_columns(array('tanggal','ptgs','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','is_confirm','hal','petugas'));
        
        $crud->callback_field('nama', function($value) {
            return '<b>Penanggung Jawab Struktural</b><br><input type="text" name="nama" value="'.$value.'" /> '; 
        });

      
        $crud->callback_read_field('nama', function ($value, $primary_key) {
            return '<b>Penanggung Jawab Struktural</b><br> '.$value ; 
        });

        $crud->callback_add_field('nama_akun', function() {
            return '<input type="text" minlength="6" maxlength="20" name="nama_akun" placeholder="6 s.d. 20 karakter">'; 
        });
        $crud->callback_edit_field('nama_akun', function() {
            return '<input type="text" minlength="6" maxlength="20" name="nama_akun" placeholder="6 s.d. 20 karakter">'; 
        });
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function mail() {
        $crud = new grocery_CRUD();
        $crud->set_table('kouta_mail');
        $crud->set_subject('Kuota Mail');
        $crud->columns('kode_km', 'is_confirm', 'nama', 'nip', 'pangkat',
                        'jabatan', 'unit_kerja', 'telp', 'hp', 'alasan',
                        'kapasitas', 'kepala', 'nama_kpl', 'nip_kpl', 'nomor',
                        'cetak', 'oleh', 'hal', 'tiket', 'petugas');
        $crud->display_as('kode_km','ID');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nip','NIP');
        $crud->display_as('alasan','Alasan Penambahan');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('kapasitas','Kuota Area');
        $crud->display_as('nama_kpl','Nama Kepala');
        $crud->display_as('nip_kpl','NIP Kepala');
         
        $crud->callback_field('kapasitas', function($value) {
            return '<input type="text" name="kapasitas" value="'.$value.'"/> MB'; 
        });

        $crud->callback_read_field('kapasitas', function($value){
            return "$value MB";
        });
            
        // $crud->unset_fields('nip_eslon','eslon','lokasi','cetak','nama_kpl','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas');
        // $crud->unset_columns(array('nip_eslon','eslon','lokasi','cetak','nama_kpl','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas'));
            
          
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function akun_domain() {
        $crud = new grocery_CRUD();
        $crud->set_table('akun_domain');
        $crud->set_subject('Penonaktifan Akun Domain');
        $crud->columns('kode_ad', 'is_confirm', 'nama', 'nip', 'unit_kerja',
                        'jabatan', 'alamat', 'telp', 'hp', 'email',
                        'nama_pgw', 'nip_pgw', 'unker', 'jbtn', 'telpon',
                        'hendphone', 'alamat_email', 'username', 'alasan', 'dibuat',
                        'eslon', 'nip_eslon', 'tiket', 'cetak' );
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
         
          
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function pendampingan() {
        $crud = new grocery_CRUD();
        $crud->set_table('pendampingan');
        $crud->set_subject('Pendampingan Video Conference');
        $crud->columns('kode_pndm', 'is_confirm', 'nama', 'nip', 'pangkat', 
                        'jabatan', 'unit_kerja', 'alamat', 'telp', 'hp', 'email_kemenkeu',
                        'tanggal', 'mulai', 'selesai', 'tempat', 'agenda',
                        'pemohon', 'nip_pmhn', 'tiket', 'diterima', 'petugas');
        $crud->display_as('kode_pndm','ID');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nip','NIP');
        $crud->display_as('jabatan','Jabatan / Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('alamat','Alamat Kantor');
        $crud->display_as('email_kemenkeu','Email Kemenkeu');
        $crud->display_as('nip_pmhn','NIP Pemohon');

            
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
        
        $crud->callback_edit_field('jabatan', function($value){
            return '<input type="text" name="jabatan" value="'.$value.'" /> <br><span style="font-size: 13px">( <i>isi dengan ... / ... </i>)</span>';
        });

        $crud->callback_add_field('jabatan', function($value){
            return '<input type="text" name="jabatan" value="'.$value.'" /> <br><span style="font-size: 13px">( <i>isi dengan ... / ... </i>)</span>';
        });
        
        $crud->callback_add_field('mulai', function() {
            return '<input type="time" name="mulai" > <span style="font-size: 13px">( jam : menit : AM(pagi) / PM(malam) )</span>'; 
        });
        $crud->callback_edit_field('mulai', function($value) {
            return '<input type="time" name="mulai" value="'.$value.'"> <span style="font-size: 13px">( jam : menit : detik : AM(pagi) / PM(malam) )</span>'; 
        });


        $crud->callback_add_field('selesai', function() {
            return '<input type="time" name="selesai" > <span style="font-size: 13px">( jam : menit : AM(pagi) / PM(malam) )</span>'; 
        });
        $crud->callback_edit_field('selesai', function($value) {
            return '<input type="time" name="selesai" value="'.$value.'"> <span style="font-size: 13px">( jam : menit : detik : AM(pagi) / PM(malam) )</span>'; 
        }); 
        
        // $crud->unset_fields('nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','is_confirm','petugas');
        // $crud->unset_columns(array('nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
        
          
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function akun_video() {
        $crud = new grocery_CRUD();
        $crud->set_table('akunvideo');
        $crud->set_subject('Permintaan Akun Video Conference');
        $crud->columns('kode_vid', 'is_confirm', 'nama', 'nip', 'pangkat',
                        'jabatan', 'unit_kerja', 'mulai', 'selesai', 'telp',
                        'hp', 'ket', 'email', 'nama_akun', 'lokasi',
                        'pemohon', 'nip_pmhn', 'tiket', 'tanggal', 'ptgs' );
        $crud->display_as('kode_vid','ID');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nip','NIP');
        $crud->display_as('jabatan','Jabatan/Golongan');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('ket','Keterangan');
        $crud->display_as('email','Email Kemenkeu');
        $crud->display_as('nama_akun','Usulan Nama Akun');
        $crud->display_as('nip_pmhn','NIP Pemohon');
        $crud->display_as('ptgs','Petugas');

            
        //  $crud->display_as('nm_pgw','<br><br><br> Nama Pegawai');
            
             
            
        // $crud->unset_fields('tanggal','ptgs','nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','is_confirm','hal','petugas');
        // $crud->unset_columns(array('tanggal','ptgs','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
        $crud->callback_add_field('nama_akun', function($value) {
            return '<input type="text" value="'.$value.'" minlength="6" maxlength="20" name="nama_akun" placeholder="6 s.d. 20 karakter"><br><span style="font-size: 13px">*) Untuk permintaan akun hanya dibuat saat kegiatan berlangsung dan dengan batasan waktu berdasarkan tanggal pelaksanaan</span>'; 
        });
        $crud->callback_edit_field('nama_akun', function($value) {
            return '<input type="text" value="'.$value.'" minlength="6" maxlength="20" name="nama_akun" placeholder="6 s.d. 20 karakter"><br><span style="font-size: 13px">*) Untuk permintaan akun hanya dibuat saat kegiatan berlangsung dan dengan batasan waktu berdasarkan tanggal pelaksanaan</span>'; 
        });
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function rumah_tangga() {
        $crud = new grocery_CRUD();
        $crud->set_table('rumahtangga');
        $crud->set_subject('Layanan Kerumahanggaan');
        $crud->columns('kode_rmt', 'is_confirm', 'nama_pmhn', 'nip', 'jabatan',
                        'unit_kerja', 'telp', 'hp', 'surat_elektronik', 'deskripsi',
                        'nama_ptgs', 'nip_ptgs', 'rencana', 'realisasi', 'investigasi',
                        'solusi', 'petugas_kptik', 'nip_kptik' );
        $crud->display_as('kode_rmt','ID');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nama_pmhn','Nama Pemohon');
        $crud->display_as('nip','NIP');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('surat_elektronik','Alamat Surat Elektronik');
        $crud->display_as('nama_ptgs','Nama Petugas');
        $crud->display_as('nip_ptgs','NIP Petugas');
        $crud->display_as('rencana','Rencana Penyediaan/Perbaikan');
        $crud->display_as('realisasi','Realisasi Penyediaan/Perbaikan');
        $crud->display_as('investigasi','Hasil Investigasi');
        $crud->display_as('solusi','Solusi yang Diberikan');
        $crud->display_as('petugas_kptik','Nama Petugas KPTIKBMN');
        $crud->display_as('nip_kptik','NIP Petugas KPTIKBMN');

            
        $crud->callback_read_field('nama_pmhn', function($value){
            return '<b>I.	Informasi Pemohon</b><br>'.$value.' '; 
        });
        $crud->callback_edit_field('nama_pmhn', function($value){
            return '<b>I.	Informasi Pemohon</b><br><input type="text" name="nama_pmhn" value="'.$value.'"/> '; 
        });

        $crud->callback_read_field('deskripsi', function($value){
            return '<b>II.	Deskripsi Penyediaan/Perbaikan Sarana Prasarana Gedung</b><br>'.$value.' '; 
        });
        $crud->callback_edit_field('deskripsi', function($value){
            return '<b>II.	Deskripsi Penyediaan/Perbaikan Sarana Prasarana Gedung</b><br><textarea name="deskripsi"/>'.$value.'</textarea> '; 
        });

        $crud->callback_read_field('nama_ptgs', function($value){
            return '<b>III.	Tindak Lanjut</b><br>'.$value.' '; 
        });
        $crud->callback_edit_field('nama_ptgs', function($value){
            return '<b>III.	Tindak Lanjut</b><br><input type="text" name="nama_ptgs" value="'.$value.'"/>'; 
        });
            
        // $crud->unset_fields('tanggal','ptgs','nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','is_confirm','hal','petugas');
        // $crud->unset_columns(array('tanggal','ptgs','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }

     public function keg_kemenkeu() {
        $crud = new grocery_CRUD();
        $crud->set_table('dukungan_kegiatan');
        $crud->set_subject('Formulir Pemenuhan Dukungan Kegiatan KEMENKEU');
        $crud->fields('kode_dkg',  'nama_pemohon', 'nip', 'jabatan', 'unit_kerja', 
                        'telp', 'hp', 'alamat_surat', 'nomor_surat', 'tanggal_srt',  
                        'jadwal_kegiatan', 'perihal', 'keterangan', 'petugas_penerima', 'nip_pnrm',
                        'kegiatan1', 'penilaian1', 'kegiatan2', 'penilaian2', 'kegiatan3',
                        'penilaian3', 'kegiatan4', 'penilaian4', 'kegiatan5', 'penilaian5',
                        'lokasi', 'is_confirm' );
        $crud->columns('kode_dkg', 'is_confirm', 'nama_pemohon', 'nip', 'jabatan', 'unit_kerja', 
                        'telp', 'hp', 'alamat_surat', 'nomor_surat', 'tanggal_srt',  
                        'jadwal_kegiatan', 'perihal', 'keterangan', 'petugas_penerima', 'nip_pnrm',
                        'kegiatan1', 'penilaian1', 'kegiatan2', 'penilaian2', 'kegiatan3',
                        'penilaian3', 'kegiatan4', 'penilaian4', 'kegiatan5', 'penilaian5',
                        'lokasi' );
        $crud->required_fields('kode_dkg');
        $crud->display_as('kode_dkg','No. Form');
        $crud->display_as('is_confirm','Status');
        $crud->display_as('nama_pemohon','Nama Pemohon');
        $crud->display_as('nip','NIP');
        $crud->display_as('unit_kerja','Unit Kerja');
        $crud->display_as('alamat_surat','Alamat Surat Elektronik');
        $crud->display_as('nomor_surat','Nomor Surat Tugas');
        $crud->display_as('tanggal_srt','Tanggal Surat Tugas');
        $crud->display_as('tanggal_srt','Tanggal Surat Tugas');
        $crud->display_as('jadwal_kegiatan','Jadwal Kegiatan');
        $crud->display_as('perihal','Perihal Surat Tugas');
        $crud->display_as('keterangan','Keterangan Tambahan');
        $crud->display_as('petugas_penerima','Petugas Penerima');
        $crud->display_as('nip_pnrm','NIP Penerima');
        $crud->display_as('kegiatan1','Pemrosesan SPPD');
        $crud->display_as('kegiatan2','Penjemputan/pengantaran pegawai/tamu ke tempat dinas yang dituju');
        $crud->display_as('kegiatan3','Penyiapan akomodasi pegawai/tamu');
        $crud->display_as('kegiatan4','Penyediaan perangkat dan atau data pendukung yang dibutuhkan pegawai/tamu dalam pelaksanaan dinas');
        $crud->display_as('kegiatan5','Lain-lain');
        $crud->display_as('penilaian1','Keterangan');
        $crud->display_as('penilaian2','Keterangan');
        $crud->display_as('penilaian3','Keterangan');
        $crud->display_as('penilaian4','Keterangan');
        $crud->display_as('penilaian5','Keterangan');

            
        $crud->callback_read_field('nama_pemohon', function($value){
            return '<b>I.	Informasi Pemohon</b><br>'.$value.' '; 
        });
        $crud->callback_edit_field('nama_pemohon', function($value){
            return '<b>I.	Informasi Pemohon</b><br><input type="text" name="nama_pemohon" value="'.$value.'"/> '; 
        });

        $crud->callback_read_field('nomor_surat', function($value){
            return '<b>II.	Deskripsi Kegiatan</b><br>'.$value.' '; 
        });
        $crud->callback_edit_field('nomor_surat', function($value){
            return '<b>II.	Deskripsi Kegiatan</b><br><input type="text" name="nomor_surat" value="'.$value.'"/> '; 
        });

        $crud->callback_read_field('kegiatan1', function($value){
            return '<b>III.	Tindak Lanjut</b><br>'.$value.' '; 
        });

        $crud->callback_edit_field('kegiatan1', function($value) {
            return '<b>III.	Tindak Lanjut</b><br><input type="radio" name="kegiatan1" value="Sangat Baik" '.($value == 'Sangat Baik' ? 'checked' : '').'/> Sangat Baik  &nbsp;
                        <input type="radio" name="kegiatan1" value="Baik" '.($value == 'Baik' ? 'checked' : '').' /> Baik &nbsp; 
                        <input type="radio" name="kegiatan1" value="Cukup Baik" '.($value == 'Cukup Baik' ? 'checked' : '').' /> Cukup Baik'; 
        });
        
        $crud->callback_edit_field('kegiatan2', function($value) {
            return '<input type="radio" name="kegiatan2" value="Sangat Baik" '.($value == 'Sangat Baik' ? 'checked' : '').'/> Sangat Baik  &nbsp;
                        <input type="radio" name="kegiatan2" value="Baik" '.($value == 'Baik' ? 'checked' : '').' /> Baik &nbsp; 
                        <input type="radio" name="kegiatan2" value="Cukup Baik" '.($value == 'Cukup Baik' ? 'checked' : '').' /> Cukup Baik'; 
        });

        $crud->callback_edit_field('kegiatan3', function($value) {
            return '<input type="radio" name="kegiatan3" value="Sangat Baik" '.($value == 'Sangat Baik' ? 'checked' : '').'/> Sangat Baik  &nbsp;
                        <input type="radio" name="kegiatan3" value="Baik" '.($value == 'Baik' ? 'checked' : '').' /> Baik &nbsp; 
                        <input type="radio" name="kegiatan3" value="Cukup Baik" '.($value == 'Cukup Baik' ? 'checked' : '').' /> Cukup Baik'; 
        });

        $crud->callback_edit_field('kegiatan4', function($value) {
            return '<input type="radio" name="kegiatan4" value="Sangat Baik" '.($value == 'Sangat Baik' ? 'checked' : '').'/> Sangat Baik  &nbsp;
                        <input type="radio" name="kegiatan4" value="Baik" '.($value == 'Baik' ? 'checked' : '').' /> Baik &nbsp; 
                        <input type="radio" name="kegiatan4" value="Cukup Baik" '.($value == 'Cukup Baik' ? 'checked' : '').' /> Cukup Baik'; 
        });

        $crud->callback_edit_field('kegiatan5', function($value) {
            return '<input type="radio" name="kegiatan5" value="Sangat Baik" '.($value == 'Sangat Baik' ? 'checked' : '').'/> Sangat Baik  &nbsp;
                        <input type="radio" name="kegiatan5" value="Baik" '.($value == 'Baik' ? 'checked' : '').' /> Baik &nbsp; 
                        <input type="radio" name="kegiatan5" value="Cukup Baik" '.($value == 'Cukup Baik' ? 'checked' : '').' /> Cukup Baik'; 
        });
            
        // $crud->unset_fields('tanggal','ptgs','nip_pmhn','pemohon','diterima','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','is_confirm','hal','petugas');
        // $crud->unset_columns(array('tanggal','ptgs','nip_eslon','eslon','lokasi','cetak','nm_kepala','tiket','nip_kpl','dibuat','nomor','nm_kpl','oleh','kepala','hal','petugas','is_confirm'));
            
        $crud->unset_export();
        $output = $crud->render();
        $this->view_crud($output);

     }
    
}
