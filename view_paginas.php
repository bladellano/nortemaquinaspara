<?php header("Content-type: text/html; charset=ISO-8859-1"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title><?php include "includes/title.php"; ?></title>
  <link rel="stylesheet" href="css/layout.css" type="text/css" />
  <LINK REL="SHORTCUT ICON" HREF="img/ico.ico">
    <script type="text/javascript" src="destaques/javascript/jquery-1.7.1.min.js"></script> 	<!-- POR QUE FICOU SEM DESTAQUE, TIVE Q COLOCAR -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {
       $('#subir').click(function(){ 
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
      });
     });
   </script>

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
      <td height="293" align="center" valign="top" background="img/bk_centrox.png" style="background-repeat:no-repeat; background-position:center top;"><table width="954" height="283" border="0" cellpadding="1" cellspacing="0">
        <tr>
          <td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td align="left" valign="middle"><span class="TitServ">M&aacute;quinas e Ferramentas p/ Madeira, Metais e Espuma, Vendas e Servi&ccedil;os</span></td>
              <td align="right" valign="middle" class="TitServ">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="246" align="left" valign="top">

            <?php 

            $color_tit = "#00FF00";          

            require_once 'includes/conecta.php';
            require_once 'includes/functions.php';

            $declar = "SELECT * FROM tbl_paginas WHERE titulo = '$_GET[titulo]'";
            $query = mysqli_query($con, $declar);

            $qry = mysqli_fetch_array($query);


            if (!isset($qry)){
              echo "<center><br><font face=arial size=2 color=red>
              Pagina não encontrada ou não cadastrada! 
              <a href='admin/index_.php?link=15' style='color:#990000' target='_blank'><b><u>Clique aqui</u></b></a></font></center>";
            }


 else if ($qry["arquivo"]) //TESTANDO SE TEM IMAGEM

 
 {

  echo "<div align='center'>";?>
  <table width="98%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="26" align="left">
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" valign="middle"><font face=arial size=5 color="<?php echo $color_tit; ?>"><b>&radic; <?php echo $qry['titulo']; ?></b></font> 
           <a href="#" onclick="window.print(); return false;">

           </a></td>
           <td align="right">

            <iframe src="http://www.facebook.com/plugins/like.php?href=view_paginas.php?titulo=$titulo&show_faces=false&width=380&action=like&colorscheme=light&height=25&locale=pt_BR" 
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:25px;" allowTransparency="true"></iframe>

          </td>
        </tr>
      </table>
    </td></tr>
    <tr>
      <td height="19" align="left" valign="top"><hr /></td>
    </tr>
    <tr>
      <td height="19" align="left" valign="top">

        <div align="justify" style="color:#FFF; font-family: Tahoma; font-size:14px;line-height:180%;">

          <table width="270" border="0" align="left" cellpadding="0" cellspacing="1">
            <tr>
              <td>
                <img src="admin/<?php echo $qry['arquivo']; ?>" width="250" border="6" align="left" style="border-color: #009900;" /></td>
              </tr>
            </table>


            <?php echo $qry['corpo_pag']; ?></div></td>

          </tr>
          <tr>
            <td height="26" align="left" valign="bottom"><font style="font-family:arial; font-size:12px; color: #00FF00">
              Fonte: <?php echo $qry['autor']; ?></font></td></table>
              <?php

              echo "</div>";
            }
else //SEM IMAGEM NO CORPO
{
  ?>

  <table width="98%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="26" align="left">
       <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" valign="middle"><font face=arial size=5 color="<?php echo $color_tit; ?>"><b>&radic; <?php echo $qry['titulo']; ?></b></font> 
           <a href="#" onclick="window.print(); return false;">

           </a></td>
           <td align="right">

            <iframe src="http://www.facebook.com/plugins/like.php?href=view_paginas.php?titulo=$titulo&show_faces=false&width=380&action=like&colorscheme=light&height=25&locale=pt_BR" 
            scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:25px;" allowTransparency="true"></iframe>

          </td>
        </tr>
      </table>
      </td

      ></tr>
      <tr>
        <td height="19" align="left" valign="top"><hr /></td>
      </tr>
      <tr>
        <td height="19" align="left" valign="top">

          <div align="justify" style="color:#FFF; font-family: Tahoma; font-size:14px;line-height:180%;"><?php echo $qry['corpo_pag']; ?></div></td>

        </tr>
        <tr>
          <td height="26" align="left" valign="bottom"><font style="font-family:arial; font-size:12px; color:#00FF00">
            Fonte: <?php echo $qry['autor']; ?></font></td></table>

            <?php

          }
          echo "<div align='center'><br><br><input type='submit'  value='Voltar' src='img/botao_voltar.png' onclick='history.go(-1)'></div><br>";

          ?><center><a href="#" id="subir" style="font-family:Tahoma; font-size:12px"><img src="img/bt_up.png" border="0" /><br />Topo</a></center><br /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="271" align="center" valign="top" bgcolor="#E5E5E5"><table width="954" height="153" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="176" align="left" valign="top"><?php include("includes/categoria.php"); ?></td>
          <td width="259" align="center" valign="middle"><?php include("includes/noticias.php"); ?></td>
          <td width="260" align="center" valign="middle"><?php include("includes/produtos.php"); ?></td>
          <td width="254" align="right" valign="middle"><?php include("includes/servicos.php"); ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="132" align="center" valign="top" bgcolor="#CECECE"><table width="954" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="20%" bgcolor="#006130" class="TitServ">&nbsp;<a href="view_paginas.php?titulo=Representa&ccedil;&otilde;es">Nossas Representa&ccedil;&otilde;es</a></td>
              <td width="80%">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="93" align="center" bgcolor="#FFFFFF"><?php include("includes/carrossel.php"); ?></td>
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
