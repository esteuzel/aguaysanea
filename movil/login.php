<?php
ini_set("session.use_only_cookies","1");
ini_set("session.use_trans_sid","0");
$user = $_POST["user"];
$pass = $_POST["pwd"];

$servidor = "localhost";
$usuario = "dario";
$password = "benz";
$ddbb = "info_nueva";
mysql_connect($servidor,$usuario,$password);
mysql_select_db($ddbb);
session_name("datosuser");
session_start();
session_set_cookie_params(0, "/", $HTTP_SERVER_VARS["HTTP_HOST"], 0);

//* COMPRUEBO USUARIO
$sql = mysql_query("SELECT idUser,nombre,nivel,page FROM usuarios WHERE user='".$user."' AND clave='".$pass."'");
	
	//* SI USUARIO EXISTE
	if (mysql_num_rows($sql) != 0) {
		$row = mysql_fetch_array($sql);
		$_SESSION['id'] = $row["idUser"];
		$_SESSION['identificador'] = $row["idUser"];
		$_SESSION['nom'] = $row["nombre"];
		$_SESSION['level'] = $row["nivel"];
		$pagina2 = "http://www.informesdiarios.com.ar/".$row["page"];
		
		//* COMPRUEBO SI USUARIO ESTÁ LOGUEADO
		$ssql = mysql_query("SELECT idSesion FROM logact WHERE idUser=".$_SESSION['id']." AND logueado = 1");
			
			//* SI USUARIO ESTA LOGUEADO
			if (mysql_num_rows($ssql) != 0) {
				$srow = mysql_fetch_array($ssql);
				
				//* COMPRUEBO TIEMPO Q' PASÓ DESDE ULTIMO ACC. HASTA AHORA
				$sssql = mysql_query("SELECT fechaCierre FROM sesiones WHERE idSesion=".$srow["idSesion"]);
				$ssrow = mysql_fetch_array($sssql);
				$cierre = $ssrow["fechaCierre"];
				$ahorahoy = date("Y-n-j H:i:s");
				$segundos = (strtotime($ahorahoy)-strtotime($cierre));
				
					//* SI PASARON MAS DE 5 MINUTOS
					if($segundos > 420) {
					
						//* ELIMINO EL LOG ACTUAL
						$strsql=mysql_query("DELETE FROM logact WHERE idUser=".$_SESSION['id']);
												
						//* CREO UN LOG NUEVO
						$ssql2 = mysql_query("INSERT INTO logact (idUser,idSesion,logueado) VALUES (".$_SESSION['id'].",0,1)");
						$ip = getenv('REMOTE_ADDR');
						$navegaso = getenv('HTTP_USER_AGENT');
						$navega = str_replace("\'","&#39;",$navegaso);
						$navega = str_replace('\"',"&quot;",$navega);
						$fechaInicio = date("Y-n-j H:i:s");
						$_SESSION['autorizado'] = 1;
						$_SESSION['fi'] = $fechaInicio;
						
						//* REGISTRO SESION
						$ssql3 = mysql_query("INSERT INTO sesiones (idUser,fechaInicio,ip,navegador,fechaCierre) VALUES (".$_SESSION['id'].",'".$fechaInicio."','".$ip."','".$navega."','".$fechaInicio."')");
						$ssql4 = mysql_query("SELECT idSesion FROM sesiones WHERE idUser=".$_SESSION['id']." AND fechaInicio = '".$fechaInicio."'");
						$row4 = mysql_fetch_array($ssql4);
						$_SESSION['idS'] = $row4["idSesion"];
						$ssql5 = mysql_query("UPDATE logact Set idSesion =".$_SESSION['idS']." WHERE idUser=".$_SESSION['id']);
						$pagina = $_POST["url"];
						
							//* REDIRECCIONO AL USUARIO ACEPTADO
							if($pagina != "") {
								header("location: ".$pagina);
							} else {
								header("location: ".$pagina2);
							}
					
					//* SI HAY UN USER LOGUEADO ACTUALMENTE Y NO PASARON 5 MIN. DE INACT.
					//* NO PERMITO MLTILOGIN
					} else { 
						echo "No se permite Multilogin.";
							session_destroy();
					}
					
			//* SI EL USUARIO NO ESTÁ LOGUEADO
			} else {
			
				//* INSERTO NUEVO LOG
				$ssql2 = mysql_query("INSERT INTO logact (idUser,idSesion,logueado) VALUES (".$_SESSION['id'].",0,1)");
					$ip = getenv('REMOTE_ADDR');
					$navegaso = getenv('HTTP_USER_AGENT');
					$navega = str_replace("\'","&#39;",$navegaso);
					$navega = str_replace('\"',"&quot;",$navega);
					$fechaInicio = date("Y-n-j H:i:s");
					$_SESSION['autorizado'] = 1;
					$_SESSION['fi'] = $fechaInicio;
					
					//* REGISTRO SESION
					$ssql3 = mysql_query("INSERT INTO sesiones (idUser,fechaInicio,ip,navegador,fechaCierre) VALUES (".$_SESSION['id'].",'".$fechaInicio."','".$ip."','".$navega."','".$fechaInicio."')");
					$ssql4 = mysql_query("SELECT idSesion FROM sesiones WHERE idUser=".$_SESSION['id']." AND fechaInicio = '".$fechaInicio."'");
					$row4 = mysql_fetch_array($ssql4);
					$_SESSION['idS'] = $row4["idSesion"];
					$ssql5 = mysql_query("UPDATE logact Set idSesion =".$_SESSION['idS']." WHERE idUser=".$_SESSION['id']);
					$pagina = $_POST["url"];
					
						//* REDIRECCIONO USUARIO ACEPTADO
						if($pagina != "") {
							header("location: ".$pagina);
						} else {
							header("location: ".$pagina2);
						}
				}
			
	//* SI USUARIO NO EXISTE
	} else {
		session_destroy();
		echo "Usuario no reconocido por el sistema";
	}
?>