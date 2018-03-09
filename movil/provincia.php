<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Informes - Agua</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
body{
	background: #333333;
	color: white;
}
#container{
	background: white;
	margin: 0 auto;
	width: 1024px;
}
#menu{
	background: black;
	font-family: Verdana;
	font-size:12px;
	font-weight: bold;
}
#menu ul{
	margin: 0;
	padding: 0;
}
#menu ul li{
	display: inline-block;
	margin: 0;
	padding: 10px;
}
#menu a{
	color: white;
}
#contenido{
	color: black;
	text-align: center;
}
.post{
	display: inline-block;
	margin: 30px 10px;
	width: 300px;
}
.post-texto{
	text-align: left;
}
.post-titulos{
	text-align: left;
	font-family: Verdana;
	font-size: 15px;
	font-weight: bold;
	text-decoration: none;
	color: #000;
}
.post-diario{
	text-align: left;
	font-family: Verdana;
	font-size: 11px;
	font-weight: bold;
	text-decoration: none;
	color: #999;
}			
@media only screen and (min-width: 768px) and (max-width: 1024px){
	#container{
		width: 100% !important;
	}
	.post{
		margin: 30px 10px;
		width: 80% !important;
	}
}
@media only screen and (min-width: 480px) and (max-width: 763px){
	#container{
		width: 100% !important;
	}
	.post{
		margin: 10px !important;
		width: 90% !important;
	}
	.post-imagen{
		display: inline-block;
		vertical-align: top;
		width: 49%;
	}
	.post-texto{
		display: inline-block;
		padding: 0  0 0 10px;
		width: 49%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		-o-box-sizing: border-box;
		box-sizing: border-box;
	}
	#menu ul li{
		padding: 10px 10% !important;
	}
}
@media only screen and (min-width: 320px) and (max-width: 479px){
	#container{
		width: 100% !important;
	}
	.post{
		border-bottom: solid 1px #ccc;
		margin: 10px !important;
		width: 94% !important;
	}
	.post-imagen{
		display: none !important;
	}
	#menu ul li{
		padding: 15px 5% !important;
	}
}
</style>
</head>

<body>
<?
function limpiar_caracteres_especiales($s){
//$s = utf8_decode($s);

$s = str_replace(array('á','à','â','ã','ª'),"&aacute;",$s);
$s = str_replace(array('Á','À','Â','Ã'),"&Aacute;",$s);
$s = str_replace(array('Í','Ì','Î'),"&Iacute;",$s);
$s = str_replace(array('í','ì','î'),"&iacute;",$s);
$s = str_replace(array('é','è','ê'),"&eacute;",$s);
$s = str_replace(array('É','È','Ê'),"&Eacute;",$s);
$s = str_replace(array('ó','ò','ô','õ','º'),"&oacute;",$s);
$s = str_replace(array('Ó','Ò','Ô','Õ'),"&Oacute;",$s);
$s = str_replace(array('ú','ù','û'),"&uacute;",$s);
$s = str_replace(array('Ú','Ù','Û'),"&Uacute;",$s);
$s = str_replace("ç","c",$s);
$s = str_replace("Ç","C",$s);
$s = str_replace("[ñ]","&ntilde;",$s);
$s = str_replace("[ñ]","#241;",$s);
$s = str_replace("[Ñ]","&Ntilde",$s);
$s = str_replace("[-]","&shy;",$s);
$s = str_replace("[-]","&ndash;;",$s);

return $s;
} 

?>
<div id="container">

		<div id="menu">
			<ul>
				<li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/rubro.php?rubro=agua">Agua</a></li>
				<li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/provincia.php">Su Provincia</a></li>
			    <li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/rubro.php?rubro=medio ambiente">Medio Ambiente</a></li>
				<li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/boletines.php">Prensa</a></li>
                <li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/bo.php">B.O.</a></li>
                <li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/busca.php">Buscador</a></li>
			</ul>
		</div>
	  	<div id="contenido">
	  		<div class="post">
		  		<div class="post-titulos">P&aacute;gina de ejemplo (Bs. As.) - Solicite la provincia de su inter&eacute;s<br /><br />	
		  			<?
						mysql_connect("localhost","dario","benz");
						$codigo = isset($_GET["codigo"]) ? $_GET["codigo"]:"";
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE provincia='Buenos Aires' and rubro='agua' ORDER BY provorder ASC");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                        <? echo '<a class="post-titulos" a href=full.php?codigo='.$row["Id"].'>';?> <? echo limpiar_caracteres_especiales (''.$row["titulo"].'');?><br />
						<div class="post-diario"><? echo ''.$row["diario"].'';?> - <? echo ''.$row["ciudad"].'';?> - <? echo $day . '-' . $month . '-' . $year;?></div><br />
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  	</div>	
            </div>
	</div>
</body>
</html>