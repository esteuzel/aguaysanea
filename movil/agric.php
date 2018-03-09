<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sintesis Agraria - Version Movil</title>
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
	font-family:Verdana;
	font-size:12px;
	font-weight:bold;
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
	text-align: center;
}	
@media only screen and (min-width: 320px) and (max-width: 479px){
	#container{
		width: 100% !important;
	}
	.post{
		border-bottom: solid 1px #ccc;
		margin: 10px !important;
		width: 90% !important;
	}
	.post-imagen{
		display: none !important;
	}
	.post-imagen_icon{
		display:inline-table;
		width: 40%;
	}
	#menu ul li{
		padding: 15px 5% !important;
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
	.post-imagen_icon{
		display: inline-block;
		vertical-align: top;
		width: 30%;
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
@media only screen and (min-width: 768px) and (max-width: 1024px){
	#container{
		width: 100% !important;
	}
	.post{
		margin: 30px 10px;
		width: 30% !important;
	}
}
</style>
</head>

<body><meta name="viewport" content="width=device-width, initial-scale=1.0"><div id="container">
		<div id="menu">
			<ul>
				<li><a href="http://www.sintesisagraria.com/movil/pgs/rubros.php">Agricultura</a></li>
				<li><a href="">Ganaderia</a></li>
				<li><a href="">Economia</a></li>
				<li><a href="">Generales</a></li>
				<li><a href="">Todas</a></li>
				</ul>
		</div>
        <div id="contenido">
	  		<div class="post">
		  		<div class="post-imagen_icon">
		  			<?
						mysql_connect("localhost","agraria","benz");
						
						$result=mysql_db_query("sintesis","select * from dia WHERE rubro='agricultura' ORDER BY Id DESC limit 0,4");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?><? echo '<a class="titulo" target="_blank" a href=paginas/complet.php?codigo='.$row["Id"].'>';?> <? echo ''.$row["titulo"].'';?><br /><br /><?
}
mysql_free_result($result)
?>
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen_icon">
		  			<img src="imgs/ganad.png" width="100%">
		  		</div>
		  	</div>	
<div class="post">
		  		<div class="post-imagen_icon">
		  			<img src="imgs/agric.png" width="100%">
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen_icon">
		  			<img src="imgs/agric.png" width="100%">
		  		</div>
		  	</div>	

	  	</div>
	  	<div id="cabecera">
	  		<img src="cabecera.jpg" width="100%">
	  	</div>
	  	<div id="contenido">
	  		<div class="post">
		  		<div class="post-imagen">
		  			<img src="img1.jpg" width="100%">
		  		</div>
		  		<div class="post-texto">
		  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			consequat.
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen">
		  			<img src="img2.jpg" width="100%">
		  		</div>
		  		<div class="post-texto">
		  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			consequat.
		  		</div>
		  	</div>	
<div class="post">
		  		<div class="post-imagen">
		  			<img src="img3.jpg" width="100%">
		  		</div>
		  		<div class="post-texto">
		  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			consequat.
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen">
		  			<img src="img4.jpg" width="100%">
		  		</div>
		  		<div class="post-texto">
		  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			consequat.
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen">
		  			<img src="img5.jpg" width="100%">
		  		</div>
		  		<div class="post-texto">
		  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			consequat.
		  		</div>
		  	</div>	

		  	<div class="post">
		  		<div class="post-imagen">
		  			<img src="img6.jpg" width="100%">
		  		</div>
		  		<div class="post-texto">
		  			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		  			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		  			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		  			consequat.
		  		</div>
		  	</div>	
	  	</div>
	</div>
</body>
</html>