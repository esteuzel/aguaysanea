<!DOCTYPE html>
<html lang="en">
<head><title>Agua y Saneamiento | Informes Diarios</title>
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
    <link type="text/css" rel="stylesheet" href="assets/css/pages/sport.css">
</head>
<body>
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
                               <div id="hot-topics" class="section-category">
                                <div class="section-name"><? $codigo = isset($_GET["codigo"]) ? $_GET["codigo"]:"";?>
                                    <div class="pull-left"><a href="#">Esta noticia apareci&oacute; en </a> <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT * FROM dia WHERE misma='$codigo'");

    while ($row=mysql_fetch_array($result))
	{
	
$fecha = $row["fecha"];
}
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE misma='$codigo';");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?> medios</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="section-content">
                                    <div class="hot-topics-list has-image">
                                        <?
						mysql_connect("localhost","dario","benz");
						
						$codigo = isset($_GET["codigo"]) ? $_GET["codigo"]:"";
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE misma='$codigo' ORDER by provorder ASC limit 0,150");

						while ($row=mysql_fetch_array($result))
						{
						
						$fecha = $row["fecha"];
						
						?><div class="media">
                                            <div class="media-left"><a href="#"><? if ($row["foto"]<>"") echo '<img src="../paginas/mostrar_imagen.php?h=120&w=120&nom='.$row["foto"].'" style="border-width:2;border-style:solid;border-color:#000000;">';?></a></div>
                                            <div class="media-body">
                                                <div class="media-heading"><a href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a></a> <? if ($row["misma"]<>"")
echo '<a href=misma.php?codigo='.urlencode($row[misma]).'&fec='.urlencode($row[fecha]).' target=_blank><img align=absMiddle border=0
src="../imgs/misma_ch.png" height="25" title="Esta misma noticia en otros medios"></a>';
?></div>
                                                <div class="info"><span class="category"><? echo ''.$row["diario"].'';?> - <? echo ''.$row["ciudad"].'';?> - <? echo ''.$row["provincia"].'';?></span><span
                                                        class="fa fa-circle"></span><span class="date-created"><? echo ''.$row["rubro_bis"].'';?><span
                                                        class="fa fa-circle"></span><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                  <? echo $day . '-' . $month . '-' . $year;?></span>
                                                </div>
                                                <div class="description"><?
						$pepepe= $row["cuerpo"];
						 echo (substr($pepepe,0,90));?>...
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
                        <div class="col-md-4 col-right col-sm-4">
                            <div id="popular-topics" class="section-category3">
                                <div class="section-name">Otras...</div>
                                <div class="section-content">
                                    <ul class="list-unstyled"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='general' or rubro='ganaderia' ORDER by id DESC limit 0,12");

						while ($row=mysql_fetch_array($result))
						{
						
						$fecha = $row["fecha"];
						
						?>
                                        <li><a href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/puertos/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>

                                            <div class="info"><span class="category"><? echo ''.$row["rubro_bis"].'';?></span><span
                                                    class="fa fa-circle"></span><span
                                                    class="date-created"><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                  <? echo $day . '-' . $month . '-' . $year;?></span></div>
                                        </li><?
}
mysql_free_result($result)
?>
                                     </ul>
                                </div>
                            </div>
                            <div id="video-gallery" class="section-category">
                                <div class="section-name"></div>
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