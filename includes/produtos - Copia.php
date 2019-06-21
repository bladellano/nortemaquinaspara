<table width="250" height="252" border="0" cellpadding="0" cellspacing="1" background="img/bk_topcentrogreen.png" style="background-repeat:no-repeat; background-position:center top;">
	<tr>
		<td height="39"><span class="TitSeta" style="color:#FFFFFF"> &nbsp;Nossos PRODUTOS </span></td>
	</tr>
	<tr>
		<td height="206" align="right" valign="top">

			<?php

			require_once 'includes/conecta.php';
			require_once 'includes/functions.php';

			$declar = "SELECT * FROM tbl_produtos ORDER BY id DESC LIMIT 3";
			$query = mysqli_query($con, $declar);

			while($dados = mysqli_fetch_assoc($query)) { 

				?>
				<table width="97%" height="64" border="0" cellpadding="0" cellspacing="1">
					<tr>
						<td width="31%" height="58" align="left" valign="top"><img src="admin/<?php echo $dados["arquivo"]; ?>" width="60" height="55" border='1' align='left' style="border-color: #00FF00;"/></td>
						<td width="69%" align="left"><span class="TitTituloProd"><a href="javascript:abrir('view_produtos.php?id=<?php echo $dados['id']; ?>');" ><?php echo $dados['nome_produto']; ?></a></span>
	<a href="javascript:abrir('view_produtos.php?id=<?=$dados['id']?>');" ><span class="TitResProd"><?php echo criaResumo($dados["descricao"],30); ?></span></a></td>
</tr>
</table>

<?php } ?>

</td>
</tr>
</table>