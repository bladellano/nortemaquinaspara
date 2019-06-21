
<table width="100%" border="0" cellpadding="0" cellspacing="4">

  <tr>
    <td align="right" valign="top">

     <?php

     require_once 'includes/conecta.php';
     require_once 'includes/functions.php';

     $declar = "SELECT*FROM tbl_noticias ORDER BY id DESC LIMIT 4";
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

      <table width="98%" border="0" cellpadding="0" cellspacing="1">
        <tr>
          <td width="23%" height="57" valign="top">
            <table width="100%" height="10" border="0" cellpadding="0" cellspacing="0">
              <tr valign="top">
                <td align="center" style="font-size: 2em; font-weight: 700"><?php echo $dia; ?></td>
              </tr>
              <tr>
                <td align="center" valign="top" style="font-size: 0.8em;"><?php echo $mes."/".$ano; ?></td>
              </tr>
            </table></td>
            <td  align="left" valign="top"> 

             <a href="javascript:abrir('view_noticias.php?idnoticia=<?php echo $rs['id']; ?>');">

               <?php 
               echo utf8_encode(criaResumo($rs['titulo'],54))."<hr>";
               ?>

             </a></td>
           </tr>
         </table>

       <?php } ?>
       <a href="noticias.php">[+] Mais not&iacute;cias</a></td>
     </tr>
   </table>