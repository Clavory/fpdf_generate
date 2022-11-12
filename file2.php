<?php

require "vendor/autoload.php";

use Fpdf\Fpdf;

class PDF extends Fpdf
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('images/auf-logo.png',15,10,13);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(90,10,'Angeles University Foundation',1,0,'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    function ChapterBody($file)
    {
        // Read text file
        $txt = file_get_contents($file);
        // Times 12
        $this->SetFont('Times','',11);
        // Output justified text
        $this->MultiCell(0,10,$txt);
        // Line break
        $this->Ln();
        // Mention in italics
        $this->SetFont('','I');
        $this->Cell(0,10,'(end of excerpt)');
    }

    function PrintChapter($title, $file)
    {
        $this->AddPage();
        $this->ChapterBody($file);
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$title = 'History of AUF';
$pdf->SetTitle($title);
$pdf->SetAuthor('AUF Official Website');
$pdf->PrintChapter(1,'text_files/auf_history.txt');
$pdf->Output();


?>