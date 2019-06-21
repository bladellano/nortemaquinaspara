<?php

include('includes/conecta.php');
$sql = "DELETE FROM tbl_destaques WHERE id = $id";
$resultado = mysql_query($sql) or die ("Erro ao remover a página.");

//echo ("<meta http-equiv='refresh' content='1; URL=index_.php?link=6'>");
header('Location: index_.php?link=6');

?>