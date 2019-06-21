<script language="Javascript">
function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "excluir_destaque.php?id="+id;
     }
}
</script>
<style type="text/css">
<!--
.TitBrTab {color: #FFFFFF}
-->
</style>
<font face="Arial, Helvetica, sans-serif" size="4">Listando Destaques</font>
<BR /><br />
<table width='750' border='1' cellpadding='0' cellspacing='0' bordercolor="#666666" style="font-family:arial; font-size:12px; color:#000000">
  <tr>
    <td width='76' height='32' align='center' valign='middle' background='admin/img/back_des.png' bgcolor='#333333' ><span class="TitBrTab">Imagem</span></td>
    <td width='202' align='center' valign='middle' background='admin/img/back_des.png' bgcolor='#333333'  ><span class="TitBrTab">&nbsp;T&iacute;tulo do destaque </span></td>
    <td width='50' align='center' valign='middle' background='admin/img/back_des.png' bgcolor='#333333'  ><span class="TitBrTab">Editar</span></td>
    <td width='73' align='center' valign='middle' background='admin/img/back_des.png' bgcolor='#333333'  ><span class="TitBrTab">Excluir</span></td>
    <td width='105' align='center' valign='middle' background='admin/img/back_des.png' bgcolor='#333333'  ><span class="TitBrTab">Data de entrada </span></td>
    <td width='153' align='center' valign='middle' background='admin/img/back_des.png' bgcolor='#333333'  ><span class="TitBrTab">Data da &uacute;ltima altera&ccedil;&atilde;o </span></td>
    <td width='175' align='center' valign='middle' background='admin/img/back_des.png' bgcolor='#333333'  ><span class="TitBrTab">Categoria</span></td>
  </tr>
<?php 
include('../includes/conecta.php');
  
	$declar = "select* from tbl_destaques order by id desc";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
    $achou = mysql_num_rows($query); 

   	 while($dados= mysql_fetch_array($query)) {
	  	  
	 $id = $dados["id"];
	 $titulo = strtoupper($dados['titulo']);
	 $arquivo = $dados["arquivo"];
	 $arquivo_pq = $dados["arquivo_pq"];
	 $href = $dados["href"];
	 $data_ent = $dados["data_ent"];
	 $data_alt = $dados["data_alt"];
	 $categoria = $dados["categoria"];
	 $fonte = $dados["fonte"];
	 $corpo_pag = $dados["corpo_pag"];
	 
	 if ($categoria == 'm'){ $categoria_ = "<font color=red>".$categoria."</font>"; $nomeclatura = "miniatura"; }else{$categoria_ = "<font color=blue>".$categoria."</font>";$nomeclatura = "destaque"; }

?><tr>
    <td width='76' height='57' align='center' valign='middle' bgcolor='#F4F4F4' ><img src='<?=$arquivo_pq?>' width='80' height='55' ></td>
    <td width='202' align='left' valign='middle' bgcolor='#F4F4F4' style='font-size:12px' >&raquo; <?=$titulo?> (<?=$categoria_?>)<br></td>
    <td width='50' align='center' valign='middle' bgcolor='#FFFFFF'  ><a href='?link=7&id=<?=$id?>'><img src="img/bt_edit.png" width="25" height="25" border="0" /></a></td>
    <td width='73' align='center' valign='middle' bgcolor='#FFFFFF'  ><a href="javascript:func()" onclick="confirmacao('<?=$id?>')" style="color:red"><img src="img/bt_deleted.png" width="16" height="16" border="0" /></a></td>
    <td width='105' align='center' valign='middle' bgcolor='#F4F4F4'  ><?=$data_ent?></td>
    <td width='153' align='center' valign='middle' bgcolor='#F4F4F4'  >&nbsp;<font color='red'><?=$data_alt?></font></td>
    <td width='175' align='center' valign='middle' bgcolor='#F4F4F4'  >&nbsp;<?=$nomeclatura?></td>
  </tr>
<? } ?>
</table>
<br>