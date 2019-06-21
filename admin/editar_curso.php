<?php  session_register("valid_user123"); ?>
<?php

$id = $_GET["id"];

include('../includes/conecta.php');
	
//PEGANDO TODOS OS DADOS DO FUNCIONÁRIO :: CAIO DELLANO :: 07/02/2012

mysql_connect($server, $db_user, $db_pass) or die ("Database CONNECT Error (line 18)"); 
$result = mysql_db_query($bd, "SELECT * FROM tbl_cursos WHERE id = '$id'") or die ("Database INSERT Error (line 25)"); 
$qry = mysql_fetch_array($result);
//FIM DA CONSUTLA COMPLETA.

?>
<style type="text/css">
<!--
.style1 {font-weight: bold}
body {
	background-color: #FFFFFF;
}
-->
</style>
<div align="center"><br />
</div>
<form action="alterado_curso.php?id=<?=$qry[id]?>" method="post">
  <div align="center">
  <table width="550" height="522" border="0" cellpadding="1" cellspacing="2" bgcolor="#FFFFFF" style="font-family:arial; font-size:12px; color:#000">
    <tr>
      <td width="244" height="68" align="center" valign="middle"><a href="lista_cursos.php" style="font-size:14px; color:#990000; font-weight:bold">&laquo; Voltar</a></td>
        <td width="296" valign="top" style="font-size:18px; font-weight:bold"><img src="img/bt_edit.png" width="25" height="25" align="absmiddle" />Alterar Curso <br />
          <span style="font-size:11px">Status 
          <label><?
	  
	  if($qry[ver] == 'S'){$ver_ = "ATIVO";}else {$ver_ = "DESATIVADO";}
	  ?>
          <select name="ver" id="ver">
            <option value="<?=$ver_ ?>"><?=$ver_ ?></option>
            <option value="S">ATIVO</option>
            <option value="N">DESATIVADO</option>
          </select>
          </label>
        </span></td>
      </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#F4F4F4">Nome Curso </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><label>
          <input name="nome" type="text" id="nome" value="<?=$qry[nome]?>" size="40" />
        </label></td>
      </tr>
    <tr>
      <td align="right" valign="middle">Objetivo</td>
        <td align="left" valign="middle"><textarea name="objetivo" cols="40" id="objetivo"><?=$qry[objetivo]?>
    </textarea></td>
      </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#F4F4F4">Perfil do Profissional </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="perfil_prof" cols="40" id="perfil_prof"><?=$qry[perfil_prof]?>
    </textarea></td>
      </tr>
    <tr>
      <td align="right" valign="middle">Per&iacute;odo</td>
        <td align="left" valign="middle"><textarea name="perio_dur" cols="40" id="perio_dur"><?=$qry[perio_dur]?>
    </textarea></td>
      </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#F4F4F4">M&oacute;dulo</td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="modulo" cols="40" id="modulo"><?=$qry[modulo]?>
    </textarea></td>
      </tr>
    <tr>
      <td align="right" valign="middle">Mercado de Trabalho </td>
        <td align="left" valign="middle"><textarea name="mercado" cols="40" id="mercado"><?=$qry[mercado]?>
    </textarea></td>
      </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#F4F4F4">Estrutura F&iacute;sica </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="estrutura_fisica" cols="40" id="estrutura_fisica"><?=$qry[estrutura_fisica]?>
    </textarea></td>
      </tr>
    <tr>
      <td align="right" valign="middle">Investimento (R$ do Curso) </td>
        <td align="left" valign="middle"><input name="invest" type="text" id="invest" value="<?=$qry[invest]?>" size="40" /></td>
      </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#F4F4F4">Tipo do Curso </td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><select name="tipo_curso" id="tipo_curso">
          <option value="<?=$qry[tipo_curso]?>"><?=$qry[tipo_curso]?></option>
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
            <option value="<?=$qry[categoria]?>"><?=$qry[categoria]?></option>
            <option value="T&Eacute;CNICO">T&Eacute;CNICO</option>
            <option value="PROFISSIONALIZANTE">PROFISSIONALIZANTE</option>
            <option value="SUPERIOR">SUPERIOR</option>
            <option value="EAD">EAD</option>
          </select>
        </label></td>
      </tr>
    <tr>
      <td align="right" valign="middle" bgcolor="#F4F4F4">Atribui&ccedil;&otilde;es</td>
        <td align="left" valign="middle" bgcolor="#F4F4F4"><textarea name="atribuicoes" cols="40" id="atribuicoes"><?=$qry[atribuicoes]?>
    </textarea></td>
      </tr>
    <tr>
      <td align="right" valign="middle">Local do Curso </td>
        <td align="left" valign="middle"><input name="local" type="text" id="local" value="<?=$qry[local]?>" size="40" /></td>
      </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
      </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
        <td align="left" valign="middle"><input name="submit2" type="submit" value="Alterar" /></td>
      </tr>
  </table>
  <br />
  </div>
</form>
