<?php
require '../lib/fpdf/fpdf.php';

/**
 * Create PDF Reports
 */
class PDF extends FPDF
{

  /**
   * PDF HEADER
   */
  public function Header()
  {
    // logo
    $this->Image('/home/slslctr/Images/logo.jpg', 10, 10, 50);
    // fuente
    $this->SetFont('Arial', 'B', 15);
    // movernos a la derecha
    $this->Cell(80);
    // titulo
    $this->Cell(30, 10, utf8_decode('Salas de Lectura'), 0, 0, 'C');
    // Salto de línea
    $this->Ln(20); //fuente

    $this->SetFont('Arial', 'B', 10);
    $this->Cell(0, 20, utf8_decode('Instituto Tecnológico de Celaya'), 0, 'L');
    $this->Ln(4);

    $this->Cell(0, 20, utf8_decode('Teléfono: '), 0, 'L');
    $this->Ln(4);

    $this->Cell(0, 20, utf8_decode('Correo: '), 0, 'L');
    $this->Ln(4);

    $fecha = date('d-m-Y');
    $this->Cell(0, 20, 'Fecha: ' . $fecha, 0, 'L');
    $this->Ln(6);

  }

  public function UserInfo($type, $info)
  {
    switch ($type) {
      case 'promotor':
        $cve          = $info['userHeader'][0];
        $user         = $info['userHeader'][1];
        $email        = $info['userHeader'][2];
        $especialidad = $info['userHeader'][3];
        break;
    }

    $this->SetFont('Arial', 'I', 10);
    $this->Cell(0, 20, utf8_decode($user), 0, 'L');
    $this->Ln(4);
    $this->Cell(0, 20, utf8_decode($info['userInfo'][$user]), 0, 'L');
    $this->Ln(4);
    $this->Cell(0, 20, utf8_decode($cve . ': ' . $info['userInfo'][$cve]), 0, 'L');
    $this->Ln(4);
    $this->Cell(0, 20, utf8_decode($email . ': ' . $info['userInfo'][$email]), 0, 'L');
    $this->Ln(4);
    $this->Cell(0, 20, utf8_decode($especialidad . ': ' . $info['userInfo'][$especialidad]), 0, 'L');
    $this->Ln(10);

  }

  public function SalaInfo($info, $grupo)
  {
    // [cveletra] => 4
    // [letra] => D
    // [cvesala] => S04
    // [nombre] => SALA - D
    // [titulo] => 150 Años de Fotografía en España

    $this->SetFont('Arial', 'I', 10);
    $this->Cell(0, 20, utf8_decode('GRUPO: ' . $grupo['letra']), 0, 'L');
    $this->Ln(4);
    $this->Cell(0, 20, utf8_decode('SALA: ' . $grupo['cvesala']), 0, 'L');
    $this->Ln(4);
    $this->Cell(0, 20, utf8_decode('NOMBRE DEL GRUPO: ' . $grupo['nombre']), 0, 'L');
    $this->Ln(4);
    $this->Cell(0, 20, utf8_decode('LIBRO GRUPAL: ' . $grupo['titulo']), 0, 'L');
    $this->Ln(10);

    $this->TableInfo($info);
  }

  public function TableInfo($info)
  {
    $this->SetFont('Arial', 'B', 10);
    $this->Cell(0, 15, utf8_decode(
      'PERIODO ' . $info['periodo']['fechainicio'] . " : " . $info['periodo']['fechafinal']
    ), 0, 0, 'C');
    $this->Ln(5);
    $this->Cell(0, 15, utf8_decode('LISTADO DE ALUMNOS'), 0, 0, 'C');
    $this->Ln(13);
  }

  public function HeaderTable($header)
  {
    // Header
    // foreach ($header as $col) {
    $this->Cell(30, 7, $header[0], 1);
    $this->Cell(50, 7, $header[1], 1);
    $this->Cell(30, 7, $header[2], 1);
    $this->Cell(50, 7, $header[3], 1);
    $this->Cell(25, 7, $header[4], 1);
    // }
    $this->Ln();
  }

/**
 * TABLE CREATION
 * @param $header COLUMNS
 * @param $data   INFORMATION
 */
  public function BasicTable($data)
  {
    $this->SetFont('Arial', '', 8);
    for ($i = 0; $i < sizeof($data); $i++) {
      $this->Cell(30, 5, utf8_decode($data[$i]['NOCONTROL']), 1);
      $this->Cell(50, 5, utf8_decode($data[$i]['NOMBRE']), 1);
      $this->Cell(30, 5, utf8_decode($data[$i]['ESPECIALIDAD']), 1);
      $this->Cell(50, 5, utf8_decode($data[$i]['CORREO']), 1);
      $this->Cell(25, 5, utf8_decode($data[$i]['TERMINADO']), 1);
      $this->Ln();
    }
  }

  public function Footer()
  {
    // position 1.5 from the final
    $this->SetY(-15);
    // Arial italic B
    $this->SetFont('Arial', 'I', 8);
    // Número de página
    $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo(), 0, 0, 'C');
  }
}

// $pdf = new PDF;
// // column's titles
// $header = array('COL1', 'COL2', 'COL3', 'COL4', 'COL5');
// // load data
// $data = null;
// $pdf->SetFont('Arial', '', 10);
// $pdf->AddPage();
// $pdf->BasicTable($header, $data);
// $pdf->SetTitle('Reporte');
// $pdf->Output();
