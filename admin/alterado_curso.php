<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style><center><?php

include('includes/conecta.php');

$sql = "UPDATE tbl_cursos SET 
nome='$nome',
objetivo='$objetivo	',
perfil_prof='$perfil_prof',
perio_dur='$perio_dur',
modulo='$modulo',
mercado='$mercado',
estrutura_fisica='$estrutura_fisica',
invest='$invest',
tipo_curso='$tipo_curso',
categoria='$categoria',
atribuicoes='$atribuicoes',
ver='$ver',
local='$local'

WHERE id='$id'";

$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");

echo "<h1><font color=green face=arial size=3>Curso alterado com sucesso!</font></h1>";

echo ("<meta http-equiv='refresh' content='2; URL=editar_curso.php?id=$id'>");
	  
echo "<input type='button' value='Voltar' onclick='history.go(-1)'>&nbsp;";
?>