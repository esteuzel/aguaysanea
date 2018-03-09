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
                                    <div class="pull-left">Todos las noticias de Medio Ambiente (<?
mysql_connect("localhost","dario","benz");
	$base="info_nueva";
	$con=mysql_connect("localhost","dario","benz");
	mysql_select_db($base,$con);
	
	$result=mysql_db_query("info_nueva","SELECT Count(*) AS cuenta FROM dia WHERE rubro='medio ambiente';");

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

$pegar = "SELECT * FROM dia WHERE rubro='medio ambiente' GROUP BY titulo ORDER BY provorder,diario ASC LIMIT $inicial,$cantidad";
$cad = mysql_db_query($base,$pegar) or die (mysql_error());

$contar = "SELECT * FROM dia WHERE rubro='medio ambiente'"; 
$contarok= mysql_db_query($base,$contar);
$total_records = mysql_num_rows($contarok);
$pages = intval($total_records / $cantidad);

while($array = mysql_fetch_array($cad)) {
$fecha = $array["fecha"];

?><div class="media">
                                            <div class="media-left"><? if ($array["foto"]<>"") echo '<img src="../paginas/mostrar_imagen.php?h=140&w=100&nom='.$array["foto"].'" style="border-width:2;border-style:solid;border-color:#000000;">';?></div>
                                            <div class="media-body">
                                                <div class="media-heading"><class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$array["Id"].'>';?><? echo ''.$array["titulo"].'';?></a></div>
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
echo "<a href='ambiente.php?rubro=".$rubro."&pg=".$url."'>&laquo; Anterior</a>&nbsp;";
}
else {
echo " ";
}

for ($i = 0; $i<($pages + 1); $i++) {
if ($i == $pg) {
echo "&nbsp;$i&nbsp;";
}
else {
echo "<a href='ambiente.php?rubro=".$rubro."&pg=".$i."'>".$i."</a>&nbsp;";
}
}

if ($pg < $pages) {
$url = $pg + 1;
echo "<a href='ambiente.php?rubro=".$rubro."&pg=".$url."'>Siguiente &raquo;</a>";
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