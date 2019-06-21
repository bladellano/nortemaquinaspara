<?php

//CONEXAO
$server='localhost';
$db_user='scvwebco_root';
$db_pass='059924';
$database='scvwebco_norte';
//FIM

$instituicao='NORTE MAQUINAS';

$dt_encerra='17/11/11';
$escola='1';
$seqano='1';
$seqves='1';
$sq='1210000';
$ano='2012';
$periodo='1-1';
$endereco_instituicao='endereço?';
$data_prova='20/11/2011';
$hora_prova='08h';
$cnpj='638877560001/4';
$cidade='Belém';
$estado='Pará';
$valor_cobrado='60,00';
$dias_de_prazo_para_pagamento='0';
$site='wwww.meusite.com.br';
$agencia='1436';
$d_agencia='9';
$conta='47041';
$d_conta='7';
$carteira='18';
$convenio='603877';
$usuario='B11';

$con = mysql_connect($server,$db_user,$db_pass);
$bd = $database; mysql_select_db($bd,$con) or die ("<font color=red face=Calibri size=4><b>N&atilde;o foi possivel conectar ao banco de dados '$bd'</b></font>");
?>