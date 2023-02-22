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

    public function getHistorialPrestamo(array $data)
    {
        $this->AddPage();
        $this->Cell(30, 10, 'PRESTAMO CIRCULANTE', 0, 0);
        $this->Cell(50);

        $this->Cell(30, 10, 'No. CARNET', 0, 0);
        $this->Cell(10);

        $this->Cell(10, 10, 'FECHA', 0, 0);
        $this->Ln(6);
        $this->Cell(30, 10, 'HISTORIAL', 0, 0);
        $this->Cell(50);
        $this->Cell(30, 10, $data['solicitante']->id_sol, 0, 0);
        $this->Cell(10);
        $this->Cell(10, 10, date('d/m/Y'), 0, 0, 'L');
        $this->Ln(15);

        $this->SetFont('Arial', 'B', 12);
        $this->Cell(80);
        $this->Cell(30, 10, 'DATOS PERSONALES DEL SOLICITANTE', 0, 0, 'C');
        $this->Ln(15);

        $this->SetFont('Arial', '', 10);
        $this->Cell(10, 10, utf8_decode('APELLIDOS Y NOMBRE: ' . $data['solicitante']->ape_sol . ' ' . $data['solicitante']->nom_sol . '     CEDULA DE IDENTIDAD: ' . $data['solicitante']->ced_sol . '      EDAD:' . $data['solicitante']->edad_sol), 10, 0);
        $this->Ln(7);

        $this->Cell(30, 10, utf8_decode('SEXO: ' . $data['solicitante']->sex_sol . '       DIRECCION DE HABITACION: ' . $data['solicitante']->dir_sol), 0, 0);
        $this->Ln(7);

        $this->Cell(30, 10, utf8_decode('TELEFONO:' . $data['solicitante']->tlf_sol . '       CORREO ELECTRONICO: ' . $data['solicitante']->corr_sol), 0, 0);
        $this->Ln(12);

        $this->Cell(30, 10, utf8_decode('OCUPACION: ' . $data['solicitante']->ocup_sol . '       INSTITUCION O EMPRESA: ' . $data['solicitante']->nom_inst), 0, 0);
        $this->Ln(7);

        $this->Cell(30, 10, utf8_decode('TELEFONO: ' . $data['solicitante']->tel_inst . '       DIRECCION: ' . $data['solicitante']->dir_inst), 0, 0);
        $this->Ln(12);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(30);
        $this->Cell(30, 10, utf8_decode('FIRMA SOLICITANTE'), 0, 0);
        $this->Cell(40);
        $this->Cell(30, 10, utf8_decode('FUNCIONARIO'), 0, 0);
        $this->Ln(5);

        $this->Cell(100);
        $this->SetFont('Arial', '', 10);
        $this->Cell(30, 10, utf8_decode($data['user']->user), 0, 0);
        $this->Ln(30);

        $this->SetFillColor(232, 232, 232);
        $this->SetFont('Arial', 'B', 12);

        $this->Cell(15, 6, 'COTA', 1, 0, 'C', 1);
        $this->Cell(60, 6, 'TITULO', 1, 0, 'C', 1);
        $this->Cell(50, 6, 'AUTOR', 1, 0, 'C', 1);
        $this->Cell(20, 6, 'F.E.', 1, 0, 'C', 1);
        $this->Cell(20, 6, 'F.D.', 1, 1, 'C', 1);

        $this->SetFont('Arial', '', 10);

        foreach($data['historial'] as $prestamo) {
            $this->Cell(15, 6, $prestamo->id_libro2->cota, 1, 0, 'C');
            $this->Cell(60, 6, utf8_decode($prestamo->id_libro2->titulo), 1, 0, 'C');
            $this->Cell(50, 6, utf8_decode($prestamo->id_libro2->autor), 1, 0, 'C');
            $this->Cell(20, 6, $prestamo->fecha_entrega, 1, 0, 'C');
            $this->Cell(20, 6, $prestamo->fecha_devolucion, 1, 1, 'C');
        }

        $this->Render();
    }
}
