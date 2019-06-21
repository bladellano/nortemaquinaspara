<br>
<table width="550" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td align="left" valign="top"><?php 
	
	$tabela = 'tbl_newsletter'; //Nome da tabela p/ consultar newsletter
	
include('includes/conecta.php');
  
	$declar = "select* from $tabela order by id desc";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
   	$achou = mysql_num_rows($query); 
   
   echo "<font face=arial><b>Total cadastrados:</font><font face=arial size=4 color=red>&nbsp;$achou</b></font><br><br>"; 
   echo "<table width='520' border='1' cellpadding='0' cellspacing='2'><tr>
    <td width='100' height='33' bgcolor='#333333'><font style='font-family:arial; font-size:12px;color:#FFFFFF'>&nbsp;Nome</font></td>
    <td width='172' align='center' bgcolor='#333333'><font style='font-family:arial; font-size:12px;color:#FFFFFF'>E-mail</font></td>
    <td width='133' align='center' bgcolor='#333333'><font style='font-family:arial; font-size:12px;color:#FFFFFF'>Data de Entrada </font></td>
  </tr>";
      
		 while($dados= mysql_fetch_array($query)) {
	 
	 $id = $dados["id"];	  	
	 $email = $dados["email"];
	 $nome = $dados["nome"];	
	 $setor = $dados["setor"];
	 $data_ent = $dados["data_ent"];
			    	 	   
	 echo "<tr>
    <td width='100'  bgcolor='#e6e6e6'><font style='font-size:10px; font-family:arial'>
	$nome</font></td>
    <td width='172' align='left' bgcolor='#e6e6e6'><font style='font-size:11px; font-family:arial'>$email - <font color=gray>$setor</font></font></td>
    <td width='133' align='left' bgcolor='#e6e6e6'><font style='font-size:12px; font-family:arial'>$data_ent&nbsp;
	<a href='excluir_newsletter.php?id=$id' style='color:red'>Excluir</a></font></td>
  </tr>";	 
  
	}		
		echo "</table>";	
		

?></td>
    <td align="left" valign="top" style="font-family:arial; font-size:14px; font-weight:bold">    Selecionar para enviar e-mail&acute;s. <br>
      <br>
    <textarea name="textarea" cols="60" rows="20">
	<?php 
include('includes/conecta.php');
 
	$declar = "select* from $tabela order by id desc";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
    $achou = mysql_num_rows($query); 
      /*------------------------------------------------*/    
     
		 while($dados= mysql_fetch_array($query)) {
	 
	 
	 $email = $dados["email"];
			    	 	   
	 echo "$email;&nbsp;";	 
	}
		
		
?></textarea></td>
  </tr>
</table>


 

