<!DOCTYPE html>
<html lang="en">
<head><title>Informes Diarios | Agua y Saneamiento</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400italic,300,700,400">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300">
    <link type="text/css" rel="stylesheet" href="assets/libs/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/ionicons/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/css/core.css">
    <!--link(type="text/css", rel='stylesheet', href='assets/css/layout.css')-->
    <link type="text/css" rel="stylesheet" href="http://www.informesdiarios.com.ar/puertos/assets/css/pages/travel.css">
</head>
<!--body(class="#{ current.source == 'fashion' ? 'layout-boxed fashion-theme' : '' }#{ current.source == 'fashion_detail' ? 'layout-boxed fashion-theme' : '' }")-->
<body>
<!-- HEADER-->
<?
include("header_1.php");
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
                                <div class="section-name"><a href="#">Archivo de Noticias</a></div>
                                <div class="section-content">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="thumb2" align="center"><br><a href="http://www.informesdiarios.com.ar/aguaysanea/archivo/arch_pal.php"><img src="assets/images/travel/download.gif" width="37" height="39" alt="" /></a><br><br><a href="http://www.informesdiarios.com.ar/aguaysanea/archivo/arch_pal.php" class="title">Consulta de noticias por palabra clave</a>

                                                <div class="info"></span>
                                                </div>
                                                <div class="description">Las consultas se har&aacute;n sobre las noticias archivadas durante los &uacute;ltimos 3 meses. Los abonados que quieran consultar noticias anteriores puedan solicitarls por mail. Disponemos de informaci&oacute;n desde enero de 2011.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="thumb2" align="center"><br><a href="http://www.informesdiarios.com.ar/aguaysanea/archivo/arch_dia.php"><img src="assets/images/travel/download.gif" width="37" height="39" alt="" /></a><br><br><a href="http://www.informesdiarios.com.ar/aguaysanea/archivo/arch_dia.php" class="title">Consulta por d&iacute;a de edici&oacute;n</a>
 <div class="info"></span>
                                                </div>
                                                <div class="description">Seleccionando el d&iacute;a se consultar&aacute;n todas las noticias de la fecha elegida.
                                                </div>
                                            </div>
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
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='energia' and foto!='' ORDER by Id DESC limit 0,1");

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
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='residuos' and foto!='' ORDER by Id DESC limit 0,1");

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
                                                <div class="row"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='puertos' and foto!='' ORDER by Id DESC limit 0,1");

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
?>
                                                    <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='comunicacion' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?><div class="col-md-4 col-sm-4 col-xs-4"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?>
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
                                                    <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='transporte' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?><div class="col-md-4 col-sm-4 col-xs-4"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?>
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
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?><div class="col-md-4 col-sm-4 col-xs-4"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?>
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
                                        </div>
                                        <a href="#viewed_posts_carousel" data-slide="prev"
                                           class="left carousel-control"><span class="fa fa-angle-left"></span></a><a
                                            href="#viewed_posts_carousel" data-slide="next"
                                            class="right carousel-control"><span class="fa fa-angle-right"></span></a>
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
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='d' and foto!='' ORDER by Id DESC limit 0,2");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img_recommended mbl" alt="se ve algo">' ?></a><a href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>

                                                <div class="info"><span class="category"><? echo ''.$row["rubro"].'';?></span><span
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
include("includes/pie.php");
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