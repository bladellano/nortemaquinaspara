<?php
include('includes/conecta.php');

$id_midia = $_GET['id_midia'];
//
$sql = "DELETE FROM tbl_noticias WHERE id = $id_midia";
$resultado = mysql_query($sql) or die ("<font face=arial size=2 color=red>Erro ao remover registro.<br>Entre em contato com administrador 
(91)8296-9609/Caio</font><br><br><input type='submit' value='Voltar' onclick='history.go(-1)'>");

if($resultado)

{
echo "<meta HTTP-EQUIV = \"Refresh\" CONTENT = \"2; URL =listar_registros.php\">";
echo "<font color=red size=4 face=arial><b>Excluindo com sucesso! &radic;</b></font><br>";
header("Location: index_.php?link=4");
//echo "<font face=arial color=green size=2>Excluído com sucesso</font>";
}	
?>

</div>

