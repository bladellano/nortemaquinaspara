
<?php

session_start();

require '../../config.php';

$myinputs = filter_input_array(INPUT_POST,FILTER_DEFAULT);

$nome = $myinputs['nome'];
$email = $myinputs['email'];
$mensagem = $myinputs['mensagem'];
$telefone = $myinputs['telefone'];
$assunto = $myinputs['assunto'];
$empresa = $myinputs['empresa'];

require 'vendor/autoload.php';

$from = new SendGrid\Email(null, $email);
$subject = "Mensagem de contato";
$to = new SendGrid\Email(null, "bladellano@yahoo.com.br");
$content = new SendGrid\Content("text/html", "Olá EASYLOG, <br>
    <br><strong>MENSAGEM DO PORTAL</strong><br>
    <br>
    <strong>Nome:</strong> $nome<br>
    <strong>Email:</strong> $email <br>
    <strong>Empresa:</strong> $empresa <br>
    <strong>Telefone:</strong> $telefone <br>
    <strong>Assunto:</strong> $assunto <br>
    <strong>Mensagem:</strong> $mensagem");

$mail = new SendGrid\Mail($from, $subject, $to, $content);

        //Necessário inserir a chave
$apiKey = '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';

$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);

header('location: '.BASE_URL.'/?Msg=true#contato');
