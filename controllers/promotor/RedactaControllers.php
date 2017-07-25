<?php

class RedactaControllers extends Sistema
{
  public function countFiles($route) {
    $cont = 0;
    foreach (glob($route) as $file) {
      ++$cont;
    }
    return $cont;
  }
  
  public function getNameAndExtension($file) {
    $data = explode(".", $file);
    $sizeData = count($data);
    if($sizeData > 2) {
      // el archivo tiene más de un punto en su nombre
      $extension = $data[($sizeData-1)];
      $fileName = explode($extension, $file);
      
      // checar que funcione
      $web->debug($fileName);
      
    } else if($sizeData == 2) {
      // el archivo tiene solo un punto en su nombre
      return $data;
      
    }
      // que onda??
      die('CHECAR ARCHIVO');
  }
}