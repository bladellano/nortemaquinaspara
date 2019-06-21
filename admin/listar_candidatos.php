<style type="text/css">
<!--
.TitTitulo {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center"><span class="TitTitulo">Rela&ccedil;&atilde;o de Candidatos<br />
    <a href="cadastrar_candidato.php" style="font-size:12px">&laquo; Voltar</a></span><br />
  <br />
  <table width="578" border="1" cellpadding="0" cellspacing="1" style="font-family:calibri; font-size:14px">
    <tr>
      <td width="171" height="27" align="left" valign="middle" bgcolor="#CCCCCC"> &nbsp;Candidato</td>
      <td width="245" align="center" valign="middle" bgcolor="#CCCCCC">Fun&ccedil;&atilde;o</td>
      <td width="73" align="center" valign="middle" bgcolor="#CCCCCC">Editar</td>
      <td width="61" align="center" valign="middle" bgcolor="#CCCCCC">Excluir</td>
    </tr>
    <?php 

include("includes/conecta.php");

	$declar = "SELECT* FROM tbl_votados ORDER BY id DESC";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
   	$achou = mysql_num_rows($query); 
	     
	 while($row= mysql_fetch_array($query)) 
	 {

	?>
      
    <tr>
      <td><?=$row[votado]?></td>
      <td><?=$row[funcao]?></td>
      <td align="center" valign="middle"><a href="#">Editar</a></td>
      <td align="center" valign="middle"><a href="excluir_candidato.php?id=<?=$row[id]?>">Excluir</a></td>
    </tr>
      
  <? } ?>  
    </table>
</div>
