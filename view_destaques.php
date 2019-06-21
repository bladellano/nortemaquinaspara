<?php header("Content-type: text/html; charset=ISO-8859-1"); ?>
<?php
$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];
$urlatual = "http://".$server.$endereco;
?>
<style type="text/css">

	body {
		background-color: #FFFFFF;
	}

</style><?php 

include "includes/conecta.php";

$sql = mysqli_query($con,"SELECT * FROM tbl_destaques WHERE id='$_GET[id]'"); 

$dados = mysqli_fetch_array($sql); 

$idnoticias = $dados["id"];
$arquivo = $dados["arquivo"];
$titulo = strtoupper($dados['titulo']);
$categoria = $dados["categoria"];
$corpo_pag = $dados["corpo_pag"];
$fonte = $dados["fonte"];
$data_ent = $dados["data_ent"];

$size = $dados["size"];

$cor_titulo = '#000'; 
$larg_tab = '610';  	
$titulo_ = (substr($titulo, 0, 80)); 

if ($size == '1')
{
	echo "<div align=\"center\">
	<img src='admin/$arquivo' width='644' border='0'><br>
	<br>
	<font face=arial size=2>Fonte: $fonte </font></div>";

} else {
 //ECHO COM IMAGEM ABAIXO:
	?>

	<table bgcolor=#FFFFFF width='$larg_tab' height='76' border='0'>
		<font face=arial color=gray size=2><div align='left'><b>Destaque publicado em <?=$data_ent?></b></div></font>
		<br>
		<table width='$larg_tab' border='0' cellspacing='0' cellpadding='0'>
			<tr>
				<div align='left'><font color=<?php echo $cor_titulo; ?> size=4 face=arial>

					<b><?php echo $titulo; ?></b>

				</font></div></td>
			</tr>
		</table></td>
	</tr>
	<tr>
		<td height='21' align='left' valign='top'>
			<font color=black size=2 face=arial><div align='justify'>
				<table width='30' border='0' align='left' cellpadding='0' cellspacing='0'>
					<tr>
						<td><img src='admin/<?php echo $arquivo; ?>' width='400' border='4' align='left' style="border-color: #009900;"/></td>	
					</tr>
				</table>
				<?php echo $corpo_pag; ?></td>
			</tr>

		</table>

		<?php
	} 

	?>

