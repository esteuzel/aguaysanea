<!DOCTYPE html>
<html lang="en">
<head><title>Informes Diarios | Agua y Saneamiento</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400italic,300,700,400">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300">
    <link type="text/css" rel="stylesheet" href="../assets/libs/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/libs/ionicons/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/libs/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/libs/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/css/core.css">
    <!--link(type="text/css", rel='stylesheet', href='assets/css/layout.css')-->
    <link type="text/css" rel="stylesheet" href="http://www.informesdiarios.com.ar/agua/assets/css/pages/travel.css">
</head>
<!--body(class="#{ current.source == 'fashion' ? 'layout-boxed fashion-theme' : '' }#{ current.source == 'fashion_detail' ? 'layout-boxed fashion-theme' : '' }")-->
<body>
<?
include("../header_1.php");
?>
<!-- WRAPPER-->
<div id="wrapper"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-left col-sm-8">
                            <div class="latest_articles section-category">
                                <div class="section-name">Archivo de Noticias - B&uacute;squeda por palabra clave</div>
                                <div class="section-content">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="thumb3" align="center">
                                            <ul style="list-style-type: none"><form action="http://www.informesdiarios.com.ar/aguaysanea/archivo/result_pal.php" method="get">
                                            <br><li class="title">Ingrese su b&uacute;squeda <input name="clave" size="20" type="text" />
                                            </li><br>
                                            <li><input type="submit">
                                            </li> </form>
                                            </ul><br>
                                                <div class="description">Recomendamos ingresar b&uacute;squedas espec&iacute;ficas. Si se buscan palabras muy gen&eacute;ricas se obtendr&aacute;n muchos resultados. Actualmente en nuestra base de datos hay <b><?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM mes WHERE rubro='agua';");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></b> noticias del rubro agua. Si recuerda alg&uacute;n dato de la informaci&oacute;n que busca y es abonado de Informes Diarios puede solicitarla por mail o WA y tendr&aacute; una respuesta dentro de las 24 hs.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                        </div>
                                        </div>
                                   </div>
                            </div>
                            <!-- VIEWED POSTS-->
                            <div class="viewed_posts section-category">
                                <div class="section-name"><a href="#">Seleccionadas de hoy</a></div>
                                <div class="section-content">
                                    <div id="viewed_posts_carousel" class="carousel slide">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='d' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?>
                                                    <div class="col-md-4 col-sm-4 col-xs-4"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?>
                                                        <div class="info"><span class="category"><? echo ''.$row["rubro_bis"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?><? echo $day . '-' . $month . '-' . $year;?> - <? echo ''.$row["diario"].'';?></span>
                                                        </div>
                                                    </a></div><?
}
mysql_free_result($result)
?><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='barco' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?>
                                                    <div class="col-md-4 col-sm-4 col-xs-4"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?>
                                                        <div class="info"><span class="category"><? echo ''.$row["rubro_bis"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?><? echo $day . '-' . $month . '-' . $year;?> - <? echo ''.$row["diario"].'';?></span>
                                                        </div>
                                                    </a></div><?
}
mysql_free_result($result)
?><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='gas' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 hidden-320"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>
                                                        <div class="info"><span class="category"><? echo ''.$row["rubro_bis"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?><? echo $day . '-' . $month . '-' . $year;?> - <? echo ''.$row["diario"].'';?></span>
                                                        </div>
                                                    </a></div><?
}
mysql_free_result($result)
?>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                                        <div class="info"><span
                                                                class="fa fa-circle"></span>
                                                        </div>
                                                    </a></div>
                                                   <div class="col-md-4 col-sm-4 col-xs-4">
                                                        <div class="info"><span
                                                                class="fa fa-circle"></span><span class="date-created"></span>
                                                        </div>
                                                    </a></div>
                                                    <div class="col-md-4 col-sm-4 col-xs-4 hidden-320">
                                                        <div class="info"><span
                                                                class="fa fa-circle"></span><span class="date-created"></span>
                                                        </div>
                                                    </a></div>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-right col-sm-4">
                            <div class="recommended section-category">
                                <div class="section-name"><a href="#">Tambi&eacute;n sucede...</a></div>
                                <div class="section-content">
                                    <div class="row"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='energia' and foto!='' ORDER by Id DESC limit 0,2");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img_recommended mbl" alt="se ve algo">' ?></a><a href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>

                                                <div class="info"><span class="category"><? echo ''.$row["rubro_bis"].'';?></span><span
                                                        class="fa fa-circle"></span><span class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?><? echo $day . '-' . $month . '-' . $year;?> - <? echo ''.$row["diario"].'';?></span>
                                                </div>
                                            </div>
                                        </div><?
}
mysql_free_result($result)
?>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TWITTER FEED-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
    <!-- FOOTER-->
    <?
include("../includes/pie.php");
?>
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/libs/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="assets/vendors/skycons/skycons.js"></script>
<script src="assets/js/pages/sport.js"></script>
<!--CORE JAVASCRIPT-->
<script src="assets/js/main.js"></script>
<script src="assets/js/layout.js"></script>
<script src="assets/js/menu_opener.js"></script>
</body>
</html>