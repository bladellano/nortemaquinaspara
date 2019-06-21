<table width="98%" height="" border="0" cellpadding="0" cellspacing="1">
	
	<tr>
		<td height="206" align="right" valign="top">

			<?php

			require_once 'includes/conecta.php';
			require_once 'includes/functions.php';

			$declar = "SELECT * FROM tbl_produtos ORDER BY id DESC LIMIT 4";
			$query = mysqli_query($con, $declar);

			while($dados = mysqli_fetch_assoc($query)) { 

				?>
				<table width="97%" height="64" border="0" cellpadding="0" cellspacing="1">
					<tr>
						<td width="31%" height="58" align="left" valign="top">
							<img src="admin/<?php echo $dados["arquivo"]; ?>" width="60" height="55" style="border:1px solid #009432; border-radius: 8px;" align='left'/>
						</td>
						<td width="80%" align="left">

							<a href="javascript:abrir('view_produtos.php?id=<?php echo $dados['id']; ?>');" ><?php echo $dados['nome_produto']; ?></a>
							
							<!-- <?php echo criaResumo($dados["descricao"],30); ?> -->
						</td>
					</tr>
				</table>

			<?php } ?>

		</td>
	</tr>
</table>