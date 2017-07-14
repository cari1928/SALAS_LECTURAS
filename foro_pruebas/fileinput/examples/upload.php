<?php

$carpetaAdjunta = "imagenes/";
$imagenes = count($_FILES['imagenes']['name']);

for ($i = 0; $i < $imagenes; $i++) {
     $nombreArchivo = $_FILES['imagenes']['name'][$i];
     $nombreTemporal = $_FILES['imagenes']['tmp_name'][$i];
     $rutaArchivo = $carpetaAdjunta.$nombreArchivo;
     move_uploaded_file($nombreTemporal, $rutaArchivo);
     
     $infoImagenesSubidas[$i] = array(
         "caption" => '"'.$nombreArchivo.'"',
         "height"=>"120px",
         "key"=>$nombreArchivo);
         
    $imagenesSubidas[$i] = "<img height='120px' src='$rutaArchivo' class='file-preview-image'>";
}

// $arr = array("file_id"=>0,
//             "overwriteInitial"=>true,
//             "initialPreviewConfig" => $infoImagenesSubidas,
//             "initialPreview" => $imagenesSubidas);

echo json_encode("");