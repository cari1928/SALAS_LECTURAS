<?php 
include("../sistema.php");

if ($_SESSION['roles'] =='P')
{
	$web->iniClases('promotor', "index grupos");
	$grupos= $web->grupos($_SESSION['cveUser']);
	$web->smarty->assign('grupos',$grupos);
	$sql="select letra from abecedario where cve in (select cveletra from lectura where cvepromotor='".$_SESSION['cveUser']."')";
	$tabla=$web->showTable($sql,"grupo",5,1,'grupos');
	$web->smarty->assign('tabla',$tabla);
	$web->smarty->display('vergrupos.html');
}
else
{
	$web->checklogin();	
}
?>