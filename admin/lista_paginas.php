<?php 

include("includes/conecta.php");
//ACHANDO SETOR PARA LISTAR...

  
//FINALIZANDO IMPROVISO...
	$declar = "SELECT* FROM tbl_paginas ORDER BY id DESC";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
   	$achou = mysql_num_rows($query); 
		
	echo "<br><br><a href='?link=15' style='color:blue'><img src=\"img/add.png\" align='absmiddle' />Cadastrar p&aacute;ginas </a><br><br>";

   echo "<table width='520' border='0' cellpadding='0' cellspacing='0' style='border-width: 1px;
	border-spacing: 2px;
	border-style: outset;
	border-color: gray;
	border-collapse: separate;
	background-color: white;'>
  <tr style='color:#FFF; font-family:arial; font-size:12px'>
    <td width='31' height='41' align='center' valign='middle' bgcolor='#777' > Cod. </td>
    <td width='180' align='left' valign='middle' bgcolor='#777'   >&nbsp;T&iacute;tulo da P&aacute;ginas </td>
    <td width='57' align='center' valign='middle' bgcolor='#777'   >Editar</td>
    <td width='56' align='center' valign='middle' bgcolor='#777'   >Excluir</td>
    <td width='181' align='center' valign='middle' bgcolor='#777'   >Data de entrada </td>
  </tr>";
   /*------------------------------------------------*/    
     
		 while($row= mysql_fetch_array($query)) {
	  	  
	 $id = $row["id"];
	 $titulo = $row["titulo"];
	 $corpo_ass = $row["corpo_ass"];
	 $ver = $row["ver"];
	 $data_ent = $row["data_ent"];
	
	if (($i % 2) == 1){ $fundo="#FFF"; }else{ $fundo="#CCC"; }
$i++;
	 	   
	 echo "<tr style='font-family:arial; color:#666666; font-size:11px'>
    <td width='31' height='40' align='center' valign='middle' bgcolor='$fundo'  >$id</td>
    <td width='180' align='center' valign='middle' bgcolor='$fundo'><input Use readonly='true' name='textfield' type='text' value='$titulo' size='26'></td>
    <td width='57' align='center' valign='middle' bgcolor='$fundo'><a href='?link=11&id=$id'>
	
	<img src=\"img/lapis.png\" />
	
	</td>
    <td bgcolor='$fundo' width='56' align='center' valign='middle'>
		
	<a href='excluir_pagina.php?id=$id' style='color:red'>
	
	<img src=\"img/bt_deleted.png\" />
		</a></td>
    <td width='181' align='center'  style='color:#FF0000' bgcolor='$fundo' >$data_ent</td>
  </tr>";	 
	}
		
		echo "</table>";	


?>