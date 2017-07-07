<?php

class ListAsiControllers extends Sistema {
  
  /**
   * Obtiene Header y Footer
   */
  public function headerFooter()
  {
    $this->smarty->assign('asis_list', true);
    $this->smarty->assign('phrase', 'El que lee y camina mucho, sabe y conoce mucho (MIGUEL DE CERVANTES SAAVEDRA)');
    $this->smarty->assign('page_title', 'Lista de Asistencia');
  
    $header = (string) ($this->smarty->fetch('header.html'));
    // $footer = (string) ($web->smarty->fetch('footer.html'));
    $footer = '';
  
    return $data = array(
      'header' => $header,
      'footer' => $footer,
    );
  }
  
  /**
   * Estructura el SubHeader-Promotor
   */
  public function promoSubHeader()
  {
    $cveperiodo  = $this->periodo();
    $periodo     = $this->getPeriodo($cveperiodo); //esto es para mostrarlo
    if ($cveperiodo == "" || !isset($periodo[0])) {
      return 'e1'; //no hay periodo actual
    }
    $cvepromotor = $_SESSION['cveUser'];
  
    // DATOS PROMOTOR
    $promotor = $this->getPromotor($cvepromotor, true);
    if ($promotor == null) {
      return 'promotor';
    }
    $promotorHeader = $this->getPromotor($cvepromotor);
    $promotorHeader = array_keys($promotorHeader[0]);
  
    //prepara el array a mandar por smarty
    $arrPromo = $this->creaArray($promotorHeader, $promotor[0]);
    $this->smarty->assign('usuario', $arrPromo);
    $this->smarty->assign('table', 'alumnos'); //para definir un ancho a las columnas de la tabla
  
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
    correo AS \"CORREO\",
    especialidad.nombre AS \"ESPECIALIDAD\",
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
  
  /**
   * Crea un array para ser utilizado en los tamplates: admin/pdf
   */
  public function creaArray($header, $body)
  {
    for ($i = 0; $i < sizeof($header); $i++) {
      $res[$i]['titulo'] = $header[$i];
      $res[$i]['nombre'] = $body[$i];
    }
    return $res;
  }
  
  /**
   * PERIODOS
   */
  public function getPeriodo($cveperiodo)
  {
    $sql = "SELECT * FROM periodo WHERE cveperiodo=?";
    return $this->DB->GetAll($sql, $cveperiodo);
  }
  
  /**
   * Estructura el SubHeader-Grupo
   */
  public function grupoSubHeader($data)
  {
    if (isset($data['cveperiodo']) && isset($data['cvepromotor'])) {
      // $grupos incluye la cveletra, se necesita para obtener datos de lectura
      $grupos = $this->getGrupo($data['cveperiodo'], $data['cvepromotor'], true);
      if ($grupos == null) {
        return 'grupos';
      }
      $gruposHeader = $this->getGrupo($data['cveperiodo'], $data['cvepromotor']);
      $gruposHeader = array_keys($gruposHeader[0]);
  
      return $data = array(
        'grupos'       => $grupos,
        'gruposHeader' => $gruposHeader,
      );
  
    } elseif (isset($data['grupos']) && isset($data['gruposHeader']) && isset($data['position'])) {
      $grupos   = $data['grupos'];
      $position = $data['position'];
  
      $arrGrupos = $this->creaArray($data['gruposHeader'], $grupos[$position]);
      $web->smarty->assign('grupo', $arrGrupos);
      $html = (string) ($this->smarty->fetch('subHeader.html'));
      return $html;
  
    } else {
      // checa la sintaxis de este código!!
      return null;
    }
  }
  
  /**
   * GRUPOS
   * @param  $cveperiodo
   * @param  $cvepromotor
   * @param  $bandera, true==quiere todos los campos ; false==solo quiere encabezados
   */
  public function getGrupo($cveperiodo, $cvepromotor, $bandera = false)
  {
    $sql = "SELECT DISTINCT
    letra AS \"GRUPO\",
    cvesala AS \"SALA\",
    nombre AS \"NOMBRE\",
    titulo AS \"LIBRO_GRUPAL\",
    laboral.cveletra
    FROM laboral
    INNER JOIN abecedario ON laboral.cveletra = abecedario.cve
    LEFT JOIN libro ON laboral.cvelibro_grupal = libro.cvelibro
    WHERE cveperiodo=? AND cvepromotor=? AND letra=?
    ORDER BY letra";

    if (!$bandera) {
      // solo los encabezados
      $this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
    } else {
      $this->DB->SetFetchMode(ADODB_FETCH_BOTH);
    }

    $grupos = $this->DB->GetAll($sql, array($cveperiodo, $cvepromotor, $_GET['info']));
    if (isset($grupos[0])) {
      if (!$bandera) {
        for ($i = 0; $i < count($grupos); $i++) {
          unset($grupos[$i]['cveletra']);
        }
      }
      return $grupos;
    }

    return null;
  }
  
  /**
   * EVALUACION 
   */
  public function getEvaluation($cvelectura)
  {
    $sql = "SELECT
    nocontrol AS \"NOCONTROL\",
    nombre AS \"NOMBRE\",
    comprension AS \"COMP\",
    participacion AS \"PART\",
    asistencia AS \"ASIS\",
    actividades AS \"ACTV\",
    reporte AS \"REP\",
    terminado AS \"TERMINADO\"
    FROM evaluacion
    INNER JOIN lectura ON lectura.cvelectura = evaluacion.cvelectura
    INNER JOIN usuarios ON lectura.nocontrol = usuarios.cveusuario
    WHERE evaluacion.cvelectura=?";
    $this->DB->SetFetchMode(ADODB_FETCH_BOTH);
    $evaluacion = $this->DB->GetAll($sql, $cvelectura);

    if (isset($evaluacion[0])) {
      if ($evaluacion[0][7] >= 70) {
        $evaluacion[0][7] = 'Si';
      } else {
        $evaluacion[0][7] = 'No';
      }
      $evaluacion[0]['TERMINADO'] = $evaluacion[0][7];
    }

    return $evaluacion;
  }

}