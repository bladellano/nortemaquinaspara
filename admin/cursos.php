<?php 


if(isset($_POST['nome']) && isset($_POST['categoria']))
{

include('../includes/conecta.php');

//VARIAVEIS DA CONTRARIA

$nome = mb_strtoupper(trim($_POST['nome']));
$objetivo = mb_strtoupper(trim($_POST['objetivo']));
$inscricao = $_POST['inscricao'];
$perfil_prof = $_POST['perfil_prof'];
$perio_dur = $_POST['perio_dur'];
$modulo = $_POST['modulo'];
$mercado = $_POST['mercado'];
$estrutura_fisica = $_POST['estrutura_fisica'];
$invest = $_POST['invest'];
$tipo_curso = $_POST['tipo_curso'];
$categoria = $_POST['categoria'];
$atribuicoes = $_POST['atribuicoes'];

$data_ent = date("d/m/Y H:i:s");
$ver = "S";


$data_ent = date("d/m/y H:i:s"); //Para todas partes do cadastro.

if (!$nome || !$categoria)
  
{

echo "<br>";
echo "<font face=arial color=red size=4> Campos incompletos, favor voltar para preencher corretamente</font><br>";
echo "<div align='center'><br><input type='submit' value='Voltar' onclick='history.go(-1)'></div><br>";

} 
   
else
   
{   //VERIFICANDO DUPLICAÇÃO

include ('../includes/conecta.php');

if($nome!=null && $nome!='')
   {
$sql = "SELECT * FROM tbl_cursos WHERE nome='$nome'";
$res2 = mysql_query($sql,$con);
$res3 = mysql_fetch_array($res2);
if($res3 != false)
        {
echo "<div align='center'>";
echo "<br><br><font face=arial color=red size=2><b>Cursos com nome de cpf $cpf, já se encontra cadastrado.</b></font><br><br>";
echo "<font face=arial size=2><a href='cursos.php'>&raquo; Novo Cadastro</a></font>";
echo "<div align='center'><br><input type='submit' value='Voltar' onclick='history.go(-1)'></div><br>";
        } 
 else  
       { 
      
  //FINALIZANDO PESQUISA DE DUPLICAÇÃO
  
$declar = "INSERT into tbl_cursos 

(nome,objetivo,perfil_prof,perio_dur,modulo,mercado,estrutura_fisica,invest,tipo_curso,categoria,atribuicoes,local,ver)
values 
('$nome','$objetivo','$perfil_prof','$perio_dur','$modulo','$mercado','$estrutura_fisica','$invest','$tipo_curso','$categoria','$atribuicoes','$local','$ver')";	
	
if (mysql_query($declar, $con))
      //CADASTRADO COM SUCESSO!
	   {
	echo "<center><font face=arial color=green size=3><b>&nbsp;$nome cadastrado com sucesso!<hr>";
	   
	   


//
	    }
	    else 
	    {
		echo "<font face=arial color=red size=3></b>Erro ao cadastrar &Psi;</b></font><br>";
		}

mysql_close ($con);

echo "<div align='center'><br><input type='submit' value='Voltar' onclick='history.go(-1)'></div><br>";
     
	     }
	   
	   
	    }
	     
	   }
	   
	   }//isset
	  
?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>





<div align="center">
  <form name="form" method="post" action="<?php $_SERVER['PHP_SELF'];?>" >
    <table width="550" height="336" border="0" cellpadding="1" cellspacing="2" bgcolor="#FFFFFF" style="font-family:arial; font-size:12px; color:#000">
      <tr>
        <td width="244" height="35">&nbsp;</td>
        <td width="296" style="font-size:18px; font-weight:bold"><img src="img/bt_edit.png" width="25" height="25" align="absmiddle">Cadastro de Cursos<br>
        <br>
        <a href="lista_cursos.php" style="font-size:11px">&bull; LISTAR TODOS OS CURSOS</a><br>
        <br></td>
      </tr>
      <tr>
        <td align="right" valign="middle" bgcolor="#F4F4F4">Nome Curso </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><label>
          <input name="nome" type="text" id="nome" size="40">
        </label></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Objetivo</td>
        <td align="left" valign="middle"><textarea name="objetivo" cols="40" id="objetivo"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle" bgcolor="#F4F4F4">Perfil do Profissional </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="perfil_prof" cols="40" id="perfil_prof"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Per&iacute;odo</td>
        <td align="left" valign="middle"><textarea name="perio_dur" cols="40" id="perio_dur"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle" bgcolor="#F4F4F4">M&oacute;dulo</td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="modulo" cols="40" id="modulo"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Mercado de Trabalho </td>
        <td align="left" valign="middle"><textarea name="mercado" cols="40" id="mercado"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle" bgcolor="#F4F4F4">Estrutura F&iacute;sica </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="estrutura_fisica" cols="40" id="estrutura_fisica"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Investimento (R$ do Curso) </td>
        <td align="left" valign="middle"><input name="invest" type="text" id="invest" size="40"></td>
      </tr>
      <tr>
        <td align="right" valign="middle" bgcolor="#F4F4F4">Tipo do Curso </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><select name="tipo_curso" id="tipo_curso">
          <option value="">: : SELECIONE : :</option>
		  <option value="SA&Uacute;DE">SA&Uacute;DE</option>
          <option value="MEIO AMBIENTE">MEIO AMBIENTE</option>
          <option value="ADMINISTRATIVO">ADMINISTRATIVO</option>
          <option value="ENGENHARIA">ENGENHARIA</option>
		  <option value="OUTROS">OUTROS</option>
                </select></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Categoria</td>
        <td align="left" valign="middle"><label>
        <select name="categoria" id="categoria">
          <option value="T&Eacute;CNICO">T&Eacute;CNICO</option>
          <option value="PROFISSIONALIZANTE">PROFISSIONALIZANTE</option>
          <option value="SUPERIOR">SUPERIOR</option>
          <option value="EAD">EAD</option>
        </select>
        </label></td>
      </tr>
      <tr>
        <td align="right" valign="middle" bgcolor="#F4F4F4">Atribui&ccedil;&otilde;es</td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="atribuicoes" cols="40" id="atribuicoes"></textarea></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Local do Curso </td>
        <td align="left" valign="middle"><input name="local" type="text" id="local" size="40"></td>
      </tr>
      <tr>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="right" valign="middle">&nbsp;</td>
        <td align="left" valign="middle"><label>
          <input type="submit" name="Submit" value="Gravar">
        </label></td>
      </tr>
    </table>
  </form>
</div>

