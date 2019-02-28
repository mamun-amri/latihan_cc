<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'User Website',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B','12');
$pdf->Cell(50,6,'Id User',1,0,'C');
$pdf->Cell(50,6,'Nama',1,0,'C');
$pdf->Cell(50,6,'User Name',1,0,'C');
$pdf->Cell(35,6,'Level',1,0,'C');

include 'config.php';
$query = mysqli_query($koneksi,"SELECT * FROM users");
while($r=mysqli_fetch_array($query)){
  $pdf->Cell(10,6,'',0,1);
  $pdf->SetFont('Arial','','10');
  $pdf->Cell(50,6,$r['id'],1,0);
  $pdf->Cell(50,6,$r['nama'],1,0);
  $pdf->Cell(50,6,$r['username'],1,0);
  $pdf->Cell(35,6,$r['level'],1,0);
}
$pdf->Output('doc.pdf','I');
?>
