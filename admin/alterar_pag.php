<?php  session_register("valid_user123"); ?>
<?php

$id = $_GET["id"];

include('includes/conecta.php');
	
//PEGANDO TODOS OS DADOS DO FUNCIONÁRIO :: CAIO DELLANO :: 07/02/2012
include "includes/conecta.php";
mysql_connect($server, $db_user, $db_pass) or die ("Database CONNECT Error (line 18)"); 
$result = mysql_db_query($bd, "SELECT * FROM tbl_paginas WHERE id = '$id'") or die ("Database INSERT Error (line 25)"); 
$qry = mysql_fetch_array($result);
//FIM DA CONSUTLA COMPLETA.

?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
-->
</style>
<br />
<form action="?link=12&id=<?=$qry[id]?>" method="post">
<table style='font-family:arial; font-size:12px;' width='708' border='0' cellpadding='1' cellspacing='0' bgcolor='#FFFFFF'>
  <tr>
    <td bgcolor='#999999'><table width='737' border='0' cellpadding='2' cellspacing='0'>
      <tr>
        <td width='82' align='right' valign='middle' bgcolor='#FFFFFF' ><strong>Data:</strong></td>
        <td width='647' bgcolor='#FFFFFF' >
		  <strong>
<input Use readonly='true' name='data' type='text' id='data' value='<?=$qry[data_ent]?>' size='18' />
URL. da p&aacute;gina 
		:
<label>
		<input style='background:#990000;color:#FFF' type='text' value='view_paginas.php?titulo=<?=$qry[titulo]?>' size='30'>
		</label>
		<img src='img/file.png' width='23' height='25' align='absmiddle'><a  rel='shadowbox;width=850;hight=250' href='enviar_arquivo.php' target='_blank' style=' background-color: #33FF00;font-family:arial; color:#111; font-weight:bold; font-size:12px'>Adicionar Arquivo [PDF, JPG]</a></strong></td>
      </tr>
      <tr>
        <td width='82' align='right' valign='middle' bgcolor='#F4F4F4' ><strong>Titulo:</strong></td>
        <td width='647' bgcolor='#F4F4F4'><input name='titulo' type='text' class="style1" id='titulo' value='<?=$qry[titulo]?>' size=60 /></td>
      </tr>
      <tr>
        <td align='right' valign='middle' bgcolor='#FFFFFF' >&nbsp;</td>
        <td bgcolor='#FFFFFF'>&nbsp;</td>
      </tr>
      <tr>
        <td align='right' valign='middle' bgcolor='#F4F4F4'><strong>
          </textarea>
          Conte&uacute;do:</strong></td>
        <td bgcolor='#F4F4F4'>
		
		  <strong>
		<label></label>
		<?php include('ckeditor/_samples/replacebyassunto__.html'); ?>
		  </strong></td>
      </tr>
      <tr>
        <td align='right' valign='middle' bgcolor='#FFFFFF' ><strong>Fonte:</strong></td>
        <td bgcolor='#FFFFFF'><input name='autor' type='text' id='autor' value='<?=$qry[autor]?>' /></td>
      </tr>
    </table></td>
  </tr>
</table><input type="submit" value="Alterar"></form>