<!DOCTYPE html>
<html lang="en">
<head><!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106989590-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106989590-1');
</script>
<title>Informes Diarios | Agua y Saneamiento</title>
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
    <link type="text/css" rel="stylesheet" href="http://www.informesdiarios.com.ar/agua/assets/css/pages/index.css">
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
                    <div class="row mbxxl">
                        <div class="col-md-8 col-left col-sm-8">
                           <div class="slider-news">
                                <div id="carousel" data-ride="carousel" class="carousel slide mbs">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>
                                                        </div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"></a><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 1,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a></div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>
                                                        </div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 3,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a></div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 4,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>
                                                        </div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 5,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>
                                                        </div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 6,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a></div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-md-4 prn col-sm-4">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 7,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div class="caption">
                                                        <div class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>
                                                        </div>
                                                        <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["ciudad"].'';?></span>
                                                        </div>
                                                        <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 pln col-sm-8"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?><?
}
mysql_free_result($result)
?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div id="thumbcarousel" data-interval="false" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row man">
                                                <div class="col-md-3 col-sm-3 col-xs-6"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="0" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>

                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?><?
}
mysql_free_result($result)
?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 box-style-padding">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 1,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="1" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>

                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?><?
}
mysql_free_result($result)
?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 2,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="2" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>

                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?><?
}
mysql_free_result($result)
?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 box-style-padding">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 3,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="3" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>

                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?><?
}
mysql_free_result($result)
?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row man">
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 4,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="4" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>
                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?><?
}
mysql_free_result($result)
?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 box-style-padding">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 5,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="5" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>
                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?><?
}
mysql_free_result($result)
?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 6,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="6" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>
                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?><?
}
mysql_free_result($result)
?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 box-style-padding">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto !='' ORDER by id DESC limit 7,1");

						while ($row=mysql_fetch_array($result))
						{
						
						?>
                                                    <div data-target="#carousel" data-slide-to="7" class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?>
                                                        <div class="caption">
                                                            <div class="description"><? echo ''.$row["titulo"].'';?>
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
                                    <a href="#thumbcarousel" data-slide="prev" class="left carousel-control"><span
                                            class="fa fa-angle-left"></span></a><a href="#thumbcarousel"
                                                                                   data-slide="next"
                                                                                   class="right carousel-control"><span
                                        class="fa fa-angle-right"></span></a></div>
                            </div>
                            <div id="hot-topics" class="section-category">
                                <div class="section-name">
                                    <div  class="pull-left">Boletines</div>
                                    <div class="pull-right">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="section-content">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from notasinteres WHERE rubro='agua y saneamiento' and foto !='' ORDER by fecha DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						
						$fecha = $row["fecha"];
						
						?>
                                            <div class="thumb"><a href="#" class="img-wrapper"><? echo '<img src=../interes/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?></a><a
                                                    href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/interes_completa.php?codigo='.$row["id"].'>';?><? echo ''.$row["titulo"].'';?></a>

                                                <div class="info"><span class="category"><? echo ''.$row["autor"].'';?></span><span
                                                        class="fa fa-circle"></span><span class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                  <? echo $day . '-' . $month . '-' . $year;?></span>
                                                </div>
                                            </div><?
}
mysql_free_result($result)
?><br><br><br><br><ul>
	<li>
    </li><br>-------------------------------------------------<br>
	<li><a target="_blank" href="http://www.informesdiarios.com.ar/aguaysanea/boletines.php"><b>Consultar todos los boletines</b></a>
    </li><br>
    </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="hot-topics-list">
                                                <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from notasinteres WHERE rubro='agua y saneamiento' and foto!='' ORDER by fecha DESC limit 1,4");

						while ($row=mysql_fetch_array($result))
						{
						
						$fecha = $row["fecha"];
						
						?><div class="media">
                                                    <div class="media-left"><a href="#"><? echo '<img src=../interes/fotos/'.$row['foto'].' class="img-responsive" alt="se ve algo">' ?></a></div>
                                                    <div class="media-body">
                                                        <div class="media-heading"><a href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/interes_completa.php?codigo='.$row["id"].'>';?><? echo ''.$row["titulo"].'';?></a></div>
                                                        <div class="info"><span class="category"><? echo ''.$row["autor"].'';?></span><span
                                                                class="fa fa-circle"></span><span class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                  <? echo $day . '-' . $month . '-' . $year;?></span>
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
                        <div class="col-md-4 col-right col-sm-4">
                            <div id="latest-news" class="section-category">
                                <div class="section-name"><a href="#">+ de hoy</a></div>
                                <div class="section-content">
                                    <ul class="list-unstyled">
                                        <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='agua' and foto='' ORDER by Id DESC limit 0,10");

						while ($row=mysql_fetch_array($result))
						{
							
						$fecha = $row["fecha"];
						
						?><li><a href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>

                                            <div class="info"><span class="category"><? echo ''.$row["diario"].'';?></span><span
                                                    class="fa fa-circle"></span><span
                                                    class="date-created"><? echo ''.$row["rubro_bis"].'';?> - <?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                  <? echo $day . '-' . $month . '-' . $year;?></span></div>
                                        </li><?
}
mysql_free_result($result)
?>
<li><i class="fa fa-caret-right"></i><b><a target="_blank" href="http://www.informesdiarios.com.ar/puertos/titulos.php" class="title"> Todos los t&iacute;tulos de hoy </a></b><i class="fa fa-caret-left"></i>

                                        </li>
                                        </ul>
                                </div>
                            </div>
                           </div>
                    </div>
                </div>
                <div id="category-topics">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-xs-6 boxed-category-left">
                                <div class="section-category">
                                    <div class="section-name"><a target="_blank" href="http://www.informesdiarios.com.ar/viralizadas.php">Viralizada de hoy</a></div>
                                    <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='aviral' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
							
						$fecha = $row["fecha"];
						
						?><div class="section-content"><span class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img_responsive" width="270" alt="se ve algo">' ?>

                                        <? echo '<a target="_blank"  href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><div class="caption"><? echo ''.$row["titulo"].'';?>
                                        </div>
                                    </span>

                                    </div><?
}
mysql_free_result($result)
?>
                            <ul>
                            <a target="_blank" href="http://www.informesdiarios.com.ar/viralizadas.php"><li>
                            <b>M&aacute;s</b>
                            </li></a>
                            </ul>
                            </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 boxed-category-right">
                                <div class="section-category">
                                    <div class="section-name"><a target="_blank" href="http://www.informesdiarios.com.ar/leida.php">M&aacute;s le&iacute;da</a></div>
                                    <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='leida' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
							
						$fecha = $row["fecha"];
						
						?><div class="section-content"><span class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img_responsive" width="270" alt="se ve algo">' ?>

                                        <? echo '<a target="_blank"  href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><div class="caption"><? echo ''.$row["titulo"].'';?>
                                        </div>
                                    </span></a>

                                    </div><?
}
mysql_free_result($result)
?>
                             <ul>
                            <a target="_blank" href="http://www.informesdiarios.com.ar/leida.php"><li>
                            <b>M&aacute;s</b>
                            </li></a>
                            </ul>
                            </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 boxed-category-left">
                                <div class="section-category">
                                    <div class="section-name"><a target="_blank" href="http://www.informesdiarios.com.ar/crees.php">Le crees?</a></div>
                                    <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='crees' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
							
						$fecha = $row["fecha"];
						
						?><div class="section-content"><span class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img_responsive" width="270" alt="se ve algo">' ?>

                                        <? echo '<a target="_blank"  href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><div class="caption"><? echo ''.$row["titulo"].'';?>
                                        </div>
                                    </span>

                                    </div><?
}
mysql_free_result($result)
?>
<ul>
                            <a target="_blank" href="http://www.informesdiarios.com.ar/crees.php"><li>
                            <b>M&aacute;s</b>
                            </li></a>
                            </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 boxed-category-right">
                                <div class="section-category">
                                    <div class="section-name"><a href="#">Mundo loco</a></div>
                                    <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from mes WHERE rubro='loco' and foto!='' ORDER by Id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
							
						$fecha = $row["fecha"];
						
						?><div class="section-content"><span class="thumb"><? echo '<img src=/paginas/fotos/'.$row['foto'].' class="img_responsive" width="270" alt="se ve algo">' ?>

                                        <? echo '<a target="_blank"  href=http://www.informesdiarios.com.ar/aguaysanea/completa_mes.php?codigo='.$row["Id"].'>';?><div class="caption"><? echo ''.$row["titulo"].'';?>
                                        </div>
                                    </span>

                                    </div><?
}
mysql_free_result($result)
?>
<ul>
                            <a target="_blank" href="http://www.informesdiarios.com.ar/loco.php"><li>
                            <b>M&aacute;s</b>
                            </li></a>
                            </ul>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?
include("includes/pie.php");
?>
<script src="assets/js/jquery-1.11.2.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/libs/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>s
<!--LOADING SCRIPTS FOR PAGE-->
<script src="assets/vendors/skycons/skycons.js"></script>
<script src="assets/vendors/easy-ticker/jquery.easing.min.js"></script>
<script src="assets/vendors/easy-ticker/jquery.easy-ticker.min.js"></script>
<script src="assets/js/pages/index.js"></script>
<!--CORE JAVASCRIPT-->
<script src="assets/js/main.js"></script>
<script src="assets/js/layout.js"></script>
<script src="assets/js/menu_opener.js"></script>
</body>
</html>