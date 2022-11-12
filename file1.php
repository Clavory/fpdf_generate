<?php

require "vendor/autoload.php";

use Fpdf\Fpdf;
$pdf = new Fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Nathaniel T. Allapitan',0,1);
$pdf->Cell(0,10,'CCS',0,1);
$pdf->Cell(0,10,'allapitan.nathaniel@auf.edu.ph',0,1);
$pdf->Cell(0,10,'14-0228-436',0,1);
$pdf->Output();
