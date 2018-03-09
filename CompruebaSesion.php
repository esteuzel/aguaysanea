<?
ini_set("session.use_only_cookies","1");
ini_set("session.use_trans_sid","0");
session_name("datosuser");
session_start();
session_set_cookie_params(0, "/", $HTTP_SERVER_VARS["HTTP_HOST"], 0);
$autorized = $_SESSION['autorizado'];
if (isset($_GET['rubro']))
	$paginaActual = $_SERVER["PHP_SELF"]."?rubro=".$_GET["rubro"];
else
	{
	if (isset($_GET['cod']))
		$_GET["codigo"]=$_GET['cod'];
	$paginaActual = $_SERVER["PHP_SELF"]."?codigo=".$_GET["codigo"];
	}

if($autorized == 1) {
	$servidor = "localhost";
	$usuario = "dario";
	$password = "benz";
	$ddbb = "info_nueva";
	mysql_connect($servidor,$usuario,$password);
	mysql_select_db($ddbb);
		$sqlx = mysql_query("SELECT fechaCierre FROM sesiones WHERE idSesion=".$_SESSION['idS']);
		$rowx = mysql_fetch_array($sqlx);
		$cierre = $rowx["fechaCierre"];
		$ahorahoy = date("Y-n-j H:i:s");
		$segundos = (strtotime($ahorahoy)-strtotime($cierre));
			if($segundos > 300) {
				$strsql=mysql_query("DELETE FROM logact WHERE idUser=".$_SESSION['id']);
				session_destroy();
				$pagina = "rechazo.php?page=".$paginaActual;
				header("location: ".$pagina);
			} else {				
				$fechaFin = date("Y-n-j H:i:s");
				$sql=mysql_query("UPDATE sesiones SET fechaCierre = '".$fechaFin."' WHERE idUser=".$_SESSION['id']." AND fechaInicio = '".$_SESSION['fi']."'");
				$sql2=mysql_query("SELECT * FROM pagvisitadas WHERE idSesion=".$_SESSION['idS']." AND url='".$paginaActual."'");
					if (mysql_num_rows($sql2) == 0) {
						$sql3=mysql_query("INSERT INTO pagvisitadas (idSesion,url) VALUES (".$_SESSION['idS'].", '".$paginaActual."')");
					}
			}
} else {
	$pagina = "rechazo.php?page=".$paginaActual;
	header("location: ".$pagina);
}
?>