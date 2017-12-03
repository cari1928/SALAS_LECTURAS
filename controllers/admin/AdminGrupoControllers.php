<?php

class AdminGrupoControllers extends Sistema
{

  public function __construct()
  {
    parent::__construct();
    $this->smarty->setCompileDir('../templates_c'); //para que no aparezca la carpeta admin/templates_c
    $this->smarty->setTemplateDir('../templates/admin'); //para no tener problemas en el combo de estado
  }

  /**
   * Obtiene un grupo específico
   */
  public function getGroup($letra, $cveperiodo)
  {
    $sql = "SELECT * FROM laboral
      WHERE cveletra IN (SELECT cve FROM abecedario WHERE letra=?)
      AND cveperiodo=?";
    return $this->DB->GetAll($sql, array($letra, $cveperiodo));
  }
  
  /**
   * Verifica solo la existencia del grupo
   * No es necesario hacer un join con lectura.
   */
  public function getGroupByPromotor($array) {
    $sql = "SELECT * FROM laboral
      WHERE laboral.cveletra in (SELECT cve FROM abecedario WHERE letra=?)
      AND laboral.cveperiodo=?
      AND cvepromotor=?";
    return $this->DB->GetAll($sql, $array);
  }

  /**
   * Datos de la tabla = Calificaciones del alumno
   */
  public function getStudents($letra, $cveperiodo, $cvepromotor)
  {
    $sql = "SELECT distinct usuarios.nombre, comprension, participacion, asistencia, actividades, reporte,
      terminado, nocontrol, lectura.cvelectura, laboral.cvepromotor, abecedario.letra
      FROM lectura
      INNER JOIN evaluacion ON evaluacion.cvelectura = lectura.cvelectura
      INNER JOIN abecedario ON lectura.cveletra = abecedario.cve
      INNER JOIN usuarios ON lectura.nocontrol = usuarios.cveusuario
      INNER JOIN laboral ON abecedario.cve = laboral.cveletra
      WHERE letra=? AND lectura.cveperiodo=? AND cvepromotor=?
      ORDER BY usuarios.nombre";
    return $this->DB->GetAll($sql, array($letra, $cveperiodo, $cvepromotor));
  }

  /**
   * Obtiene la información del encabezado
   */
  public function getInfoHeader($cveperiodo, $letra)
  {
    $sql = "SELECT distinct letra, laboral.nombre AS \"nombre_grupo\", sala.ubicacion,
      fechainicio, fechafinal, usuarios.nombre AS \"nombre_promotor\",
      usuarios.cveusuario AS \"cvepromotor\" 
      FROM laboral
      INNER JOIN sala ON laboral.cvesala = sala.cvesala
      INNER JOIN abecedario ON laboral.cveletra = abecedario.cve
      INNER JOIN periodo ON laboral.cveperiodo= periodo.cveperiodo
      INNER JOIN lectura ON abecedario.cve = abecedario.cve
      INNER JOIN usuarios ON laboral.cvepromotor = usuarios.cveusuario
      WHERE laboral.cveperiodo=? AND letra=?
      ORDER BY letra";
    return $this->DB->GetAll($sql, array($cveperiodo, $letra));
  }
  
  /**
   * El array debe contener: 
   * nocontrol, cveperiodo, letra y cveperiodo
   */
  public function getInfoStudent($nocontrol, $cveperiodo, $letra) {
    $sql = "SELECT * FROM lectura
      WHERE nocontrol=?
      AND cveletra IN (SELECT cve FROM abecedario
                      WHERE cve IN (SELECT cveletra FROM laboral
                                   WHERE cveperiodo=?)
                      AND letra=?)
      AND lectura.cveperiodo=?";
    return $this->DB->GetAll($sql, array($nocontrol, $cveperiodo, $letra, $cveperiodo));;
  }
  
  /**
   * 
   */
  public function getBooks($array) {
    $sql = "SELECT * FROM lista_libros
      INNER JOIN lectura on lista_libros.cvelectura = lectura.cvelectura
      INNER JOIN libro on libro.cvelibro = lista_libros.cvelibro
      INNER JOIN estado on estado.cveestado = lista_libros.cveestado
      WHERE nocontrol=? and lectura.cvelectura=?
      ORDER BY titulo";
    return $this->DB->GetAll($sql, $array);
  }
  
  /**
   * 
   */
  public function getBookList($cvelectura, $nocontrol)
  {
    $sql = "SELECT cveestado FROM lista_libros
    WHERE cvelectura=?
      AND cvelectura in (SELECT cvelectura FROM lectura WHERE nocontrol=?)";
    return $this->DB->GetAll($sql, array($cvelectura, $nocontrol));
  }
  
  /**
   * 
   */
  public function getLaboral($cvelectura, $cveperiodo) {
    $sql = "SELECT * FROM laboral
      WHERE cveletra IN (SELECT cveletra FROM lectura WHERE cvelectura=? AND cveperiodo=?)";
    return $this->DB->GetAll($sql, array($cvelectura, $cveperiodo));
  }
  
  /**
   * Cálculo de la calificación del reporte
   */
  public function promReporte($cvelectura) {
    $cali_reportes = $this->getAll('*', array('cvelectura' => $cvelectura), 'lista_libros');
    $prom          = 0;
    for ($i = 0; $i < sizeof($cali_reportes); $i++) {
      $prom += $cali_reportes[$i]['calif_reporte'];
    }
    
    $prom = (sizeof($cali_reportes) < 5) ? $prom /= 5 : $prom /= sizeof($cali_reportes);
    $prom = round($prom);
    $update = $this->update(
      array('reporte' => $prom), 
      array('cvelectura' => $cvelectura), 
      'evaluacion'
    );
    return (!$update) ? false : true;
  }
  
  /**
   * Calcula el total del promedio del alumno y lo actualiza en la tabla
   * terminado
   */
  public function promTerminado($campo, $valor) {
    $calificaciones = $this->getAll('*', array($campo=>$valor), 'evaluacion');
    if (!isset($calificaciones[0])) {
      return false;
    }
  
    $prom = $calificaciones[0]['asistencia'];
    $prom += $calificaciones[0]['comprension'];
    $prom += $calificaciones[0]['participacion'];
    $prom += $calificaciones[0]['reporte'];
    $prom += $calificaciones[0]['actividades'];
    $prom /= 5;
    $prom = round($prom);
    
    $update = $this->update(
      array('terminado'=>$prom), 
      array($campo=>$valor), 
      'evaluacion'
    );
    return (!update) ? false : true;
  }
  
  /**
   * Obtiene datos en base a cvelectura y cveperiodo
   * Mediante la tabla lectura
   */
  public function getLectura($cvelectura, $cveperiodo) {
    $sql = "SELECT distinct letra, nocontrol FROM lista_libros
      INNER JOIN lectura on lectura.cvelectura = lista_libros.cvelectura
      INNER JOIN abecedario on lectura.cveletra = abecedario.cve
      WHERE lectura.cvelectura=? AND lectura.cveperiodo=?";
    return $this->DB->GetAll($sql, array($cvelectura, $cveperiodo));  
  }
  
  /**
   * Obtiene datos en base a cvelectura, cveperiodo
   * Mediante las tablas lectura y laboral
   */
  public function getLecturaLaboral($cvelectura, $cveperiodo) {
    $sql = "SELECT distinct letra, nocontrol, laboral.cvepromotor FROM lectura
      INNER JOIN abecedario on lectura.cveletra = abecedario.cve
      INNER JOIN laboral on laboral.cveletra = abecedario.cve
      WHERE lectura.cvelectura=? AND lectura.cveperiodo=?";
    return $this->DB->GetAll($sql, array($cvelectura, $cveperiodo));
  }
  
  /**
   * 
   */
  public function checkStudentBook($cvelibro, $cvelectura, $cveperiodo) {
    $sql = "SELECT * FROM lista_libros
      INNER JOIN lectura on lectura.cvelectura = lista_libros.cvelectura
      WHERE cvelibro=? AND lectura.cvelectura=? AND lectura.cveperiodo=?";
    return $this->DB->GetAll($sql, array($cvelibro, $cvelectura, $cveperiodo));      
  }
  
}
