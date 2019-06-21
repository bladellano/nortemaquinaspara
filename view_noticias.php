  

<title>Feeds</title><style type="text/css">
	<!--
	body {
		background-image: url(img/bk_not.png);
		background-repeat: repeat-x;
	}
	-->
</style>

<div align="center">
	
	<?php 
	
	require_once 'includes/conecta.php';
	require_once 'includes/functions.php';

	$declar = "SELECT * FROM tbl_noticias WHERE id = '$_GET[idnoticia]'";

	$query = mysqli_query($con, $declar);

	$qry = mysqli_fetch_array($query);

	$arquivo = $qry["arquivo"];
	$titulo = strtoupper($qry['titulo']);
	$resumo = $qry["resumo"];
	$ver = $qry["ver"];
	$categoria = $qry["categoria"];
	$corpo_noticia = $qry["corpo_noticia"];
	$fonte = $qry["fonte"];
	$tipo = $qry["tipo"];
	$link = $qry["link"];
	$data_ent = $qry["data_ent"];

	$cor_titulo = '#000'; 
	$larg_tab = '99%';  	 	   

	$dia = substr($qry['data_ent'],8,2);
	$mes = substr($qry['data_ent'],5,2);
	$ano = substr($qry['data_ent'],0,4);

	if ($arquivo == 'arquivos/semimagem.jpg')

	{

		if ($tipo == "VIDEO")
		{

			echo "<br><iframe width='480' height='350' src='$link' frameborder='0' allowfullscreen='allowfullscreen'></iframe>";
			echo "<br ><font face=arial size=1 color=#000>$corpo_noticia</font><br>";
		}else{

			echo "<table width='$larg_tab' height='76' border='0'>
			<tr>
			<td height='23'><font face=arial color=#333 size=2><div align='left'><b>Publicada em $dia/$mes/$ano</b></div></font>
			<br>
			<table width='$larg_tab' border='0' cellspacing='0' cellpadding='0'>
			<tr>

			<div align='left'><font color=$cor_titulo size=4 face=arial><b>$titulo</b></font></div></td>
			</tr>
			</table></td>
			</tr>
			<tr>
			<td height='21' align='left' valign='top'>
			<font color=#000 size=2 face=arial><div align='justify' style='line-height:190%;'>

			$corpo_noticia</div></td>
			</tr>
			<tr>
			<td height='23'>
			<font color=blue size=1 face=arial><br><div align='left'><b>Fonte:&nbsp;</b>$fonte</div></td>
			</tr>
			</table>";}
		}
		else
		{
 //ECHO COM IMAGEM ABAIXO:

			if ($tipo == "VIDEO"){

				echo "<br><iframe width='480' height='350' src='$link' frameborder='0' allowfullscreen='allowfullscreen'></iframe>";
			}else{

				echo "<table width='$larg_tab' height='76' border='0'>
				<tr>
				<td height='23'><font face=arial color=#333 size=2><div align='left'><b>Publicada em $data_ent</b></div></font>
				<br>
				<table width='$larg_tab' border='0' cellspacing='0' cellpadding='0'>
				<tr>

				<div align='left'><font color=$cor_titulo size=4 face=arial><b>$titulo</b></font></div></td>
				</tr>
				</table></td>
				</tr>
				<tr>
				<td height='21' align='left' valign='top'>
				<font color=#000 size=2 face=arial><div align='justify' style='line-height:190%;'>

				";

				if ($tipo == "LARGO"){
					echo "<img src='admin/$arquivo' width='800' border='3' align='' style='border-color: #000;'><br>$corpo_noticia</div></td>";
				}else {
					echo "<img src='admin/$arquivo' width='250' border='3' align='left' style='border-color: #000;'>$corpo_noticia</div></td>";
				}


				echo "</tr>
				<tr>
				<td height='23'>
				<font color=red size=1 face=arial><br><div align='left'><b>Fonte:&nbsp;</b>$fonte</div></td>
				</tr>
				</table>";}

			}

			echo "<br><br>";	



			?> 

		</style>

	</div>
