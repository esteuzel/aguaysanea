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
    <link type="text/css" rel="stylesheet" href="http://www.informesdiarios.com.ar/puertos/assets/css/pages/technology_detail.css">
</head>
<!--body(class="#{ current.source == 'fashion' ? 'layout-boxed fashion-theme' : '' }#{ current.source == 'fashion_detail' ? 'layout-boxed fashion-theme' : '' }")-->
<body>
<!-- HEADER-->
<?
include("header_1.php");
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="main-content">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-left col-sm-8">
                        </div>
                        <div class="col-md-4 col-right col-sm-4">
                        </div>
                    </div>
                    <div class="row mbxxl">
                        <div class="col-md-8 col-left col-sm-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="content-news" class="section-category">
                                        <div class="section-name"><a href="#">Desarrollo del bolet&iacute;n</a></div>
                                        <?php
include "../info_con.php";

$codigo = isset($_GET["codigo"]) ? $_GET["codigo"]:"";


$result=mysql_db_query("info_nueva","select * from notasinteres WHERE id='$codigo'");

while ($row=mysql_fetch_array($result))
{
$fecha = $row["fecha"];
$result2=mysql_db_query("info_nueva","select diario,titulo,ciudad,provincia,rubro FROM notasinteres WHERE misma='".$row['misma']."' and hoy='hoy' and misma !=''");

?><? 	$titulo= $row["titulo"]; //variable definidada para el uno en el include barra3, para pasar el titulo al twitter
						?><div class="section-content"><h1 class="title-news"><? echo $row["titulo"];?></h1>

                                            <div class="info-news">
                                                <div class="pull-left">
                                                    <div class="info"><span class="category"></span><span
                                                            class="fa fa-circle"></span><span class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                      <? echo $day . '-' . $month . '-' . $year;?> - <? echo $row["autor"];?> - <? echo $row["provincia"];?></span><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?=trim($url_corta)?>" data-text="<?=$titulo?>" data-via="diariosinfo	" data-lang="es" data-count="none">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> <a href="https://twitter.com/diariosinfo" class="twitter-follow-button" data-show-count="false" data-lang="es">Seguir a @diariosinfo</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                                    </div>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="comments">

                                                        <div class="block-text">2</div>
                                                    </a></div>
                                                    <div class="share-link">

                                                        <div class="hidden-text"></div>
                                                    </a></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="main-news">
                                                <div class="image-news pull-left mrxxl image-one"><? echo '<img src=../interes/fotos/'.$row['foto'].' class="img-responsive" alt="Esta nota no tiene imagen">' ?>

                                                    <div class="info-image"><span
                                                            class="category">Imagen:</span><span class="author"><? echo $row["diario"];?></span>
                                                    </div>
                                                </div>
                                                <p><? echo $row["cuerpo"];?></p>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-5">
                                                        <blockquote>
                                                            <footer><? echo $row["diario"];?> - <? echo $row["ciudad"];?></footer>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="clearfix"></div>
                                        </div><?
while ($row2=mysql_fetch_array($result2))
{ 
$poner_rayita=1;
?><?
}
}
mysql_free_result($result)
?>
                                        
                                       </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-right col-sm-4">
                            <div class="related-news section-category2">
                                <div class="section-name"><a href="#">Hoy en los diarios...</a></div>
                                <div class="section-content">
                                    <div class="related-news-list"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' ORDER by provorder ASC limit 0,10");

						while ($row=mysql_fetch_array($result))
						{
						
						$fecha = $row["fecha"];
						
						?>
                                        <div class="media">
                                           <div class="media-body">
                                                <div class="media-heading">
                                                    <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?>
                                                    </div>
                                                </div>
                                                <div class="info"><span class="category"><? echo ''.$row["rubro_bis"].'';?></span><span
                                                        class="fa fa-circle"></span><? echo ''.$row["diario"].'';?><span class="date-created"><span
                                                        class="fa fa-circle"></span><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                  <? echo $day . '-' . $month . '-' . $year;?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?
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
<script src="assets/js/pages/technology_detail.js"></script>
<!--CORE JAVASCRIPT-->
<script src="assets/js/main.js"></script>
<script src="assets/js/layout.js"></script>
<script src="assets/js/menu_opener.js"></script>
</body>
</html>