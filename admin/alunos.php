<style type="text/css">
<!--
.TitRel {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
<div align="center"><span class="TitRel">Rela&ccedil;&atilde;o de alunos inscritos</span><br>
    <table width="20" border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td bgcolor="#000000"><table width="750" border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF" style="font-family:arial; font-size:12px">
          <tr>
            <td width="50" align="left" valign="middle" bgcolor="#3399FF" style='color:#FFF'>Inscri&ccedil;&atilde;o</td>
            <td width="153" align="center" valign="middle" bgcolor="#3399FF" style='color:#FFF'>Nome</td>
            <td width="60" align="center" valign="middle" bgcolor="#3399FF" style='color:#FFF'>Curso</td>
            <td width="60" align="center" valign="middle" bgcolor="#3399FF" style='color:#FFF'>CPF</td>
            <td width="82" align="center" valign="middle" bgcolor="#3399FF" style='color:#FFF'>E-mail</td>
            <td width="124" align="center" valign="middle" bgcolor="#3399FF" style='color:#FFF'>Contato</td>
            <td width="53" align="center" valign="middle" bgcolor="#3399FF" style='color:#FFF'>Status</td>
          </tr>
          <tr>
            
			<?
   include('includes/conecta.php');
 	
	$declar = "select* from tbl_alunos  order by id desc";
	$query = mysql_query ($declar, $con) or die ("Erro no acesso ao banco"); 
    $achou = mysql_num_rows($query); 
 
    while($row= mysql_fetch_array($query)) {

?>
			
			
			<td><?=$row[inscricao]?></td>
            <td><?=$row[nome]?></td>
            <td><?=$row[curso]?></td>
            <td><?=$row[cpf]?></td>
            <td><?=$row[email]?></td>
            <td><?=$row[tel_resid]?> | <?=$row[cel]?></td>
            <td align="center" ><?=$row[status]?></td> 
          </tr>
			<? } ?>
			
         
        </table></td>
      </tr>
    </table>
  <br>
  <br>
</div>
