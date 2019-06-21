
<?php 

// header("Content-type: text/html; charset=ISO-8859-1");

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php include 'includes/title.php'; ?></title>

  <link rel="stylesheet" href="css/layout.css" type="text/css" />
  <LINK rel="shortcut icon" href="img/ico.ico">

    <script language="JavaScript">
      function abrir(URL) {

        var width = 850;
        var height = 550;

        var left = 310;
        var top =30;

        window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');

      }
    </script>
    
  </head>
  <body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
    <table width="100%" height="995" border="0" cellpadding="1" cellspacing="0">
      <tr>
        <td height="110" align="center" valign="middle" background="img/topo_verde.png"><?php include("includes/topo.php"); ?></td>
      </tr>
      <tr>
        <td height="293" align="center" valign="top" background="img/bk_centro.png" style="background-repeat:no-repeat; background-position:center top;"><table width="954" height="283" border="0" cellpadding="1" cellspacing="0">
          <tr>
            <td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="1">
              <tr>
                <td align="left" valign="middle"><span class="TitServ">M&aacute;quinas e Ferramentas p/ Madeira, Metais e Espuma, Vendas e Servi&ccedil;os</span></td>
                <td align="right" valign="middle" class="TitServ">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="246" align="left" valign="top"><?php include("destaques/index.php"); ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="271" align="center" valign="top" bgcolor="#E5E5E5"><table width="954" height="153" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td width="176" align="left" valign="top"><?php include("includes/categoria.php"); ?></td>
            <td width="259" align="left" valign="middle"><?php include("includes/noticias.php"); ?></td>
            <td width="260" align="left" valign="middle"><?php include("includes/produtos.php"); ?></td>
            <td width="254" align="left" valign="middle"><?php include("includes/servicos.php"); ?></td>
          </tr>
        </table></td>      </tr>


      <tr>
        <td height="132" align="center" valign="top" bgcolor="#CECECE"><table width="954" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20%" bgcolor="#006130" class="TitServ"> &nbsp;<a href="#">Nossas Representa&ccedil;&otilde;es</a></td>
                <td width="80%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="93" align="center" bgcolor="#FFFFFF"><?php require_once "includes/carrossel.php"; ?></td>
          </tr>
        </table></td>
      </tr>

      <!-- LOCALIZAÇÃO DA NORTE MAQUINAS -->

      <tr>
        <td height="132" align="center" valign="top" bgcolor="#E5E5E5"><table width="954" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20%" bgcolor="#006130" class="TitServ"> &nbsp;<a href="#">Localiza&ccedil;&atilde;o</a></td>
                <td width="80%">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="93" align="center" >

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.713074259236!2d-48.38755728583121!3d-1.3486541360763307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a46089f0c411c7%3A0xe089af4010713917!2sNORTE+MAQUINAS+para+industria+em+geral!5e0!3m2!1spt-BR!2sbr!4v1524509650149" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>

            </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="161" align="center" valign="top" background="img/bk_rodleft.jpg" bgcolor="#CECECE"><?php include("includes/rodape_menu.php"); ?></td>
      </tr>
      <tr>
        <td height="28" align="center" valign="top" background="img/bk_rodass.png" bgcolor="#CECECE"><?php include("includes/rodape.php"); ?></td>
      </tr>
    </table>

  </body>
  </html>
