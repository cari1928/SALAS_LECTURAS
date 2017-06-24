<?php
//require the Composer autoloader
require '../lib/dompdf/vendor/autoload.php';
use Dompdf\Dompdf;

$table = '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reporte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="logoHeader">
  <div class="header" align="center">
    <h1>Salas de Lectura</h1>
  </div>
  <img src="../Images/logo.jpg" class="rounded float-left" alt="logo" width="250">
  <div class="info" align="left">
    <p>
      <b>Instituto Tecnológico de Celaya</b><br>
      <b>Telefono:</b><br>
      <b>Correo:</b><br>
    </p>
  </div>
</div>

<div class="user">
  <div class="form-group">
    <h5>Promotor: <i>Promotor 1</i></h5>
    <h5>RFC: <i>777777777777</i></h5>
    <h5>Especialidad: <i>Centro de Información</i></h5>
    <h5>Correo: <i>7777777777777@hotmail.com</i></h5>
  </div>
</div>

<div class="container">
  <center><h4>Periodo 43232 : 4324312</h4></center>
  <center><h4>Listado de ...</h4></center>
  <table class="table">

  </table>
</div>

</body>
</html>
';

$dompdf = new Dompdf();
$dompdf->loadHtml($table);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('document.pdf', array('Attachment' => 0));
