
<table width="250" border="0" cellpadding="0" cellspacing="4" background="img/bk_topcentro.png" style="background-repeat:no-repeat; background-position:center top;">
  <tr>
    <td height="39"><span class="TitSeta">&nbsp;&Uacute;ltimas NOT&Iacute;CIAS </span></td>
  </tr>
  <tr>
    <td height="212" align="right" valign="top">


     <?php

     require_once 'includes/conecta.php';
     require_once 'includes/functions.php';

     $declar = "SELECT*FROM tbl_noticias ORDER BY id DESC LIMIT 3";
     $query = mysqli_query($con, $declar);

     while($rs = mysqli_fetch_assoc($query)){

      $dia = substr($rs['data_ent'],8,2);
      $mes = substr($rs['data_ent'],5,2);
      $ano = substr($rs['data_ent'],0,4);

      switch($mes) {

        case 1: $mes = "JAN"; break;
        case 2: $mes = "FEV"; break;
        case 3: $mes = "MAR"; break;
        case 4: $mes = "ABR"; break;
        case 5: $mes = "MAI"; break;
        case 6: $mes = "JUN"; break;
        case 7: $mes = "JUL"; break;
        case 8: $mes = "AGO"; break;
        case 9: $mes = "SET"; break;
        case 10: $mes = "OUT"; break;
        case 11: $mes = "NOV"; break;
        case 12: $mes = "DEZ"; break;
      }
      ?>

      <table width="98%" height="59" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="23%" height="57" valign="top"><table width="100%" height="10" border="0" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td height="19" align="center" class="TitDataN"><?php echo $dia; ?></td>
            </tr>
            <tr>
              <td align="center" valign="top" class="TitMes"><?php echo $mes; ?></td>
            </tr>
          </table></td>
          <td width="77%" align="left" valign="top" class="TitNoticias">
 

           <a href="javascript:abrir('view_noticias.php?idnoticia=<?php echo $rs['id']; ?>');" style="color:#000">

             <?php 
             echo criaResumo($rs['titulo'],44)."<br>";
             ?>

           </a></td>
         </tr>
       </table>

       <?php } ?>

       <span class="TitNoticias" ><a href="noticias.php" style="color: #003300; font-weight:bold">[+] Mais not&iacute;cias</a></span> </td>
     </tr>
   </table>