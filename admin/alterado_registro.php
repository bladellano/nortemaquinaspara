<?php
include('includes/conecta.php');

$id = $_GET["id"];

$imagem = $_FILES["foto"];
$imagem_nome = $imagem["name"];


	 		$titulo = $_POST['titulo'];
			$link = $_POST['link'];
			$resumo= $_POST['resumo'];
			$categoria= $_POST['categoria'];
			$corpo_noticia= $_POST['corpo_noticia'];
			
			$fonte= $_POST['fonte'];
			$ver= $_POST['ver'];
			$tipo= $_POST['tipo'];
			$data_alt= $_POST['data_alt'];

//Caso a nome da imagem seja nula, simplesmente nao troca a imagem, somente outros itens.

			if ($imagem_nome=='')
			
			{
			
			echo "<br><br><center><font size='3'><font face=arial color=green><b>Imagem permanece a mesma</b></font>";
			echo "<center><br>";
			echo "<img src=\"img/check.png\"><br><font face=arial><b>Título:</b>&nbsp;$titulo</font>";
			
			$sql = "UPDATE tbl_noticias SET 
			
			titulo = '$titulo', 
			link='$link', 
			resumo='$resumo',
			categoria='$categoria',
			corpo_noticia='$corpo_noticia',
			fonte='$fonte',
			ver='$ver',
			tipo='$tipo'
						
			WHERE id='$id'";
			
			$resultado = mysql_query($sql) or die ("Não foi posssível realizar a consulta ao banco de dados");
			
			echo "<h1><font color=green face=arial><i>Cadastro alterado com sucesso!</i></font></h1>";
			echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=13&id=$id'>");	
			
			}

else

{
//TRATAMENTO DA FOTO
$imagem = $_FILES["foto"];
$pasta = "arquivos/";
$imagem_nome = $imagem["name"];

$caminho_p = $pasta."thumb_".$imagem_nome;
$caminho_g = $pasta . $imagem_nome;

function reduz_imagem($img, $max_x, $max_y, $nome_foto) { 
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
    return imagejpeg($image_p, $nome_foto, 100); 
}
$uploadP = reduz_imagem($_FILES["foto"]["tmp_name"], 120, 60, $caminho_p);

$uploadG = move_uploaded_file($imagem["tmp_name"], $caminho_g);

if($uploadP && $uploadG) {
    echo "<center>";
	echo "<br><br><font face=arial size=2 color=green>Foto redimensionada e enviada com sucesso!</font>";
}
else 
{
    echo "Falha no upload...";
}

//FINAL DO TRATAMENTO DA FOTO


	$sql = "UPDATE tbl_noticias SET 
			
			titulo = '$titulo', 
			link='$link', 
			resumo='$resumo',
			categoria='$categoria',
			corpo_noticia='$corpo_noticia',
			arquivo='$caminho_g',
			arquivo_pq='$caminho_p',
			fonte='$fonte',
			ver='$ver',
			tipo='$tipo',
			data_alt='$data_alt'
			
			WHERE id='$id'";

$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");

echo "<h1><font color=green face=arial><i>Cadastro alterado com sucesso!</i></font></h1>";
echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=13&id=$id'>");
echo "<br>";
echo  "<img src='$caminho_g'  border='1' width='250'><br><font face=arial><br><b>Título:</b> $titulo</font></center>";

}


 
?>
