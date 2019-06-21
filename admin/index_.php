<?php
ob_start();
?>
<link rel="stylesheet" type="text/css" href="shadowbox.css">
<script type="text/javascript" src="shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
<script language="JavaScript">
function abrir(URL) {

  var width = 598;
  var height = 500;

  var left = 380;
  var top =150;

  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

}
</script>
<?php
ob_start();
?>
<?php include("verifica.php"); ?>

<? include('includes/conecta.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>ADM | <? include "../includes/title.php" ?></title>
<style type="text/css">
<!--
body {
	background-color: #666666;
}
a {
	font-family: Arial;
	font-size: 12px;
	color: #FF9900;
	font-weight: bold;
}
.TitRodape {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #666666;
}
.TitTitulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 22px;
	color: #000000;
	font-weight:bold;
}
.TitInst {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #888;
	font-weight:bold;
	
}
.TitAnteriores {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #339900;
	font-weight:bold;
}
.TitUsuario {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #006699;
}
a:link {
	color: #FFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: underline;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
.TitNomeArea {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;

	font-weight: bold;
}
-->
</style></head>

<body>
<table width="100%" height="758" border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF">
	<table width="100%" border="0" cellspacing="0" cellpadding="1">
	  <!--DWLayoutTable-->
      <tr>
        <td width="236" align="left">
		
		<?php  session_register("valid_user123");
		
		?>
		
		<?php 
//PEGANDO TODOS OS DADOS DO FUNCIONÁRIO :: CAIO DELLANO :: 07/02/2012
include "../includes/conecta.php";
mysql_connect($server, $db_user, $db_pass) or die ("Database CONNECT Error (line 18)"); 
$result = mysql_db_query($bd, "SELECT * FROM tbl_usuarios WHERE usuario = '$valid_user123'") 
or die ("Database INSERT Error (line 25)"); 
$qry = mysql_fetch_array($result);
//FIM DA CONSUTLA COMPLETA.
//echo "Teste".$qry[nome];

?>
		
		<img src="<?=$qry[arquivo_pq]?>" width="60" border="1" align="left" /><span class="TitUsuario"><strong>Usu&aacute;rio: </strong><?=$qry[nome]?><br />
            <strong>Perfil:</strong>&nbsp;<?=$qry[perfil]?>
            <br />
            <strong>Cargo:</strong>&nbsp;<?=$qry[cargo]?>
            <br />
            <a href="?link=20&usuario=<?=$valid_user123?>" style="font-family:arial; font-size:12px; color: #009900"><u>Alterar perfil?</u></a></span><br />
          <br /></td>
        <td width="1052" align="center" style="background-repeat:no-repeat; background-position:center top;"><span class="TitNomeArea">&Aacute;REA ADMINISTRATIVA DO PORTAL:</span>  <span class="TitInst">
          <?=$instituicao?>
        </span></td>
      </tr>
      <tr>
        <td height="21" colspan="2" align="center" valign="top"><a href ="?link=1"><?php include("menu.php"); ?></a></td>
        </tr>
    </table>	</td>
  </tr>
  <tr>
    <td height="558" align="center" valign="top" 
	bgcolor="#FFFFFF" style="background-repeat:no-repeat; background-attachment:fixed; background-position:center"><?php
	
			$link = $_GET["link"];
			
			$pag[1]= "home.php";
			$pag[2] = "noticias.php";
			$pag[3]= "cidades.php";
			$pag[4]= "listar_registros.php";
			$pag[5]= "destaques.php";
			$pag[6]= "lista_destaques.php";
			$pag[7]= "alterar_destaque.php";
			$pag[8]= "alterando_destaque.php";
			$pag[9]= "visualizar_newsletter.php";
			$pag[10]= "lista_paginas.php";
			$pag[11]= "alterar_pag.php";
		    $pag[12]= "alterado_pag.php";
			$pag[13]= "alterar_registro.php";
			$pag[14]= "alterado_registro.php";
		    //$pag[15]= "cadastrar_pagina.php";
			$pag[15]= "paginas.php";
			$pag[16]= "inserir_pagina.php";
			$pag[17]= "lista_cidades.php";
			$pag[18]= "empresas.php";
			$pag[19]= "lista_empresas.php";
			$pag[20]= "alterar_perfil.php";
			$pag[21]= "produtos.php";
			if (!empty($link))
			{
				if (file_exists($pag[$link]))
				{
					include $pag[$link];
				}
				else
				 print "<font color=red face=arial size=2>Esta p&aacute;gina n&atilde;o existe!</font>";	
			
			}	
			
			?></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF"> <span class="TitRodape">Copyright&copy; 
      <?= date(Y) ?>
      <?=$instituicao?> 
      - 
      <?=$instituicao?>
      - Proibida a reprodu&ccedil;&atilde;o do conte&uacute;do deste site.&nbsp;<br />
    Material protegido pela Lei Federal n&ordm; 9.610/98. <br />
    Desenvolvimento <a href="http://www.scvweb.com.br" target="_blank"><img src="http://www.scvweb.com.br/portal/img/logo_scvweb.png" width="40" height="25" border="0"  align="absmiddle" /></a></span> </td>
  </tr>
</table>
</body>
</html>
