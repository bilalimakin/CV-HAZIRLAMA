<?php require ('fpdf/fpdf.php');

# [PDF İçeriği]>--
class PDF extends FPDF
{ 
    function Header()
    { 
        $this->Setfont('arial','',11);
        $this->Cell(190,8,'01.01.2023',1,1,'R');
        $this->Cell(190,8,'',0,1,'L');

        $this->Image('profil.jpg',165,26,35);
        
        $this->Setfont('arial','B',16);
        $this->Cell(15,8,'',1,0,'L');  $this->Cell(140,8,'BILAL AKIN',1,1,'L');
        $this->Setfont('arial','',11);
        $this->Cell(15,8,'#',1,0,'L'); $this->Cell(140,8,'bilalimakin@gmail.com',1,1,'L');
        $this->Cell(15,8,'#',1,0,'L'); $this->Cell(140,8,'+ 90 533 869 09 54',1,1,'L');
        $this->Cell(15,8,'#',1,0,'L'); $this->Cell(140,8,'K.K.T.C.',1,1,'L');
        $this->Cell(155,8,'',1,1,'L');
        $this->Cell(155,8,'',1,1,'L');
        
        $this->Setfont('arial','B',16);
        $this->Cell(190,8,'KISISEL BILGILER',1,1,'C');
        $this->Setfont('arial','',11);

        $this->Cell(51,8,'Dogum Tarihi ve Yeri :',1,0,'L');      $this->Cell(46,8,'',1,0,'L');    $this->Cell(45,8,'Surucu Ehliyeti : ',1,0,'L');   $this->Cell(48,8,'KISISEL BILGILER',1,1,'L');
        $this->Cell(51,8,'Medeni Durumu : ',1,0,'L');            $this->Cell(46,8,'',1,0,'L');    $this->Cell(45,8,'Askerlik Durumu : ',1,0,'L');   $this->Cell(48,8,'KISISEL BILGILER',1,1,'L');
        $this->Cell(51,8,'Calismak Istenilen Bolum : ',1,0,'L'); $this->Cell(46,8,'',1,0,'L');    $this->Cell(45,8,'Yatay Durumu : ',1,0,'L');      $this->Cell(48,8,'KISISEL BILGILER',1,1,'L');
        $this->Cell(190,8,'',1,1,'L');
        $this->Cell(190,8,'',1,1,'L');
        $this->Cell(190,8,'',1,1,'L');
        $this->Cell(190,80,'Kisa Ozgecmis: ',1,1,'L');
    }

    function isDeneyim()
    {   
        $this->Setfont('arial','B',16);
        $this->Cell(190,8,'IS DENEYIMI',1,1,'C');
        $this->Setfont('arial','',11);

        $this->Cell(60,8,'2015-2016',1,0,'L');  $this->Setfont('arial','B',11);$this->Cell(130,8,'Milli Egitim Bakanligi',1,1,'L');$this->Setfont('arial','',11);
        $this->Cell(60,8,'',1,0,'L');           $this->Cell(130,8,'Bilgi islem (zorunlu staj)',1,1,'L');
        $this->Cell(190,8,'',1,1,'L');

    }

    function Egitim()
    {   
        $this->Setfont('arial','B',16);
        $this->Cell(190,8,'EGITIM',1,1,'C');
        $this->Setfont('arial','',11);

        $this->Cell(60,8,'2015-2016',1,0,'L');  $this->Setfont('arial','B',11);$this->Cell(130,8,'Adiyaman Universitesi Golbasi Meslek Yuksek Okulu',1,1,'L');$this->Setfont('arial','',11);
        $this->Cell(60,8,'',1,0,'L');           $this->Cell(130,8,'3,35'.'/4',1,1,'L');
        $this->Cell(60,8,'',1,0,'L');           $this->Cell(130,8,'Bilgisayar Programciligi',1,1,'L');
        $this->Cell(190,8,'',1,1,'L');

    }
    
}
# --<[PDF İçeriği]




// [Çıktı Ayarları]
$pdf = new PDF();
$pdf->AddPage('P','');
$pdf->isDeneyim();
$pdf->Egitim();
$pdf->Output();


?>