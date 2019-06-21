<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php include ("includes/title.php"); ?></title>
<body bottommargin="0" leftmargin="0" rightmargin="0" topmargin="0" style="background-image: url(img/bg.png);">
<div align="center">
  <?php

require "includes/conecta.php";
//$senha = base64_encode($senha);
session_start();

// Recupera o login
$login = isset($_POST["usuario"]) ? (trim($_POST["usuario"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ?  (trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha)
{
    echo "<font face=arial color=red><br><br>";     echo "Você deve digitar sua senha e login!";	echo "<br></font>";
	
    //exit;
}

$SQL = "SELECT * FROM tbl_usuarios   WHERE usuario = '" . $login . "'";
$result_id = @mysql_query($SQL) or die("Erro no banco de dados!");
$total = @mysql_num_rows($result_id);

// Caso o usuário tenha digitado um login válido o número de linhas será 1..
if($total)
{
    // Obtém os dados do usuário, para poder verificar a senha e passar os demais dados para a sessão
    $dados = @mysql_fetch_array($result_id);
    // Agora verifica a senha
    if(!strcmp($senha, $dados["senha"]))
    {
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário
        $_SESSION["id_usuario"]   = $dados["id"];
        $_SESSION["nome_usuario"] = stripslashes($dados["nome"]);
       		
		$valid_user123 = $login;
	    session_register("valid_user123");
		
		/*if ($dados["perfil"] =='1')
		{
		echo "perfil 1 // Administrador";
		}
		elseif($dados["perfil"] =='2')
		{
		echo "perfil 2 // Civil";
		}
		elseif($dados["perfil"] =='3')
		{
		echo "perfil 3 // Criminal";
		}
		elseif($dados["perfil"] =='4')
		{
		echo "perfil 4 // Dorivaldo";
		}*/
				
       header("Location:index_.php");
       exit;
    }
    // Senha inválida
    else
    {
    echo "<font face=arial color=red><br><br>"; 
		echo "<img src='img/alert.png' align='middle'>Senha inválida!";
	echo "<br>";
        //exit;
    }
}
// Login inválido
else
{

    echo "<font face=arial color=red><br><br>"; 
    echo "<img src=\"img/alert.png\" align=`middle`>O login fornecido por você é inexistente!";
	echo "<br>";
//exit;
}

echo "<input type='button' value='Voltar' onclick='history.go(-1)'><br>";

?></div>
</body>

</html>