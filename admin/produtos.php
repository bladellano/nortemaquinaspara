<?
//ALTERANDO REGISTRO
$id = $_GET["id"];
$alterar = $_GET["alterar"];

if ($alterar=="s")

{//ABRINDO CHAVE PARA SCRIPT ABAIXO

echo "<pre>Alteração</pre><br><center>";

?>


<?php 

$id_midia = $_GET["id"];
//PEGANDO TODOS OS DADOS DO FUNCIONÁRIO :: CAIO DELLANO :: 07/02/2012
include "includes/conecta.php";
mysql_connect($server, $db_user, $db_pass) or die ("Database CONNECT Error (line 18)"); 
$result = mysql_db_query($bd, "SELECT * FROM tbl_produtos WHERE id = '$id_midia'") 
or die ("Database INSERT Error (line 25)"); 
$qry = mysql_fetch_array($result);
//FIM DA CONSUTLA COMPLETA.
//echo "Teste".$qry[1];

?>
  <form id="form" name="form" method="post" action="alterado_produto.php?id=<?=$qry["id"]?>"  enctype="multipart/form-data">

<table width="550" height="225" border="0" cellpadding="1" cellspacing="0" style="font-family:arial; font-size:12px">
  <tr>
    <td width="198">&nbsp;</td>
    <td width="348"><strong style="color:#FF0000">ALTERANDO PRODUTO</strong></td>
  </tr>
  <tr>
    <td align="right" valign="middle">Nome Produto </td>
    <td valign="middle"><label>
      <input name="nome_produto" type="text" id="nome_produto" value="<?=$qry["nome_produto"]?>" size="40" />
      <input name="id" type="hidden" id="id" value="<?=$qry["id"]?>">
    </label></td>
  </tr>
  <tr>
    <td align="right" valign="middle">Pre&ccedil;o</td>
    <td valign="middle"><input name="preco" type="text" id="preco" value="<?=$qry["preco"]?>" size="10" /></td>
  </tr>
  <tr>
    <td align="right" valign="middle">Categoria</td>
    <td valign="middle"><label>
	<input name="categoria" value="<?=$qry["categoria"]?>" type="text" id="categoria" />
      
    </label></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><img src="<?=$qry["arquivo_pq"]?>" width="80" border="1"><br>
Imagem do Produto </td>
    <td><label><strong>
      <input name="arquivo" type="file" id="arquivo3" size="40" />
    </strong></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Alterar"  /></td>
  </tr>
</table><hr></center>
</form>

<? } ?>
<?
//EXCLUINDO REGISTRO
$id = $_GET["id"];
$excluir = $_GET["excluir"];
if ($excluir=="s")
{
include("../includes/conecta.php");
$sql = "DELETE FROM tbl_produtos WHERE id = $id";
$resultado = mysql_query($sql) or die ("Erro ao remover a registro.");
header('Location: produtos.php');

}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('#subir').click(function(){ 
          $('html, body').animate({scrollTop:0}, 'slow');
      return false;
         });
     });
</script>



<script language="javascript">
 function verifica()
    {
		
        if (formu.nome_produto.value=="" ||  formu.preco.value=="" ||  formu.arquivo.value=="" ||  formu.categoria.value=="" )
		
		{
        
		alert("Campos incompletos, por favor verificar!!");
		return false;
        }
       else
		{
		alert("Cadastro efetuado com sucesso, processo gravado!");
		} 
        
   }
</script>
<title>: : CADASTRO : :</title>
<style type="text/css">
<!--
body {
	background-color: #F4F4F4;
}
-->
</style></head>

<body>
<div align="center">
  <form id="formu" name="formu" method="post" action=""  enctype="multipart/form-data">
  
  <?
   if(isset($_POST['nome_produto']))
		 
{

$arquivo = $_FILES["arquivo"];
$nome_arquivo = $arquivo["name"];


$nome_produto = $_POST['nome_produto'];
$preco = $_POST['preco'];
$end = $_POST['end'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$data_ent = date("y/m/d");

	if (!$nome_produto || !$preco || !$categoria) 

	{
	echo "<center><span style=\"background-color:#B7D3FF;color:red; font-family:calibri\">Favor preencher corretamente os campos!</span><br></center>";
	}
	else
	{
include('../includes/conecta.php');
$descricao = $_POST['descricao'];

//TRATAMENTO DA FOTO
$imagem = $_FILES["arquivo"];
$pasta = "arquivos/";
$imagem_nome = $imagem["name"];

$caminho_p = $pasta."thumb_".$imagem_nome;
$caminho_g = $pasta . $imagem_nome;

function reduz_imagem($img, $max_x, $max_y, $nome_arquivo) { 
    list($width, $height) = getimagesize($img); 
    $original_x = $width; 
    $original_y = $height; 
    // se a largura for maior que altura 
    if($original_x > $original_y) { 
        $porcentagem = (100 * $max_x) / $original_x; 
    }
    // se a altura for maior que a largura
    else { 
        $porcentagem = (100 * $max_y) / $original_y; 
    } 
    $tamanho_x = $original_x * ($porcentagem / 100); 
    $tamanho_y = $original_y * ($porcentagem / 100); 
    $image_p = imagecreatetruecolor($tamanho_x, $tamanho_y); 
    $image = imagecreatefromjpeg($img); 
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $tamanho_x, $tamanho_y, $width, $height); 
    return imagejpeg($image_p, $nome_arquivo, 100); 
}
$uploadP = reduz_imagem($_FILES["arquivo"]["tmp_name"], 120, 60, $caminho_p);

$uploadG = move_uploaded_file($imagem["tmp_name"], $caminho_g);

if($uploadP && $uploadG) {
    echo "<br><br><font face=arial size=1 color=green><b>
	Registro e Imagem redimensionada e enviada com sucesso!<br> Tipo: <font color=#990000>$tipo</font></b></font>";
}
else {
    echo "Falha no upload...";
     }
//FIM DE TRATAMENTO	 


$query = "INSERT INTO tbl_produtos (nome_produto,preco,categoria,data_ent,arquivo,arquivo_pq,descricao)		
VALUES ('$nome_produto','$preco','$categoria','$data_ent','$caminho_g','$caminho_p','$descricao')"; 
mysql_query($query) or die (mysql_error());


echo "<h1><font color=green face=arial size=3>Registro alterado com sucesso!</font></h1>";
echo ("<meta http-equiv='refresh' content='2; URL=produtos.php'>");

	}
}
  ?>
    <table width="550" height="225" border="0" cellpadding="1" cellspacing="0" style="font-family:arial; font-size:12px">
      <tr>
        <td width="198">&nbsp;</td>
        <td width="348"><strong><a href="produtos.php" style="color:#000000">Cadastro de Produtos</a> [<a href="#">Listar Produtos</a>] </strong></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Nome Produto </td>
        <td valign="middle"><label>
          <input name="nome_produto" type="text" id="nome_produto" size="40" />
        </label></td>
      </tr> <tr>
        <td align="right" valign="middle">Pre&ccedil;o</td>
        <td valign="middle"><input name="preco" type="text" id="preco" value="R$ " size="10" /></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Descri&ccedil;&atilde;o</td>
        <td valign="middle"><label>
          <textarea name="descricao" cols="40" rows="5" id="descricao"></textarea>
        </label></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Categoria</td>
        <td valign="middle"><label>
        <input name="categoria" type="text" id="categoria" />
        </label></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Imagem do Produto </td>
        <td><label><strong>
        <input name="arquivo" type="file" id="arquivo3" size="40" />
        </strong></label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Cadastrar" Onclick="return verifica()" /></td>
      </tr>
    </table>
    <br />
    
  </form>
  <table width="550" border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td style="font-family:arial; font-size:14px; font-weight:bold">LISTANDO...</td>
      </tr>
      <tr>
        <td bgcolor="#F4F4F4">
		<?php 
include('../includes/conecta.php');
  
	$declar = "select* from tbl_produtos order by data_alt DESC";
	$query = mysql_db_query ($bd, $declar, $con) or die ("Erro no acesso ao banco"); 
    $achou = mysql_num_rows($query); 

   	 while($dados= mysql_fetch_array($query)) {

?>
		
		<table width="550" border="0" cellpadding="1" cellspacing="0" bgcolor="#CCCCCC" style="font-family:calibri; font-size:12px">
          <!--DWLayoutTable-->
          <tr>
            <td width="58" rowspan="2" valign="top"><img src="<?=$dados["arquivo_pq"]?>" width="58" height="64" /></td>
			
			<? if ($dados["principal"]=="1"){$bgcolor="#FFCC00";}else{$bgcolor="";} ?>
            <td width="376" height="21" valign="top" bgcolor="<?=$bgcolor?>" style="color:#0000FF; font-size:16px; font-weight:bold"><?=$dados["nome_produto"]?> 
              - 
                <?=$dados["categoria"]?>                <font color="#666666">[<?=$dados["data_ent"]?>]
			
			
			
		      </font></td>
            <td width="60" valign="top" style="color: #FF0000"><a href="?excluir=s&amp;id=<?=$dados["id"]?>" style="color:#FF0000">Excluir</a></td>
          <td width="48" rowspan="2" align="center" valign="middle" bgcolor="#666666">
		  
         
             <form name="<?=$dados["id"]?>" action="destacando.php?id=<?=$dados["id"]?>" method="post">	
                <input name="principal" value="<?=$dados["id"]?>" type="radio" onClick="javascript:this.form.submit()" >
                </form></td>
          </tr>
          <tr>
            <td height="39" valign="top" ><?=$dados["preco"]?></td>
            <td align="left" valign="middle"><a href="?alterar=s&amp;id=<?=$dados["id"]?>" style="color:#006600">Alterar</a></td>
          </tr>
        </table>
		<br />
		<? } ?></td>
      </tr>
    </table><a href="#" id="subir"><img src="../img/bt_up.png" border="0" /></a></div>
</body>
</html>
