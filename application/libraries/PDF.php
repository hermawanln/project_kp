<?php
require_once(APPPATH.'libraries/pdf/fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        $this->Image( base_url('assets/uploads/files/logo.png'),10,6,27);
        $this->SetFont('Arial','B',11);
        $this->Cell(185,5,'KEMENTERIAN KEUANGAN REPUBLIK INDONESIA',0,1,'C'); 
        $this->Cell(185,5,'SEKRETARIAT JENDERAL',0,1,'C');   
        $this->Cell(185,5,'PUSAT SISTEM INFORMASI DAN TEKNOLOGI KEUANGAN',0,1,'C'); 
        $this->SetFont('Arial','',6);
        $this->Cell(185,5,'GD. SYAFRUDIN PRAWIRANEGARA LT. 1-2, JALAN LAPANGAN BANTENG TIMUR NO. 2-4, JAKARTA 10710, KOTAK POS 21',0,1,'C');
        $this->Cell(185,5,'TELEPON (021) 3849348, 3846518; FAKSIMILE (021) 3451231; SITUS http://pusintek.kemenkeu.go.id',0,2,'C');
        $this->Cell(185,0,'',1,1,'C'); 
        
    }


}













?>