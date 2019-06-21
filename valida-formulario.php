<?php 

$email_main = "nortemaquinas_ferramentas@hotmail.com";

if(strcasecmp('formulario-ajax', $_POST['metodo']) == 0){

	$myinputs = filter_input_array(INPUT_POST,FILTER_DEFAULT);

	$nome = $myinputs['nome']; 
	$email = $myinputs['email'];
	$empresa = $myinputs['cliente'];
	$telefone = $myinputs['telefone'];
	$assunto = $myinputs['assunto'];
	$mensagem = $myinputs['mensagem'];

	require 'sendgrid/vendor/autoload.php';

	$from = new SendGrid\Email(null, $email);
	$subject = "Mensagem do Site - Fale Conosco";
	$to = new SendGrid\Email(null, $email_main);
	$content = new SendGrid\Content("text/html", "Olá NORTE MÁQUINAS, <br>
		<br><strong>MENSAGEM DO SITE - FALE CONOSCO</strong><br>
		<br><strong>Leia com atenção as informações aqui apresentadas, pois elas indicam que houve uma tentativa de contato com a sua empresa e retorne com clareza e objetivamente a dúvida do usuário.</strong><br>
		<br>
		<strong>NOME:</strong> $nome<br>
		<strong>EMPRESA/Cliente:</strong> $empresa<br>
		<strong>E-MAIL:</strong> $email <br>

		<strong>TELEFONE:</strong> $telefone <br>
		<strong>ASSUNTO:</strong> $assunto <br>
		<strong>MENSAGEM:</strong> $mensagem");

	$mail = new SendGrid\Mail($from, $subject, $to, $content);

    // necessário inserir a chave
	$apiKey = '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';

	$sg = new \SendGrid($apiKey);

	$response = $sg->client->mail()->send()->post($mail);

	$html ="\n\n Obrigado pelo envio Sr(a) $nome.";

	echo $html;

} else if(strcasecmp('formulario-ajax-orcamento', $_POST['metodo']) == 0){
	

	$myinputs = filter_input_array(INPUT_POST,FILTER_DEFAULT);

	$nome = $myinputs['nome']; 
	$telefone = $myinputs['telefone'];
	$email = $myinputs['email'];
	$produto = $myinputs['produto'];
	$mensagem = $myinputs['mensagem'];	 

	require 'sendgrid/vendor/autoload.php';

	$from = new SendGrid\Email(null, $email);
	$subject = "Mensagem do Site - Orçamento";
	$to = new SendGrid\Email(null, $email_main);
	$content = new SendGrid\Content("text/html", "Olá NORTE MÁQUINAS, <br>
		<br><strong>MENSAGEM DO SITE - ORÇAMENTO</strong><br>
		<br><strong>Leia com atenção as informações aqui apresentadas, pois elas indicam que houve uma tentativa de contato com a sua empresa e retorne com clareza/objetivamente a dúvida do usuário.</strong><br>
		<br>
		<strong>NOME:</strong> $nome<br>	 
		<strong>E-MAIL:</strong> $email<br>
		<strong>TELEFONE:</strong> $telefone<br>
		<strong>PRODUTO:</strong> $produto<br>
		<strong>MENSAGEM:</strong> $mensagem");

	$mail = new SendGrid\Mail($from, $subject, $to, $content);

    // necessário inserir a chave
	$apiKey = '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';

	$sg = new \SendGrid($apiKey);

	$response = $sg->client->mail()->send()->post($mail);

	$html ="\n\n Obrigado pelo envio Sr(a) $nome. Logo entraremos em contato";

	echo $html;
}

?>