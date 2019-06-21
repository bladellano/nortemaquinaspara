<script language="javascript">
 function verifica()
    {
        if (formu.titulo.value=="")
		{
        alert("Campos incompletos, por favor verificar!! (TÍTULO)");
		return false;
        }
		  
		  if (formu.categoria.value=="")
		{
        alert("Campos incompletos, por favor verificar!! (CATEGORIA)");
		return false;
        }
		  if (formu.tipo.value=="")
		{
        alert("Campos incompletos, por favor verificar!! (TIPO)");
		return false;
        }
		  if (formu.fonte.value=="")
		{
        alert("Campos incompletos, por favor verificar!! (FONTE)");
		return false;
        }	 
		
       else
		{
		alert("Cadastro efetuado com sucesso, processo gravado!");
		} 
        
   }
</script>

<?php

if(isset($_POST["titulo"]) && isset($_POST["categoria"]))

{

include('includes/conecta.php');

$arquivo = $_FILES["arquivo"];
$nome_arquivo = $arquivo["name"];

$semimagem = "arquivos/semimagem.jpg";

$titulo = $_POST['titulo'];
$link_c = $_POST['link_c'];
$link_ = $_POST['link_'];
$resumo = $_POST['resumo'];
//$categoria = $_POST['categoria'];
$data_ent = date("y/m/d H:i:s");
$corpo_pag = $_POST['corpo_noticia'];
//$categoria = $_POST['categoria'];
$ver = "S";
$tipo = $_POST['tipo'];
$link = $link_c.$link_;


//$data_alt = date("y/m/d H:i:s");
//$principal = 1;


if (!$titulo || !$corpo_noticia || !$tipo ) 

{
echo "<span style=\"background-color:#ffd700;color:red; font-family:arial\">Favor preencher corretamente os campos!</span><br>";
}
			else
			
			{
			
			if ($nome_arquivo =="")
			
			    {
				

				$query = "INSERT INTO tbl_paginas (titulo,corpo_pag,data_ent,autor,arquivo,arquivo_pq,link,tipo)
				VALUES ('$titulo','$corpo_pag','$data_ent','$autor','$arquivo_','$arquivo_pq','$link','$tipo')"; 
							
							mysql_query($query) or die (mysql_error());
							mysql_close();//fecha conexão
							echo "<div align='center'>";
							echo "<span style=\"background-color:#00CC00;color:#FFFFFF; font-family:arial\"><br><b>Registro ($titulo) cadastrado c/ sucesso, <u>porém sem imagens</u></b></span><br><a href='view_midia.php?titulo=$titulo' style='color:green;font-size:12px' target='_blank'><u>Clique aqui para visualizar registro</u></a>";
							echo "</div>";

  
			  }

else

  {
  
  
  
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

echo "<br><br><img src=$caminho_g width='150' border=1>";
echo "<br><br><font face=arial><b>Título do registro:</b> <a href='view_midia.php?titulo=$titulo' style='color:green;font-size:14px'><u>$titulo...</u></a></font><hr>";


$query = "INSERT INTO tbl_paginas (titulo,corpo_pag,data_ent,autor,arquivo,arquivo_pq,link,tipo)
				VALUES ('$titulo','$corpo_pag','$data_ent','$autor','$caminho_g','$caminho_p','$link','$tipo')"; 


mysql_query($query) or die (mysql_error());

mysql_close();//fecha conexão
	

}
}
}
 
?>
<br>
<div align="center"><span class="TitTitulo">&bull; Cadastro de P&aacute;ginas </span> <br />
  <form name="formu" method="post" action="<?php $_SERVER['PHP_SELF'];?>"  enctype="multipart/form-data">
    <table width="1050" height="259" border="0" cellpadding="0" cellspacing="2" style="font-family:arial; color:#222222; font-size:12px">
      <tr>
        <td width="88" height="39" align="right" valign="middle">&nbsp;</td>
        <td width="956" align="left" valign="middle"><label><a href="?link=10" class="TitAnteriores" style="color: #006600">[<img src="img/bt_edit.png" width="25" height="25" border="0" />] Listar p&aacute;ginas anteriores.</a></label></td>
      </tr>
      <tr>
        <td width="88" align="right" valign="middle"><strong>T&iacute;tulo</strong></td>
        <td width="956" align="left" valign="middle"><label>
          <input name="titulo" type="text" id="titulo" size="55" />
          <strong><img src="img/bt_album.png" width="32" height="25" align="absmiddle" />Imagem
            <input name="arquivo" type="file" id="arquivo3" size="40" />
          </strong></label></td>
      </tr>
      <tr>
        <td align="right" valign="middle" style="color: #990000"><strong><img src="img/you.png" width="25" height="25" align="absmiddle" /> Youtube </strong></td>
        <td align="left" valign="middle" style="color:#000"><label>
          <input name="link_c" type="hidden" id="link_c" value="http://www.youtube.com/embed/" />
          <input name="link_" type="text" id="link_" style="height:30; color: #FF0000; background-color: #FFCCCC; font-weight:bold" size="20" />
          <strong> <img src='img/file.png' width='23' height='25' align='absmiddle' /><a  rel='shadowbox;width=850;hight=250' href='enviar_arquivo.php' target='_blank' style=' background-color: #006600;font-family:arial; color:#FFF; font-weight:bold; font-size:12px'>Adicionar Arquivo [<img src="img/pdf.png" width="33" border="0" /><img src="img/bt_album.png" width="32" height="25" border="0" />]</a></strong><strong style="color:#999"><br />
            Ex.: http://www.youtube.com/watch?v=</strong><u>qAYCYAtNM1g</u><strong style="color:#999">&amp;feature=related / 
              Depois &quot;=&quot; e antes &quot;&amp;&quot;. <a href="../img/manualvideo.jpg" style="color: #FF0000" rel='shadowbox;width=1200;hight=550'>Tutorial [+]</a> <br />
          </strong></label></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><strong>Classifica&ccedil;&atilde;o</strong></td>
        <td width="956" align="left" valign="top" style="color:#000"><label>
          <input name="tipo" type="radio" value="SIMPLES" checked="checked" />
          Simples [<img src="img/news.png" width="21" height="19" align="absmiddle" />]
          <input name="tipo" type="radio" value="VIDEO" />
Video [<img src="img/you.png" width="25" height="25" align="absmiddle" />]
<input name="tipo" type="radio" value="PEQUENO" />
 Imagem Pequena
          [<img src="img/bt_img.png" width="32" height="32" />] 
          <input name="tipo" type="radio" value="LARGO" />
Imagem Larga
          [<img src="img/bt_img.png" width="68" height="32" />] </label></td>
      </tr>
      <tr>
        <td align="right" valign="middle"><strong>Categoria</strong></td>
        <td align="left" valign="middle"><select name="categoria" id="categoria">
          <option value="PAGINA">P&Aacute;GINA</option>
			
          </select>
            <strong> Fonte
<input onblur="if(this.value == '')this.value = Nome ou link...'" onfocus="if(this.value == 'Nome ou link...')this.value = ''" style="color:#222" value="NORTE M&Aacute;QUIAS PAR&Aacute;" name="autor" type="text" id="autor" size="55" />
        </strong></td>
      </tr>
      <tr>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="middle"><strong>Corpo da P&aacute;gina </strong></td>
        <td align="left" valign="middle">     <?php include('ckeditor/_samples/replacebyassunto.html'); ?></td>
      </tr>
    </table>
    <input name="Submit" type="submit" id="Submit" value="Cadastrar" onclick="return verifica()" />
  </form>
</div>

