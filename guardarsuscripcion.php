<!DOCTYPE html>
<html lang="en">
<head><title>Agricultura | Informes Diarios</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400italic,300,700,400">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300">
    <link type="text/css" rel="stylesheet" href="assets/libs/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/ionicons/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/l	ibs/bootstrap/css/bootstrap.min.css">
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
                                    <div class="pull-left">Solicitud de Prueba Gratuita</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="section-content">
                                    <div class="hot-topics-list has-image">
                                        <div class="media">
                                            <div class="media-body">
                                                <div class="media-heading"><script language="JavaScript" type="text/JavaScript">

function nueva_ventana (url,ancho,alto,bara) {
	izquierda= (screen.width)? (screen.width-ancho)/4 :100
	arriba= (screen.height)? (screen.height-alto)/3 :100
	opciones='toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,width=' + ancho + ',height='+ alto + ',left =' +izquierda + ',top=' + arriba + ''
	window.open(url,'popup',opciones)
}
</script>
  <table width="100%" border="0">
    <tr>
      <td height="40" align="center" valign="middle"><span class="titulos_fauba">Ya le enviamos su contrase&ntilde;a. Por favor revise su mail</span></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><span class="titulopies">Sr:</span> 
        <?

$link = mysql_connect("localhost","dario","benz"); 
mysql_select_db("info_nueva", $link);

$email = isset($_POST["email"]) ? $_POST["email"]:"";
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"]:"";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"]:"";
$clave = isset($_POST["clave"]) ? $_POST["clave"]:"";
$empresa = isset($_POST["empresa"]) ? $_POST["empresa"]:"";
$user = isset($_POST["user"]) ? $_POST["user"]:"";
$carac = isset($_POST["carac"]) ? $_POST["carac"]:"";
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"]:"";
$ciudad = isset($_POST["ciudad"]) ? $_POST["ciudad"]:"";
$provincia = isset($_POST["provincia"]) ? $_POST["provincia"]:"";
$comentarios = isset($_POST["comentarios"]) ? $_POST["comentarios"]:"";

//inicio las variables
$emailencontrado ="no";
$usuarioencontrado ="no";

$result=mysql_db_query("info_nueva","SELECT * from usuarios where email='$email'");
while ($row=mysql_fetch_array($result))
	$emailencontrado ="si";


if ($emailencontrado <>"si")//si no lo encontro
	{
	$result=mysql_db_query("","SELECT * from usuarios where user='$usuario'");
	while ($row=mysql_fetch_array($result))
		$usuarioencontrado ="si";
	if ($usuarioencontrado <>"si")//si no encontro el usuario
		{
		//obtengo la ultima clave y le sumo 1
		$result=mysql_db_query("info_nueva","SELECT clave from usuarios order by idUser desc limit 0,1");
		$row=mysql_fetch_array($result);
		$clave = $row["clave"] + 1;

		$sql =  "insert into usuarios(user,nombre,email,nivel,clave,empresa)values('$usuario','$nombre','$email','1','$clave','$empresa')";
		$result = mysql_query($sql);
		
		//obtengo los datos guardos recientemente para despues mostrarlos
		$result=mysql_db_query("info_nueva","SELECT * from usuarios order by idUser desc limit 0,1");
		$row=mysql_fetch_array($result);
		$user = $row["user"];
		$nombre =  $row["nombre"];
		$email =  $row["email"];
		$nivel =  $row["nivel"];
		$clave =  $row["clave"];

		?>
      <span class="mailtitulopies"><? echo $nombre;?></span></td>
    </tr>
    
    <tr>
      <td align="center" valign="middle"><span class="titulopies"></span></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><span class="mailtitulopies">Empresa: </span><span class="paginaciongigversal"><? echo $empresa;?>
      <?
		
		//mail($admin,"Reclamo Nro..",$mensaje,
		//"From: Mesa de Entradas<mesadeentradas@areadeclientes.com.ar>
		//Reply-To: mesadeentradas@areadeclientes.com.ar");
		
		$mensaje = "Estimado ".$nombre.". \r\nGracias por registrarte en Informes Agua.\r\n Estos son sus datos de acceso por 10 dias.\r\n\r\n Tus datos son:\r\n " .$carac. " - " .$telefono. " \r\n  Su usuario: " .$user. "\r\n Su clave: " .$clave. " \r\n" .$empresa. " \r\n" .$ciudad. " \r\n" .$provincia. "\r\n" .$Comentarios. "\r\n http://www.informesdiarios.com.ar/aguaysanea/ Todas las noticias de agua y saneamiento en un solo lugar"; 		
		$admin = "agua@informesdiarios.com.ar";
		//mail al usuario
		mail($email,"Informes Agua - Solicitud de suscripción",$mensaje,"From: Informes Agua <".$admin.">");
		//mail al admin
		mail($admin,"Informes Agua",$mensaje,"From: <".$nombre.">"); 
		}//cierre del if email usuario encontrado
	else
		{
		?></span></td>
    </tr>
    <tr>
      <td height="24" align="center" valign="middle" class="titulos_fauba">&nbsp;</td>
    </tr>
  </table>
<p align="center"><br>
<span class="paginaciongigversal"><? echo $email;?></span></p>
		<p align="center" class="logo">Usuario existente en la base de datos		</p>
		<?
		}
	}//cierre del if email encontrado
	else
	{
	?>
	</p>
	<p align="center" class="logo">Email existente en la base de datos</p>
	<br><br>Si por alg&uacute;n motivo el sistema no le otorg&oacute; una contrase&ntilde;a, comun&iacute;quese con nosotros y recibir&aacute; sus datos en forma inmediata 02255 - 15411448
	<?
	}
?>
  </tr>
 </table>
</form>
</div>
                                                <div class="info"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-right col-sm-4">
                            <div id="popular-topics" class="section-category3">
                                <div class="section-name">Noticias de hoy</div>
                                <div class="section-content">
                                    <ul class="list-unstyled"><?
						mysql_connect("localhost","dario","benz");
						
						$result=mysql_db_query("info_nueva","select * from dia WHERE rubro='agua' ORDER by id DESC limit 0,4");

						while ($row=mysql_fetch_array($result))
						{
						
						$fecha = $row["fecha"];
						
						?>
                                        <li><a href="#" class="title"><? echo '<a target="_blank" class="title" href=http://www.informesdiarios.com.ar/aguaysanea/technology_detail.php?codigo='.$row["Id"].'>';?><? echo ''.$row["titulo"].'';?></a>

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