<?php

class ListAsiControllers extends Sistema {
 
  public function verifica_periodo() {
    if (!isset($_GET['info2'])) {
      return 'e1'; //mensaje error 1
    }
    $cveperiodo = $_GET['info2'];
  
    //verifica que exista el periodo
    $sql     = "SELECT * FROM periodo WHERE cveperiodo=?";
    $periodo = $web->DB->GetAll($sql, $cveperiodo);
    if (!isset($periodo[0])) {
      return 'e2';
    }
    return $cveperiodo;
  }
  
  public function verifica_promotor() {
    if (!isset($_GET['info3'])) {
      return 'e3';
    }
    $cveusuario = $_GET['info3'];
    $sql        = "SELECT * FROM usuarios WHERE cveusuario=?";
    $usuario    = $web->DB->GetAll($sql, $cveusuario);
    if (!isset($usuario[0])) {
      return 'e4';
    }
    return $cveusuario;
  }
  
  /**
   * Estructura el SubHeader-Promotor
   */
  public function promoSubHeader()
  {
    $cveperiodo  = $this->verifica_periodo();
    $cvepromotor = $this->verifica_usuario();
    $periodo     = $this->getPeriodo($cveperiodo); //esto es para mostrarlo
  
    // DATOS PROMOTOR
    $promotor = $this->getPromotor($cvepromotor, true);
    if ($promotor == null) {
      return 'promotor';
    }
    $promotorHeader = $this->getPromotor($cvepromotor);
    $promotorHeader = array_keys($promotorHeader[0]);
  
    //prepara el array a mandar por smarty
    $arrPromo = creaArray($promotorHeader, $promotor[0]);
    $web->smarty->assign('usuario', $arrPromo);
    $web->smarty->assign('table', 'alumnos'); //para definir un ancho a las columnas de la tabla
  
    return $data = array(
      'cvepromotor' => $cvepromotor,
      'cveperiodo'  => $cveperiodo,
      'periodo'     => $periodo,
    );
  }
  
  /**
   * PROMOTOR
   */
  public function getPromotor($promotorId, $bandera = false)
  {
    $sql = "SELECT
    usuarios.cveusuario AS \"RFC\",
    usuarios.nombre AS \"PROMOTOR\",
    especialidad.nombre AS \"ESPECIALIDAD\",
    correo AS \"CORREO\",
    especialidad.cveespecialidad AS \"especialidad_cve\",
    otro
    FROM usuarios
    INNER JOIN especialidad_usuario ON especialidad_usuario.cveusuario = usuarios.cveusuario
    INNER JOIN especialidad ON especialidad.cveespecialidad=especialidad_usuario.cveespecialidad
    WHERE usuarios.cveusuario IN (SELECT cveusuario FROM usuario_rol WHERE cverol=2)
    AND usuarios.cveusuario='" . $promotorId . "'
    ORDER BY usuarios.nombre";

    if (!$bandera) { // solo los encabezados
      $this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
    } else {
      $this->DB->SetFetchMode(ADODB_FETCH_BOTH);
    }

    $promotor = $this->DB->GetAll($sql);
    if (sizeof($promotor) == 1) {
      if ($promotor[0]['especialidad_cve'] == 'O') {
        unset($promotor[0]['ESPECIALIDAD']);
        unset($promotor[0]['especialidad_cve']);
        $promotor[0]['ESPECIALIDAD'] = $promotor[0]['otro'];
        unset($promotor[0]['otro']);
        unset($promotor[0][4]);
        unset($promotor[0][5]);
        if ($bandera) {
          $promotor[0][2] = $promotor[0]['CORREO'];
          $promotor[0][3] = $promotor[0]['ESPECIALIDAD'];
        }
      } else {
        unset($promotor[0]['especialidad_cve']);
        unset($promotor[0]['otro']);
      }

      return $promotor;
    } else {
      return null; //el query no regresó nada
    }

  }

}