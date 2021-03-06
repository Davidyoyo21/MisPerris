<?php

//require './pdf/fpdf.php';
require '../web/pdf/fpdf.php';

class PDF extends FPDF
{
// Cargar los datos
function LoadData($file)
{
    // Leer las líneas del fichero
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tabla simple
function BasicTable($header, $data)
{
    // Cabecera
    /*foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln(); //salto de linea  */
    // Datos
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(38,6,$col,1);
        $this->Ln();
    }
}


}

$pdf = new FPDF();
// Títulos de las columnas
$header = array('ID Perro', 'Nombre', 'Edad', 'Raza','Estatura');
// Carga de datos
$data = $pdf->LoadData('Listado.csv');
$pdf->SetFont('Arial','',19);
$pdf->AddPage();
$pdf->Cell(100,20,"Listado de Perros",0  );
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->BasicTable($header,$data);
$pdf->Image("",50,100);
$pdf->Output();
?>