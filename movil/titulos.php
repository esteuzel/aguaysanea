<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
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
	font-size: 12px;
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
		vertical-align: central;
	}
	.post-imagen{
		display: none !important;
	}
	#menu ul li{
		padding: 12px 5% !important;
	}
}
</style>
</head>

<body>
<div id="container">

		<div id="menu">
			<ul>
            <li><a href="http://www.sintesisagraria.com/movil/inicio.php"><img src="imgs/home.png" height="26" width="26" border="0"></a></li>
				<li><a href="http://www.sintesisagraria.com/movil/rubro.php?rubro=agricultura">Agricultura</a></li>
				<li><a href="http://www.sintesisagraria.com/movil/rubro.php?rubro=ganaderia">Ganaderia</a></li>
			    <li><a href="http://www.sintesisagraria.com/movil/rubro.php?rubro=economia">Economia</a></li>
				<li><a href="http://www.sintesisagraria.com/movil/rubro.php?rubro=general">Generales</a></li>
				<li><a href="">Su empresa</a></li>
				<li><a href="http://www.sintesisagraria.com/movil/titulos.php">Titulos</a></li>
			</ul>
		</div>
	  	<div id="contenido">
	  		<div class="post">
		  		<div class="post-titulos">
		  			<?
						mysql_connect("localhost","agraria","benz");
						$rubro = isset($_GET["rubro"]) ? $_GET["rubro"]:"";
						
						$result=mysql_db_query("sintesis","select * from dia ORDER BY provorder ASC, diario ASC");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                        <? echo '<a class="post-titulos" a href=full.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?><br />
						<div class="post-diario"><? echo ''.$row["diario"].'';?> - <? echo ''.$row["ciudad"].'';?> - <? echo $day . '-' . $month . '-' . $year;?></div><br />
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  	</div>	
            </div>
            <div id="menu">
			<ul>
            <li><a href="http://www.sintesisagraria.com/movil/inicio.php"><img src="imgs/home.png" height="26" width="26" border="0"></a></li>
			</ul>
		</div>
	</div>
</body>
</html>