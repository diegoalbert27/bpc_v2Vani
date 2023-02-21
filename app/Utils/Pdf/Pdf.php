<?php

namespace App\Utils\Pdf;

use Fpdf\Fpdf;
use App\Utils\Pdf\InterfacePdf;

class Pdf extends Fpdf implements InterfacePdf
{
    public function __construct() {
        parent::__construct();
    }

    public function Header()
    {
        // Logo
        $this->Image('assets/img/aragua.png', 10, 8, 33);

        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);

        // Movernos a la derecha
        $this->Cell(50);

        // Título
        $this->Cell(30, 15, 'GOBERNACION DEL EDO. ARAGUA', 0, 0);

        // Salto de línea
        $this->Ln(6);

        $this->SetFont('Arial', 'B', 14);
        $this->Cell(50);
        $this->Cell(30, 15, 'RED DE BIBLIOTECAS PUBLICAS', 0, 0);
        $this->Ln(15);
    }

    public function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);

        // Texto
        $this->SetFont('Arial', 'I', 8);

        // Número de página
        $this->Cell(0, 0, utf8_decode('Documento que se expide a petición de la Biblioteca Pública Central "Agustín Codazzi".'), 0, 0);
    }

    public function Render()
    {
        $this->AliasNbPages();
        $this->Output();
    }

    public function getCarnet(array $data)
    {
        $this->AddPage();
        $this->Cell(30, 10, 'PRESTAMO CIRCULANTE', 0, 0);
        $this->Cell(50);

        $this->Cell(30, 10, 'No. CARNET', 0, 0);
        $this->Cell(10);

        $this->Cell(10, 10, 'FECHA', 0, 0);
        $this->Ln(6);

        $this->Cell(30, 10, 'CARNET', 0, 0);
        $this->Cell(50);

        $this->Cell(30, 10, $data['solicitante']->id_sol, 0, 0, );
        $this->Cell(10);

        $this->Cell(10, 10, date('d/m/Y'), 0, 0, 'L');
        $this->Ln(25);

        $this->Image('assets/img/carnet.png', 15, 62, 85);

        $this->SetFont('Arial', 'B', 11);
        $this->Cell(90);

        $this->Cell(55, 15, 'PRESTAMO CIRCULANTE', 1, 0, 'C');
        $this->SetFont('Arial', '', 9);

        $this->Cell(30, 35, 'FOTO', 1, 0, 'C');
        $this->Ln(15);

        $this->Cell(90);
        $this->Cell(55, 10, 'Apellidos: ' . utf8_decode($data['solicitante']->ape_sol), 1, 0);
        $this->Ln(10);

        $this->Cell(90);
        $this->Cell(55, 10, 'Nombres: ' . utf8_decode($data['solicitante']->nom_sol), 1, 0);
        $this->Ln(10);

        $this->Cell(90);

        $this->Cell(45, 10, 'No. de Carnet: ' . $data['solicitante']->id_sol, 1, 0);
        $this->Cell(40, 10, utf8_decode('Cédula: ') . $data['solicitante']->ced_sol, 1, 0);

        $this->Render();
    }
}
