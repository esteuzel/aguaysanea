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
	margin: 30px 10px;
	width: 300px;
}
.post-texto{
	text-align: left;
}
.post-titulos{
	text-align: left;
	font-family: Verdana;
	font-size: 12px;
	font-weight: bold;
	text-decoration: none;
	color: #000;
}
.post-diario{
	text-align: left;
	font-family: Verdana;
	font-size: 11px;
	font-weight: bold;
	text-decoration: none;
	color: #999;
}			
@media only screen and (min-width: 768px) and (max-width: 1024px){
	#container{
		width: 100% !important;
	}
	.post{
		margin: 30px 10px;
		width: 80% !important;
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
		margin: 10px !important;
		width: 94% !important;
	}
	.post-imagen{
		display: none !important;
	}
	#menu ul li{
		padding: 15px 5% !important;
	}
}
</style>
</head>

<body>
<?
function limpiar_caracteres_especiales($s){
//$s = utf8_decode($s);

$s = str_replace(array('á','à','â','ã','ª'),"&aacute;",$s);
$s = str_replace(array('Á','À','Â','Ã'),"&Aacute;",$s);
$s = str_replace(array('Í','Ì','Î'),"&Iacute;",$s);
$s = str_replace(array('í','ì','î'),"&iacute;",$s);
$s = str_replace(array('é','è','ê'),"&eacute;",$s);
$s = str_replace(array('É','È','Ê'),"&Eacute;",$s);
$s = str_replace(array('ó','ò','ô','õ','º'),"&oacute;",$s);
$s = str_replace(array('Ó','Ò','Ô','Õ'),"&Oacute;",$s);
$s = str_replace(array('ú','ù','û'),"&uacute;",$s);
$s = str_replace(array('Ú','Ù','Û'),"&Uacute;",$s);
$s = str_replace("ç","c",$s);
$s = str_replace("Ç","C",$s);
$s = str_replace("[ñ]","&ntilde;",$s);
$s = str_replace("[ñ]","#241;",$s);
$s = str_replace("[Ñ]","&Ntilde",$s);
$s = str_replace("[-]","&shy;",$s);
$s = str_replace("[-]","&ndash;;",$s);

return $s;
} 

?>
<div id="container">

		<div id="menu">
			<ul>
            <li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/index.php"><img src="imgs/home.png" height="26" width="26" border="0"></a></li>
				<li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/rubro.php?rubro=agua">Agua</a></li>
				<li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/provincia.php">Su Provincia</a></li>
			    <li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/rubro.php?rubro=medio ambiente">Medio Ambiente</a></li>
				<li><a href="http://www.informesdiarios.com.ar/aguaysanea/movil/boletines.php">Boletines</a></li>
			</ul>
		</div>
	  	<div id="contenido">
	  		<div class="post">
		  		<div class="post-titulos">
		  			
                       <script> 
if (history.forward(1)){location.replace(history.forward(1))} 
</script> 
<form name=entrar method=post action=login.php>
<input type="hidden" name="url" value="<? echo $_GET['page']; ?>">
  <TABLE BORDER="0" CELLSPACING="0
  " WIDTH="100%" HEIGHT="35%">
    <TR> 
      <TD WIDTH="100%" height="187" valign="top"> 
        <DIV ALIGN="center"> 
          <CENTER>
            <TABLE BORDER="0" CELLPADDING="2" CELLSPACING="1" WIDTH="40%">
              <TR> 
                <TD WIDTH="100%" COLSPAN="2" ALIGN="center"> 
                  <DIV ALIGN="center"> <FONT FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="3"><B> 
                    <FONT COLOR="#cc0000"><br></FONT></B></FONT></DIV>
                </TD>
              </TR>
              <TR> 
                <TD WIDTH="50%" ALIGN="right">&nbsp;</TD>
                <TD WIDTH="50%">&nbsp;</TD>
              </TR>
              <TR> 
                <TD ALIGN="right"><B><FONT FACE="Tahoma" SIZE="2">Usuario:&nbsp;</FONT></B></TD>
                <TD WIDTH="55%"> 
                  <input type="text" name="user" SIZE="20">
                </TD>
              </TR>
              <TR> 
                <TD ALIGN="right"><B><FONT FACE="Tahoma" SIZE="2"> 
                  Contrase&ntilde;a:&nbsp;</FONT></B></TD>
                <TD WIDTH="55%"> 
                  <input type="password" name="pwd" SIZE="20">
                </TD>
              </TR>
              <TR> 
                <TD ALIGN="right">&nbsp;</TD>
                <TD WIDTH="55%"> 
                  <P ALIGN="right"> 
                    <input type=submit value=Ingresar>
                </TD>
              </TR>
              <TR align="center">
                <TD colspan="2"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#990000"><b><a href="mailto:info@informesdiarios.com.ar" target="_blank">Olvid&eacute; mi contrase&ntilde;a</a></b></font></TD>
              </TR>
            </TABLE>
          </CENTER>
        </DIV>
      </TD>
    </TR>
  </TABLE>
</form>
<table width="30%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="100%" height="74"></td>
    <td width="100%" valign="top" height="74"> 
      <p align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#990000"><b>&iquest;Desea 
        solicitar una prueba gratuita en Informes Diarios?<br>
      </b></font><a href="mailto:info@informesdiarios.com.ar?subject=Deseo%20recibir%20una%20contraseña%20de%20acceso"><img src="imgs/mail1.gif" width="32" height="32" border="0"></a></p>
    </td>
    <td width="200" height="74"></td>
  </tr>
</table> 
						
                        
		  		</div>
		  	</div>	
            </div>
	</div>
</body>
</html>