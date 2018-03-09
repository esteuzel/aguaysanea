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
</style>
</head>

<body>
<div id="container">
		<div id="menu">
			<ul>
			  <img src="imgs/movi_agua.jpg" width="100%"/>
			</ul>
  </div>
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
	  	<div id="cabecera">
	  		<?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto !='' ORDER BY Id ASC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <? echo '<img src=http://www.informesdiarios.com.ar/paginas/fotos/'.$row['foto'].' width=100% border=0>' ?>
                        <?
}
mysql_free_result($result)
?>
	  	</div>
	  		<div class="post">
		  		<div class="post-imagen">
		  			<?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto !='' ORDER BY Id ASC limit 1,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> 
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  		<div class="post-titulos">
		  			<?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto !='' ORDER BY Id ASC limit 1,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> 
                        <? echo '<img src=http://www.informesdiarios.com.ar/paginas/fotos/'.$row['foto'].' width=100% border=0>' ?><? echo '<a class="post-titulos" a href=full.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?>
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen">
		  			<?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto !='' ORDER BY Id ASC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?>
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  		<div class="post-titulos">
		  			<?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto !='' ORDER BY Id ASC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> 
                        <? echo '<img src=http://www.informesdiarios.com.ar/paginas/fotos/'.$row['foto'].' width=100% border=0>' ?><br /><br /><? echo '<a class="post-titulos" a href=full.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?><br />
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  	</div>	
            <div class="post">
		  		<div class="post-imagen">
		  			<?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto !='' ORDER BY Id ASC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <br />
                        <?
}
mysql_free_result($result)
?>
		  		</div>
		  		<div class="post-titulos">
		  			<?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto !='' ORDER BY Id ASC limit 6,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?> <? echo '<img src=http://www.informesdiarios.com.ar/paginas/fotos/'.$row['foto'].' width=100% border=0>' ?><br /><br />
                        <? echo '<a class="post-titulos" a href=full.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?><br />
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