<?php
include "../sistema.php";

if ($_SESSION['roles'] != 'P') {
    $web->checklogin();
}

$web->iniClases('promotor', "index grupos redactar");
$grupos = $web->grupos($_SESSION['cveUser']);
$web->smarty->assign('grupos', $grupos);

$accion = "";
$para   = "";

$periodo = $web->periodo();
if ($periodo == "") {
  $web->simple_message('danger', 'No hay periodo actual');
  $web->smarty->display('redacta.html');
  die();
}

// if (!isset($_GET['info1']) && !isset($_GET['info2'])) {
//     header('Location: grupos.php');
// }

if (isset($_GET['info'])) {
    $para = $_GET['info'];
}

if (isset($_GET['periodo'])) {
    $periodo = $_GET['periodo'];
}

if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
}

switch ($accion) {

    case 'redactar':
        $datos = $web->DB->GetAll("select cve from abecedario where letra='" . $para . "'");
        $letra = $datos[0]['cve'];
        $datos = $web->DB->GetAll("SELECT * FROM lectura WHERE cveperiodo = " . $periodo . " and cveletra = " . $letra . " and cvepromotor='" . $_SESSION['cveUser'] . "'");
        
        if (isset($datos[0])) {
            $web->smarty->assign('para', $para);
            $web->smarty->assign('cveperiodo', $periodo);
            $web->smarty->display('redacta.html');
            exit();
        }
        $web->smarty->assign('msj', "No existe el destinatario o no tienes permiso para mandar este mensaje");
        $web->smarty->display('redacta.html');
        exit();
        break;

    case 'redactarI':
        $receptor = "";
        if (isset($_GET['info2'])) {
            $receptor = $_GET['info2'];
        } else {
            $web->smarty->assign('msj', "Falta información");
            $web->smarty->display('redacta.html');
            die();
        }

        $grupo = "";
        if (isset($_GET['info1'])) {
            $grupo = $_GET['info1'];
        }

        $sql   = "select cveusuario from usuarios where cveusuario='" . $receptor . "'";
        $datos = $web->DB->GetAll($sql);

        if (isset($datos[0])) {
            $sql = "select * from lectura
            inner join abecedario on abecedario.cve=lectura.cveletra
            where abecedario.letra='" . $grupo . "'
                and lectura.cveperiodo=" . $periodo;
            $datos_g = $web->DB->GetAll($sql);

            if (isset($datos_g[0])) {
                // echo "receptor: " . $receptor . "<br>";
                // echo "accion: " . $accion . "<br>";
                $web->smarty->assign('receptor', $receptor);
                $web->smarty->assign('accion', $accion);

                if (isset($periodo)) {
                    // echo "periodo: " . $periodo . "<br>";
                    $web->smarty->assign('cveperiodo', $periodo);
                }

                $sql   = "select cve from abecedario where letra='" . $grupo . "'";
                $datos = $web->DB->GetAll($sql);

                // echo "grupo: ";
                // print_r($datos);
                $web->smarty->assign('grupo', $datos[0]['cve']);
                $web->smarty->display('redacta.html');
                die();
            }
        }

        $web->smarty->assign('msj', "No existe el destinatario o no tienes permiso para mandar este mensaje");
        $web->smarty->display('redacta.html');
        exit();
        break;

    case 'enviar':
        // $web->debug($_GET);
        $letra = "";
        $para  = "";
        if (isset($_GET['para'])) {
            $letra = $_GET['para'];
        }

        if (isset($_GET['cveperiodo'])) {
            $periodo = $_GET['cveperiodo'];
        }

        $datos = $web->DB->GetAll("select cve from abecedario where letra='" . $letra . "'");
        $letra = $datos[0]['cve'];
        if (isset($_POST)) {
            $sql   = "insert into msj (introduccion,descripcion,tipo,emisor,fecha,expira,cveletra,cveperiodo) values ('" . $_POST['introduccion'] . "','" . $_POST['descripcion'] . "','G','" . $_SESSION['cveUser'] . "','" . date('Y-m-j') . "','" . $_POST['expira'] . "'," . $letra . "," . $periodo . ")";
            $datos = $web->DB->GetAll($sql);
        } else {
            $web->smarty->assign('msj', "No se pudo mandar el mensaje");
            $web->smarty->display('redacta.html');
        }
        break;

    case 'enviarI':
        // $web->debug($_GET);
        $receptor = "";
        $cveletra = "";
        if (isset($_GET['receptor'])) {
            $receptor = $_GET['receptor'];
        }

        if (isset($_GET['para'])) {
            $cveletra = $_GET['para'];
        }

        $sql = "select * from lectura 
        inner join laboral on laboral.cveletra=lectura.cveletra
        inner join usuarios on laboral.cvepromotor=usuarios.cveusuario 
        where laboral.cvepromotor='" . $_SESSION['cveUser'] . "' and lectura.nocontrol='" . $receptor . "'";
        $datos = $web->DB->GetAll($sql);

        // die($sql);
        // $web->debug($datos);
        // die(print_r($_POST));

        if (isset($datos[0])) {
            if (isset($_POST)) {
                $sql = "insert into msj (introduccion,descripcion,tipo,emisor,fecha,expira,receptor) values ('" . $_POST['introduccion'] . "','" . $_POST['descripcion'] . "','I','" . $_SESSION['cveUser'] . "','" . date('Y-m-j') . "','" . $_POST['expira'] . "','" . $receptor . "')";
                // die($sql);
                $datos = $web->DB->GetAll($sql);

            } else {
                $web->smarty->assign('msj', "No se pudo mandar el mensaje");
                $web->smarty->display('redacta.html');
            }
        } else {
            $web->smarty->assign('msj', "No existe el destinatario o no tienes permiso para mandar este mensaje");
        }
        break;

    case 'ver':
        $grupo   = "";
        $periodo = "";
        if (isset($_GET['info'])) {
            $grupo = $_GET['info'];
        }

        if (isset($_GET['periodo'])) {
            $periodo = $_GET['periodo'];
        }

        if ($web->periodo($web) != "") {
            $sql   = "select cvemsj, introduccion,tipomsj.descripcion as tipo,e.nombre,fecha, expira, abecedario.letra as letra from msj inner join usuarios e on e.cveusuario=msj.emisor inner join tipomsj on tipomsj.cvetipomsj=msj.tipo inner join abecedario on msj.cveletra=abecedario.cve where msj.tipo='G' and abecedario.letra='" . $grupo . "' and msj.cveperiodo=" . $periodo . "and emisor='" . $_SESSION['cveUser'] . "' and expira>='" . date('Y-m-j') . "'";
            $datos = $web->DB->GetAll($sql);
            $web->smarty->assign('datos', $datos);

            $sql    = "select cvemsj, introduccion,tipomsj.descripcion as tipo,e.nombre as nombree, r.nombre as nombrer,fecha, expira from msj inner join usuarios e on e.cveusuario=msj.emisor inner join tipomsj on tipomsj.cvetipomsj=msj.tipo inner join usuarios r on msj.receptor=r.cveusuario where emisor='" . $_SESSION['cveUser'] . "' and expira>='" . date('Y-m-j') . "' and tipomsj.cvetipomsj= 'I'";
            $datosI = $web->DB->GetAll($sql);
            $web->smarty->assign('datosI', $datosI);
        } else {
            $web->smarty->assign('datos', "No se puede acceder a los mensajes");
        }
        $web->smarty->display('mensajes.html');
        exit();
        break;
}

header("Location: grupos.php");
