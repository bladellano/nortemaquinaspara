<?php  session_register("valid_user123"); ?>
		
<?php 

$id_midia = $_GET["id"];
//PEGANDO TODOS OS DADOS DO FUNCIONÁRIO :: CAIO DELLANO :: 07/02/2012
include "includes/conecta.php";
mysql_connect($server, $db_user, $db_pass) or die ("Database CONNECT Error (line 18)"); 
$result = mysql_db_query($bd, "SELECT * FROM tbl_noticias WHERE id = '$id_midia'") 
or die ("Database INSERT Error (line 25)"); 
$qry = mysql_fetch_array($result);
//FIM DA CONSUTLA COMPLETA.
//echo "Teste".$qry[1];

?>

    <div align="center"><span class="TitTitulo">&bull; Cadastro de M&iacute;dias/Not&iacute;cias/Videos</span><br>
      <form id="form" method="post" action="?link=14&id=<?=$qry[id]?>" enctype="multipart/form-data">
        <input name="Submit2" type="submit" id="Submit2" value="Alterar" onclick="return verifica()" />
        <br />
        <table width="1050" height="259" border="0" cellpadding="0" cellspacing="2" style="font-family:arial; color:#222222; font-size:12px">
          <!--DWLayoutTable-->
          <tr>
            <td width="120" height="29" align="right" valign="middle"><strong>T&iacute;tulo</strong></td>
            <td width="380" align="left" valign="middle"><label>
              <input style="background: #FF0000; color:#FFFFFF; font-weight:bold" name="titulo" type="text" id="titulo" value="<?=$qry[titulo]?>" size="66" />
            </label></td>
          <td width="544" rowspan="2" valign="top"><img src="<?=$qry[arquivo_pq]?>" width="63" height="63" border="1" align="absmiddle" style="border:solid; color:#FF0000" /><strong>&nbsp;Imagem
              <input type='file' name='foto' id='foto' size="40"/>
          </strong></td>
          </tr>
          <tr>
            <td width="120" height="29" align="right" valign="middle"><strong>Resumo</strong></td>
            <td align="left" valign="middle"><label>
              <input style="background: #FF0000; color:#FFFFFF; font-weight:bold" name="resumo" type="text" id="resumo" value="<?=$qry[resumo]?>" size="66" />
            </label></td>
          </tr>
          <tr>
            <td width="120" align="right" valign="middle" style="color:#FF0000"><strong>Link Video (youtube) </strong></td>
            <td colspan="2" align="left" valign="middle" style="color:#FF0000"><label><strong>
              <input  onblur="if(this.value == '')this.value = http://www.youtube.com/?gl=BR&amp;hl=pt'" onfocus="if(this.value == 'http://www.youtube.com/?gl=BR&amp;hl=pt')this.value = ''" 
			  style="background: #FF0000; color:#FFFFFF; font-weight:bold" value="<?=$qry[link]?>" name="link" type="text" id="link" size="40" />
              Tipo: <span style="color:#FFFFFF; background:#006600">&nbsp;[</span>
              <select name="tipo" id="tipo" style="color:#FF0000">
                <option value="<?=$qry[tipo]?>"><?=$qry[tipo]?></option>
                <option value="LARGO">LARGO</option>
                <option value="PEQUENO">PEQUENO</option>
				  <option value="NOTICIA">NOTÍCIA</option>
				    <option value="ARTIGO">ARTIGO</option>
					  <option value="VIDEO">VIDEO</option>
              </select>
              <span style="color:#FFFFFF; background:#006600">&nbsp;]</span>&nbsp; VER? 
                <select name="ver" id="ver" style="color:#FF0000">
                  <option value="<?=$qry[ver]?>"><?=$qry[ver]?></option>
				  <option value="S">SIM</option>
                  <option value="N">N&Atilde;O</option>
            </select>
                <br />
            </strong></label></td>
          </tr>
          <tr>
            <td align="right" valign="middle"><strong>Categoria</strong></td>
            <td colspan="2" align="left" valign="middle"><select name="categoria" id="categoria" style="color:#FF0000">
                <option value="<?=$qry[categoria]?>">
                  <?=$qry[categoria]?>
              </option>
                <option value="Not&iacute;cia">Not&iacute;cia</option>
                <option value="Esporte">Esporte</option>
                <option value="Dan&ccedil;a">Dan&ccedil;a</option>
                <option value="Arte/Cultura">Arte/Cultura</option>
                <option value="M&iacute;dia">M&iacute;dia</option>
                <option value="Eventos">Eventos</option>
                <option value="Publicidade">Publicidade</option>
                <option value="Lazer">Lazer</option>
                <option value="Policial">Policial</option>
                <option value="Educacional">Educacional</option>
                <option value="Cinema">Cinema</option>
              </select>
                <strong> Fonte
                  <input onblur="if(this.value == '')this.value = Nome ou link...'" onfocus="if(this.value == 'Nome ou link...')this.value = ''" style="background: #FF0000; color:#FFFFFF; font-weight:bold" value="<?=$qry[fonte]?>" name="fonte" type="text" id="fonte" size="33" />
                  <img src='img/file.png' width='23' height='25' align='absmiddle' /><a  rel='shadowbox;width=850;hight=250' href='enviar_arquivo.php' target='_blank' style=' background-color:#FF0000;font-family:arial; color:#FFF; font-weight:bold; font-size:12px'>Adicionar Arquivo [<img src="img/pdf.png" width="33" border="0" /><img src="img/bt_album.png" width="32" height="25" border="0" />]</a></strong></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" valign="middle"><strong>Not&iacute;cia</strong></td>
            <td colspan="2" align="left" valign="middle"><?php include('ckeditor/_samples/replacebyassunto_.html'); ?></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
            <td align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td align="right" valign="middle">&nbsp;</td>
            <td colspan="2" align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
        </table>
        <input name="Submit" type="submit" id="Submit" value="Alterar" onclick="return verifica()" />
      </form>
      <br />
    </div>
