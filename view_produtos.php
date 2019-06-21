<?php header("Content-type: text/html; charset=ISO-8859-1"); ?>
<style type="text/css">

  body {
   background-color: #FFFFFF;
 }

</style>

<?php 

require_once 'includes/conecta.php';

$sql = "SELECT * FROM tbl_produtos WHERE id= '$_GET[id]'";  
$dados = mysqli_query($con, $sql); 

$qry = mysqli_fetch_array($dados);

// print_r($qry);

?>
<title>Visualizando Produto</title>
<table width="98%" border="0" cellspacing="0" cellpadding="1">
  <tr>
    <td width="240" style="font-family:arial; font-size:16px; font-weight:bold">

      <?php echo $qry["nome_produto"]; ?></td>
      <td width="175">&nbsp;</td>
    </tr>
    <tr>
      <td height="192"><img src="admin/<?php echo $qry["arquivo"]; ?>" width="215" height="215" border="1"></td>
      <td align="left" valign="top" style="font-family:arial; font-size:14px;"><div align="justify"><?php echo $qry["descricao"]; ?></div></td>
    </tr>
  </table>

 <div align='center'><br><input type='submit' value='Voltar' onclick='history.go(-1)'></div><br>