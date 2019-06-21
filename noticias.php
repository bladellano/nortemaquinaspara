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
      var height = 670;

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
            <br /><span class="TitServ">&bull; TODAS AS NOT&Iacute;CIAS</span><br />
            <?php 

            include 'includes/conecta.php';

            $numreg = 5; 
            if (!isset($pg)) {
              $pg = 0;
            }
            $inicial = $pg * $numreg;

            $sql = mysqli_query($con,"SELECT * FROM tbl_noticias ORDER BY id desc LIMIT $inicial, $numreg");
            
            $sql_conta = mysqli_query($con,"SELECT * FROM tbl_noticias");

            $quantreg = mysqli_num_rows($sql_conta);

            echo "<table width='100%'>";

            while($row = mysqli_fetch_array($sql)) {

              $idnoticia = $row["id"];
              $titulo = strtoupper($row['titulo']);
              $fonte = $row["fonte"];
              $data_ent = $row["data_ent"];
              $corpo_noticia = $row["corpo_noticia"];
              $arquivo = $row["arquivo"];
              $arquivo_pq = $row["arquivo_pq"];
              $categoria = $row["categoria"];
              $resumo = $row["resumo"];

              $dia = substr($row['data_ent'],8,2);
              $mes = substr($row['data_ent'],5,2);
              $ano = substr($row['data_ent'],0,4);

              echo "<tr>
              <td width='10' align='center'></td>
              <td width='60' height='50' align='center' style='font-family:arial; font-size:20px; color:#006600; background-repeat:no-repeat; background-position:center' background=\"img/bk_data.png\"><b>$dia/$mes<b/></td>
              <td width='623'  align='left'>
               <a href=\"javascript:abrir('view_noticias.php?idnoticia=$idnoticia');\" title='$titulo' style='font-family:arial; font-size:18px; color:#1DEA13'><b>$titulo</b></a>
               <font face=arial size=2 color=#FFF> &raquo; $resumo</font></td>
             </tr>
             <tr>
              <td height='21' colspan='3' align='center' valign='top'></td>
            </tr>"; 
          }
          echo "</table>";



	//echo "<div align='center'><br><br><input type='image'  src='img/bt_voltar.gif' value=' Voltar' onclick='history.go(-1)'></div><br>";


          ?>
          <center><? include ("includes/paginacao.php"); ?><BR /><a href="#" id="subir" style="font-family:Tahoma; font-size:12px"><img src="img/bt_up.png" border="0" /><br />Topo</a></center><br /></td>
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
