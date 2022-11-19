<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new fpdf();
$pdf->AddFont('Killig');
$pdf->AddPage();
$pdf->SetFont('Killig','',35);
$pdf->Write(10,'You guys... are the best.');

$pdf->Ln(20);

$pdf->SetFont('Killig','',15);
$pdf->Write(10,'Said By Noctis Lucis Caelum'); 

$pdf->AddFont('Phalyn');
$pdf->SetFont('Phalyn','',35);
$pdf->Write(10,'Even with power, we cannot change what has passed. What is done, is done.');

$pdf->Ln(20);

$pdf->SetFont('Phalyn','',15);
$pdf->Write(10,'Said By Ashelia "Ashe" Bnargin Dalmasca');
$pdf->Output('D', 'FavoriteQuotes.pdf');    
?>

// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/Killig.ttf
// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/Phalyn.ttf