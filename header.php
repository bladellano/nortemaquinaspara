<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	
	<!-- <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet">

	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/redes.css">
	<link rel="stylesheet" href="css/modal.css">


	<title>Norte Máquinas</title>
</head>

<script language="JavaScript">
	function abrir(URL) {

		var width = 850;
		var height = 550;

		var left = 310;
		var top =30;

		window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

	}
</script>

<body>



	<!-- formulario orçamento modal -->
	<div class="bg">
		<div class="form">
			<div class="closeBtn"><i class="fas fa-times"></i></div>
			<form id="form-valid">
				<h4>Formulário de Orçamento</h4>
				<input type="text" name="nome" placeholder="*Nome completo">
				<input type="text" name="telefone" placeholder="*Telefone">
				<input type="text" name="email" placeholder="*E-mail">
				<input type="text" name="produto" placeholder="*Produto">
				<textarea name="mensagem" placeholder="*Mensagem"></textarea><br/>
				<input type="hidden" id="metodo" value="formulario-ajax-orcamento">				
				<input type="submit" class="btn btn-success" name="acao" value="Enviar">
			</form>

		</div> <!-- div form -->
	</div> <!-- div big -->
