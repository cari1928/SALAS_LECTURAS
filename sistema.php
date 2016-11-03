<?php
session_start();
include('config.php');
define('PATHLIB',PATHAPP . LIB);
include(PATHLIB . 'adodb/adodb.inc.php');
include(PATHLIB.'smarty/libs/Smarty.class.php');
include(PATHLIB.'phpmailer/PHPMailerAutoload.php');

//clases del sistema
class Conexion
{
	function Conectar()
	{
		$this->server = DB_DBMS;
		$this->host = DB_HOST;
		$this->userdb = DB_USER;
		$this->passdb = DB_PASS;
		$this->database = DB_NAME;
		$this->DB=&ADONewConnection($this->server);
		$this->DB->PConnect($this->host,$this->userdb,$this->passdb,$this->database);
	}
}

class Sistema extends Conexion
{
	//varaiables
	var $rs = '';
	var $query='';
	var $rol = "";
	public $smarty;

	function combo($query,$selected=null)
	{
		$datosList=$this->DB->GetAll($query);
  		$nombrescolumnas=array_keys($datosList[0]);


  		$this->smarty->assign('selected',$selected);
  		$this->smarty->assign('nombrecolumna',$nombrescolumnas[1]);

  		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
  		$this->smarty->assign('datos',$datosList);
  		return $this->smarty->fetch('select.component.html');
	}

	function query($query)
	{
		$this->query=$query;
		$this->rs=&$this->DB->Execute($this->query);
		if($this->DB->ErrorMsg())
		{
			return false;
		}
		else
		return true;
	}

	function __construct()
	{
		parent::Conectar();
		$this->smarty = new Smarty();
	}

	function mostrartabla($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$cantidadcolumnas=$this->rs->_numOfFields;
		$cantidadregistros=$this->rs->_numOfRows;
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);

		$this->smarty->assign('cantidadcolumnas',$cantidadcolumnas);
		$this->smarty->assign('cantidadregistros',$cantidadregistros);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('muestratabla.html');
	}

	function tipoCuenta()
	{
		$sql="select nombre from usuarios where cveusuario='".$_SESSION['cveUser']."'";
		$datos_rs=$this->DB->GetAll($sql);
		$nombre=$datos_rs[0]['nombre'];
		$cadena= explode(" ",$nombre);
		if ($_SESSION['roles']== 'A')
		{
			return $cadena[0].' - Administrador';
		}
		if ($_SESSION['roles']== 'P')
		{
			return $cadena[0].' - Promotor';
		}
		if ($_SESSION['roles']== 'U')
		{
			return $cadena[0].' - Alumno';
		}
	}

	function showTable($query,$direccion,$option,$add,$table,$extra="")
	{

		$datos=$this->DB->GetAll($query);
		$tabla2="<table class='table table-striped'>";
		if ($add==1) {
			$tabla2.="<tr>
						<td colspan='4' align='right'>
							<a href='add".$direccion.".php?tabla=".$table."'><img src='../Images/add.png' /> </a>
						</td>
					</tr> </table>";

				$this->smarty->assign('tabla2',$tabla2);
		}

		if ($datos==false)
		{
			$tabla='<label>No se encuentran elementos </label>';
			return $tabla;
		}
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$cantidadcolumnas=$this->rs->_numOfFields;
		$cantidadregistros=$this->rs->_numOfRows;


		if ($this->rs->fields==false) {
			$tabla='No hay ningun dato';
			return $tabla;
		}
		$tabla="<table class='table table-striped'>";
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$cont=0;
		$cont2=0;

		//var_dump($datos);
		//die();
		 //<div>Iconos diseñados por <a href="http://www.freepik.com" title="Freepik">Freepik</a> desde <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> con licencia <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>

		while ( $cont< $cantidadregistros+1)
		{
			$tabla.='<tr>';
			while ( $cont2<$cantidadcolumnas)
			{

				if ($cont==0)
				{
					$tabla.='<th>';
					$tabla.=$nombrescolumnas[$cont2];
					$tabla.='</th>';

					if ($cont2== $cantidadcolumnas-1 && $option==1)
					{
						$tabla.='<th>';
						$tabla.="Eliminar";
						$tabla.='</th>';

						$tabla.='<th>';
						$tabla.="Actualizar";
						$tabla.='</th>';
					}
					if ($cont2== $cantidadcolumnas-1 && ($option==2 || $option==3) )
					{
						$tabla.='<th>';
						$tabla.="Eliminar";
						$tabla.='</th>';

						$tabla.='<th>';
						$tabla.="Actualizar";
						$tabla.='</th>';

						$tabla.='<th>';
						$tabla.="Mostrar";
						$tabla.='</th>';
					}

				}
				else
				{

						if($option!=4 && $option!=5)
						{
							$tabla.='<td>';
							$nomField = $nombrescolumnas[$cont2];
							$tabla.=$datos[$cont-1][$nomField];
							$tabla.='</td>';
						}
						else
						{
							if($cont2==0)
							{
								$nomField = $nombrescolumnas[0];
								$contenido=$datos[$cont-1][$nomField];

								if($option==4)
								{
									$nomField2 = $nombrescolumnas[1];
									$contenido2=$datos[$cont-1][$nomField2];
									$tabla.='<td> <a href="'.$direccion.'.php?info1='.$contenido.'&info2='.$contenido2.''.$extra.'">';
								}
								if($option==5)
									{
										if ($direccion=='grupoHistorial') {
										$contenido2=$datos[$cont-1]['cveusuario'];
										$tabla.='<td> <a href="'.$direccion.'.php?info='.$contenido2.'&info1='.$contenido.$extra.'">';		# code...
										}
										else
										$tabla.='<td> <a href="'.$direccion.'.php?info1='.$contenido.$extra.'">';
									}
								if($contenido!="GHOST")
								{
									$nomField = $nombrescolumnas[$cont2];
									$tabla.=$datos[$cont-1][$nomField];
								}
									$tabla.='</a></td>';

							}
							else
							{
								$tabla.='<td>';
								$nomField = $nombrescolumnas[$cont2];
								$tabla.=$datos[$cont-1][$nomField];
								$tabla.='</td>';
							}
						}
				}
				if ($cantidadcolumnas==$cont2+1 && $cont != 0 && $option==1)
				{
						$nomField = $nombrescolumnas[0];
						$nomField2 = $nombrescolumnas[1];
						$contenido=$datos[$cont-1][$nomField];
						$contenido2=$datos[$cont-1][$nomField2];
						$tabla.="<td> <a href='".$direccion.".php?info1=".$contenido."&info3=".$contenido2."'><img src='../Images/cancelar.png' /> </a></td>";
						$tabla.="<td> <a href='update".$direccion.".php?info2=".$contenido."&info3=".$contenido2."'><img src='../Images/edit.png' /> </a></td>";
				}
				if ($cantidadcolumnas==$cont2+1 && $cont != 0 && $option==2)
				{
						$nomField = $nombrescolumnas[0];
						$contenido=$datos[$cont-1][$nomField];
						$tabla.="<td> <a href='".$direccion.".php?info1=".$contenido."'><img src='../Images/cancelar.png' /> </a></td>";
						$tabla.="<td> <a href='update".$direccion.".php?info2=".$contenido."'><img src='../Images/edit.png' /> </a></td>";
						$tabla.="<td> <a href='".$extra.".php?info1=".$contenido."'><img src='../Images/mostrar.png' /> </a></td>"; //Se colo co el $extra epara redireccionar a grupos
				}

				if ($cantidadcolumnas==$cont2+1 && $cont != 0 && $option==3)
				{
						$nomField = $nombrescolumnas[0];
						$contenido=$datos[$cont-1][$nomField];
						$tabla.="<td> <a href='".$direccion.".php?info1=".$contenido."'><img src='../Images/cancelar.png' /> </a></td>";
						$tabla.="<td> <a href='update".$direccion.".php?info2=".$contenido."'><img src='../Images/edit.png' /> </a></td>";
						$tabla.="<td> <a href='show".$direccion.".php?info1=".$contenido."'><img src='../Images/mostrarL.png' /> </a></td>";
				}

				$cont2++;
			}
			$cont2=0;
			$cont++;
			$tabla.='</tr>';
		}
		$tabla.='</table>';
		return $tabla;
	}
//----------------------------------------------------------------------------------------
	function iniClases($ubicacion, $ruta)
	{
		$nombre=$this->tipoCuenta();
		$this->smarty->assign('nombrecuenta',$nombre);
		$this->smarty->assign('usuario',$_SESSION['nombre']);
		$this->smarty->setTemplateDir('../templates/'.$ubicacion.'/');

		$ruta = explode(" ", $ruta);
		$cad = "<div>";
		for($i = 0; $i < count($ruta); $i++)
		{
			if($i < count($ruta) - 1)
			{
				$cad.= '<label><a href="'.$ruta[$i].'.php">'.$ruta[$i].'</a></label> > ';
			}
			else
			{
				$cad.= '<label>'.$ruta[$i].'</label>';
			}
		}
		$cad.="</div>";
		$this->smarty->assign('ruta',$cad);

	}

	function smarty()
	{
		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir(PATHAPP.TEMPLATES);
		$this->smarty->setCompileDir(PATHAPP.TEMPLATES_C);
		$this->smarty->setCacheDir(PATHAPP.CACHE);
		$this->smarty->setConfigDir(PATHAPP.CONFIGS);
		$this->smarty->debugging = false;
		$this->smarty->caching = true;
		$this->smarty->cache_lifetime = 0;
	}

	public function getAllRecords($query){
        $this->query = $query;
        $this->all_last_records = $this->DB->GetAll($this->query);
        if($this->DB->ErrorMsg()){
            die($this->DB->ErrorMsg());
        }
    }

	function error($mensaje)
	{
		$this->smarty->assign('mensaje',$mensaje);
		$this->smarty->display('error.html');
	}

	function valida($correo)
	{
		if(!filter_var($correo, FILTER_VALIDATE_EMAIL)=== false) {
    		return true;
		}
		return false;
	}

	function validarEmail($email) //modificar
	{
		return is_numeric($email);
	}

	function grupos($rfc) //METODO PARA LA BARRA DE PROMOTOR MUESTR GRUPOS
	{
		$cantidad=strlen($rfc);
		if ($cantidad>8) {
			$sql="select horario, letra from lectura
							inner join abecedario on abecedario.cve = lectura.cveletra
							where cvepromotor='".$rfc."'";
		} else {
			$sql="select nombre, letra
							from lectura inner join abecedario on abecedario.cve = lectura.cveletra
													 inner join usuarios on lectura.cvepromotor = usuarios.cveusuario
						  where nocontrol='".$rfc."'";
		}

		$this->query($sql);
		$cantidadregistros=$this->rs->_numOfRows;

		if($cantidadregistros==0) {
			return "No existentes";
		} else {
			$cadena="";
			$datos_rs=$this->DB->GetAll($sql);
			$cadena.='<li><a href= "vergrupos.php">Ver todos</a></li> ';
			for ($i=0; $i < $cantidadregistros; $i++)
			{
				$cadena.='<li><a href= "grupo.php?info1='.$datos_rs[$i][0].'">'.$datos_rs[$i][1].' - '.$datos_rs[$i][0].'</a></li> ';
			}
			return $cadena;
		}

	}

	function evaluacion($grupo,$display="block",$promoaux="")
	{
		$cvep=$promoaux;
		if ($_SESSION['roles'] !='A') {
			$cvep=$_SESSION['cveUser'];
		}

		$query="select nombre,comprension,motivacion,reporte, tema,participacion,terminado from evaluacion inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol where cveletra in (select cve from abecedario where letra= '".$grupo."') and cvepromotor='".$cvep."' order by cveeval";

		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$cantidadcolumnas=$this->rs->_numOfFields;
		$cantidadregistros=$this->rs->_numOfRows;
		$tabla="<table class='table table-striped' width='500'>";
		$datos=$this->DB->GetAll($query);

		if (!isset($datos[0]["nombre"])) {
			$tabla="No hay alumnos inscritos";
			return $tabla;
		}

		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);
		$nocontroles=$this->DB->GetAll("select nocontrol from evaluacion inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol where cveletra in (select cve from abecedario where letra= '".$grupo."') and cvepromotor='".$cvep."' order by cveeval");
		$cveeval=$this->DB->GetAll("select cveeval from evaluacion inner join usuarios on usuarios.cveusuario = evaluacion.nocontrol where cveletra in (select cve from abecedario where letra= '".$grupo."') and cvepromotor='".$cvep."' order by cveeval");
		$cont=0;
		$cont2=0;
		while ( $cont< $cantidadregistros+1)
		{
			$tabla.="<tr> <form class='form-inline' action='grupo.php' method='post' enctype='multipart/form-data' accept-charset='utf-8'>";
			$tabla.='<input type="hidden"  name="datos[grupo]" value="'.$grupo.'">';
			while ( $cont2<$cantidadcolumnas)
			{

				if ($cont==0) {
					$tabla.='<th width="500">';
					$tabla.=$nombrescolumnas[$cont2];
					$tabla.='</th>';
				} else {
					$tabla.="<td width='500'> ";

					$nomField = $nombrescolumnas[$cont2];
					if ($cont2<1) {

						if ($display=='none') {
							$tabla.="<a href='updatealumnos.php?info2=".$nocontroles[$cont-1]['nocontrol']."'>".$datos[$cont-1][$nomField]."</a>";
						}
						else
							$tabla.=$datos[$cont-1][$nomField];
					}
					else
					{
						$tabla.='<div id="myprogress" style=" position: relative; width: 100%; height: 30px; background-color: #ddd;"> <div id="mybar" style="position: absolute; width: '.$datos[$cont-1][$nomField].'% ;height: 100%; background-color: #4caf50;"><div id="label" style="text-align: center; line-height: 30px; color: white;">'.$datos[$cont-1][$nomField].'%';
						$tabla.='</div></div></div></br> <center>  <input class="form-control" id="exampleInputPassword3" name="datos['.$nomField.']" id="producto" required value="'.$datos[$cont-1][$nomField].'" style="width:65px ; display:'.$display.';" maxlength="3"> </center>';
					}

					if($cont2 == $cantidadcolumnas -1)
					{
						$display2='none';
						$valorBoton="Cabiar";
						if ($display=='none') {
							$display2='block';
							$valorBoton="Eliminar";
							$tabla.='<input type="hidden"  name="datos[promotor]" value="'.$promoaux.'">';
						}
						$tabla.='</br><button type="submit" class="btn btn-default" value="'.$cveeval[$cont-1]['cveeval'].'" name="datos[cveeval]" style="display:'.$display2.'">'.$valorBoton.'</button>';
					}
					$tabla.="</td>";
				}
			$cont2++;
			}
			$cont2=0;
			$cont++;
			$tabla.='</form> </tr>';
		}

		$tabla.='</table>';
		return $tabla;
	}

	function checklogin() {
		if ($_SESSION['logueado'] == true)
	{
		if ($_SESSION['roles'] =='A')
		{
			header('Location: ../admin/index.php');
		}

		if ($_SESSION['roles'] =='P')
		{
			header('Location: ../promotor/index.php');
		}

		if ($_SESSION['roles'] =='U')
		{
			header('Location: ../alumno/index.php');
		}

	}
	else
	{
		header('Location: ../index.php');
	}
	}

	function login($email, $contrasena)
	{
		$msj='';
		$contrasena=md5($contrasena);
		$sql="select * from usuarios where pass='".$contrasena."' and cveusuario='".$email."'";

	$datos_rs=$this->DB->GetAll($sql);

		if(!(isset($datos_rs[0]['cveusuario'])))
		{
			 $datos_rs=$this->DB->GetAll("select * from usuarios where clave='".$contrasena."' and cveusuario='".$email."'");
			if (isset($datos_rs[0]['cveusuario']))
		    {
				    header('Location: cambiacontrasena.php?user='.$email);
			}
			else
			{
				return false;
			}

		}
		else
		{
			$this->query("select * from usuarios where pass='".$contrasena."' and cveusuario='".$email."'");
			if ($this->rs->_numOfRows>0)
			{

			 	$datos_rs=$this->DB->GetAll("select * from usuarios where pass='".$contrasena."' and cveusuario='".$email."'");
				$rol=$datos_rs[0]["rol"];
				$nombre=$datos_rs[0]["nombre"];
				$sql="update usuarios set clave = null where cveusuario='".$email."'";
				$this->query($sql);


				if ($rol=="U")
				{
				    // Crear las variables de sesión
				    $_SESSION['nombre'] = $nombre;
	                $_SESSION['cveUser'] = $email;
	                $_SESSION['logueado'] = true;
	                $_SESSION['roles'] = $rol;
	                header('Location: alumno');
	            }
	            if ($rol=="P")
	            {
				    // Crear las variables de sesión
				 	$_SESSION['nombre'] = $nombre;
	                $_SESSION['cveUser'] = $email;
	                $_SESSION['logueado'] = true;
	                $_SESSION['roles'] = $rol;
	                header('Location: promotor');
	            }
	            if ($rol=="A") {
				    // Crear las variables de sesión
	                $_SESSION['nombre'] = $nombre;
	                $_SESSION['cveUser'] = $email;
	                $_SESSION['logueado'] = true;
	                $_SESSION['roles'] = $rol;
	                header('Location: admin');
	            }

			}
		return true;
		}



	}

	public function logout()
	{
		unset($_SESSION);
    session_destroy();
  }

    function recuperaId($email){
		if ($this->validarEmail($email)) {

			$this->query("select id from usuario where email='$email'");
			while (!$this->rs->EOF) {
				$id = $this->rs->fields['id'];
				$this->rs->MoveNext();
			}return $id;

		}else{
			$this->error('error al ingresar el mail');
		}
	}

    function generaContrasena()
	{
		$num1 = rand(1, 1000000);
		$num1 = md5($num1);
		$num2 = rand(1, 1000000);
		$num2 = sha1($num2);
		$strnum = $num1.$num2;
		$con = strtolower(md5($strnum));
		return substr($con, 0, 8);
	}

	function sendEmail ($destino, $nombre, $asunto, $mensaje)
	{
		$mail = new PHPMailer();
		$mail->IsSMTP();
		try {
				  $mail->SMTPDebug  = MAIL_SMTPDEBUG;                     // enables SMTP debug information (for testing)
				  $mail->SMTPAuth   = MAIL_SMTPAUTH;                  // enable SMTP authentication
				  $mail->SMTPSecure = MAIL_SMTPSECURE;                 // sets the prefix to the servier
				  $mail->Host       = MAIL_HOST;      // sets GMAIL as the SMTP server
				  $mail->Port       = MAIL_PORT;                   // set the SMTP port for the GMAIL server
				  $mail->Username   = MAIL_USERNAME;  // GMAIL username
				  $mail->Password   = MAIL_PASS;            // GMAIL password
				  //$mail->AddReplyTo('name@yourdomain.com', 'First Last');
				  $mail->AddAddress($destino, $nombre);
				  $mail->SetFrom(MAIL_USERNAME, 'Salas Lectura');
				  $mail->Subject = $asunto;
				  $mail->AltBody = $mensaje; // optional - MsgHTML will create an alternate automatically
				  $mail->MsgHTML($mensaje);
				  //$mail->AddAttachment('images/phpmailer.gif');      // attachment
				  $mail->Send();
				  $this->smarty->display('templates/admin/index.html');
				  echo "<center><h3>Revisa tu correo electronico</h3></center>";
			} catch (phpmailerException $e) {
				  echo $e->errorMessage(); //Pretty error messages from PHPMailer
			} catch (Exception $e) {
				  echo $e->getMessage(); //Boring error messages from anything else!
			}
	}

	function muestraAdmin($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$cantidadcolumnas=$this->rs->_numOfFields;
		$cantidadregistros=$this->rs->_numOfRows;
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);

		$this->smarty->assign('cantidadcolumnas',$cantidadcolumnas);
		$this->smarty->assign('cantidadregistros',$cantidadregistros);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('muestraAdmin.html');
	}


	function muestraUsuarios($query)
	{
		$this->DB->SetFetchMode(ADODB_FETCH_ASSOC);
		$this->query($query);
		$cantidadcolumnas=$this->rs->_numOfFields;
		$cantidadregistros=$this->rs->_numOfRows;
		$nombrescolumnas=array_keys($this->rs->fields);
		$datos=$this->DB->GetAll($query);

		$this->smarty->assign('cantidadcolumnas',$cantidadcolumnas);
		$this->smarty->assign('cantidadregistros',$cantidadregistros);
		$this->smarty->assign('nombrescolumnas',$nombrescolumnas);
		$this->smarty->assign('datos',$datos);
		return $this->smarty->fetch('muestraUsuarios.html');
	}

	function combo_P ($query,$name)
	{
		$this->query($query);
		$campos = $this->DB->GetAll($query);
		$this->smarty->assign('name',$name);
		$this->smarty->assign('campos',$campos);
		return $this->smarty->fetch('agregaProducto.html');
	}

//----------------------------------------------------------------------------------------
	function combo_M ($query,$name)
	{
		$this->query($query);
		$campos = $this->DB->GetAll($query);
		$this->smarty->assign('name',$name);
		$this->smarty->assign('campos',$campos);
		return $this->smarty->fetch('agregaMarca.html');
	}

//----------------------------------------------------------------------------------------
	function combo_C ($query,$name)
	{
		$this->query($query);
		$campos = $this->DB->GetAll($query);
		$this->smarty->assign('name',$name);
		$this->smarty->assign('campos',$campos);
		return $this->smarty->fetch('agregaCliente.html');
	}
//-----------------------------------------------------------------------------------------
	public function guarda_foto_empleado($id,$foto){
				$encoded = $foto;
			    $encoded = str_replace(' ', '+', $encoded);
			    $encoded = str_replace('data:image/jpeg;base64,', '', $encoded);
			    $image = base64_decode($encoded);
			    //para mysql
			    $image = mysql_escape_string($image);
			    //par postgres
			    //$image = pg_escape_bytea($image); y -> '{$image}'
			    $sql = " 		 UPDATE  empleado
			                     SET foto = '$image'
			                     WHERE id_empleado = $id ";
			    //echo $sql;
				$this->query($sql);
	}
//----------------------------------------------------------------------------------------
function validarContrasena($contrasena){
		if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $contrasena)) {
    		return (true);
		}
		else{
    		return (false);
		}
	}

}
//----------------------------------------------------------------------------------------
function recuperaid($email)
	{
		if ($this->validarEmail($email)) {
			$this->query("select e.id_empleado
						from empleado e left join usuario u on e.id_empleado = u.id
						where u.email='$email'");
			while (!$this->rs->EOF) {
 				$id = $this->rs->fields['id_empleado'];
   				$this->rs->MoveNext();
			}
			return ($id);
		}
	}

//instanciamos web
$web = new Sistema;
$web->smarty();
?>
