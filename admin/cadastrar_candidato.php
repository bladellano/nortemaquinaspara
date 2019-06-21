<?

if(isset($_POST['votado']) && isset($_POST['funcao']))
{
include('includes/conecta.php');

$votado = $_POST['votado'];

$votado = $_POST['votado'];
$funcao = $_POST['funcao'];
$data_ent = date("y/m/d H:i:s");

$declar = "INSERT into tbl_votados (votado,funcao,data_ent) values ('$votado','$funcao','$data_ent')";	
	
if (mysql_query($declar, $con))
      
	   { echo "<center><font face=arial color=green size=2><b>Registro cadastro com sucesso &radic; <br>"; }
	    else 
	   { echo "<font face=arial color=red size=3></b>Erro ao cadastrar &Psi;</b></font><br>";}


}


?>

<div align="center">
  <form name="form" method="post" action="">
    <table width="20" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td bgcolor="#000000"><table width="350" height="149" border="0" cellpadding="1" cellspacing="2" bgcolor="#FFFFFF" style="font-family:calibri; font-size:14px">
          <tr>
            <td width="133" height="43">&nbsp;</td>
            <td width="213">Cadastro de Candidatos<br />
              <a href="enquete_avancada.php" style="font-size:12px">Principal</a> |<a href="listar_candidatos.php" style="font-size:12px">[+] Listas Todos</a> </td>
          </tr>
          <tr>
            <td align="right" valign="middle">Nome</td>
            <td align="left" valign="middle"><label>
              <input name="votado" type="text" id="votado">
            </label></td>
          </tr>
          <tr>
            <td align="right" valign="middle">Fun&ccedil;&atilde;o</td>
            <td align="left" valign="middle"><input name="funcao" type="text" id="funcao"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="Submit" value="Gravar">
            </label></td>
          </tr>
        </table></td>
      </tr>
    </table>
  </form>
  </div>
