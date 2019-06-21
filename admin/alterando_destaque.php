
<?php

include('includes/conecta.php');

$id = $_GET['id'];
$data_alt = date("d/m/y H:i:s");
$arquivo = $_FILES["arquivo"];

$imagem = $_FILES["foto"];
$imagem_nome = $arquivo["name"];


if ($imagem_nome=='')

{

echo "<center><font size='3'><font face=arial color=green><b>Imagem permanece a mesma em $datetime</b></font>";
echo "<center><br>";
echo  "&radic;<br><font face=arial>Título:&nbsp;$titulo</font>";
	
$sql = "UPDATE tbl_destaques SET titulo ='$titulo', fonte ='$fonte', data_alt ='$data_alt', corpo_pag ='$corpo_pag', href ='$href' WHERE id='$id'";

$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");

echo "<h1><font color=green face=arial><i>Cadastro alterado com sucesso!</i></font></h1>";
echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=7&id=$id'>");	

}

else

{

//TRATAMENTO DA FOTO

//$imagem = $_FILES["foto"];

$imagem = $_FILES["arquivo"];
$pasta = "arquivos/";
$imagem_nome = $imagem["name"];

$caminho_p = $pasta."thumb_".$imagem_nome;
$caminho_g = $pasta. $imagem_nome;

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
$uploadP = reduz_imagem($_FILES["arquivo"]["tmp_name"], 120, 60, $caminho_p);

$uploadG = move_uploaded_file($imagem["tmp_name"], $caminho_g);

if($uploadP && $uploadG) {
    echo "<br><br><font face=arial size=2 color=green>Foto redimensionada e enviada com sucesso!</font>";
}
else {
    echo "Falha no upload...";
}


$sql = "UPDATE tbl_destaques SET arquivo ='$caminho_g',arquivo_pq ='$caminho_p',titulo ='$titulo', fonte ='$fonte', data_alt ='$data_alt', corpo_pag ='$corpo_pag',  href ='$href' WHERE id='$id'";


$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");

echo "<h1><font color=green face=arial><i>Cadastro alterado com sucesso!</i></font></h1>";

echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=7&id=$id'>");
	  
echo "<center><font size='3'><font face=arial>Alterado com sucesso em $datetime</font>";
echo "<center><br>";
echo  "<img src='$caminho_g' width='250'><br><font face=arial>$titulo</font>";

}


?>


<br />
<input type='button' value='Voltar' onclick='history.go(-1)'>

