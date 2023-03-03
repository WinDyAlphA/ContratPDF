<?php

require_once("DAO.php");
define('FPDF_FONTPATH',"fpdf/font/");

function PDFcreate($result){
    require_once('fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->AddFont("Arial");
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Contrat de Mecenat');
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(40,10,'Entre :');
    $pdf->Ln();
    $pdf->SetFont('Arial','',16);
    $pdf->Cell(40,10,'SideApps');
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(40,10,'Et :');
    $pdf->Ln();
    $pdf->SetFont('Arial','',16);
    $pdf->Cell(40,10,$result['nom_mecene']);
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(40,10,'Du : '.$result['date_debut'].' au : '.$result['date_fin']);
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(30,10,''.$pdf->Cell(30,10,'Signature :'),1,0,'C');
    $pdf->Ln();
    $pdf->Output();

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = getContratById($id);
    PDFcreate($result);
    
}
