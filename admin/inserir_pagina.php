<? ob_start(); ?>
<?php

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

   }
?>