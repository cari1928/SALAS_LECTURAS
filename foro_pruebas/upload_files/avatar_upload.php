<?php

echo "<pre>";
print_r($_FILES);
die();

$carpetaAdjunta = "imagenes/";
$imagenes = count($_FILES['imagenes']['name']);

for ($i = 0; $i < $imagenes; $i++) {
  $nombreArchivo = $_FILES['imagenes']['name'][$i];
  $nombreTemporal = $_FILES['imagenes']['tmp_name'][$i];
  $rutaArchivo = $carpetaAdjunta.$nombreArchivo;
  move_uploaded_file($nombreTemporal, $rutaArchivo);
}