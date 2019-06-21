<?php

if(isset($_POST['titulo']))

{

include('includes/conecta.php');

$titulo= trim($_POST['titulo']);
$autor = trim($_POST['autor']);
$corpo_pag = trim($_POST['corpo_noticia']);

$data_ent = date("y/m/d H:i:s");

$arquivo = 'arquivos/';
$arquivo_pq = 'arquivos/semimagem.jpg';	

if (!$titulo )

   {
echo "<br>";
    echo "<font color=red size=3 face=arial><b>Campos incompletos, favor voltar...</b></font>";
echo "<br>";	
include('voltar.php');

   } 
   else
   {
  	
	$declar = "INSERT into tbl_paginas 	(titulo,corpo_pag,data_ent,autor,arquivo,arquivo_pq) values ('$titulo','$corpo_pag','$data_ent','$autor','$arquivo','$arquivo_pq')";

    if (mysql_db_query($bd, $declar, $con))
      {
        $ok= 1;
      } else {
        $ok =2;
      }
    mysql_close ($con);
    
	
	echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=10'>");
	
	echo "<font color=green size=2 face=arial><b>Página cadastrada com sucesso!</b></font>";

   }}
?>
<div align="center"><span class="TitTitulo">&bull; Cadastro de P&aacute;ginas<br>
</span><br>
  <form name="form" method="post" action="">
    <table style="font-family:arial; font-size:12px; color:#333333" width="650" border="0" align="center" cellpadding="3" cellspacing="0">
      <tr>
        <th width="108" align="right"  >T&iacute;tulo da P&aacute;gina </th>
        <th width="480" align="left" ><input name="titulo" type="text" id="titulo" size="80" maxlength="150" /></th>
      </tr>
      <tr>
        <th width="108" align="right" >Autor da P&aacute;gina </th>
        <th width="480" align="left" ><input name="autor" type="text" id="autor" value="By <?=ucfirst($valid_user123)?>" size="26" /></th>
      </tr>
      <tr valign="top">
        <th align="right" valign="top"  >Conte&uacute;do</th>
        <th align="left" ><?php include('ckeditor/_samples/replacebyassunto.html'); ?></th>
      </tr>
      <tr>
        <th  >&nbsp;</th>
        <th ><input type="submit" name="Submit" value="Gravar" /></th>
      </tr>
    </table>
    </form>
  </div>
