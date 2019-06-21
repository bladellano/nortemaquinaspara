<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	
<?php
include('conecta.php');

$sql = "SELECT * FROM tbl_destaques WHERE id='$id'";
$id = $_POST['id'];
$data_alt = date("d/m/y H:i:s");

$resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");

while ($dados=mysql_fetch_array($resultado)) {

     $id = $dados["id"];
	 $titulo = strtoupper($dados['titulo']);
	 $arquivo = $dados["arquivo"];
	 $arquivo_pq = $dados["arquivo_pq"];
	 $href = $dados["href"];
	 $data_ent = $dados["data_ent"];
	 $data_alt = $dados["data_alt"];
	 $colegio = $dados["colegio"];
	 $fonte = $dados["fonte"];
	 $corpo_pag = $dados["corpo_pag"];

$arquivo1 = $row['arquivo'];
$arquivo_pq1 = $row['arquivo_pq'];


echo "<br><form action=\"?link=8&id=$id\" method=\"post\" enctype='multipart/form-data'>";

echo "<table style='font-family:arial; font-size:12px' width='647' border='0' align='center' cellpadding='3' cellspacing='0'>
  <tr>
    <th width='138' align='right'  >T&iacute;tulo</th>
    <th width='497' ><div align='left'>
      <input style='background: #FF8080; color:#FFFFFF' name='titulo' type='text' id='titulo' value='$titulo' size='80' maxlength='120' />
    </div></th>
  </tr>
  <tr>
    <th align='right'  >Link</th>
    <th > <div align='left'>
      <input style='background: #FF8080; color:#FFFFFF' name='href' type='text' id='href' value='$href' size='80' />
    </div></th>
  </tr>
  <tr>
    <th align='right'  >Fonte</th>
    <th > <div align='left'>
      <input style='background: #FF8080; color:#FFFFFF' name='fonte' type='text' id='fonte' value='$fonte' size='80' />
    </div></th>
  </tr>
  <tr valign='top'>
    <th align='right' valign='middle'  >Texto Destaque </th>
    <th align='left' ><div align='left'>
      <textarea class='ckeditor' cols='80' id='corpo_pag' name='corpo_pag' rows='10'>$corpo_pag</textarea>
    </div></th>
  </tr>
  <tr>
    <th align='right' bgcolor='#FFFFCC'  >Imagem:</th>
    <th align='left' bgcolor='#FFFFCC' ><input style='background: #FF8080; color:#FFFFFF' name='arquivo' type='file' id='arquivo3' size='40' />
        <img src='$arquivo_pq' width='71' height='57' border=1 align='absmiddle'></th>
  </tr>
  <tr>
    <th  >&nbsp;</th>
    <th ><input  type='submit' name='Submit' value='Alterar' /></th>
  </tr>
</table>
";

include 'voltar.php';

echo "</form>";
}

?>
