<?php  session_register("valid_user123");
		
		?>
<?
	
	
	include('../includes/conecta.php');
	$sql = "SELECT * FROM tbl_usuarios WHERE usuario = 'henrique'";
    $qr = mysql_query($sql) or die(mysql_error());
    $ln = mysql_fetch_assoc($qr);
	
     //if ($regiao == ''){$regiao_ = "<font color=red face=calibri>Sem região</font>";}else{$regiao_ = $ln['nome_regiao'];}
		
	//echo ucwords(strtolower($ln['nome_cidade'])); 
	
	?>
	
	<?
	
	if(isset($_POST['usuario']))

{
include('../includes/conecta.php');

mysql_connect($server, $db_user, $db_pass) or die ("Database CONNECT Error (line 18)"); 
$result = mysql_db_query($bd, "SELECT * FROM tbl_usuarios WHERE usuario = '$valid_user123'") or die ("Database INSERT Error (line 25)"); 
if ($qry = mysql_fetch_array($result)) {


$sql = "UPDATE tbl_usuarios SET nome='$nome',senha='$senha',end='$end',tel='$tel',email='$email' WHERE usuario='$valid_user123'";

$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");}

echo "<h1><font color=green face=calibri size=4>Registro alterado(a) com sucesso!</font></h1>";

echo ("<meta http-equiv='refresh' content='2; URL=index_.php?link=20&usuario=$valid_user123'>");
	  
echo "<input type='button' value='Voltar' onclick='history.go(-1)'>&nbsp;";

}
	
	?>
<title>PERFIL</title>
<style type="text/css">
<!--
.TitCinza {color: #999999}
-->
</style>
<div align="center"> <br>
  <form name="form" method="post" action="">
  
  <table width="22%" border="0" cellspacing="0" cellpadding="1">
    <tr>
      <td bgcolor="#339900"><table width="524" height="364" border="0" cellpadding="0" cellspacing="2" bgcolor="#EEFFE6" style="font-family:arial; font-size:12px">
        <tr>
          <td width="135" align="left" valign="middle" bgcolor="#EEFFE6"><img src="img/add.png"  align="absmiddle" /><a href="#" style="font-size:10px">&bull; NOVO CADASTRO</a><br />
              <img src="img/lapis.png" align="absmiddle" /><a href="#" style="font-size:10px">&bull; LISTAR USUARIOS </a></td>
          <td width="383" align="left" valign="middle"><img src="img/admin.png" width="20" height="25" align="absmiddle">: : Perfil do Usu&aacute;rio : : </td>
        </tr>
        <tr>
          <td align="right" valign="middle">Nome:</td>
          <td align="left" valign="middle"><label>
            <input name="nome" type="text" id="nome" value="<?=$ln['nome']?>" size="44">
          </label></td>
        </tr>
        <tr>
          <td align="right" valign="middle">Usu&aacute;rio:</td>
          <td align="left" valign="middle"><input readonly="true" style="color:#FFF; font-weight:bold; background:#FF0000" name="usuario" type="text" id="usuario" value="<?=$ln['usuario']?>" size="22"></td>
        </tr>
        <tr>
          <td align="right" valign="middle">Senha:</td>
          <td align="left" valign="middle"><input name="senha" type="text" id="senha" value="<?=$ln['senha']?>" size="22"></td>
        </tr>
        <tr>
          <td align="right" valign="middle">E-mail:</td>
          <td align="left" valign="middle"><input name="email" type="text" id="email" value="<?=$ln['email']?>" size="44"></td>
        </tr>
        <tr>
          <td align="right" valign="middle">Telefone:</td>
          <td align="left" valign="middle"><input name="tel" type="text" id="tel" value="<?=$ln['tel']?>" size="22"></td>
        </tr>
        <tr>
          <td align="right" valign="middle">Endere&ccedil;o:</td>
          <td align="left" valign="middle"><textarea name="end" cols="35" id="end"><?=$ln['end']?>
          </textarea></td>
        </tr>
        <tr>
          <td align="right" valign="middle" class="TitCinza">Perfil:</td>
          <td align="left" valign="middle"><label>
            <select name="perfil" id="perfil">
                </select>
          </label></td>
        </tr>
        <tr>
          <td align="right" valign="middle" class="TitCinza">Foto:</td>
          <td align="left" valign="middle"><label>
            <input name="arquivo" type="file" id="arquivo">
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="middle"><label>
            <input type="submit" name="Submit" value="Alterar">
          </label></td>
        </tr>
      </table></td>
    </tr>
  </table></form>
</div>

