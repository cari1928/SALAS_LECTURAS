<?php
include "../sistema.php";
if (isset($_SESSION['roles'])) {
    if ($_SESSION['roles'] == 'P') {
        $web->iniClases('promotor', "index vergrupos redactar");
        $grupos = $web->grupos($_SESSION['cveUser']);
        $web->smarty->assign('grupos', $grupos);
        $accion = "";
        $para   = "";
        $perodo = "";
        if (isset($_GET['info']) || isset($_GET['para'])) {
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
                    if (isset($_GET['receptor'])) {
                        $receptor = $_GET['receptor'];
                    }

                    $grupo = "";
                    if (isset($_GET['grupo'])) {
                        $grupo = $_GET['grupo'];
                    }

                    $periodo = "";
                    if (isset($_GET['periodo'])) {
                        $periodo = $_GET['periodo'];
                    }

                    $datos = $web->DB->GetAll("select cveusuario from usuarios where cveusuario='" . $receptor . "'");
                    if (isset($datos[0])) {
                        $datos_g = $web->DB->GetAll("select * from lectura inner join abecedario on abecedario.cve=lectura.cveletra where abecedario.letra='" . $grupo . "' and lectura.cveperiodo=" . $periodo);
                        if (isset($datos_g[0])) {
                            $web->smarty->assign('receptor', $receptor);
                            $web->smarty->assign('accion', $accion);
                            if (isset($periodo)) {
                                $web->smarty->assign('cveperiodo', $periodo);
                            }

                            $web->smarty->assign('grupo', $datos = $web->DB->GetAll("select cve from abecedario where letra='" . $grupo . "'"));
                            $web->smarty->display('redacta.html');
                            exit();
                        }
                    }
                    $web->smarty->assign('msj', "No existe el destinatario o no tienes permiso para mandar este mensaje");
                    $web->smarty->display('redacta.html');
                    exit();
                    break;
                case 'enviar':
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
                    $receptor = "";
                    $periodo  = "";
                    $cveletra = "";
                    if (isset($_GET['receptor'])) {
                        $receptor = $_GET['receptor'];
                    }

                    if (isset($_GET['periodo'])) {
                        $periodo = $_GET['periodo'];
                    }

                    if (isset($_GET['para'])) {
                        $cveletra = $_GET['para'];
                    }

                    $datos = $web->DB->GetAll("select * from lectura inner join usuarios on lectura.cvepromotor=usuarios.cveusuario where lectura.cvepromotor='" . $_SESSION['cveUser'] . "' and lectura.nocontrol='" . $receptor . "'");
                    die("select * from lectura inner join usuarios on lectura.cvepromotor=usuarios.cveusuario where lectura.cvepromotor='" . $_SESSION['cveUser'] . "' and lectura.nocontrol='" . $receptor . "'");
                    if (isset($datos[0])) {
                        if (isset($_POST)) {
                            $sql = "insert into msj (introduccion,descripcion,tipo,emisor,fecha,expira,receptor) values ('" . $_POST['introduccion'] . "','" . $_POST['descripcion'] . "','I','" . $_SESSION['cveUser'] . "','" . date('Y-m-j') . "','" . $_POST['expira'] . "','" . $para . "')";
                            // die("insert into msj (introduccion,descripcion,tipo,emisor,fecha,expira,receptor) values ('".$_POST['introduccion']."','".$_POST['descripcion']."','I','".$_SESSION['cveUser']."','".date('Y-m-j')."','".$_POST['expira']."','".$para."')");
                            $datos = $web->DB->GetAll($sql);
                        } else {
                            $web->smarty->assign('msj', "No se pudo mandar el mensaje");
                            $web->smarty->display('redacta.html');
                        }
                    } else {
                        $web->smarty->assign('msj', "No existe el destinatario o no tienes permiso para mandar este mensaje");
                    }

                    //$web->smarty->display('redacta.html');
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

                    if (periodo($web) != "") {
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
            header("Location: vergrupos.php");
        } else {
            header('Location: vergrupos.php');
        }
    }
} else {
    header('Location: ../index.php');
}

function periodo($web)
{
    $sql      = "select * from periodo";
    $datos_rs = $web->DB->GetAll($sql);

    $date     = getdate();
    $fechaAct = $date['year'] . "-" . $date['mon'] . "-" . $date['mday'];
    $date1    = new DateTime($fechaAct);

    $cont = 0;

    while ($cont < count($datos_rs)) {
        $date2 = new DateTime($datos_rs[$cont]['fechainicio']);
        $date3 = new DateTime($datos_rs[$cont]['fechafinal']);

        if ($date1 >= $date2 && $date1 <= $date3) {
            $cveperiodo = $datos_rs[$cont]['cveperiodo'];
        }
        $cont++;
    }
    if (isset($cveperiodo)) {
        $sql     = "select fechainicio,fechafinal from periodo where cveperiodo='" . $cveperiodo . "'";
        $datos   = $web->DB->GetAll($sql);
        $periodo = "El periodo es: " . $datos[0]['fechainicio'] . " a " . $datos[0]['fechafinal'];

        $web->smarty->assign('periodo', $periodo);
        return $cveperiodo;
    } else {
        $web->smarty->assign('periodo', "No hay periodos actuales");
        return "";
    }

}
