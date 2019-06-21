<?php



if(isset($_POST['titulo']) && isset($_POST['fonte']))

{


include('includes/conecta.php');

$arquivo = $_FILES["arquivo"];
$nome_arquivo = $arquivo["name"];


if (!$titulo || !$fonte || !$corpo_noticia){echo "<font face=arial color=red size=4><i>* Campos ainda faltam preencher!</i></font>";}else{

	if ($nome_arquivo=='')

{
    if(isset($_FILES["arquivo"]))
    {
   $arquivo = $_FILES["arquivo"];
   $pasta_dir = "arquivos/";//diretorio dos arquivos
    
	if(!file_exists($pasta_dir)){
    mkdir($pasta_dir);
    
	}
	
$arquivo_nome = $pasta_dir . $arquivo["name"];
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);

$semimagem = 'arquivos/semimagem.jpg';
$arquivo = $_POST['arquivo'];
$arquivo_pq = $_POST['arquivo_pq'];
$titulo = $_POST['titulo'];
$fonte = $_POST['fonte'];
$data_ent = date("d/m/y H:i:s");
$corpo_pag = $_POST['corpo_ass'];
$colegio = $_POST['colegio'];
$href = $_POST['href'];
$categoria = $_POST['categoria'];

$size = $_POST['size'];


$query = "INSERT INTO tbl_destaques (arquivo,arquivo_pq, titulo, fonte, data_ent, data_alt, corpo_pag,href,size,categoria) VALUES 

('$semimagem','$semimagem','$titulo','$fonte','$data_ent','$data_alt','$corpo_pag','$href','$size','$categoria')"; // inserção sql na tabela recados


mysql_query($query) or die (mysql_error()); mysql_close();//fecha conexão

echo "<font face=arial size=3 color=green><br><br><b>Destaque cadastrada c/ sucesso, <u>porém sem imagens.</u></b></font>";

}}



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
    $tamanho_x = 1034; //CAIO :: 05/04/2012
    $tamanho_y = 686; 
    $image_p = imagecreatetruecolor($tamanho_x, $tamanho_y); 
    $image = imagecreatefromjpeg($img); 
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $tamanho_x, $tamanho_y, $width, $height); 
    return imagejpeg($image_p, $nome_arquivo, 100); 
}
$uploadP = reduz_imagem($_FILES["arquivo"]["tmp_name"], 120, 60, $caminho_p);

$uploadG = move_uploaded_file($imagem["tmp_name"], $caminho_g);

if($uploadP && $uploadG) {
    echo "<br><br><font face=arial size=3 color=green><b>
	Destaque e imagem redimensionada e enviada com sucesso!</b></font>";
}
else {
    echo "Falha no upload...";
}

echo "<br><br><img src=$caminho_g width='100' border=1><br><img src=\"img/check.png\">";
echo "<br><br><font face=arial color=#000000><b>Título:</b> $titulo...</font>";


//FINAL DO TRATAMENTO DA FOTO

$arquivo = $_POST['arquivo'];
$arquivo_pq = $_POST['arquivo_pq'];
$titulo = $_POST['titulo'];
$fonte = $_POST['fonte'];
$data_ent = date("d/m/y H:i:s");
$corpo_pag = $_POST['corpo_noticia'];
$colegio = $_POST['colegio'];
$href = $_POST['href'];
$categoria = $_POST['categoria'];

$size = $_POST['size'];

$query = "INSERT INTO tbl_destaques (arquivo,arquivo_pq, titulo, fonte, data_ent, data_alt, corpo_pag,href,size, categoria) VALUES 

('$caminho_g','$caminho_p','$titulo','$fonte','$data_ent','$data_alt','$corpo_pag','$href','$size','$categoria')"; // inserção sql na tabela recados

mysql_query($query) or die (mysql_error());

mysql_close();//fecha conexão
	

} }}

 
?>


<br>
<a href="?link=6" style="font-family:Calibri; color:blue">[+] LISTAR TODOS OS DESTAQUES</a><br>
<br>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
  <table style="color:#000000; font-size:12px; font-family:arial" width="769" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="606"><table width="606" border="0" align="center" cellpadding="3" cellspacing="0">
        <tr>
          <th width="114" align="right"  scope="col">Exibi&ccedil;&atilde;o</th>
          <th width="480" align="left" style="font-size:12px" scope="col"><label>
            <input name="categoria" type="radio" value="d" checked="checked" />
            Destaque
            <input name="categoria" type="radio" value="m" />
          Miniatura</label></th>
        </tr> <tr>
          <th width="114" align="right"  scope="col">T&iacute;tulo</th>
          <th width="480" scope="col"><div align="left">
            <input name="titulo" type="text" id="titulo" size="80" maxlength="140" />
          </div></th>
        </tr>
        <tr>
          <th align="right"  scope="col">Link</th>
          <th scope="col"> <div align="left">
            <input name="href" type="text" id="href" size="80" />
          </div></th>
        </tr>
        <tr>
          <th align="right"  scope="col">Fonte</th>
          <th scope="col"> <div align="left">
            <input name="fonte" type="text" id="fonte" value="B11 MOTOS" size="80" />
          </div></th>
        </tr>
        <tr valign="top">
          <th align="right" valign="middle"  scope="col">Conte&uacute;do</th>
          <th align="left" scope="col"><div align="left">
            <?php include('ckeditor/_samples/replacebyassunto.html'); ?>
          </div></th>
        </tr>
        <tr>
          <th align="right"  scope="col">Imagem</th>
          <th style="font-family:calibri; color:#333333; font-size:12px" align="left" scope="col"><input name="arquivo" type="file" id="arquivo3" size="20" />
                <label>
                <input name="size" type="radio" value="0" checked>
                  Imagem+Texto 
                  <input name="size" type="radio" value="1">
                  Somente imagem </label></th>
        </tr>
        <tr>
          <th  scope="col">&nbsp;</th>
          <th scope="col"><input type="submit" name="Submit" value="Gravar" /></th>
        </tr>
      </table></td>
      <td width="163">&nbsp;</td>
    </tr>
  </table>
</form>
