<?php
//require the Composer autoloader
require '../lib/dompdf/vendor/autoload.php';
use Dompdf\Dompdf;

$table = '
<!DOCTYPE html>
<<<<<<< HEAD
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

=======
<html>
<head>
    <title>Reporte</title> 
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <!--<link rel="stylesheet" href="style_2.css" type="text/css" />-->
    
    <style type="text/css">
        *
        {
            padding-bottom: 5px;
        }
    
        div#cap 
        {
            /*background-color: green;*/
            text-align: left;
            padding: 10px;
        }
        
        div#cap h1 
        {
            float: right;
            margin-right: 150px;
        }
        
        .usuario
        {
            float: right;
        }
        
        .grupo
        {
            text-align: left;
        }
        
        .container
        {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
<div id="cap">
    <h1>Salas de Lectura</h1>
    <img src="../Images/logo.jpg" width="200" height="90" alt=""></img>
</div>

<div class="logoHeader">
    <div class="info" align="left">
        <b>Instituto Tecnológico de Celaya</b><br>
        <b>Telefono:</b><br>
        <b>Correo:</b>
    </div>
</div>

<div class="subHeader">
    <div class="usuario">
    	<b>Promotor: </b>Promotor 1<br>
    	<b>RFC: </b>777777777777<br>
    	<b>Especialidad: </b>Centro de Información<br>
    	<b>Correo: </b>7777777777777@hotmail.com
    </div>
    
    <div class="grupo">
    	<b>Promotor: </b>Promotor 1<br>
    	<b>RFC: </b>777777777777<br>
    	<b>Especialidad: </b>Centro de Información<br>
    	<b>Correo: </b>7777777777777@hotmail.com
    </div>
</div>

<div class="container">
    <center>
        <label style="font-size: 16px">Periodo 43232 : 4324312</label><br>
        <label style="font-size: 16px">Listado de ...</label>
    </center>
</div>
 
>>>>>>> 965cd2c32b1820efbbd26ff3e0464a166d40fec9
</body>
</html>
';

$dompdf = new Dompdf();
$dompdf->loadHtml($table);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('document.pdf', array('Attachment' => 0));
