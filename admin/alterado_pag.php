
<?php


include('includes/conecta.php');

mysql_connect($server, $db_user, $db_pass) or die ("Database CONNECT Error (line 18)"); 
$result = mysql_db_query($bd, "SELECT * FROM tbl_usuarios WHERE usuario = '$valid_user123'") or die ("Database INSERT Error (line 25)"); 
if ($qry = mysql_fetch_array($result)) {


$sql = "UPDATE tbl_paginas SET titulo='$titulo',corpo_pag='$corpo_pag',autor='$autor' WHERE id='$id'";

$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");}

echo "<h1><font color=green face=arial size=3>Página alterada com sucesso!</font></h1>";

echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=11&id=$id'>");
	  
echo "<input type='button' value='Voltar' onclick='history.go(-1)'>&nbsp;";

?>
 