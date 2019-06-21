
<style type = "text/css">
<!--
a.efeito { 
	position: relative;
	display:block;
	font: 12px arial, helvetica, sans-serif;
	color: #00f;
	padding: 2px 6px;	
	text-decoration:none;
}

a.efeito:hover {
	color: #fff;
	background-color: #000;
}
p.tracejado{border-style:dashed;border-color: #ff00AA;border-width:thin}

</style>

 <script language ="Javascript">
function confirmar(query){

if (confirm ("Excluir Registro?")){
        window.location="" + query;
  return true;
}
else
  return false;
}
</script>
 <div align="center"><a href="index_.php?link=2" style="color: #0033FF; font-family:Arial, Helvetica, sans-serif">[&laquo;] Voltar</a><br />
   <br />
   <?php
	//LISTANDO UPLOADS DO USUARIO
	
	include("includes/conecta.php");
	$declar = "select* from tbl_noticias order by data_alt DESC";
	$query = mysql_query ($declar, $con) or die ("Erro no acesso ao banco"); 
   	$achou = mysql_num_rows($query); 

	
	echo "<table width='650' border='0' cellpadding='0' cellspacing='1' style='font-family:arial; font-size:12px;border-style:dashed;border-color: #333333;border-width:thin'>";
	echo "<tr>
    <td height=\"30\" bgcolor='#0094A3' style='color:#FFFFFF; font-size:11px'>&nbsp;Imagem</td>
    <td bgcolor='#0094A3' style='color:#FFFFFF; font-size:11px'>Título</td>
	<td bgcolor='#0094A3' style='color:#FFFFFF; font-size:11px'>Resumo</td>
    <td bgcolor='#0094A3' style='color:#FFFFFF; font-size:11px'>Data Entrada</a></td>
	<td bgcolor='#0094A3' style='color:#FFFFFF; font-size:11px'>Ordenar</a></td>
	<td bgcolor='#0094A3' style='color:#FFFFFF; font-size:11px'>Alterar</a></td>
	<td bgcolor='#0094A3' style='color:#FFFFFF; font-size:11px'>Excluir</a></td>
  </tr>";
    while($row= mysql_fetch_array($query)) {
		
			
	if (($i % 2) == 1)
{ $fundo="#FFFFFF"; $cor = "#000000";}
else
{ $fundo="#E6E6E6"; $cor = "#555555"; }
$i++;
		
		$id_midia = $row["id"];
		$titulo = $row["titulo"]; 
		$resumo = $row["resumo"];
		$categoria = $row["categoria"];
		$fonte = $row["fonte"];
		$data_ent = $row["data_ent"];
		$arquivo_pq = $row["arquivo_pq"];
		$tipo = $row["tipo"];
		$principal = $row["principal"];
		
		if ($principal == 1){$prin="20px";}
		else{ $prin="12px";}
		
		if ($arquivo_pq == 'arquivos/semimagem.jpg' || $arquivo_pq =='') {$foto = "<div align='center'><br><font face=arial size=1 color=red>sem imagem</font><br></div>";}else{$foto = "<img src='$arquivo_pq' width='50' height='50' border=1/>";}
		
		if ($tipo == "VIDEO"){$tipo_ = "<img src=\"../img/bt_you.png\" align='absmiddle' width=35 />";}else{$tipo_ = "";}
				
		echo "<tr >
    <td bgcolor='$fundo' >$foto</td>
    <td bgcolor='$fundo' style='font-size:$prin'><a href='../view_noticia.php?idnoticia=$id_midia' target='_blank' rel='shadowbox;width=950;hight=550' style='color:blue'>$titulo</a>
	<font color=green size=1><b>($tipo)&nbsp;$tipo_<b></font></td>
	<td bgcolor='$fundo' style='color:gray; font-size:11px'>$resumo</td>
    <td bgcolor='$fundo' align='center' style='color:#990000; font-size:10px; font-family: arial'><b>$data_ent</b></td>
	<td bgcolor='$fundo' align='center'>	
	
	<form name=\"$id\" action=\"alterando_ordem.php\" method=\"post\">	
	<input name=\"principal\" value=\"$id_midia\" type=\"radio\" onClick=\"javascript:this.form.submit()\" >
	<input type=\"hidden\" name=\"pagina\" value=\"\" >
	</form>
	
	
	</td>
	<td bgcolor='$fundo' align='center'><a href=\"?link=13&id=$id_midia\" class=\"efeito\" ><img border=0 src='img/bt_edit.png' /></a></td>
	<td bgcolor='$fundo' align='center'><a href=\"javascript:confirmar('excluir_registro.php?id_midia=$id_midia')\" class=\"efeito\" ><img border=0 src='img/bt_deleted.png' /></a></td>
  </tr>";
	}	
	echo "</table>";
	?> 
   <br />
 </div>
 