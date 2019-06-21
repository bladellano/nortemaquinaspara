<table width="954" height="142" border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td><table width="200" border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td height="35" align="left" class="TitMes">ACESSO R&Aacute;PIDO </td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><a href="index.php" style="color:#333333">Home</a></span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><a href="view_paginas.php?titulo=Empresa" style="color:#333333">Empresa</a></span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><a href="view_paginas.php?titulo=Produtos" style="color:#333333">Produtos</a></span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><a href="view_paginas.php?titulo=Servi&ccedil;os" style="color:#333333">Servi&ccedil;os</a></span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><a href="view_paginas.php?titulo=Contato" style="color:#333333">Contato</a></span></td>
      </tr>
    </table></td>
    <td><table width="200" border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td height="35" align="left" class="TitMes">CLIENTES </td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu">Procedimentos</span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu">Atendimento</span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu">Fale Conosco </span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu">Suporte</span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu">Contato</span></td>
      </tr>
    </table></td>
    <td><table width="200" border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td height="35" align="left" class="TitMes">REDES SOCIAIS  </td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><img src="img/bt_face.png" width="16" height="16" align="absmiddle" /> Facebook</span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><img src="img/bt_twi.png" width="16" height="17" align="absmiddle" /> Twitter</span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><img src="img/bt_blog.png" width="16" height="16" align="absbottom" /> Blogger</span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><img src="img/bt_fl.png" width="16" height="16" /> Flickr</span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><img src="img/bt_orkut.png" width="16" height="16" /> Orkut</span></td>
      </tr>
    </table></td>
    <td> <?php


      if(isset($_POST['email']))

      {

        include 'includes/conecta.php';

        $email = $_POST["email"];

        $data_ent = date("d/m/y");

        $email =  strip_tags(strtolower($email));
        
        if (!$email) 

        { 

          echo "<div align='center'><font face=arial color=#ffffff size=1><span style='background-color:red;'>Preencha corretamente!</span></font><br></div>";

        }
        else
        {

          $declar = "INSERT into tbl_newsletter values (default,default,'$email','$data_ent',default)"; 

          if (mysqli_query ($con, $declar)) 
          { 
            echo  "<script>alert('Email enviado para NEWSLETTER com Sucesso!');</script>";
            echo ("<div align='center'><font face=arial color=Green size=1><b>E-mail cadastrado com sucesso&radic;<br>");	 


          } 

          else

          { 
            echo  "<script>alert('Email existente na nossa base de dados!');</script>";
            echo ("<font face=arial size=2 color=red>N&atilde;o foi possivel cadastrar, por favor verifique.</font><br><br>"); 
          } 

          // mysql_close ($con); 

        } 
      }
      ?>  <form id="form" name="form" method="post" action=""><table width="290" border="0" cellspacing="0" cellpadding="1">
      <tr>
        <td height="35" align="left" class="TitMes">NEWSLETTER</td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu">Fique por dentro das novidades da Norte M&aacute;quinas </span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu">
          <label>
            <input name="email" type="email" id="email" size="30" required="" />
          </label>
          <label>
            <input type="submit" name="Submit" value="Enviar" />
          </label>
        </span></td>
      </tr>
      <tr>
        <td align="left"><span class="TitRodMenu"><u style="color:#006600">O que voc&ecirc; fica sabendo?</u></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></form></td>
  </tr>
</table>