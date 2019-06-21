<style type="text/css">
<!--
body {
	background-color: #F4F4F4;
}
-->
</style>
<? if( isset( $_POST['enviar'] ) ) {

$pasta = "admin/arquivos";


    $pathToSave = "arquivos/";

    $i = 0;
    $msg = array( );
    $arquivos = array( array( ) );
    foreach(  $_FILES as $key=>$info ) {
        foreach( $info as $key=>$dados ) {
            for( $i = 0; $i < sizeof( $dados ); $i++ ) {
          
                $arquivos[$i][$key] = $info[$key][$i];
            }
        }
    }

    $i = 1;

    // Fazemos o upload normalmente, igual no exemplo anterior
    foreach( $arquivos as $file ) {

        // Verificar se o campo do arquivo foi preenchido
        if( $file['name'] != '' ) {
            $arquivoTmp = $file['tmp_name'];
			$arquivoNome = $file['name'];
            $arquivo = $pathToSave.$file['name'];

            if( !move_uploaded_file( $arquivoTmp, $arquivo )) 
			{
               
			    $msg[$i] = '<font color=red>Erro no upload do arquivo'.$i.'</font>';
				
            } else {
               // $msg[$i] = sprintf('Upload do arquivo %s foi um sucesso!',$i);
				
				//INSERINDO INFORMACOES DO ENVIO DE ARQUIVOS.
include ("includes/conecta.php");
$nome_arquivo = $nome;
$funcionario = "FEPAR";
$data_ent = strftime (date('Y/m/d H:i:s')); //CONFORME AS CONFIG LOCAIS

$sql ="INSERT INTO tbl_envios VALUES (null,'$pasta/$arquivoNome','$funcionario','$pasta','$data_ent')";
$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");

if ($resultado){

echo "<div align='center'><font face=calibri color=green>GRAVADO COM SUCESSO! <font size=2 color=red><br><b>
Copiar: <input name='textfield' type='text' size='80' value='$pasta/$arquivoNome' />
<BR><BR></div>";}
//FIM DE GRAVAÇÃO
            }
        } else {
            $msg[$i] = sprintf('<font color=red>O arquivo %d nao foi preenchido</font>',$i);
			
        }

        $i++;
    }

    // Imprimimos as mensagens geradas pelo sistema
    foreach( $msg as $e ) {
        printf('%s<br>', $e);
    }
//header("Location: index.php#panel-4");
}

?>
<form name="formu" method='POST' enctype='multipart/form-data'>
  <div align="center"> <br />
    <br />
    <table width="20" border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td bgcolor="#666666"><table width="331" height="138" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
            <td height="35" bgcolor="#C6C6C6">&nbsp;</td>
              <td bgcolor="#C6C6C6" style="color:#FFFFFF; font-family:arial; font-size:12px">Anexar Arquivos (PDF) <img src="img/pdf.png" width="43" height="30" align="absmiddle" /> <img src="img/bt_album.png" width="32" height="25" align="absmiddle" /></td>
            </tr>
          <tr>
            <td align="right" valign="middle"><span style="font-family:arial; color:#333333; font-size:12px">Arquivos: </span></td>
            <td align="left" valign="middle"><input type=file multiple name='arquivo[]'></td>
          </tr>
          <tr>
            <td height="45">&nbsp;</td>
            <td align="left"><input type='submit' value='Enviar' name='enviar' onclick="return verifica()"></td>
          </tr>
        </table></td>
      </tr>
    </table>
    <br />
  </div><p align="center"><?php

						//LISTANDO UPLOADS DO USUARIO
	include("../includes/conecta.php");
	$declar = "select* from tbl_envios ORDER BY id_envio DESC";
	$query = mysql_query ($declar, $con) or die ("Erro no acesso ao banco listando"); 
   	$achou = mysql_num_rows($query); 


	echo "<table width='470' border='1' cellpadding='0' cellspacing='1' style='font-family:arial'>";
	echo "<tr >
    <td height=30 bgcolor='#C6C6C6' style='color:#000; font-size:11px'><B>&nbsp;Link arquivo</B></td>
    <td bgcolor='#C6C6C6' style='color:#000; font-size:11px'><B>&nbsp;Usuário</B></td>
	<td bgcolor='#C6C6C6' style='color:#000; font-size:11px'><B>&nbsp;Data Entrada</B></td>
    <td bgcolor='#C6C6C6' style='color:#000; font-size:11px'><B>&nbsp;Excluir</B></a></td>
  </tr>";
    while($row= mysql_fetch_array($query)) {
		
			
	if (($i % 2) == 1)
{ $fundo="#FFFFFF"; $cor = "#000000";}
else
{ $fundo="#E6E6E6"; $cor = "#555555"; }
$i++;
		
		$id_upload = $row["id_upload"];
		$nome_arquivo = $row["nome_arquivo"]; $funcionario = $row["funcionario"];
		$data_ent = $row["data_ent"];
		echo "<tr >
    <td bgcolor='$fundo' >&bull; <a href='../$nome_arquivo' style='color:#333333; font-size:11px' target='_blank'>$nome_arquivo</a></td>
    <td bgcolor='$fundo' style='color:#333333; font-size:11px'>BIO</td>
	<td bgcolor='$fundo' style='color:red; font-size:11px'>$data_ent</td>
    <td bgcolor='$fundo' align='center'>
	
	<a href=\"javascript:confirmar('excluir_arquivo.php?id_upload=$id_upload')\"><img src='img/bt_deleted.png' border=0 /></a></td>
  </tr>";
	}	
	echo "</table>";
	?> </p>
</form>
