<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Dashboard
*/
class file extends CI_Controller {

    public function __construct() {

		parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->library('PDF');
	}

	public function index() {
        $logged_in = $this->session->userdata('logged_in');

        if($logged_in) {

				$data['judul_besar'] = 'Member System';
				$data['judul_kecil'] = 'Version 1.0.0';
				$data['output'] = '<div class="content body">
									<section id="introduction">
									  <p class="lead">
									    <b>Selamat Datang File '.ucfirst($this->session->userdata('username')).'</b> di System Member Kementrian Keuangan
									  </p>
									</section><!-- /#introduction -->
                                    <!-- ============================================================= -->
                                    <a href="'.base_url('member/file/pdf').'"  class="btn btn-danger btn-flat">PDf</a>
                                    <a href="#" onclick="window.print()" class="btn btn-info"><i class="fa fa-print"></i> Cetak</a>
                                    ';
			$this->load->view('home/member/dasbor',$data);

		} else {

			redirect('home');	
		}
    }
    
    

    public function akunapp () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Layanan Permintaan Akun Applikasi',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

     // Awal Penanggung Jawab
       $pdf->SetFont('Times','',12);
      $pdf->Cell(5,10,'I. Penanggung Jawab Struktural',0,1,'L');
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat E-mail Kedinasan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
     // Awal Penanggung Jawab
       $pdf->SetFont('Times','',12);
      $pdf->Cell(5,10,'II. Akun Aplikasi yang Didaftarkan',0,1,'L');
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(55,0,':',0,2,'R');
      $pdf->Cell(55);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat E-mail Kedinasan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

       $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Aplikasi',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti Saya telah memahami dan akan mematuhi',0,1,'L'); 
      $pdf->Cell(5,5,'kebijakan pengelolaan layanan TIK Kemenkeu.',0,1,'L');
      

      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas,',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      
      $pdf->Output();
  
}
public function sharfol () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Layanan Penyediaan Sharing Folder',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

       $pdf->SetFont('Times','',12);
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Pangkat / Golongan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Kantor',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

       $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Hp',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
     // Awal Penanggung Jawab
       $pdf->SetFont('Times','',12);
      $pdf->Cell(5,10,'I. Sharing Folder',0,1,'L');
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama Folder',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Plattform',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Media',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Server Aplikasi',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);          

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti Saya telah memahami dan akan mematuhi ',0,1,'L');
      $pdf->Cell(5,5,'kebijakan pengelolaam layanan TIK Kemenkeu',0,1,'L');

      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas,',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      $pdf->Output();
  
}
public function akunindi () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Permintaan Akun Individu',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

       $pdf->SetFont('Times','',12);
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Tanggal Lahir',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(5,0,'Jenis Kelamin',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Status Kepegawaian',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Pangkat / Golongan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Kantor',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Hp',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Usulan Nama Akun**)',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

       $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jenis Layanan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);          

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti saya telah memahami dan akan mematuhi Keputusan Menteri',0,1,'L');
      $pdf->Cell(5,5,'Keuangan Nomor 512/KMK.01/2009 tentang Kebijakan dan Standar Penggunaan Akun dan Kata Sandi, Surat ',0,1,'L');
      $pdf->Cell(5,5,'Elektronik, dan Internet di Lingkungan Departemen Keuangan.',0,1,'L');
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas,',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      $pdf->Output();
  
}
public function akunkhusus () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Permintaan Akun Khusus',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

       $pdf->SetFont('Times','',12);
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Usulan nama akun*',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jenis Layanan**',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(5,0,'Berlaku S.D.',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

       $pdf->Cell(5,10,'Penanggung Jawab Struktural',0,1,'L');

      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Kantor',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Hp',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Surat Elektronik',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

       $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Keterangan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);          

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini berarti saya telah memahami dan akan mematuhi Keputusan',0,1,'L'); 
      $pdf->Cell(5,5,'Menteri Keuangan Nomor 512/KMK.01/2009 tentang Kebijakan dan Standar Penggunaan Akun ',0,1,'L'); 
      $pdf->Cell(5,5,'dan Kata Sandi, Surat Elektronik, dan Internet di Lingkungan Departemen Keuangan.',0,1,'L');
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas,',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      $pdf->Output();
  
}
public function suratelk () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Permintaan Akun Khusus',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

       $pdf->SetFont('Times','',12);
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Usulan nama grup',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(5,0,'Berlaku S.D.',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

       $pdf->Cell(5,10,'Penanggung Jawab Struktural',0,1,'L');

      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Kantor',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Hp',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Surat Elektronik',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

       $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Daftar ANggota',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);          

      $pdf->Cell(5,0,'Keterangan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini berarti saya telah memahami dan akan mematuhi Keputusan Menteri ',0,1,'L');
      $pdf->Cell(5,5,'Keuangan Nomor 512/KMK.01/2009 tentang Kebijakan dan Standar Penggunaan Akun dan Kata Sandi, Surat ',0,1,'L');
      $pdf->Cell(5,5,'Elektronik, dan Internet di Lingkungan Departemen Keuangan.',0,1,'L');


      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas,',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      $pdf->Output();
  
}
public function koutamail () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Permintaan Akun Khusus',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

       $pdf->SetFont('Times','',12);
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Pangkat / Golongan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Hp',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Kantor',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

       $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alasan Penambahan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);          

      $pdf->Cell(5,0,'Kouta Area',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti Saya telah memahami dan akan mematuhi kebijakan ',0,1,'L');
      $pdf->Cell(5,5,'pengelolaam layanan TIK Kemenkeu.',0,1,'L');
      
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas,',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      $pdf->Output();
  
}
public function akundomain () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Penonaktifan Akun Domain',0,1,'C');
      $pdf->Cell(185,5,'Form-IT SM.10 Bagian 7',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

     // Awal Penanggung Jawab
       $pdf->SetFont('Times','',12);
      $pdf->Cell(5,10,'I. Penanggung Jawab Struktural',0,1,'L');
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat E-mail',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      // Awal Penanggung Jawab
       $pdf->SetFont('Times','',12);
      $pdf->Cell(5,10,'II. Akun Aplikasi yang Dinonaktifkan',0,1,'L');
      
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama Pegawai',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat E-mail',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

       $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Username',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
     // Awal Penanggung Jawab
       $pdf->SetFont('Times','',12);
      $pdf->Cell(5,10,'II. Akun Aplikasi yang Dinonaktifkan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, saya menyatakan bahwa telah memberikan data yang benar untuk ',0,1,'L');
      $pdf->Cell(5,5,'dilakukan penonaktifan sesuai dengan standar yang berlaku dalam pengelolaan TIK Kementerian Keuangan RI.',0,1,'L');   



      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas,',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      
      $pdf->Output();
  
}
public function videoconference () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','UB',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Pendampingan Video Conference',0,1,'C');
      $pdf->Cell(185,10,'',0,1,'L');
      // akhir Formulir Layanan

      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Pangkat/golongan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);


      $pdf->Cell(5,0,'Alamat kantor',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'No HP',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);


      $pdf->Cell(5,0,'E-mail kemenkeu',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

       $pdf->SetFont('Times','',12);
      $pdf->Cell(5,10,'Jadwal Pendampingan',0,1,'L');

      $pdf->Cell(5,0,'Tanggal',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(5,0,'Waktu',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(5,0,'Tempat',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(5,0,'Agenda video conference',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti saya telah memahami dan akan mematuhi ketentuan yang ',0,1,'L');
      $pdf->Cell(5,5,'berlaku dalam Katalog Layanan (Service Catalogue).',0,1,'L');


      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);
      
      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');         
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'Pemohon,',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,5,'(minimal Eselon IV dan dicap basah),',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
      $pdf->Cell(5);
      $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

      $pdf->Cell(185,26,'',0,1,'L');
      $pdf->Cell(135);
      $pdf->SetFont('Times','UBI',8);
      $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
      
      
      $pdf->Output();
  
}
public function dekstop () {

      $pdf = new PDF();
      $pdf->AddPage();

    // awal Formulir Layanan
    $pdf->SetFont('Arial','UB',12);
    $pdf->Cell(185,20,'',0,1,'L');
    $pdf->Cell(185,5,'Formulir Layanan Dekstop',0,1,'C');
    $pdf->Cell(185,10,'',0,1,'L');
    // akhir Formulir Layanan

    // Awal Kebutuhan
    $pdf->SetFont('Times','',10);//Ganti FontStyle
    $pdf->Cell(5,0,'Kebutuhan',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Kebutuhan',0,1,'L');
    // Akhir Kebutuhan

    $pdf->Cell(185,15,'',0,1,'L'); //Enter

    // Awal Penanggung Jawab
    $pdf->Cell(5,10,'Penanggung Jawab Struktural',0,1,'L');
    
    $pdf->Cell(5);//Tab
    $pdf->Cell(5,0,'Nama',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    //Biar bisa Sejajar nilai kedua = 0
    //enter satu baris = 5
  
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'NIP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Jabatan',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat Kantor',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. Telepon',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. HP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat surat elektronik',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5,5,'Persyaratan tambahan untuk instalasi perangkat lunak Desktop/Notebook onsite :',0,1,'L');            
    $pdf->Cell(5,5,'1. Desktop/Notebook harus dalam keadaan siap untuk diinstall',0,1,'L');            
    $pdf->Cell(5,5,'2. Unit memastikan telah tersedia jaringan LAN dan listrik',0,1,'L');            

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti saya telah memahami dan akan mematuhi ketentuan yang berlaku dalam',0,1,'L');
    
    $pdf->Cell(5,5,'Katalog Layanan (Service Catalogue).',0,1,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'Pemohon,',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Petugas,',0,2,'L');
    
    $pdf->Cell(185,20,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(185,26,'',0,1,'L');
    $pdf->Cell(135);
    $pdf->SetFont('Times','UBI',8);
    $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');  
      
      $pdf->Output();
  
}
public function lisensipl () {

      $pdf = new PDF();
      $pdf->AddPage();

    // awal Formulir Layanan
    $pdf->SetFont('Arial','UB',12);
    $pdf->Cell(185,20,'',0,1,'L');
    $pdf->Cell(185,5,'Laporan',0,1,'C');
    $pdf->Cell(185,10,'',0,1,'L');
    // akhir Formulir Layanan

    // Awal Kebutuhan
    $pdf->SetFont('Times','',10);//Ganti FontStyle
    $pdf->Cell(5,0,'Jenis Layanan',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Kebutuhan',0,1,'L');
    // Akhir Kebutuhan

    $pdf->Cell(185,15,'',0,1,'L'); //Enter

    $pdf->Cell(5);//Tab
    $pdf->Cell(5,0,'Nama',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    //Biar bisa Sejajar nilai kedua = 0
    //enter satu baris = 5
  
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'NIP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Telephone',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Email',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Eselon I & II',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Eselon III',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Eselon IV',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Merk / Tipe Perangkat',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Serial Number Perangkat',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Nomor BMN Perangkat',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5,5,'(Untuk permintaan lebih dari 1 lisensi, harap untuk mengisi daftar terlampir)',0,1,'L');            
    $pdf->Cell(5,5,'Dengan ini mengajukan permohonan untuk mendapatkan layanan perangkat lunak berlisensi sebagai berikut :',0,1,'L');            
   
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5,5,'Syarat dan Ketentuan:',0,1,'L');            
    $pdf->Cell(5,5,'a.	Pengguna merupakan pegawai di lingkungan Kementerian Keuangan.',0,1,'L');            
    $pdf->Cell(5,5,'b.	Pengguna menggunakan perangkat lunak berlisensi hanya pada perangkat yang didaftarkan',0,1,'L'); 
    $pdf->Cell(5,5,'c.	Desktop/Notebook harus dalam keadaan siap untuk diinstall',0,1,'L'); 
     $pdf->Cell(5,5,'d.	Unit memastikan telah tersedia jaringan LAN dan listrik',0,1,'L'); 


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5,5,'Dengan menandatangani Formulir ini, maka pemohon menyatakan bahwa data-data diatas adalah benar dan akan ',0,1,'L');
    $pdf->Cell(5,5,'bertanggung jawab atas pemanfaatan perangkat lunak berlisensi tersebut untuk kepentingan kedinasan sesuai ',0,1,'L');
    $pdf->Cell(5,5,'permintaan. Pemohon bersedia bertanggung jawab secara hukum jika dikemudian hari ditemukan penyalahgunaan ',0,1,'L');
    $pdf->Cell(5,5,'perangkat lunak berlisensi tersebut.',0,1,'L');

    
    $pdf->Cell(185,10,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'Pemohon,',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Petugas,',0,2,'L');
    
    $pdf->Cell(185,20,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(185,26,'',0,1,'L');
    $pdf->Cell(135);
    $pdf->SetFont('Times','UBI',8);
    $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');  
      
      $pdf->Output();
  
}
public function narasumber () {

    $pdf = new PDF();
    $pdf->AddPage();

    // awal Formulir Layanan
    $pdf->SetFont('Arial','UB',12);
    $pdf->Cell(185,20,'',0,1,'L');
    $pdf->Cell(185,5,'Formulir Layanan Narasumber Bidang TIK',0,1,'C');
    $pdf->Cell(185,10,'',0,1,'L');
    // akhir Formulir Layanan

    // Awal Penanggung Jawab
    $pdf->Cell(5,10,'Penanggung Jawab Struktural',0,1,'L');

    // Awal Kebutuhan
    $pdf->SetFont('Times','',10);//Ganti FontStyle
    $pdf->Cell(5,0,'Kebutuhan Narasumber',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Kebutuhan',0,1,'L');
    // Akhir Kebutuhan

    $pdf->Cell(185,15,'',0,1,'L'); //Enter

    $pdf->SetFont('Times','',10);//Ganti FontStyle
    $pdf->Cell(5,0,'Keterangan',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Kebutuhan',0,1,'L');
    // Akhir Kebutuhan

    $pdf->Cell(185,15,'',0,1,'L'); //Enter

    // Awal Penanggung Jawab
    $pdf->Cell(5,10,'Penanggung Jawab Struktural',0,1,'L');
    
    $pdf->Cell(5);//Tab
    $pdf->Cell(5,0,'Nama',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    //Biar bisa Sejajar nilai kedua = 0
    //enter satu baris = 5
  
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'NIP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Jabatan',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. Telepon',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. HP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat Email',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti saya telah memahami dan akan mematuhi ketentuan yang',0,1,'L'); 
    $pdf->Cell(5,5,'berlaku dalam Katalog Layanan (Service Catalogue).',0,1,'L');


    $pdf->Cell(5,5,'Katalog Layanan (Service Catalogue).',0,1,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'Pemohon,',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Petugas,',0,2,'L');
    
    $pdf->Cell(185,20,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(185,26,'',0,1,'L');
    $pdf->Cell(135);
    $pdf->SetFont('Times','UBI',8);
    $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
    
    
    $pdf->Output();

}
public function laporan () {

    $pdf = new PDF();
    $pdf->AddPage();

    // awal Formulir Layanan
    $pdf->SetFont('Arial','UB',12);
    $pdf->Cell(185,20,'',0,1,'L');
    $pdf->Cell(185,5,'Laporan',0,1,'C');
    $pdf->Cell(185,10,'',0,1,'L');
    // akhir Formulir Layanan

    // Awal Kebutuhan
    $pdf->SetFont('Times','',10);//Ganti FontStyle
    $pdf->Cell(5,0,'Kebutuhan',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Kebutuhan',0,1,'L');
    // Akhir Kebutuhan

    $pdf->Cell(185,15,'',0,1,'L'); //Enter

    // Awal Penanggung Jawab
    $pdf->Cell(5,10,'Penanggung Jawab Struktural',0,1,'L');
    
    $pdf->Cell(5);//Tab
    $pdf->Cell(5,0,'Nama',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    //Biar bisa Sejajar nilai kedua = 0
    //enter satu baris = 5
  
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'NIP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Jabatan',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat Kantor',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. Telepon',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. HP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat surat elektronik',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5,5,'Persyaratan tambahan untuk instalasi perangkat lunak Desktop/Notebook onsite :',0,1,'L');            
    $pdf->Cell(5,5,'1. Desktop/Notebook harus dalam keadaan siap untuk diinstall',0,1,'L');            
    $pdf->Cell(5,5,'2. Unit memastikan telah tersedia jaringan LAN dan listrik',0,1,'L');            

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti saya telah memahami dan akan mematuhi ketentuan yang berlaku dalam',0,1,'L');
    $pdf->Cell(5,5,'Katalog Layanan (Service Catalogue).',0,1,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'Pemohon,',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Petugas,',0,2,'L');
    
    $pdf->Cell(185,20,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(185,26,'',0,1,'L');
    $pdf->Cell(135);
    $pdf->SetFont('Times','UBI',8);
    $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
    
    
    $pdf->Output();

}
public function peningkatan_komp() {

    $pdf = new PDF();
    $pdf->AddPage();

    // awal Formulir Layanan
    $pdf->SetFont('Arial','UB',12);
    $pdf->Cell(185,20,'',0,1,'L');
    $pdf->Cell(185,5,'Layanan Peningkatan Kompetensi TIK',0,1,'C');
    $pdf->Cell(185,10,'',0,1,'L');
    // akhir Formulir Layanan

    // Awal Kebutuhan
    $pdf->SetFont('Times','',10);//Ganti FontStyle
    $pdf->Cell(5,0,'Kebutuhan layanan',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Kebutuhan',0,1,'L');
    $pdf->Cell(5,0,'Keterangan',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi keterangan',0,1,'L');
    // Akhir Kebutuhan

    $pdf->Cell(185,15,'',0,1,'L'); //Enter

    // Awal Penanggung Jawab
    $pdf->Cell(5,10,'Penanggung Jawab Struktural',0,1,'L');
    
    $pdf->Cell(5);//Tab
    $pdf->Cell(5,0,'Nama',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    //Biar bisa Sejajar nilai kedua = 0
    //enter satu baris = 5
  
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'NIP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);


    $pdf->Cell(5,0,'Jabatan',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    
    $pdf->Cell(5,0,'Alamat',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. Telepon',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. HP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat Email',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5,5,'Dengan menandatangani formulir isian ini, berarti saya telah memahami dan akan mematuhi ketentuan yang berlaku dalam',0,1,'L');
    $pdf->Cell(5,5,'Katalog Layanan (Service Catalogue).',0,1,'L');


   

    $pdf->Cell(185,10,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'Yang menyerahkan ,',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'(nip),',0,1,'L');
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Petugas,',0,2,'L');
    
    $pdf->Cell(185,20,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(185,26,'',0,1,'L');
    $pdf->Cell(135);
    $pdf->SetFont('Times','UBI',8);
    $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
    
    
    $pdf->Output();


}
public function kegiatan_khusus () {

    $pdf = new PDF();
    $pdf->AddPage();

    // awal Formulir Layanan
    $pdf->SetFont('Arial','UB',12);
    $pdf->Cell(185,20,'',0,1,'L');
    $pdf->Cell(185,5,'Layanan Dukungan Kegiatan Khusus',0,1,'C');
    $pdf->Cell(185,10,'',0,1,'L');
    // akhir Formulir Layanan

    // Awal Kebutuhan
    $pdf->SetFont('Times','',10);//Ganti FontStyle
    $pdf->Cell(5,0,'Kegiatan',0,1,'L');
    $pdf->Cell(50,0,':',0,1,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Kegiatan',0,1,'L');
    // Akhir Kebutuhan

    $pdf->Cell(185,15,'',0,1,'L'); //Enter

    // Awal Penanggung Jawab
    $pdf->Cell(5,10,'II lokasi',0,1,'L');
    
    $pdf->Cell(5);//Tab
    $pdf->Cell(5,0,'Lokasi Kegiatan',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    //Biar bisa Sejajar nilai kedua = 0
    //enter satu baris = 5
  
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'III. Waktu pelaksanaan',0,1,'L');
    $pdf->Cell(50,0,'Mulai',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'Sampai dengan',0,1,'L');
    

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'IV. Perangkat yang di butuhkan ',0,1,'L');
    $pdf->Cell(50,0,'Jenis perangkat Jumlah',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');



    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'V. Pemohon ',0,1,'L');

   
      $pdf->Cell(5);//Tab
    $pdf->Cell(5,0,'Nama',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    //Biar bisa Sejajar nilai kedua = 0
    //enter satu baris = 5
  
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'NIP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Jabatan',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat Kantor',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. Telepon',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');

    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'No. HP',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');


    $pdf->Cell(185,5,'',0,1,'L');
    $pdf->Cell(5);

    $pdf->Cell(5,0,'Alamat Email',0,1,'L');
    $pdf->Cell(50,0,':',0,2,'R');
    $pdf->Cell(50);
    $pdf->Cell(130,0,'isi Nama',0,1,'L');
            
  
    $pdf->Cell(185,10,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'Pemohon,',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,5,'(minimal Eselon III dan dicap basah),',0,1,'L');
    $pdf->Cell(185,15,'',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,10,'Nama Pemohon',0,1,'L');
    $pdf->Cell(5);
    $pdf->Cell(5,0,'NIP Pemohon',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
  
    $pdf->Cell(185,10,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Yang menyerahkan,',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Petugas,',0,2,'L');
    
    $pdf->Cell(185,20,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'Nama yg Menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(10);
    $pdf->Cell(5,0,'NIP Yang menyerahkan',0,1,'L');

    $pdf->Cell(130);
    $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
    
    $pdf->Cell(185,5,'',0,1,'L');

    $pdf->Cell(185,26,'',0,1,'L');
    $pdf->Cell(135);
    $pdf->SetFont('Times','UBI',8);
    $pdf->Cell(0,0,'ID'.' | '.'Tgl'.' | '.'Petugas',0,2,'L');
    
    
    $pdf->Output();
}
public function layanan_gangguan () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Penanganan Gangguan Layanan TIK',0,1,'C');
      $pdf->Cell(185,10,'NOMOR :...../....../....',0,1,'C');
      // akhir Formulir Layanan

      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'I. Informasi Pelapor',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);


      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Surat Elektronik',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
     // Awal Penanggung Jawab
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'II. Deskripsi Keluhan',0,1,'L');

      $pdf->SetFont('Times','',12);
      $pdf->Cell(185,15,'',0,1,'L');
      

      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'III. Tindak Lanjut',0,1,'L');


      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama Petugas',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'NIP',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Waktu Rencana Penanganan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Waktu Realisasi Penanganan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Solusi yang diberikan',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Hasil Penanganan',0,1,'L');
      $pdf->Cell(185,15,'',0,1,'L');
      $pdf->Cell(5);        

      $pdf->SetFont('Times','',12);
      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas KPTIKBMN Semarang',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Output();
  
}
public function pemberdayaan () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Check List Pemberdayaan',0,1,'C');
      $pdf->Cell(185,10,'Nomor :...../..../....',0,1,'C');
      // akhir Formulir Layanan

      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'I. INFORMASI PEMOHON',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Surat Elektronik',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
     // Awal Penanggung Jawab
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'II. WAKTU PEMINJAMAN',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Tanggal',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Pukul',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'III. WAKTU PEMINJAMAN',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Tanggal',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Pukul',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'IV. BMN YANG DIBERDAYAKAN',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      

      $pdf->SetFont('Times','',12);
      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas KPTIKBMN Semarang',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      
      $pdf->Output();
  
}
public function rumahtangga () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'Formulir Pemenuhan Kerumahtanggaan',0,1,'C');
      $pdf->Cell(185,10,'Nomor : FRT-...../TIKBMN.2.3/....',0,1,'C');
      // akhir Formulir Layanan

      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'I. INFORMASI PEMOHON',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Surat Elektronik',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'II. DESKRIPSI PENYEDIAAN/PERBAIKAN SARANA PRASARANA GEDUNG',0,1,'L');

      $pdf->SetFont('Times','',12);

     // Awal Penanggung Jawab
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'III. TINDAK LANJUT',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama Petugas ',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Waktu Rencana Perbaikan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Waktu Realisasi Perbaikan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Hasil Investigasi',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Sosulis yang diberikan',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      

      $pdf->SetFont('Times','',12);
      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
     
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Petugas KPTIKBMN Semarang',0,2,'L');
      
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'Nama Pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Petugas',0,2,'L');

      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(10);
      $pdf->Cell(5,0,'NIP pemohon',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Petugas',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      
      $pdf->Output();
  
}
public function dukungan_kegiatan () {

      $pdf = new PDF();
      $pdf->AddPage();

      // awal Formulir Layanan
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(185,10,'',0,1,'L');
      $pdf->Cell(185,5,'FORMULIR PEMENUHAN DUKUNGAN KEGIATAN KEMENKEU',0,1,'C');
      $pdf->Cell(185,10,'Nomor :...../TIKBMN.2.1/....',0,1,'C');
      // akhir Formulir Layanan

      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'I. INFORMASI PEMOHON',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nama',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nip',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jabatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Unit Kerja',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Nomor Telephone',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Alamat Surat Elektronik',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
     // Awal Penanggung Jawab
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'II. DESKRIPSI KEGIATAN',0,1,'L');
      
      $pdf->SetFont('Times','',12);
      $pdf->Cell(5);//Tab
      $pdf->Cell(5,0,'Nomor dan Tanggal Surat Tugas',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');
      //Biar bisa Sejajar nilai kedua = 0
      //enter satu baris = 5
    
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Jadwal Kegiatan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Perihal Surat Tugas',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(5,0,'Keterangan Tambahan',0,1,'L');
      $pdf->Cell(50,0,':',0,2,'R');
      $pdf->Cell(50);
      $pdf->Cell(130,0,'isi Nama',0,1,'L');

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(5);

      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->SetFont('Times','B',12);
      $pdf->Cell(5,10,'III. TINDAK LANJUT',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');


      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      $pdf->Cell(185,5,'',0,1,'L');
      

      $pdf->SetFont('Times','',12);
      $pdf->Cell(130);
      $pdf->Cell(0,0,'Jakarta,'.'tanggal',0,2,'L');
      $pdf->Cell(185,10,'',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Pegawai/Tamu yang Menerima Laporan',0,2,'L');
      $pdf->Cell(185,20,'',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'Nama Pegawai/Tamu',0,2,'L');
      $pdf->Cell(185,5,'',0,1,'L');

      $pdf->Cell(130);
      $pdf->Cell(0,0,'NIP Pegawai/Tamu',0,2,'L');
      
      $pdf->Cell(185,5,'',0,1,'L');
      
      $pdf->Output();
  
}

}