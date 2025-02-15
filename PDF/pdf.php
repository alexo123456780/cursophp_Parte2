<?php


//se usa require para traer todo el pdf 
require "../vendor/setasign/fpdf/fpdf.php";


$pdf = new FPDF();


$pdf->AddPage();

$pdf->SetFont("Times","B",18);


$pdf->Cell(40,10,"Rordrigo es Gay");


$pdf->SetFont("Arial","B",13);


$pdf->Cell(10,10,"Reporte de ventas",0,1,"C");


$pdf->Output();












?>