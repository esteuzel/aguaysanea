<? include("CompruebaSesion.php") ?><!DOCTYPE html>
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
    <link type="text/css" rel="stylesheet" href="http://www.informesdiarios.com.ar/puertos/assets/css/pages/sport.css">
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
                                <div class="section-name">
                                    <div class="pull-left">Todos las noticias de Agua y Saneamiento de hoy (<?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='agua';");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?>)</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="section-content">
                                    <div class="hot-topics-list has-image">
                                        <?
$base="info_nueva";
$con=mysql_connect("localhost","dario","benz");
mysql_select_db($base,$con);

$rubro = isset($_GET["rubro"]) ? $_GET["rubro"]:"";
$pg = isset($_GET["pg"]) ? $_GET["pg"]:"";
$url = isset($_GET["url"]) ? $_GET["url"]:"";
$cantidad = isset($_GET["cantidad"]) ? $_GET["cantidad"]:"";
$contar = isset($_GET["contar"]) ? $_GET["contar"]:"";
$cad = isset($_GET["cad"]) ? $_GET["cad"]:"";
$contarok = isset($_GET["contarok"]) ? $_GET["contarok"]:"";
$inicial = isset($_GET["inicial"]) ? $_GET["inicial"]:"";
$pages = isset($_GET["pages"]) ? $_GET["pages"]:"";
$total_records = isset($_GET["total_records"]) ? $_GET["total_records"]:"";

if (!isset($pg))
$pg = 0;
$cantidad=24;
$inicial = $pg * $cantidad;

$pegar = "SELECT * FROM dia WHERE rubro='agua' GROUP BY titulo ORDER BY provorder,diario ASC LIMIT $inicial,$cantidad";
$cad = mysql_db_query($base,$pegar) or die (mysql_error());

$contar = "SELECT * FROM dia WHERE rubro='agua'"; 
$contarok= mysql_db_query($base,$contar);
$total_records = mysql_num_rows($contarok);
$pages = intval($total_records / $cantidad);

while($array = mysql_fetch_array($cad)) {
$fecha = $array["fecha"];

?><div class="media">
                                            <div class="media-left"><? if ($array["foto"]<>"") echo '<img src="../paginas/mostrar_imagen.php?h=140&w=100&nom='.$array["foto"].'" style="border-width:2;border-style:solid;border-color:#000000;">';?></div>
                                            <div class="media-body">
                                                <div class="media-heading"><class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$array["Id"].'>';?><? echo ''.$array["titulo"].'';?></a><? if ($array["misma"]<>"")
echo '<a href=misma.php?codigo='.urlencode($array[misma]).'&fec='.urlencode($array[fecha]).' target=_blank><img align=absMiddle border=0
src="../imgs/misma_ch.png" height="25" title="Esta misma noticia en otros medios"></a>';
?></div>
                                                <div class="info"><span class="category"><? echo ''.$array["diario"].'';?> - <? echo ''.$array["ciudad"].'';?> - <? echo ''.$array["provincia"].'';?></span><span class="fa fa-circle"></span><span class="date-created"><? echo ''.$array["rubro_bis"].'';?><span class="fa fa-circle"></span><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?>
                  <? echo $day . '-' . $month . '-' . $year;?></span>
                                                </div>
                                             </div>
                                        </div><?		  } 

?><?

$con=mysql_close($con);

echo "<p>";
if ($pg <> 0)
{
$url = $pg - 1;
echo "<a href='titulos.php?rubro=".$rubro."&pg=".$url."'>&laquo; Anterior</a>&nbsp;";
}
else {
echo " ";
}

for ($i = 0; $i<($pages + 1); $i++) {
if ($i == $pg) {
echo "&nbsp;$i&nbsp;";
}
else {
echo "<a href='titulos.php?rubro=".$rubro."&pg=".$i."'>".$i."</a>&nbsp;";
}
}

if ($pg < $pages) {
$url = $pg + 1;
echo "<a href='titulos.php?rubro=".$rubro."&pg=".$url."'>Siguiente &raquo;</a>";
}
else {
echo " ";
}
echo "</p>";

?>
                                        <div class="row">
                                            <div class="col-md-4 text-right ptm col-sm-3 col-xs-4">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-right col-sm-4">
                            <div id="popular-topics" class="section-category3">
                                <div class="section-name">Estad&iacute;sticas de hoy <?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro !='agricultura' or rubro !='economia' ORDER by id DESC limit 0,1");

						while ($row=mysql_fetch_array($result))
						{
						$fecha = $row["fecha"];
						?><?
						  $day = substr($fecha,8,2);
						  $month = substr($fecha,5,2);
						  $year = substr($fecha,0,4);
						  ?><? echo $day . '-' . $month . '-' . $year;?><?
}
mysql_free_result($result)
?></div>
                                <div class="section-content">
                                    <ul class="list-unstyled">
                                        <li><a class="title">Total de noticias clasificadas: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                            </li>
                                        <li><a class="title">Extra&iacute;das de <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(distinct diario) AS cuenta FROM dia;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?> medios<?
}
mysql_free_result($result)
?>
                                            </a>

                                          </li>
                                        <li><a href="#" class="title">Im&aacute;genes: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE foto!='' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                            
                                        </li>
                                        <div class="section-name">Rubros de Servicios</div>

                                        <li><a class="title">Agua y Saneamiento: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='agua' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                        <li><a class="title">Energ&iacute;a: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='energia' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                        <li><a class="title">Gas: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='gas' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                        <li><a class="title">Hidrocarburos: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='d' or rubro='dd' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                        <li><a class="title">Transporte: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='transporte' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                        <div class="section-name">Otros rubros</div>
                                        <li><a class="title">Centrales Obreras: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='fcgt' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                        <li><a class="title">Gremios: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='ff' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                        <li><a class="title">Agricultura: <?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='agricultura' ;");

	while ($row=mysql_fetch_array($result))
	{
	
echo ''.$row["cuenta"].'';

?><?
}
mysql_free_result($result)
?></a>

                                        </li>
                                    </ul>
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
    <div id="footer">
        <div class="container">
            <div class="sub-footer">
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                        <div class="logo-small"><a href="#"><img src="assets/images/logo_small.png" alt=""
                                                                 class="img-responsive"/></a></div>
                        <p class="mbxl text-justify">Duis aute irure dolor in repre henderit in voluptate velit es sint
                            cillumor dolore eu fugiat nulla pari excepteur.</p>

                        <div class="heading">Join with us</div>
                        <div class="footer-social">
                            <ul class="list-unstyled list-inline">
                                <li><a href="#" class="icon-google-plus"><i class="fa fa-google-plus fa-fw"></i></a>
                                </li>
                                <li><a href="#" class="icon-twitter"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#" class="icon-facebook"><i class="fa fa-facebook fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 plxl col-sm-4">
                        <div id="footer-news" class="section-category mbn">
                            <div class="section-name"><a href="#">News</a></div>
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <ul class="list-news list-unstyled">
                                            <li><a href="#"><i class="fa fa-caret-right"></i>World</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Economy</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Politics</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Technology</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Sport</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Entertainment</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <ul class="list-news list-unstyled">
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Travel</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Health</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Fashion</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Weather</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Survey</a></li>
                                            <li><a href="#"><i class="fa fa-caret-right"></i>Video & Gallery</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 plxl col-sm-5">
                        <div id="footer-contact" class="section-category mbn">
                            <div class="section-name"><a href="#">Contact</a></div>
                            <div class="section-content">
                                <div class="address"><i class="fa fa-map-marker mrm"></i>263 Humble Cross, Houston,
                                    Texas, United State
                                </div>
                                <div class="row mbxl">
                                    <div class="col-md-4"><i class="fa fa-phone mrm"></i>+(01234) 566 788</div>
                                    <div class="col-md-4 pan"><i class="fa fa-envelope mrm"></i>bignews@gmail.com</div>
                                    <div class="col-md-4"><i class="fa fa-skype mrm"></i>bignews_support</div>
                                </div>
                                <div class="heading">Subscribe for newsletter</div>
                                <div class="input-group input-newsletter input-group-lg"><span
                                        class="input-group-addon"><i class="fa fa-envelope"></i></span><input
                                        type="text" placeholder="Enter your email here" class="form-control"/><span
                                        class="input-group-addon btn-subscribe"><a href="#" class="btn btn-text">Subscribe</a><a
                                        href="#" class="btn btn-icon"><span class="glyphicon glyphicon-send"></span></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="pull-left">© Copyright 2015 by <span>BigNews</span></div>
                <div class="pull-right"><a href="#">Privacy Policy</a><span class="mlm mrm">|</span><a href="#">Terms of
                    Use</a></div>
            </div>
        </div>
    </div>
</div>
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