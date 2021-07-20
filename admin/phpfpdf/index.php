<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(40,10,'Hasil Seleksi Penerimaan Peserta Didik Baru TK Islam Budaya 1');
$pdf->Cell(10,15,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(27,6,'TGL DAFTAR',1,0);
$pdf->Cell(60,6,'NAMA SISWA',1,0);
$pdf->Cell(15,6,'KELAS',1,0);
$pdf->Cell(23,6,'TGL LAHIR',1,0);
$pdf->Cell(20,6,'STATUS',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$pendaftaran_sekolah = mysqli_query($connect, "SELECT*FROM formulir_mhs AS u INNER JOIN data_siswa AS i  ON u.id=i.id_pendaftar INNER JOIN bukti_transfer AS a ON i.id_pendaftar=a.id_pendaftar  WHERE a.status='1' AND YEAR(tgl_daftar)='2021'");
while ($row = mysqli_fetch_array($pendaftaran_sekolah)){
    $pdf->Cell(27,6,$row['tgl_daftar'],1,0);
    $pdf->Cell(60,6,$row['nama_siswa'],1,0);
    $pdf->Cell(15,6,$row['kelas'],1,0);
    $pdf->Cell(23,6,$row['tgl_lahir'],1,0); 
    $pdf->Cell(20,6,'Diterima',1,1); 
}



$pdf->Output();
?>