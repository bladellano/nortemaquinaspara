<? ob_start();?>
<?php

if(isset($_POST['usuario']) && isset($_POST['senha']))
{

require "../includes/conecta.php";
//$senha = base64_encode($senha);
session_start();

// Recupera o login
$login = isset($_POST["usuario"]) ? (trim($_POST["usuario"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ?  (trim($_POST["senha"])) : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha)
{
    echo "<br><div align='center'><font face=arial color=#FFFFFF size=1>";     echo "Você deve digitar sua senha e login!";	echo "</font></div>";
	
    //exit;
}

$SQL = "SELECT * FROM tbl_usuarios   WHERE usuario = '" . $login . "'";
$result_id = @mysql_query($SQL) or die("Erro no banco de dados - index!");
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
        $_SESSION["id_usuario"]   = $dados["id_funcionario"];
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
	   session_start();		
       header("Location:index_.php");
       exit;
    }
    // Senha inválida
    else
    {
    echo "<div align='center'><font face=arial color=#FFFFFF><br><br>"; 
	echo "<b>Senha inválida!</b>";
	echo "<br></div>";
        //exit;
    }
}
// Login inválido
else
{

    echo "<div align='center'><font face=arial color=#FFFFFF><br><br>"; 
    echo "<b>O login fornecido por você é inexistente!</b>";
	echo "<br></div>";
//exit;
}

//echo "<input type='button' value='Voltar' onclick='history.go(-1)'><br>";


}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<LINK REL="SHORTCUT ICON" HREF="img/ico.ico">

<title><? include "../includes/title.php" ?></title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
a {
	font-family: Arial;
	font-size: 12px;
	color: #FF9900;
	font-weight: bold;
}
.TitRodape {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #666666;
}
.TitTitulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 22px;
	color: #000000;
	font-weight:bold;
}
.TitInst {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	color: #0000FF;
	font-weight:bold;
	font-style:italic;
}
.TitAnteriores {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #339900;
	font-weight:bold;
}
.TitUsuario {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #006699;
}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #666666;
}
.TitNomeArea {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
	font-style: italic;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="100%" height="476" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center" style="font-family:arial; color:#FF9900; font-size:16px"></div></td>
  </tr>
  <tr>
    <td height="150" align="center" valign="bottom"><form action="<?php $_SERVER['PHP_SELF'];?>" method="post" name="form_login" id="form_login">
      <br />
      <table width="299" height="235" border="0" cellpadding="0" cellspacing="2" background="img/bk_login.png" style="font-family:Calibri; font-size:16px; color:#FFF; background-repeat:no-repeat">
        <!--DWLayoutTable-->
        <tr>
          <td height="94" colspan="2" align="center" valign="middle"><br />
            <strong><img src="../img/logo_adm.png" width="120" height="60" /><br />
            Login</strong></td>
          </tr>
        <tr>
          <td width="112" height="31" align="right"  >Usu&aacute;rio</td>
          <td width="181"><input name="usuario" type="text" id="usuario" size="12"/>          </td>
        </tr>
        <tr>
          <td height="31" align="right"  >Senha</td>
          <td><input name="senha" type="password" id="senha" value="" size="12"/></td>
        </tr>
        <tr>
          <td height="64">&nbsp;</td>
          <td valign="top"><label style="font-size:11px; color:#FF0000">&bull; <a href="#">Ainda n&atilde;o possui cadastro?</a> <br />
          <br />
              <input type="image" src="img/botao_logar.png" name="Submit" value="Entrar" />
          </label></td>
        </tr>
      </table>
      <br />
    </form></td>
  </tr>
  <tr>
    <td height="268" align="center" valign="bottom"><?php // include("includes/rodape.html"); ?></td>
  </tr>
</table>
</body>
</html>
