<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-09 07:34:33
  from "/home/ubuntu/workspace/templates/admin/libros.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58733d09a878a1_07549368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcccd6da476436f04c4b21db795551acbdb6ca22' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/libros.html',
      1 => 1483158328,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1483467882,
      2 => 'file',
    ),
    '6e909a28eecf3875ef5429e4bc28852eeb6567eb' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/footer.html',
      1 => 1482852538,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_58733d09a878a1_07549368 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script type="text/javascript" src="../js/script.js"></script><!--Para la camara web -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

  <title>Salas Lectura</title>
</head>
<body id="contenedor">
<header></header>
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color:#337ab7">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="color: white" href="index.php">Salas Lectura</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="Search" action="busqueda.php" method="get">

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar" name="q">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>    
     <ul class="nav navbar-nav navbar-right">       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="color: white">Cuenta<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="datos.php">DIOS</a></li>   
              <li><a href="../logout.php">Logout</a></li>      
          </ul>
        </li>
      </ul>     
      <label class="navbar-brand"><p style="color: white">DIOS - Administrador</p></label>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div><label><a href="index.php">index</a></label> > <label>libros</label></div>
<table class='table table-striped'>
	<tr>
		<td colspan='4' align='right'>
			<a href='libros.php?accion=form_insert&tabla=periodo'>
				<img src='../Images/add.png'/> 
			</a>
		</td>
	</tr> 
</table>
	<table class='table table-striped'>
		<tr>		
			<th width="300">CLAVE</th>
			<th width="300">AUTOR</th>
			<th width="300">TÍTULO</th>
			<th width="300">EDITORIAL</th>
			<th width="300">PRECIO</th>
			<th width="300">ELIMINAR</th>
			<th width="300">ACTUALIZAR</th>
		</tr>
			<tr>
							<td>1</td>
						<td>Quick</td>
			<td>102 Ideas para Enriquecer tu Vida sin Gastar Dinero</td>
			<td>Oniro</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=1"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=1"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>2</td>
						<td>Halevi</td>
			<td>13 Años que Cambiaron al Mundo</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=2"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=2"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>3</td>
						<td>López</td>
			<td>150 Años de Fotografía en España</td>
			<td>Lunwerg</td>
			<td>$200.00</td>
			<td><a href="libros.php?accion=delete&info1=3"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=3"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>4</td>
						<td>Apio</td>
			<td>365 Tips para Cambiar tu Vida</td>
			<td>Diana</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=4"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=4"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>5</td>
						<td>Sutherland</td>
			<td>50 Cosas que hay que saber de Literatura</td>
			<td>Ariel</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=5"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=5"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>6</td>
						<td>Russell</td>
			<td>50 Cosas que hay que saber de Management</td>
			<td>Ariel</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=6"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=6"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>7</td>
						<td>Galloti</td>
			<td>69 Secretos Imprescindibles Para disfrutar del Sexo</td>
			<td>MR</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=7"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=7"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>8</td>
						<td>Alonso</td>
			<td>99 Libros para ser mas Culto</td>
			<td>MR</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=8"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=8"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>9</td>
						<td>Rosas</td>
			<td>99 Pasiones en la Historia de México</td>
			<td>MR</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=9"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=9"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>10</td>
						<td>Plaidy</td>
			<td>A la Sombra de la Corona</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=10"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=10"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>11</td>
						<td>Zama</td>
			<td>Agencia Matrimonial para Ricos</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=11"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=11"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>12</td>
						<td>Buckingham</td>
			<td>Ahora Descubra sus Fortalezas</td>
			<td>Norma</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=12"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=12"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>13</td>
						<td>Bauducco</td>
			<td>Al Desnudo</td>
			<td>Ediciones B</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=13"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=13"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>14</td>
						<td>Kluver</td>
			<td>Alera</td>
			<td>Rocaeditorial</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=14"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=14"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>15</td>
						<td>Merino</td>
			<td>Alma de Junglar</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=15"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=15"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>16</td>
						<td>Fukuyama</td>
			<td>América en la Encrucijada</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=16"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=16"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>17</td>
						<td>Fernández</td>
			<td>Américo</td>
			<td>Tusquets</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=17"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=17"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>18</td>
						<td>Rojas</td>
			<td>Amigos Adiós a la Soledad</td>
			<td>Temas de Hoy</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=18"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=18"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>19</td>
						<td>Cruz</td>
			<td>Amo Luego Existo</td>
			<td>Espasa</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=19"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=19"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>20</td>
						<td>Rice</td>
			<td>Amor en Tinieblas</td>
			<td>Destino</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=20"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=20"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>21</td>
						<td>Villalpando</td>
			<td>Amores Mexicanos</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=21"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=21"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>22</td>
						<td>Gray</td>
			<td>Anatomía de Gray: Textos Esenciales</td>
			<td>Paidós</td>
			<td>$190.00</td>
			<td><a href="libros.php?accion=delete&info1=22"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=22"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>23</td>
						<td>EMU</td>
			<td>Antología del Terror:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=23"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=23"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>24</td>
						<td>EMU</td>
			<td>Antón Chejov:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=24"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=24"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>25</td>
						<td>Mc Cullough</td>
			<td>Antonio y Cleopatra</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=25"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=25"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>26</td>
						<td>Moreno</td>
			<td>Arrebatos Carnales II</td>
			<td>Planeta</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=26"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=26"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>27</td>
						<td>Moreno</td>
			<td>Arrebatos Carnales III</td>
			<td>Planeta</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=27"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=27"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>28</td>
						<td>Vidaurri</td>
			<td>Artemio Benavides Hinojosa: Caudillo del Noreste Mexicano</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=28"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=28"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>29</td>
						<td>Buzali</td>
			<td>Atrévete a Soñar</td>
			<td>Vergara</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=29"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=29"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>30</td>
						<td>Larsson</td>
			<td>Aurora Boreal</td>
			<td>Seix Barral</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=30"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=30"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>31</td>
						<td>León</td>
			<td>Ayúdate que Dios te Ayudará</td>
			<td>Seix Barral</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=31"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=31"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>32</td>
						<td>Bonilla</td>
			<td>Basado en Hechos Reales</td>
			<td>Berenice</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=32"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=32"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>33</td>
						<td>Lowe</td>
			<td>Bill Gates Habla</td>
			<td>Deusto</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=33"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=33"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>34</td>
						<td>Carr</td>
			<td>Brisas de Noviembre</td>
			<td>Harlequin</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=34"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=34"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>35</td>
						<td>Buffet & Clark</td>
			<td>Buffettología</td>
			<td>Deusto</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=35"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=35"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>36</td>
						<td>Calles</td>
			<td>Cancionero Popular</td>
			<td>Edivision</td>
			<td>$180.00</td>
			<td><a href="libros.php?accion=delete&info1=36"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=36"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>37</td>
						<td>Aguirre</td>
			<td>Cantolla Aeronautica</td>
			<td>MR</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=37"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=37"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>38</td>
						<td>Buzali</td>
			<td>Cartas y Pergaminos</td>
			<td>Vergara</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=38"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=38"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>39</td>
						<td>EMU</td>
			<td>Charles Dickens:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=39"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=39"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>40</td>
						<td>Posteguillo</td>
			<td>Circo Máximo</td>
			<td>Planeta</td>
			<td>$180.00</td>
			<td><a href="libros.php?accion=delete&info1=40"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=40"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>41</td>
						<td>Vázquez</td>
			<td>Coltan</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=41"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=41"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>42</td>
						<td>Weigel</td>
			<td>Comer, Jugar, Reír</td>
			<td>Diana</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=42"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=42"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>43</td>
						<td>Mullins</td>
			<td>Con las Manos Abiertas</td>
			<td>Diana</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=43"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=43"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>44</td>
						<td>Fernández</td>
			<td>Conjuras Sexenales</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=44"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=44"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>45</td>
						<td>Koppel</td>
			<td>Conócete a ti Mismo y a los Demás</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=45"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=45"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>46</td>
						<td>Patán</td>
			<td>Conspiraciones</td>
			<td>Paidós</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=46"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=46"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>47</td>
						<td>Buzali</td>
			<td>Construyendo tu Grandeza</td>
			<td>Vergara</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=47"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=47"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>48</td>
						<td>Savater</td>
			<td>Contra las Patrias</td>
			<td>Booket</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=48"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=48"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>49</td>
						<td>Schechter</td>
			<td>Contrabando</td>
			<td>Ediciones B</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=49"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=49"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>50</td>
						<td>Herrero</td>
			<td>Corazón Indio</td>
			<td>Destino</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=50"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=50"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>51</td>
						<td>Reyes</td>
			<td>Cortar una Jacaranda</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=51"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=51"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>52</td>
						<td>Connely</td>
			<td>Crónicas de Sucesos</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=52"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=52"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>53</td>
						<td>Tercero</td>
			<td>Cuando Llegaron los Bárbaros</td>
			<td>Temas de Hoy</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=53"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=53"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>54</td>
						<td>Ellmann</td>
			<td>Cuatro Dublinenses</td>
			<td>Tusquets</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=54"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=54"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>55</td>
						<td>Verduzco</td>
			<td>Cuento Infinito</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=55"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=55"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>56</td>
						<td>Aguilar</td>
			<td>Cuentos para Entender el Evangelio</td>
			<td>Diana</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=56"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=56"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>57</td>
						<td>Hubbard</td>
			<td>Cuerpo Limpio Mente Clara</td>
			<td>Bridge Publications</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=57"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=57"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>58</td>
						<td>Bronte</td>
			<td>Cumbres Borrascosas</td>
			<td>Editores Mexicanos</td>
			<td>$70.00</td>
			<td><a href="libros.php?accion=delete&info1=58"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=58"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>59</td>
						<td>Lauryssens</td>
			<td>Dalí y Yo : Una Historia Surreal</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=59"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=59"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>60</td>
						<td>Vidal</td>
			<td>De lo Divino y de lo Humano</td>
			<td>MR</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=60"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=60"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>61</td>
						<td>Aquino</td>
			<td>De qué se Ríe la Barbie?</td>
			<td>Temas de Hoy</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=61"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=61"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>62</td>
						<td>Vale</td>
			<td>De Sesos y Médula</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=62"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=62"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>63</td>
						<td>Pinkola</td>
			<td>Desatando a la Mujer Fuerte</td>
			<td>Diana</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=63"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=63"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>64</td>
						<td>Hocking</td>
			<td>Designio</td>
			<td>Destino</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=64"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=64"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>65</td>
						<td>Quintero</td>
			<td>Despues de la Tempestad</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=65"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=65"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>66</td>
						<td>Pacheco</td>
			<td>Destino Criminal</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=66"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=66"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>67</td>
						<td>Martínez</td>
			<td>Diversos Estados tras la Muerte</td>
			<td>Obelisco</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=67"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=67"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>68</td>
						<td>Armstrong</td>
			<td>Doce Pasos Hacia Una Vida Compasiva</td>
			<td>Paidós</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=68"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=68"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>69</td>
						<td>Diez</td>
			<td>Dos Mil y Una Noches</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=69"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=69"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>70</td>
						<td>Canales</td>
			<td>Duendes: Guía de los Seres Mágicos de España</td>
			<td>Edaf</td>
			<td>$180.00</td>
			<td><a href="libros.php?accion=delete&info1=70"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=70"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>71</td>
						<td>EMU</td>
			<td>Edgar Allan Poe:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=71"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=71"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>72</td>
						<td>Gardner</td>
			<td>Educación Artística y Desarrollo Humano</td>
			<td>Paidós</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=72"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=72"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>73</td>
						<td>Little</td>
			<td>El almacén</td>
			<td>Ediciones B</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=73"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=73"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>74</td>
						<td>Sierra</td>
			<td>El Ángel Perdido</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=74"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=74"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>75</td>
						<td>Sunderland</td>
			<td>El Aroma de la Luna</td>
			<td>Joaquín Mortiz</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=75"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=75"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>76</td>
						<td>Borges</td>
			<td>El arte de la Guerra para Narcos</td>
			<td>Temas de Hoy</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=76"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=76"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>77</td>
						<td>Marx</td>
			<td>El Capital</td>
			<td>Editores Mexicanos</td>
			<td>$54.00</td>
			<td><a href="libros.php?accion=delete&info1=77"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=77"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>78</td>
						<td>López</td>
			<td>El Cártel de los Sapos</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=78"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=78"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>79</td>
						<td>Mankell</td>
			<td>El Cerebro de Kennedy</td>
			<td>Tusquets</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=79"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=79"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>80</td>
						<td>Miralles</td>
			<td>El Círculo Ámbar y los Mandalas de Avalon</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=80"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=80"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>81</td>
						<td>Sherwood</td>
			<td>El Club de los Supervivientes</td>
			<td>Paidós</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=81"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=81"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>82</td>
						<td>Drosnin</td>
			<td>El Código Secreto de la Biblia III</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=82"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=82"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>83</td>
						<td>EMU</td>
			<td>El Conde de Montecristo</td>
			<td>Editores Mexicanos</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=83"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=83"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>84</td>
						<td>Grandes</td>
			<td>El Corazon Helado</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=84"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=84"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>85</td>
						<td>Cárdenas</td>
			<td>El Derrumbe</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=85"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=85"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>86</td>
						<td>Lienas</td>
			<td>El Diario Rojo de Carlota</td>
			<td>Destino</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=86"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=86"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>87</td>
						<td>Schmitt</td>
			<td>El Evangelio Según Pilatos</td>
			<td>Edaf</td>
			<td>$180.00</td>
			<td><a href="libros.php?accion=delete&info1=87"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=87"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>88</td>
						<td>Covey</td>
			<td>El Factor Confianza</td>
			<td>Paidós</td>
			<td>$180.00</td>
			<td><a href="libros.php?accion=delete&info1=88"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=88"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>89</td>
						<td>Rosen</td>
			<td>El Fin del Imperio Romano</td>
			<td>Paidós</td>
			<td>$190.00</td>
			<td><a href="libros.php?accion=delete&info1=89"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=89"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>90</td>
						<td>Cornwell</td>
			<td>El Frente</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=90"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=90"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>91</td>
						<td>Shenk</td>
			<td>El Genio que Todos Llevamos Dentro</td>
			<td>Ariel</td>
			<td>$220.00</td>
			<td><a href="libros.php?accion=delete&info1=91"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=91"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>92</td>
						<td>Florida</td>
			<td>El Gran Reset</td>
			<td>Paidós</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=92"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=92"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>93</td>
						<td>Muñoz Molina</td>
			<td>El Invierno de Lisboa</td>
			<td>Booket</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=93"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=93"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>94</td>
						<td>Meltzer</td>
			<td>El Libro del Destino</td>
			<td>Planeta</td>
			<td>$150.00</td>
			<td><a href="libros.php?accion=delete&info1=94"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=94"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>95</td>
						<td>Papini</td>
			<td>El Libro Negro</td>
			<td>Editores Mexicanos</td>
			<td>$55.00</td>
			<td><a href="libros.php?accion=delete&info1=95"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=95"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>96</td>
						<td>London</td>
			<td>El Lobo de Mar</td>
			<td>Editores Mexicanos</td>
			<td>$55.00</td>
			<td><a href="libros.php?accion=delete&info1=96"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=96"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>97</td>
						<td>Spier</td>
			<td>El Lugar del Hombre en el Cosmos</td>
			<td>Crítica</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=97"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=97"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>98</td>
						<td>Bonasso</td>
			<td>El Mal, El Modelo K y la Barrick Gold</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=98"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=98"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>99</td>
						<td>Zweig</td>
			<td>El Mundo del Ayer</td>
			<td>Editores Mexicanos</td>
			<td>$80.00</td>
			<td><a href="libros.php?accion=delete&info1=99"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=99"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>100</td>
						<td>Asensi</td>
			<td>El Origen Perdido</td>
			<td>Booket</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=100"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=100"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>101</td>
						<td>Bau</td>
			<td>El Pintor de Cracovia</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=101"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=101"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>102</td>
						<td>Krauze</td>
			<td>El Poder y el Delirio</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=102"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=102"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>103</td>
						<td>Yallop</td>
			<td>El Poder y la Gloria</td>
			<td>Planeta</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=103"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=103"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>104</td>
						<td>Koch</td>
			<td>El Principio Estrella Puede Hacerlo Rico</td>
			<td>Paidós</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=104"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=104"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>105</td>
						<td>Ramírez</td>
			<td>El Reino de Marcial Maciel</td>
			<td>Temas de Hoy</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=105"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=105"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>106</td>
						<td>Aguilar</td>
			<td>El Resplandor de la Madera</td>
			<td>Seix Barral</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=106"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=106"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>107</td>
						<td>Taibo II</td>
			<td>El Retorno de los Tigres de la Malasia</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=107"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=107"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>108</td>
						<td>Mankell</td>
			<td>El Retorno del Profesor de Baile</td>
			<td>Tusquets</td>
			<td>$110.00</td>
			<td><a href="libros.php?accion=delete&info1=108"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=108"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>109</td>
						<td>Salzberg</td>
			<td>El Secreto de la Felicidad Auténtica</td>
			<td>Oniro</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=109"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=109"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>110</td>
						<td>Isbert</td>
			<td>El Secreto de la Montaña Esmeralda</td>
			<td>Edaf</td>
			<td>$150.00</td>
			<td><a href="libros.php?accion=delete&info1=110"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=110"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>111</td>
						<td>Giménez</td>
			<td>El Silencio de los Claustros</td>
			<td>Destino</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=111"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=111"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>112</td>
						<td>Sánchez</td>
			<td>El Tesorero de la Catedral</td>
			<td>Almuzara</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=112"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=112"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>113</td>
						<td>Sora</td>
			<td>El Tesoro Perdido de los Templarios</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=113"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=113"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>114</td>
						<td>Ramos</td>
			<td>El Último Cacique: El Poder por el Poder</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=114"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=114"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>115</td>
						<td>Hoge</td>
			<td>El Último Papa: Decadencia y Caída de la Iglesia de Roma</td>
			<td>Edaf</td>
			<td>$200.00</td>
			<td><a href="libros.php?accion=delete&info1=115"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=115"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>116</td>
						<td>Rodari</td>
			<td>En Defensa del Papa</td>
			<td>MR</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=116"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=116"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>117</td>
						<td>Mourad</td>
			<td>En la Ciudad de Oro y Plata</td>
			<td>Espasa</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=117"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=117"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>118</td>
						<td>Ugarte</td>
			<td>Erotismo y Santidad</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=118"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=118"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>119</td>
						<td>Redondo</td>
			<td>Escuela y Pobreza</td>
			<td>Paidós</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=119"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=119"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>120</td>
						<td>Savater</td>
			<td>Ética como Amor Propio</td>
			<td>Ariel</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=120"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=120"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>121</td>
						<td>EMU</td>
			<td>Fiódor Dostoievski:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=121"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=121"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>122</td>
						<td>EMU</td>
			<td>Franz Kafka:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=122"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=122"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>123</td>
						<td>EMU</td>
			<td>Friedrich Nietzsche:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=123"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=123"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>124</td>
						<td>Mir</td>
			<td>Furtivos</td>
			<td>Almuzara</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=124"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=124"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>125</td>
						<td>Pol Droit</td>
			<td>Genealogía de los Bárbaros</td>
			<td>Paidós</td>
			<td>$230.00</td>
			<td><a href="libros.php?accion=delete&info1=125"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=125"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>126</td>
						<td>Meneses</td>
			<td>Generación Bang: Los Nuevos Cronistas del Narco en México</td>
			<td>Temas de Hoy</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=126"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=126"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>127</td>
						<td>Peters</td>
			<td>Gestinar con Imaginación</td>
			<td>Deusto</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=127"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=127"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>128</td>
						<td>Ramsay</td>
			<td>Gordon Ramsay lo Hace Fácil</td>
			<td>Planeta</td>
			<td>$200.00</td>
			<td><a href="libros.php?accion=delete&info1=128"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=128"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>129</td>
						<td>Junger</td>
			<td>Guerra</td>
			<td>Crítica</td>
			<td>$170.00</td>
			<td><a href="libros.php?accion=delete&info1=129"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=129"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>130</td>
						<td>EMU</td>
			<td>H.P. Lovecraft:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=130"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=130"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>131</td>
						<td>Dechance</td>
			<td>Hablemos Claro</td>
			<td>Edaf</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=131"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=131"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>132</td>
						<td>Nieves</td>
			<td>Hablemos de Ciencia</td>
			<td>Edaf</td>
			<td>$350.00</td>
			<td><a href="libros.php?accion=delete&info1=132"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=132"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>133</td>
						<td>EMU</td>
			<td>Hermann Hesse:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=133"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=133"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>134</td>
						<td>Miralles</td>
			<td>Hernán Cortés: Inventor de México</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=134"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=134"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>135</td>
						<td>Johnson</td>
			<td>Héroes</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=135"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=135"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>136</td>
						<td>Aguirre</td>
			<td>Hidalgo: Entre la Virtud y el Vicio</td>
			<td>MR</td>
			<td>$150.00</td>
			<td><a href="libros.php?accion=delete&info1=136"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=136"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>137</td>
						<td>Naouri</td>
			<td>Hijas y Madres</td>
			<td>Tusquets</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=137"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=137"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>138</td>
						<td>Eliade</td>
			<td>Historia de las Creencias e Ideas Religiosas</td>
			<td>Paidós</td>
			<td>$280.00</td>
			<td><a href="libros.php?accion=delete&info1=138"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=138"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>139</td>
						<td>Tenorio</td>
			<td>Historia y Celebración</td>
			<td>Tusquets</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=139"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=139"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>140</td>
						<td>Urías</td>
			<td>Historias Secretas del Racismo en México</td>
			<td>Tusquets</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=140"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=140"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>141</td>
						<td>EMU</td>
			<td>Honorato de Balzac:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=141"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=141"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>142</td>
						<td>Nietzsche</td>
			<td>Humano, Demasiado Humano</td>
			<td>Editores Mexicanos</td>
			<td>$54.00</td>
			<td><a href="libros.php?accion=delete&info1=142"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=142"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>143</td>
						<td>EMU</td>
			<td>Íconos Literarios:  Bram Stoker</td>
			<td>Editores Mexicanos</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=143"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=143"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>144</td>
						<td>EMU</td>
			<td>Íconos Literarios:  Guy de Maupassant</td>
			<td>Editores Mexicanos</td>
			<td>$150.00</td>
			<td><a href="libros.php?accion=delete&info1=144"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=144"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>145</td>
						<td>EMU</td>
			<td>Íconos Literarios:  Honorato de Balzac</td>
			<td>Editores Mexicanos</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=145"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=145"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>146</td>
						<td>EMU</td>
			<td>íconos Literarios:  Las Mil y Una Noches</td>
			<td>Editores Mexicanos</td>
			<td>$190.00</td>
			<td><a href="libros.php?accion=delete&info1=146"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=146"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>147</td>
						<td>EMU</td>
			<td>Íconos Literarios:  Lewis Carroll</td>
			<td>Editores Mexicanos</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=147"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=147"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>148</td>
						<td>EMU</td>
			<td>Íconos Literarios:  Nicolás Maquiavelo</td>
			<td>Editores Mexicanos</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=148"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=148"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>149</td>
						<td>EMU</td>
			<td>Íconos Literarios: Federico García Lorca</td>
			<td>Editores Mexicanos</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=149"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=149"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>150</td>
						<td>Bauducco</td>
			<td>Imperio de Papel</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=150"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=150"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>151</td>
						<td>Ramos</td>
			<td>Ixcel: Nacidos Guerreros,  Vendidos como Esclavos</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=151"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=151"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>152</td>
						<td>EMU</td>
			<td>Julio Verne:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=152"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=152"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>153</td>
						<td>Rodríguez</td>
			<td>La Agenda Pendiente </td>
			<td>Temas de Hoy</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=153"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=153"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>154</td>
						<td>Ovason</td>
			<td>La Arquitectura Sagrada de Washington</td>
			<td>MR</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=154"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=154"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>155</td>
						<td>Muñoz</td>
			<td>La Bruja de los Destellos</td>
			<td>Diana</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=155"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=155"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>156</td>
						<td>Lavin</td>
			<td>La Casa Chica</td>
			<td>Planeta</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=156"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=156"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>157</td>
						<td>Dietrich</td>
			<td>La Clave Roseta</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=157"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=157"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>158</td>
						<td>Díaz-Polanco</td>
			<td>La Cocina del Diablo</td>
			<td>Temas de Hoy</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=158"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=158"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>159</td>
						<td>Nanti</td>
			<td>La Confesión; Religión y Pederastia</td>
			<td>Diana</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=159"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=159"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>160</td>
						<td>Garland</td>
			<td>La Conjura</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=160"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=160"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>161</td>
						<td>Asensi</td>
			<td>La Conjura de Cortés</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=161"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=161"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>162</td>
						<td>Bolaños</td>
			<td>La cruz del Sur</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=162"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=162"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>163</td>
						<td>Innerarity</td>
			<td>La Democracia del Conocimiento</td>
			<td>Paidós</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=163"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=163"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>164</td>
						<td>Kundera</td>
			<td>La Despedida</td>
			<td>Tusquets</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=164"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=164"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>165</td>
						<td>Finneyfrock</td>
			<td>La Dulce Venganza de Celia Door</td>
			<td>Destino</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=165"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=165"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>166</td>
						<td>Mastreta</td>
			<td>La Emoción de las Cosas</td>
			<td>Seix Barral</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=166"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=166"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>167</td>
						<td>Young</td>
			<td>La Encrucijada</td>
			<td>Diana</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=167"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=167"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>168</td>
						<td>Greenspan</td>
			<td>La Era de las Turbulencias</td>
			<td>Ediciones B</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=168"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=168"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>169</td>
						<td>Rodríguez</td>
			<td>La Fábrica del Crimen</td>
			<td>Temas de Hoy</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=169"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=169"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>170</td>
						<td>Meyer</td>
			<td>La Fábula del crímen Ritual</td>
			<td>Tusquets</td>
			<td>$220.00</td>
			<td><a href="libros.php?accion=delete&info1=170"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=170"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>171</td>
						<td>Aguirre</td>
			<td>La gran Traición La guerra donde Perdimos la Mitad de México</td>
			<td>Planeta</td>
			<td>$170.00</td>
			<td><a href="libros.php?accion=delete&info1=171"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=171"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>172</td>
						<td>Wroblewski</td>
			<td>La Historia de Edgar Sawtelle</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=172"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=172"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>173</td>
						<td>González</td>
			<td>La Iglesia del Silencio</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=173"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=173"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>174</td>
						<td>Ratzinger</td>
			<td>La Infancia de Jesus</td>
			<td>Planeta</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=174"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=174"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>175</td>
						<td>Monforte</td>
			<td>La Infiel</td>
			<td>Temas de Hoy</td>
			<td>$150.00</td>
			<td><a href="libros.php?accion=delete&info1=175"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=175"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>176</td>
						<td>Rodríguez</td>
			<td>La Ira de Dios</td>
			<td>Rocaeditorial</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=176"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=176"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>177</td>
						<td>Sepúlveda</td>
			<td>La Lámpara de Aladino</td>
			<td>Tusquets</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=177"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=177"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>178</td>
						<td>Beniosef</td>
			<td>La Luz de Efraim: Cómo Corregir la Sexualidad a través de la Cábala</td>
			<td>Obelisco</td>
			<td>$230.00</td>
			<td><a href="libros.php?accion=delete&info1=178"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=178"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>179</td>
						<td>Alazraki</td>
			<td>La Luz Eterna de Juan Pablo II</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=179"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=179"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>180</td>
						<td>Ortíz</td>
			<td>La Mente en Desarrollo</td>
			<td>Paidós</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=180"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=180"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>181</td>
						<td>Aguilar</td>
			<td>La Modernidad Figitiva</td>
			<td>Planeta</td>
			<td>$200.00</td>
			<td><a href="libros.php?accion=delete&info1=181"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=181"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>182</td>
						<td>Berman</td>
			<td>La Mujer que Buceó Dentro del Corazón del Mundo</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=182"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=182"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>183</td>
						<td>Gautier</td>
			<td>La Novela de la Momia</td>
			<td>Editores Mexicanos</td>
			<td>$45.00</td>
			<td><a href="libros.php?accion=delete&info1=183"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=183"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>184</td>
						<td>Arellano</td>
			<td>La Nueva República</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=184"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=184"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>185</td>
						<td>De Balzac</td>
			<td>La Piel de Zapa</td>
			<td>Editores Mexicanos</td>
			<td>$70.00</td>
			<td><a href="libros.php?accion=delete&info1=185"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=185"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>186</td>
						<td>Levy</td>
			<td>La Primera Noche</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=186"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=186"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>187</td>
						<td>Mankell</td>
			<td>La Quinta Mujer</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=187"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=187"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>188</td>
						<td>Gilbert</td>
			<td>La Sabiduría de la Naríz</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=188"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=188"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>189</td>
						<td>Plaidy</td>
			<td>La Sexta Esposa</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=189"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=189"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>190</td>
						<td>Volpi</td>
			<td>La Tejedora de Sombras</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=190"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=190"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>191</td>
						<td>Gregory</td>
			<td>La Trampa Dorada</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=191"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=191"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>192</td>
						<td>Luisi</td>
			<td>La Vida Emergente</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=192"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=192"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>193</td>
						<td>Del Cio</td>
			<td>La Vida Mi Amante II</td>
			<td>Diana</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=193"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=193"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>194</td>
						<td>Larsson</td>
			<td>La Voz y la Furia</td>
			<td>Destino</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=194"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=194"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>195</td>
						<td>Al Ries</td>
			<td>Las 11 Leyes Inmutables Creación de Marcas en Internet</td>
			<td>Deusto</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=195"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=195"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>196</td>
						<td>Zaslow</td>
			<td>Las Chicas de Ames</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=196"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=196"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>197</td>
						<td>Spreitzer</td>
			<td>Las Claves del Liderazgo</td>
			<td>Deusto</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=197"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=197"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>198</td>
						<td>Lewis</td>
			<td>Las Crónicas de Narnia</td>
			<td>Destino</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=198"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=198"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>199</td>
						<td>Wolf</td>
			<td>Las Enseñanzas de Carlos Castaneda</td>
			<td>Vergara</td>
			<td>$149.00</td>
			<td><a href="libros.php?accion=delete&info1=199"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=199"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>200</td>
						<td>Berry</td>
			<td>Las Finanzas Secretas de la Iglesia</td>
			<td>Debate</td>
			<td>$200.00</td>
			<td><a href="libros.php?accion=delete&info1=200"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=200"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>201</td>
						<td>Guiliano</td>
			<td>Las Francesas Disfrutan Todo el Año y no Engordan</td>
			<td>Vergara</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=201"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=201"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>202</td>
						<td>Alanís</td>
			<td>Las Lágrimas del centauro</td>
			<td>MR</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=202"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=202"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>203</td>
						<td>Nieto</td>
			<td>Las Mujeres Matan Mejor</td>
			<td>Joaquín Mortiz</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=203"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=203"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>204</td>
						<td>Huxley</td>
			<td>Las Puertas de la Percepción</td>
			<td>Editores Mexicanos</td>
			<td>$46.00</td>
			<td><a href="libros.php?accion=delete&info1=204"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=204"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>205</td>
						<td>Ariely</td>
			<td>Las Ventajas del Deseo</td>
			<td>Ariel</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=205"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=205"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>206</td>
						<td>Hocking</td>
			<td>Latido</td>
			<td>Destino</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=206"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=206"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>207</td>
						<td>EMU</td>
			<td>León Tolstoi:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=207"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=207"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>208</td>
						<td>Kotler</td>
			<td>Los 10 Pecados Capitales del Markrting</td>
			<td>Deusto</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=208"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=208"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>209</td>
						<td>Grandes</td>
			<td>Los Aires Difíciles</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=209"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=209"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>210</td>
						<td>Zepeda</td>
			<td>Los Corruptores</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=210"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=210"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>211</td>
						<td>Frattini</td>
			<td>Los Cuervos del Vaticano</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=211"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=211"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>212</td>
						<td>Elorza</td>
			<td>Los dos Mensajes del Islam</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=212"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=212"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>213</td>
						<td>Cruz</td>
			<td>Los Golden Boys</td>
			<td>Temas de Hoy</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=213"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=213"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>214</td>
						<td>Zepeda</td>
			<td>Los Intocables</td>
			<td>Planeta</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=214"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=214"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>215</td>
						<td>Ryback</td>
			<td>Los Libros del Gran Dictador</td>
			<td>Destino</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=215"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=215"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>216</td>
						<td>Hodge</td>
			<td>Los Manuscritos del Mar Muerto</td>
			<td>Edaf</td>
			<td>$150.00</td>
			<td><a href="libros.php?accion=delete&info1=216"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=216"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>217</td>
						<td>Fuentes</td>
			<td>Los Mil Mejores Chistes Que Conozco</td>
			<td>Diana</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=217"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=217"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>218</td>
						<td>Fuentes</td>
			<td>Los Mil Mejores Chistes Que Conozco y cien Más Buenos Aún</td>
			<td>Diana</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=218"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=218"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>219</td>
						<td>Harding</td>
			<td>Los Misterios de la Mujer</td>
			<td>Obelisco</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=219"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=219"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>220</td>
						<td>Druon</td>
			<td>Los Reyes Malditos III: Los Venenos de la Corona</td>
			<td>Vergara</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=220"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=220"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>221</td>
						<td>Druon</td>
			<td>Los Reyes Malditos IV: La Ley de los Varones</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=221"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=221"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>222</td>
						<td>Carr</td>
			<td>Luna de Verano</td>
			<td>Harlequin</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=222"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=222"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>223</td>
						<td>Carrillo</td>
			<td>Luna Negra</td>
			<td>Diana</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=223"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=223"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>224</td>
						<td>Frid</td>
			<td>Luz Entre Ceniza</td>
			<td>MR</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=224"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=224"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>225</td>
						<td>Kenzaburooé</td>
			<td>M7T y La Historia de las Maravillas del Bosque</td>
			<td>Booket</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=225"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=225"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>226</td>
						<td>Napoleoni</td>
			<td>Maonomics: La amarga Medicina China contra los escándalos</td>
			<td>Paidós</td>
			<td>$200.00</td>
			<td><a href="libros.php?accion=delete&info1=226"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=226"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>227</td>
						<td>Palomar</td>
			<td>Margarita Septién</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=227"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=227"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>228</td>
						<td>EMU</td>
			<td>Marqués de Sade:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=228"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=228"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>229</td>
						<td>Buzali</td>
			<td>Megacualidades de los Triunfadores</td>
			<td>Vergara</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=229"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=229"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>230</td>
						<td>Alazraki</td>
			<td>México Siempre Fiel</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=230"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=230"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>231</td>
						<td>Puddicombe</td>
			<td>Mindfulness Atención Plena</td>
			<td>Edaf</td>
			<td>$230.00</td>
			<td><a href="libros.php?accion=delete&info1=231"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=231"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>232</td>
						<td>Ravenwolf</td>
			<td>Muerte en el Barranco de las Brujas</td>
			<td>Edaf</td>
			<td>$240.00</td>
			<td><a href="libros.php?accion=delete&info1=232"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=232"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>233</td>
						<td>Allan Poe</td>
			<td>Narraciones Extraordinarias</td>
			<td>Editores Mexicanos</td>
			<td>$56.00</td>
			<td><a href="libros.php?accion=delete&info1=233"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=233"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>234</td>
						<td>Matute</td>
			<td>Olvidado Rey Gudú</td>
			<td>Booket</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=234"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=234"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>235</td>
						<td>Austen</td>
			<td>Orgullo y Prejuicio</td>
			<td>Editores Mexicanos</td>
			<td>$80.00</td>
			<td><a href="libros.php?accion=delete&info1=235"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=235"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>236</td>
						<td>EMU</td>
			<td>Oscar Wilde:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=236"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=236"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>237</td>
						<td>Aguirre</td>
			<td>Pecar como Dios Manda</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=237"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=237"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>238</td>
						<td>Lewis</td>
			<td>Perelandra un Viaje a Venus</td>
			<td>Minotauro</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=238"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=238"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>239</td>
						<td>Greenfield</td>
			<td>Piensa: Qué Significa ser Humano en un Mundo de Cambio</td>
			<td>Ediciones B</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=239"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=239"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>240</td>
						<td>Herman</td>
			<td>Pilates Para Dummies</td>
			<td>Paradummies.com</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=240"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=240"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>241</td>
						<td>James Kaplan</td>
			<td>Por Fuego, Por Agua</td>
			<td>MR</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=241"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=241"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>242</td>
						<td>Moreno</td>
			<td>Por la Mano del Padre</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=242"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=242"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>243</td>
						<td>Rodríguez</td>
			<td>Por los Viejos Tiempos</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=243"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=243"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>244</td>
						<td>Evans</td>
			<td>Preso de la Luz</td>
			<td>Destino</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=244"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=244"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>245</td>
						<td>Margolin</td>
			<td>Pruebas Falsas</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=245"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=245"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>246</td>
						<td>Mastreta</td>
			<td>Puerto Libre</td>
			<td>Seix Barral</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=246"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=246"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>247</td>
						<td>Fernández</td>
			<td>Que Dios se Equivoque</td>
			<td>Planeta</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=247"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=247"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>248</td>
						<td>Musso</td>
			<td>Qué Sería yo sin Ti</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=248"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=248"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>249</td>
						<td>Ahern</td>
			<td>Recuerdos Prestados</td>
			<td>Vergara</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=249"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=249"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>250</td>
						<td>Grergen</td>
			<td>Reflexiones Sobre la Construcción Social</td>
			<td>Paidós</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=250"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=250"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>251</td>
						<td>Mc Caig</td>
			<td>Rhett Butler:  Más allá de Lo Que El Viento se Llevó</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=251"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=251"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>252</td>
						<td>Marrese</td>
			<td>Rosa de Fuego</td>
			<td>Ediciones B</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=252"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=252"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>253</td>
						<td>NHAT HANN</td>
			<td>Saborear</td>
			<td>Oniro</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=253"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=253"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>254</td>
						<td>Ronquillo</td>
			<td>Saldos de Guerra</td>
			<td>Temas de Hoy</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=254"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=254"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>255</td>
						<td>Aguilar</td>
			<td>Saldos de la Revolución</td>
			<td>Planeta</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=255"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=255"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>256</td>
						<td>Rosas</td>
			<td>Sangre y Fuego</td>
			<td>Booket</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=256"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=256"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>257</td>
						<td>Frattini</td>
			<td>Secretos Vaticanos</td>
			<td>Edaf</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=257"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=257"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>258</td>
						<td>Cain</td>
			<td>Sexo de Emergencia</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=258"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=258"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>259</td>
						<td>Brockmann</td>
			<td>Sin Nombre</td>
			<td>Harlequin</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=259"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=259"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>260</td>
						<td>Savater</td>
			<td>Sobre Vivir</td>
			<td>Ariel</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=260"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=260"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>261</td>
						<td>Castro</td>
			<td>Surameris y el Cofre de los Secretos</td>
			<td>Diana</td>
			<td>$160.00</td>
			<td><a href="libros.php?accion=delete&info1=261"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=261"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>262</td>
						<td>Octavio Paz</td>
			<td>Tiempo Nublado</td>
			<td>Seix Barral</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=262"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=262"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>263</td>
						<td>Cruz</td>
			<td>Tierra Narca</td>
			<td>Temas de Hoy</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=263"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=263"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>264</td>
						<td>Hernández</td>
			<td>Tijuana Dream</td>
			<td>Ediciones B</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=264"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=264"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>265</td>
						<td>Hay</td>
			<td>Todo Está Bien</td>
			<td>Diana</td>
			<td>$140.00</td>
			<td><a href="libros.php?accion=delete&info1=265"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=265"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>266</td>
						<td>Buzali</td>
			<td>Todod somos Maestros</td>
			<td>Vergara</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=266"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=266"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>267</td>
						<td>Taibo II</td>
			<td>Tony Guiteras  un Hombre Guapo y otros Personajes</td>
			<td>Planeta</td>
			<td>$150.00</td>
			<td><a href="libros.php?accion=delete&info1=267"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=267"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>268</td>
						<td>Olvera</td>
			<td>Topiltzin: La Leyenda del Lucero de la Mañana</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=268"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=268"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>269</td>
						<td>Guillou</td>
			<td>Trilogía de las Cruzadas I  del Norte a Jerusalén</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=269"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=269"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>270</td>
						<td>Leppaniemi</td>
			<td>Tu Felicidad Depende de tu Actitud</td>
			<td>Diana</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=270"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=270"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>271</td>
						<td>Pearl</td>
			<td>Un Corazón Invencible</td>
			<td>MR</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=271"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=271"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>272</td>
						<td>Scott</td>
			<td>Un Siglo Decisivo</td>
			<td>Ediciones B</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=272"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=272"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>273</td>
						<td>Aguilar</td>
			<td>Un Soplo en el Río</td>
			<td>Seix Barral</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=273"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=273"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>274</td>
						<td>Wiggs</td>
			<td>Una Casa Junto al Lago</td>
			<td>Harlequin</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=274"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=274"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>275</td>
						<td>Baldacci</td>
			<td>Una Muerte Sospechosa</td>
			<td>Ediciones B</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=275"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=275"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>276</td>
						<td>Irving</td>
			<td>Una Mujer Difícil</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=276"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=276"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>277</td>
						<td>Hutchens</td>
			<td>Una Porción de Confianza</td>
			<td>Paidós</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=277"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=277"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>278</td>
						<td>Palou</td>
			<td>Varón de Deseos</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=278"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=278"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>279</td>
						<td>Aguirre</td>
			<td>Victoria</td>
			<td>Booket</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=279"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=279"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>280</td>
						<td>Villalpando</td>
			<td>Vida de Marquesa</td>
			<td>Diana</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=280"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=280"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>281</td>
						<td>Guerra</td>
			<td>Vida Verde: El Químico Guerra Responde</td>
			<td>Diana</td>
			<td>$100.00</td>
			<td><a href="libros.php?accion=delete&info1=281"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=281"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>282</td>
						<td>Gutiérrez</td>
			<td>Viejo Siglo Nuevo</td>
			<td>Planeta</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=282"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=282"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>283</td>
						<td>Miller</td>
			<td>Vivan los Lunes</td>
			<td>Vergara</td>
			<td>$90.00</td>
			<td><a href="libros.php?accion=delete&info1=283"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=283"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>284</td>
						<td>Morris</td>
			<td>Volverse a Enamorar</td>
			<td>Vergara</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=284"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=284"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>285</td>
						<td>EMU</td>
			<td>William Shakespeare:  Obras Maestras</td>
			<td>Editores Mexicanos</td>
			<td>$120.00</td>
			<td><a href="libros.php?accion=delete&info1=285"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=285"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>286</td>
						<td>Wagensberg</td>
			<td>Yo, Lo Superfluo y el Error</td>
			<td>Tusquets</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=286"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=286"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
			<tr>
							<td>287</td>
						<td>Wellington</td>
			<td>Zombie Planet</td>
			<td>Timunmas</td>
			<td>$130.00</td>
			<td><a href="libros.php?accion=delete&info1=287"> 
				<img src="../Images/cancelar.png">
			</a></td>
			<td><a href="libros.php?accion=form_update&info2=287"> 
					<img src="../Images/edit.png">
			</a></td>
		</tr>
	</table>
</body>
</html>
<?php }
}
