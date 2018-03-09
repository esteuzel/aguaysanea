<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Servicio de Noticias INTA Marcos Juárez</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
body{
	background: #333333;
	color: white;
}
.campo{
	width: 120px;
	height: 16px;
	vertical-align: central;
}
.campo1{
	width: 80px;
	height: 22px;
	font-weight: bold;
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
	width: 300px;
	padding: 10px;
	padding-top: 2px;
}
.post-texto{
	text-align: left;
	color: #000;
}
.post-titulos{
	text-align: left;
	font-family: Verdana;
	font-size: 12px;
	font-weight: bold;
	text-decoration: none;
	color: #000;
}
@media only screen and (min-width: 768px) and (max-width: 1024px){
	#container{
		width: 100% !important;
	}
	.post{
		margin: 30px 10px;
		width: 30% !important;
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
		margin: 4px !important;
		width: 90% !important;
	}
	.post-imagen{
		display: none !important;
	}
	#menu ul li{
		padding: 12px 5% !important;
	}
}
.post-diario {	text-align: left;
	font-family: Verdana;
	font-size: 11px;
	font-weight: bold;
	text-decoration: none;
	color: #999;
}
</style>
</head>

<body>
<div id="container">
		<div id="menu">
			<ul>
			  <img src="imgs/mj_movil.jpg" width="100%"/>
			</ul>
  </div>
		<div id="menu">
			<ul>
				<li><a href="http://www.sintesisagraria.com/movil/mj_rubro.php?rubro=agricultura">Agricultura</a></li>
				<li><a href="http://www.sintesisagraria.com/movil/mj_rubro.php?rubro=ganaderia">Ganaderia</a></li>
				<li><a href="http://www.sintesisagraria.com/movil/mj_rubro.php?rubro=porcinos">Porcinos</a></li>
			    <li><a href="http://www.sintesisagraria.com/movil/mj_rubro.php?rubro=economia">Economia</a></li>
				<li><a href="http://www.sintesisagraria.com/movil/mj_rubro.php?rubro=regionales">Regionales</a></li>
				<li><a href="http://www.sintesisagraria.com/movil/mj_rubro.php?rubro=biodiesel">Biodiesel</a></li>
                <li><a href="http://www.sintesisagraria.com/movil/mj_titulos.php">Titulos</a></li>
				<li><form id="form1" name="form1" method="post" action="http://www.sintesisagraria.com/movil/res.php">
  <input type="text" name="codigo" id="textfield" class="campo" />
  <input type="submit" name="button" id="button" class="campo1" value="Buscar" />
</form></li>
			</ul>
		</div>
	  	<div id="cabecera">
	  		<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' and foto !='' ORDER BY Id ASC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <? echo '<img src=http://www.sintesisagraria.com/paginas/apicultura/fotos/'.$row['foto'].' width=100% border=0>' ?>
                        <?
}
mysql_free_result($result)
?>
	  	</div>
	  		<div class="post">
		  		<div class="post-imagen">
	  			<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' and foto !='' ORDER BY Id ASC limit 1,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <? echo '<img src=http://www.sintesisagraria.com/paginas/apicultura/fotos/'.$row['foto'].' width=100% border=0>' ?>
	  			<?
}
mysql_free_result($result)
?>
		  		</div>
		  		<div class="post-titulos">
		  			<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' and foto !='' ORDER BY Id ASC limit 1,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                        <? echo '<a class="post-titulos" a href=mj_full.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?> - <? echo $day . '-' . $month . '-' . $year;?>
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen">
		  			<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' and foto !='' ORDER BY Id ASC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <? echo '<img src=http://www.sintesisagraria.com/paginas/apicultura/fotos/'.$row['foto'].' width=100% border=0>' ?><br />
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  		<div class="post-titulos">
		  			<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' and foto !='' ORDER BY Id ASC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                        <? echo '<a class="post-titulos" a href=mj_full.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?> <span class="post-diario"> - <? echo $day . '-' . $month . '-' . $year;?></span><br />
                        <?
}
mysql_free_result($result)
?>
	  		  </div>
		  	</div>	
            <div class="post">
		  		<div class="post-imagen">
		  			<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' and foto !='' ORDER BY Id ASC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <? echo '<img src=http://www.sintesisagraria.com/paginas/apicultura/fotos/'.$row['foto'].' width=100% border=0>' ?><br />
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  		<div class="post-titulos">
		  			<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' and foto !='' ORDER BY Id ASC limit 3,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                        <? echo '<a class="post-titulos" a href=mj_full.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?><span class="post-diario"> - <? echo $day . '-' . $month . '-' . $year;?></span><br />
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