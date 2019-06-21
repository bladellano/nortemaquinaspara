<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>
<script language="Javascript">
function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "excluir_curso.php?id="+id;
     }
}
</script>
<center><?php 

include("../includes/conecta.php");
//ACHANDO SETOR PARA LISTAR...
  
//FINALIZANDO IMPROVISO...
	$declar = "SELECT* FROM tbl_cursos ORDER BY id DESC";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
   	$achou = mysql_num_rows($query); 
		
	echo "<br><br><a href='cursos.php' style='color:blue; font-family:arial; font-size:14px'><b><img border=0 src='img/bt_impor.png' align='absmiddle' />[+] Cadastrar Curso</b></a><br><br>";

   echo "<table width='520' border='0' cellpadding='1' cellspacing='0'>
  <tr style='color:#0000FF; font-family:arial; font-size:12px'>
    <td width='31' height='41' align='center' valign='middle' bgcolor='#000099' style='color:white' > Cod. </td>
    <td width='180' align='left' valign='middle' bgcolor='#000099' style='color:white'   >&nbsp;Nome do Curso </td>
    <td width='57' align='center' valign='middle' bgcolor='#000099' style='color:white'   >Tipo</td>
    <td width='56' align='center' valign='middle' bgcolor='#000099' style='color:white'   >Local</td>
    <td width='181' align='center' valign='middle' bgcolor='#000099' style='color:white'   >Editar</td>
  </tr>";
   /*------------------------------------------------*/    
     
	while($row= mysql_fetch_array($query)) {
	  	  
	 $id = $row["id"];
	 $nome = $row["nome"];
	 $tipo_curso = $row["tipo_curso"];
	 $local = $row["local"];
	 $data_ent =substr($row["data_ent"],0,10);
	 $disciplina = $row["disciplina"];	 
	   
	 echo "<tr style='font-family:arial; color:#666666; font-size:11px'>
    <td width='31' height='40' align='center' valign='middle' bgcolor='#F4F4F4'  >$id</td>
    <td width='180' align='center' valign='middle' bgcolor='#f4f4f4'><input Use readonly='true' name='textfield' type='text' value='$nome' size='26'></td>
    <td width='57' align='center' valign='middle' bgcolor='#f4f4f4'>
	
	$tipo_curso
	
	</td>
    <td bgcolor='#f4f4f4' width='56' align='center' valign='middle'>
		
	<u>$local</u><br>$senha
	
	</td>
    <td width='181' align='center'  style='color:#FF0000' bgcolor='#f4f4f4' ><a href='editar_curso.php?id=$id'>Editar</a> | 
	
	<a href=\"javascript:func()\" onclick=\"confirmacao('$id')\" >
	Excluir</a></td>
  </tr>";	 
	}
		
		echo "</table>";	


?></center>