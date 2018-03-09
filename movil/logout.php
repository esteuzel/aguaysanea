<?
session_name("datosuser");
session_start();
$servidor = "localhost";
$usuario = "agraria";
$password = "benz";
$ddbb = "sintesis";
mysql_connect($servidor,$usuario,$password);
mysql_select_db($ddbb);

$fechaFin = date("Y-n-j H:i:s");
$sql=mysql_query("UPDATE sesiones SET fechaCierre = '".$fechaFin."' WHERE idUser=".$_SESSION['id']." AND fechaInicio = '".$_SESSION['fi']."'");
$sql2=mysql_query("DELETE FROM logact WHERE idUser=".$_SESSION['id']);
session_destroy();
$pagina = "/rechazo.php";
header("location: ".$pagina);
?>