


<?php

$id = $_GET['id'];

include('includes/conecta.php');
$sql = "DELETE FROM tbl_newsletter WHERE id = $id";
$resultado = mysql_query($sql) or die ("Erro ao remover registro.");
echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=9'>");
	  
print "<font color=red face=arial><b>Seguidor foi excluído com êxito!</b></font><br /></h1>"; 

?>


