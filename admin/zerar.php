<?php

include("includes/conecta.php");
$sql = "TRUNCATE tbl_votos";
$resultado = mysql_query($sql) or die ("Erro ao remover a página.");


if ($resultado)
{

echo "<center><br><font color=green face=arial><b>Tabela zerada com sucesso!</b></font><br></center><br>";	

echo "<center><font color=green face=arial><b><a href='enquete_avancada.php'>Voltar</a></b></font><br></center>";	
}
else
{
echo "Erro ao zerar tabela!";
}
//echo ("<meta http-equiv='refresh' content='1; URL=index_.php?link=6'>");
//header('Location: listar_candidatos.php');

?>