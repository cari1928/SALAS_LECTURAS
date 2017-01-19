<?php
/* Smarty version 3.1.30-dev/53, created on 2017-01-19 07:44:32
  from "/home/ubuntu/workspace/templates/admin/grupo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_58806e60d90205_77896602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ffbac6cfa26a0d15deec984608debf407849ca2' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/grupo.html',
      1 => 1484805015,
      2 => 'file',
    ),
    '7c2e35bfb8e3c1543301fa6f15779ac80eaaef9b' => 
    array (
      0 => '/home/ubuntu/workspace/templates/admin/header.html',
      1 => 1484719158,
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
function content_58806e60d90205_77896602 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Mostrar logo-->
  <link rel="shortcut icon" type="image/x-icon" href="../Images/logo.ico">
  
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <!--Datatables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  
  <!--Librería para Alerts personalizados-->
	<script src="../lib/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../lib/sweetalert/dist/sweetalert.css">
  <script type="text/javascript" src="../JS/alerts.js"></script>

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
<div><label><a href="index.php">index</a></label> > <label><a href="promotor.php">promotor</a></label> > <label>libros</label></div>




  <div class="page-header">
    <h2>Libros</h2>
  </div>
	<form action="grupo.php?accion=insert" method="post">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <h3 class="panel-title">Añadir Libro</h3>
	    </div>
	    <div class="panel-body">
	      	      <input type="hidden" name="promotor" value="libros">
	      	      <input type="hidden" name="datos[cvelectura]" value="4">
	      <div class="form-group">
	        <label>Libro:</label>
	              <select class="form-control" name="datos[cvelibro]">
        <option value="-1">Selecciona una opción</option>
              <option value="7" >69 Secretos Imprescindibles Para disfrutar del Sexo</option>
              <option value="8" >99 Libros para ser mas Culto</option>
              <option value="9" >99 Pasiones en la Historia de México</option>
              <option value="10" >A la Sombra de la Corona</option>
              <option value="11" >Agencia Matrimonial para Ricos</option>
              <option value="12" >Ahora Descubra sus Fortalezas</option>
              <option value="13" >Al Desnudo</option>
              <option value="14" >Alera</option>
              <option value="15" >Alma de Junglar</option>
              <option value="18" >Amigos Adiós a la Soledad</option>
              <option value="19" >Amo Luego Existo</option>
              <option value="20" >Amor en Tinieblas</option>
              <option value="21" >Amores Mexicanos</option>
              <option value="16" >América en la Encrucijada</option>
              <option value="17" >Américo</option>
              <option value="22" >Anatomía de Gray: Textos Esenciales</option>
              <option value="23" >Antología del Terror:  Obras Maestras</option>
              <option value="25" >Antonio y Cleopatra</option>
              <option value="24" >Antón Chejov:  Obras Maestras</option>
              <option value="26" >Arrebatos Carnales II</option>
              <option value="27" >Arrebatos Carnales III</option>
              <option value="28" >Artemio Benavides Hinojosa: Caudillo del Noreste Mexicano</option>
              <option value="29" >Atrévete a Soñar</option>
              <option value="30" >Aurora Boreal</option>
              <option value="31" >Ayúdate que Dios te Ayudará</option>
              <option value="32" >Basado en Hechos Reales</option>
              <option value="33" >Bill Gates Habla</option>
              <option value="34" >Brisas de Noviembre</option>
              <option value="35" >Buffettología</option>
              <option value="36" >Cancionero Popular</option>
              <option value="37" >Cantolla Aeronautica</option>
              <option value="38" >Cartas y Pergaminos</option>
              <option value="39" >Charles Dickens:  Obras Maestras</option>
              <option value="40" >Circo Máximo</option>
              <option value="41" >Coltan</option>
              <option value="42" >Comer, Jugar, Reír</option>
              <option value="43" >Con las Manos Abiertas</option>
              <option value="44" >Conjuras Sexenales</option>
              <option value="46" >Conspiraciones</option>
              <option value="47" >Construyendo tu Grandeza</option>
              <option value="48" >Contra las Patrias</option>
              <option value="49" >Contrabando</option>
              <option value="45" >Conócete a ti Mismo y a los Demás</option>
              <option value="50" >Corazón Indio</option>
              <option value="51" >Cortar una Jacaranda</option>
              <option value="52" >Crónicas de Sucesos</option>
              <option value="53" >Cuando Llegaron los Bárbaros</option>
              <option value="54" >Cuatro Dublinenses</option>
              <option value="55" >Cuento Infinito</option>
              <option value="56" >Cuentos para Entender el Evangelio</option>
              <option value="57" >Cuerpo Limpio Mente Clara</option>
              <option value="58" >Cumbres Borrascosas</option>
              <option value="59" >Dalí y Yo : Una Historia Surreal</option>
              <option value="62" >De Sesos y Médula</option>
              <option value="60" >De lo Divino y de lo Humano</option>
              <option value="61" >De qué se Ríe la Barbie?</option>
              <option value="63" >Desatando a la Mujer Fuerte</option>
              <option value="64" >Designio</option>
              <option value="65" >Despues de la Tempestad</option>
              <option value="66" >Destino Criminal</option>
              <option value="67" >Diversos Estados tras la Muerte</option>
              <option value="68" >Doce Pasos Hacia Una Vida Compasiva</option>
              <option value="69" >Dos Mil y Una Noches</option>
              <option value="70" >Duendes: Guía de los Seres Mágicos de España</option>
              <option value="71" >Edgar Allan Poe:  Obras Maestras</option>
              <option value="72" >Educación Artística y Desarrollo Humano</option>
              <option value="75" >El Aroma de la Luna</option>
              <option value="77" >El Capital</option>
              <option value="79" >El Cerebro de Kennedy</option>
              <option value="81" >El Club de los Supervivientes</option>
              <option value="83" >El Conde de Montecristo</option>
              <option value="84" >El Corazon Helado</option>
              <option value="78" >El Cártel de los Sapos</option>
              <option value="80" >El Círculo Ámbar y los Mandalas de Avalon</option>
              <option value="82" >El Código Secreto de la Biblia III</option>
              <option value="85" >El Derrumbe</option>
              <option value="86" >El Diario Rojo de Carlota</option>
              <option value="87" >El Evangelio Según Pilatos</option>
              <option value="88" >El Factor Confianza</option>
              <option value="89" >El Fin del Imperio Romano</option>
              <option value="90" >El Frente</option>
              <option value="91" >El Genio que Todos Llevamos Dentro</option>
              <option value="92" >El Gran Reset</option>
              <option value="93" >El Invierno de Lisboa</option>
              <option value="95" >El Libro Negro</option>
              <option value="94" >El Libro del Destino</option>
              <option value="96" >El Lobo de Mar</option>
              <option value="97" >El Lugar del Hombre en el Cosmos</option>
              <option value="98" >El Mal, El Modelo K y la Barrick Gold</option>
              <option value="99" >El Mundo del Ayer</option>
              <option value="100" >El Origen Perdido</option>
              <option value="101" >El Pintor de Cracovia</option>
              <option value="102" >El Poder y el Delirio</option>
              <option value="103" >El Poder y la Gloria</option>
              <option value="104" >El Principio Estrella Puede Hacerlo Rico</option>
              <option value="105" >El Reino de Marcial Maciel</option>
              <option value="106" >El Resplandor de la Madera</option>
              <option value="107" >El Retorno de los Tigres de la Malasia</option>
              <option value="108" >El Retorno del Profesor de Baile</option>
              <option value="109" >El Secreto de la Felicidad Auténtica</option>
              <option value="110" >El Secreto de la Montaña Esmeralda</option>
              <option value="111" >El Silencio de los Claustros</option>
              <option value="112" >El Tesorero de la Catedral</option>
              <option value="113" >El Tesoro Perdido de los Templarios</option>
              <option value="73" >El almacén</option>
              <option value="76" >El arte de la Guerra para Narcos</option>
              <option value="74" >El Ángel Perdido</option>
              <option value="114" >El Último Cacique: El Poder por el Poder</option>
              <option value="115" >El Último Papa: Decadencia y Caída de la Iglesia de Roma</option>
              <option value="116" >En Defensa del Papa</option>
              <option value="117" >En la Ciudad de Oro y Plata</option>
              <option value="118" >Erotismo y Santidad</option>
              <option value="119" >Escuela y Pobreza</option>
              <option value="121" >Fiódor Dostoievski:  Obras Maestras</option>
              <option value="122" >Franz Kafka:  Obras Maestras</option>
              <option value="123" >Friedrich Nietzsche:  Obras Maestras</option>
              <option value="124" >Furtivos</option>
              <option value="125" >Genealogía de los Bárbaros</option>
              <option value="126" >Generación Bang: Los Nuevos Cronistas del Narco en México</option>
              <option value="127" >Gestinar con Imaginación</option>
              <option value="128" >Gordon Ramsay lo Hace Fácil</option>
              <option value="129" >Guerra</option>
              <option value="130" >H.P. Lovecraft:  Obras Maestras</option>
              <option value="131" >Hablemos Claro</option>
              <option value="132" >Hablemos de Ciencia</option>
              <option value="133" >Hermann Hesse:  Obras Maestras</option>
              <option value="134" >Hernán Cortés: Inventor de México</option>
              <option value="136" >Hidalgo: Entre la Virtud y el Vicio</option>
              <option value="137" >Hijas y Madres</option>
              <option value="138" >Historia de las Creencias e Ideas Religiosas</option>
              <option value="139" >Historia y Celebración</option>
              <option value="140" >Historias Secretas del Racismo en México</option>
              <option value="141" >Honorato de Balzac:  Obras Maestras</option>
              <option value="142" >Humano, Demasiado Humano</option>
              <option value="135" >Héroes</option>
              <option value="150" >Imperio de Papel</option>
              <option value="151" >Ixcel: Nacidos Guerreros,  Vendidos como Esclavos</option>
              <option value="152" >Julio Verne:  Obras Maestras</option>
              <option value="153" >La Agenda Pendiente </option>
              <option value="154" >La Arquitectura Sagrada de Washington</option>
              <option value="155" >La Bruja de los Destellos</option>
              <option value="156" >La Casa Chica</option>
              <option value="157" >La Clave Roseta</option>
              <option value="158" >La Cocina del Diablo</option>
              <option value="159" >La Confesión; Religión y Pederastia</option>
              <option value="160" >La Conjura</option>
              <option value="161" >La Conjura de Cortés</option>
              <option value="163" >La Democracia del Conocimiento</option>
              <option value="164" >La Despedida</option>
              <option value="165" >La Dulce Venganza de Celia Door</option>
              <option value="166" >La Emoción de las Cosas</option>
              <option value="167" >La Encrucijada</option>
              <option value="168" >La Era de las Turbulencias</option>
              <option value="169" >La Fábrica del Crimen</option>
              <option value="170" >La Fábula del crímen Ritual</option>
              <option value="172" >La Historia de Edgar Sawtelle</option>
              <option value="173" >La Iglesia del Silencio</option>
              <option value="174" >La Infancia de Jesus</option>
              <option value="175" >La Infiel</option>
              <option value="176" >La Ira de Dios</option>
              <option value="179" >La Luz Eterna de Juan Pablo II</option>
              <option value="178" >La Luz de Efraim: Cómo Corregir la Sexualidad a través de la Cábala</option>
              <option value="177" >La Lámpara de Aladino</option>
              <option value="180" >La Mente en Desarrollo</option>
              <option value="181" >La Modernidad Figitiva</option>
              <option value="182" >La Mujer que Buceó Dentro del Corazón del Mundo</option>
              <option value="183" >La Novela de la Momia</option>
              <option value="184" >La Nueva República</option>
              <option value="185" >La Piel de Zapa</option>
              <option value="186" >La Primera Noche</option>
              <option value="187" >La Quinta Mujer</option>
              <option value="188" >La Sabiduría de la Naríz</option>
              <option value="189" >La Sexta Esposa</option>
              <option value="190" >La Tejedora de Sombras</option>
              <option value="191" >La Trampa Dorada</option>
              <option value="192" >La Vida Emergente</option>
              <option value="193" >La Vida Mi Amante II</option>
              <option value="194" >La Voz y la Furia</option>
              <option value="162" >La cruz del Sur</option>
              <option value="171" >La gran Traición La guerra donde Perdimos la Mitad de México</option>
              <option value="195" >Las 11 Leyes Inmutables Creación de Marcas en Internet</option>
              <option value="196" >Las Chicas de Ames</option>
              <option value="197" >Las Claves del Liderazgo</option>
              <option value="198" >Las Crónicas de Narnia</option>
              <option value="199" >Las Enseñanzas de Carlos Castaneda</option>
              <option value="200" >Las Finanzas Secretas de la Iglesia</option>
              <option value="201" >Las Francesas Disfrutan Todo el Año y no Engordan</option>
              <option value="202" >Las Lágrimas del centauro</option>
              <option value="203" >Las Mujeres Matan Mejor</option>
              <option value="204" >Las Puertas de la Percepción</option>
              <option value="205" >Las Ventajas del Deseo</option>
              <option value="206" >Latido</option>
              <option value="207" >León Tolstoi:  Obras Maestras</option>
              <option value="208" >Los 10 Pecados Capitales del Markrting</option>
              <option value="209" >Los Aires Difíciles</option>
              <option value="210" >Los Corruptores</option>
              <option value="211" >Los Cuervos del Vaticano</option>
              <option value="213" >Los Golden Boys</option>
              <option value="214" >Los Intocables</option>
              <option value="215" >Los Libros del Gran Dictador</option>
              <option value="216" >Los Manuscritos del Mar Muerto</option>
              <option value="217" >Los Mil Mejores Chistes Que Conozco</option>
              <option value="218" >Los Mil Mejores Chistes Que Conozco y cien Más Buenos Aún</option>
              <option value="219" >Los Misterios de la Mujer</option>
              <option value="220" >Los Reyes Malditos III: Los Venenos de la Corona</option>
              <option value="221" >Los Reyes Malditos IV: La Ley de los Varones</option>
              <option value="212" >Los dos Mensajes del Islam</option>
              <option value="223" >Luna Negra</option>
              <option value="222" >Luna de Verano</option>
              <option value="224" >Luz Entre Ceniza</option>
              <option value="225" >M7T y La Historia de las Maravillas del Bosque</option>
              <option value="226" >Maonomics: La amarga Medicina China contra los escándalos</option>
              <option value="227" >Margarita Septién</option>
              <option value="228" >Marqués de Sade:  Obras Maestras</option>
              <option value="229" >Megacualidades de los Triunfadores</option>
              <option value="231" >Mindfulness Atención Plena</option>
              <option value="232" >Muerte en el Barranco de las Brujas</option>
              <option value="230" >México Siempre Fiel</option>
              <option value="233" >Narraciones Extraordinarias</option>
              <option value="234" >Olvidado Rey Gudú</option>
              <option value="235" >Orgullo y Prejuicio</option>
              <option value="236" >Oscar Wilde:  Obras Maestras</option>
              <option value="237" >Pecar como Dios Manda</option>
              <option value="238" >Perelandra un Viaje a Venus</option>
              <option value="239" >Piensa: Qué Significa ser Humano en un Mundo de Cambio</option>
              <option value="240" >Pilates Para Dummies</option>
              <option value="241" >Por Fuego, Por Agua</option>
              <option value="242" >Por la Mano del Padre</option>
              <option value="243" >Por los Viejos Tiempos</option>
              <option value="244" >Preso de la Luz</option>
              <option value="245" >Pruebas Falsas</option>
              <option value="246" >Puerto Libre</option>
              <option value="247" >Que Dios se Equivoque</option>
              <option value="248" >Qué Sería yo sin Ti</option>
              <option value="249" >Recuerdos Prestados</option>
              <option value="250" >Reflexiones Sobre la Construcción Social</option>
              <option value="251" >Rhett Butler:  Más allá de Lo Que El Viento se Llevó</option>
              <option value="252" >Rosa de Fuego</option>
              <option value="253" >Saborear</option>
              <option value="254" >Saldos de Guerra</option>
              <option value="255" >Saldos de la Revolución</option>
              <option value="256" >Sangre y Fuego</option>
              <option value="257" >Secretos Vaticanos</option>
              <option value="258" >Sexo de Emergencia</option>
              <option value="259" >Sin Nombre</option>
              <option value="260" >Sobre Vivir</option>
              <option value="261" >Surameris y el Cofre de los Secretos</option>
              <option value="262" >Tiempo Nublado</option>
              <option value="263" >Tierra Narca</option>
              <option value="264" >Tijuana Dream</option>
              <option value="265" >Todo Está Bien</option>
              <option value="266" >Todod somos Maestros</option>
              <option value="267" >Tony Guiteras  un Hombre Guapo y otros Personajes</option>
              <option value="268" >Topiltzin: La Leyenda del Lucero de la Mañana</option>
              <option value="269" >Trilogía de las Cruzadas I  del Norte a Jerusalén</option>
              <option value="270" >Tu Felicidad Depende de tu Actitud</option>
              <option value="271" >Un Corazón Invencible</option>
              <option value="272" >Un Siglo Decisivo</option>
              <option value="273" >Un Soplo en el Río</option>
              <option value="274" >Una Casa Junto al Lago</option>
              <option value="275" >Una Muerte Sospechosa</option>
              <option value="276" >Una Mujer Difícil</option>
              <option value="277" >Una Porción de Confianza</option>
              <option value="278" >Varón de Deseos</option>
              <option value="279" >Victoria</option>
              <option value="281" >Vida Verde: El Químico Guerra Responde</option>
              <option value="280" >Vida de Marquesa</option>
              <option value="282" >Viejo Siglo Nuevo</option>
              <option value="283" >Vivan los Lunes</option>
              <option value="284" >Volverse a Enamorar</option>
              <option value="285" >William Shakespeare:  Obras Maestras</option>
              <option value="286" >Yo, Lo Superfluo y el Error</option>
              <option value="287" >Zombie Planet</option>
              <option value="120" >Ética como Amor Propio</option>
              <option value="143" >Íconos Literarios:  Bram Stoker</option>
              <option value="144" >Íconos Literarios:  Guy de Maupassant</option>
              <option value="145" >Íconos Literarios:  Honorato de Balzac</option>
              <option value="147" >Íconos Literarios:  Lewis Carroll</option>
              <option value="148" >Íconos Literarios:  Nicolás Maquiavelo</option>
              <option value="149" >Íconos Literarios: Federico García Lorca</option>
              <option value="146" >íconos Literarios:  Las Mil y Una Noches</option>
            </select>
	      </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <button type="submit" class="btn btn-primary">Guardar</button>
	  </div>
	</form>

	<div class="page-header">
    <h4>Lista de Libros</h4>
  </div>
	<table class='table table-striped'>
		<tr>		
			<th width="100"><center>CLAVE</center></th>
			<th width="300"><center>AUTOR</center></th>
			<th width="800"><center>TÍTULO</center></th>
			<th width="300"><center>EDITORIAL</center></th>
			<th width="300"><center>PRECIO</center></th>
			<th width="300"><center>ELIMINAR</center></th>
		  <th width="300"><center>REPORTE</center></th>
		  <th width="300"><center>ESTADO</center></th>
		</tr>
			<tr>
			<td><center>1</center></td>
			<td><center>Quick</center></td>
			<td><center>102 Ideas para Enriquecer tu Vida sin Gastar Dinero</center></td>
			<td><center>Oniro</center></td>
			<td><center>$130.00</center></td>
			<td>
			  <center><a href="grupo.php?accion=delete_promotor&info1=1&info2=4" class="delete">
				<img src="../Images/cancelar.png">
			</a></center>
			</td>
			<td><center>
			  
			  <a href="grupo.php?accion=reporte&info1=1"> 
			  <img src="../Images/reporte.png"></a>
			</center></td>
			<td><center>En Espera</center></td>
		</tr>
			<tr>
			<td><center>2</center></td>
			<td><center>Halevi</center></td>
			<td><center>13 Años que Cambiaron al Mundo</center></td>
			<td><center>Ediciones B</center></td>
			<td><center>$100.00</center></td>
			<td>
			  <center><a href="grupo.php?accion=delete_promotor&info1=2&info2=4" class="delete">
				<img src="../Images/cancelar.png">
			</a></center>
			</td>
			<td><center>
			  
			  <a href="grupo.php?accion=reporte&info1=2"> 
			  <img src="../Images/reporte.png"></a>
			</center></td>
			<td><center>En Espera</center></td>
		</tr>
			<tr>
			<td><center>3</center></td>
			<td><center>López</center></td>
			<td><center>150 Años de Fotografía en España</center></td>
			<td><center>Lunwerg</center></td>
			<td><center>$200.00</center></td>
			<td>
			  <center><a href="grupo.php?accion=delete_promotor&info1=3&info2=4" class="delete">
				<img src="../Images/cancelar.png">
			</a></center>
			</td>
			<td><center>
			  
			  <a href="grupo.php?accion=reporte&info1=3"> 
			  <img src="../Images/reporte.png"></a>
			</center></td>
			<td><center>En Espera</center></td>
		</tr>
			<tr>
			<td><center>4</center></td>
			<td><center>Apio</center></td>
			<td><center>365 Tips para Cambiar tu Vida</center></td>
			<td><center>Diana</center></td>
			<td><center>$140.00</center></td>
			<td>
			  <center><a href="grupo.php?accion=delete_promotor&info1=4&info2=4" class="delete">
				<img src="../Images/cancelar.png">
			</a></center>
			</td>
			<td><center>
			  
			  <a href="grupo.php?accion=reporte&info1=4"> 
			  <img src="../Images/reporte.png"></a>
			</center></td>
			<td><center>En Espera</center></td>
		</tr>
			<tr>
			<td><center>5</center></td>
			<td><center>Sutherland</center></td>
			<td><center>50 Cosas que hay que saber de Literatura</center></td>
			<td><center>Ariel</center></td>
			<td><center>$130.00</center></td>
			<td>
			  <center><a href="grupo.php?accion=delete_promotor&info1=5&info2=4" class="delete">
				<img src="../Images/cancelar.png">
			</a></center>
			</td>
			<td><center>
			  
			  <a href="grupo.php?accion=reporte&info1=5"> 
			  <img src="../Images/reporte.png"></a>
			</center></td>
			<td><center>En Espera</center></td>
		</tr>
			<tr>
			<td><center>6</center></td>
			<td><center>Russell</center></td>
			<td><center>50 Cosas que hay que saber de Management</center></td>
			<td><center>Ariel</center></td>
			<td><center>$130.00</center></td>
			<td>
			  <center><a href="grupo.php?accion=delete_promotor&info1=6&info2=4" class="delete">
				<img src="../Images/cancelar.png">
			</a></center>
			</td>
			<td><center>
			  
			  <a href="grupo.php?accion=reporte&info1=6"> 
			  <img src="../Images/reporte.png"></a>
			</center></td>
			<td><center>En Espera</center></td>
		</tr>
	</table>

</body>
</html>
<?php }
}
