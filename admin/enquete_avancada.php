<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>: : Enquete Avan&ccedil;ada : : </title>
<style type="text/css">
<!--
body {
	background-color: #F4F4F4;
}
.TitComp {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF9900;
}
.TitComum {
	font-family: calibri;
	font-size: 12px;
	color: #990000;
}
a:link {
	color: #FF9900;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FF9900;
}
a:hover {
	text-decoration: underline;
	color: #FFCC33;
}
a:active {
	text-decoration: none;
	color: #FF9900;
}
-->
</style>
</head>
 <script language ="Javascript">
function confirmar(query){

if (confirm ("Deseja realmente excluir todos os registros da enquete?")){
        window.location="" + query;
  return true;
}
else
  return false;
}
</script>
<body>
<div align="center"><span class="TitComp"><a href="enquete_avancada.php">COMPUTA&Ccedil;&Atilde;O DOS VOTOS</a></span><br />
    <br />
  <span class="TitComum"><a href="cadastrar_candidato.php">Cadastrar Candidatos</a> | <a href="#">Relat&oacute;rio/Impress&atilde;o</a> | 
  <a href="javascript:confirmar('zerar.php')"  >Zerar Votos</a> | <a href="#">Sair</a></span> <br /> 
  <br />
  
  <?
  
  if(isset($_GET['detais_of']))
  
  {

include('../includes/conecta.php');
  
	$declar = "SELECT COUNT(qua_voto) as SOMA_QUA, qua_voto FROM tbl_votos WHERE votado='$detais_of' GROUP BY qua_voto";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
    $achou = mysql_num_rows($query); 
	
	
  
  echo "<table width='260' border='1' cellpadding='0' cellspacing='0' bordercolor='#666' style='font-family:calibri; font-size:14px'>
  <tr>
    <td width='180' height='30' align='center' bgcolor='#F4F4F4'>Qualidade dos Votos (<font color=blue>$detais_of</font>) </td>
    <td width='164' align='center' bgcolor='#F4F4F4'>Quantidade</td>
  </tr>";
  
   	while($dados= mysql_fetch_array($query))
	
	 {
	
	echo "<tr>
    <td>$dados[qua_voto]</td>
    <td><center>$dados[SOMA_QUA]</center></td>
  </tr>";
     }
  
  echo "</table><br>";
  
  }
  
 
  
  ?>

  
  <table width="20" border="0" cellspacing="0" cellpadding="1">
    <tr>
      <td bgcolor="#000000"><table width="429" border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF" style="font-family:calibri; font-size:14px">
        <tr>
          <td width="259" align="center" valign="middle" bgcolor="#333333" style="color:#FFFFFF">Votados</td>
          <td width="163" align="center" valign="middle" bgcolor="#333333" style="color:#FFFFFF">Soma dos Votos </td>
        </tr>
		
		<?php 
include('../includes/conecta.php');
  
	$declar = "SELECT SUM(tipo_voto) as SOMA, votado FROM tbl_votos GROUP BY votado  ORDER BY SOMA DESC";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
    $achou = mysql_num_rows($query); 

   	 while($dados= mysql_fetch_array($query)) {
	
	if (($i % 2) == 1){ 
	$fundo="#E6E6E6"; }
	else
	{ $fundo="#FFF"; }
	$i++;  	  	  	  

?>
		
        <tr>
          <td align="left" valign="middle" bgcolor="<?=$fundo?>"><a href="?detais_of=<?=$dados[votado]?>" style="color:#669900"><?=$dados[votado]?></a></td>
          <td align="center" valign="middle" style="font-size:18px; font-weight:bold; color:#669900" bgcolor="<?=$fundo?>"><?=$dados[SOMA]?></td>
        </tr>
		
		<? } ?>

      </table></td>
    </tr>
  </table>
  <br />
  <span class="TitComum">Imprimir</span>
  
  
  <?
  echo  "<SCRIPT>iniciaCorpo(\"14;10;15;11;16;12;17;13\");</SCRIPT>
      <p></div></td></tr><tr></table>
      <div align=\"center\"><a target='_blank' href=\"javascript:self.print()\" onMouseOver=\"window.status='Imprimir'; return true\" style=\"font-family:arial; font-size:12px; color:#000000\"><img src=\"../img/bt_print.png\" width=\"24\" height=\"25\" border=\"0\" /></a>";
  
  ?>
  <br />
</div>
</body>
</html>
