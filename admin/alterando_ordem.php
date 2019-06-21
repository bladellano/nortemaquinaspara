<?

//require('classe.fachada.php');
include('includes/conecta.php');

//$tipo = $_POST["tipo"];
$id_midia = $_POST["principal"];
$data_alt = date("y/m/d H:i:s");

//$selecionar = new fachada();

$enable = 1;
$disable = 0;  

$sqlenable = "UPDATE tbl_logos SET principal = '".$enable."',data_alt = '".$data_alt."' WHERE id = '".$id_midia."'";
		
$sqldisable = "UPDATE tbl_logos SET principal = '".$disable."' WHERE principal = '".$enable."'";
		
$consulta1 = mysql_query($sqldisable) or die(mysql_error());
$consulta2 = mysql_query($sqlenable) or die(mysql_error());

if($consulta1 and $consulta2){

$_SESSION["alterar"] = $_POST["principal"];

header("Location: index_.php?link=4");

}
?>


<?
/*
require('../classesphp/classe.fachada.php');
$id_noticia = $_POST["id_noticia"];

$selecionar = new fachada();

$parametro = "WHERE principal = '2'";

$total = $selecionar->contaTotaltbl_logos($parametro);

$enable = 2;
$disable = 0;


if((isset($_POST["secundaria"]))){//MARCA OU DESMARCA A SECUNDÁRIA

if($total <= 2){//VERIFICA O N° DE  SECUNDÁRIAS MARCADAS

$sqlenable = "UPDATE tbl_logos SET principal = '".$enable."' WHERE id_noticia = '".$id_noticia."'";

$consulta2 = mysql_query($sqlenable) or die(mysql_error());

if($consulta2){

$_SESSION["alterar"] = true;
header("Location: noticias.php");

}

}else{

header("Location: noticias.php?msg='".urlencode("Voce pode destacar apenas 03 notícias.Desmarque alguma.")."'");
exit;

}
}else{//ESSE ELSE REFERE-SE AO IF - isset($_POST["secundaria"]

$sqldisable = "UPDATE tbl_logos
		SET principal = '".$disable."'
        WHERE id_noticia = '".$id_noticia."'";

$consulta = mysql_query($sqldisable);

if($consulta){

$_SESSION["alterar"] = true;
header("Location: noticias.php");

}
}

*/
?>
