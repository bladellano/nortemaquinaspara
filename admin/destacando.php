<?
include('includes/conecta.php');


$id = $_POST["principal"];

$data_alt = date("y/m/d H:i:s");


$enable = 1;
$disable = 0;  
//VERIFICANDO SE ESTA '1', SE NAO MUDAR PARA '0' :: CAIO
	if($id!=null && $id!='')
								     {
									$sql = "SELECT * FROM tbl_produtos WHERE id='$id' and principal='1'";
									$res2 = mysql_query($sql,$con);
									$res3 = mysql_fetch_array($res2);
									if($res3 != false)
											{
											
											$sqlenable = "UPDATE tbl_produtos SET principal = '".$disable."',data_alt='' WHERE id = '".$id."'";
											
											} 
									 else  
											{ 
		
											$sqlenable = "UPDATE tbl_produtos SET principal = '".$enable."',data_alt='$data_alt' WHERE id = '".$id."'";
											}
									}	

$consulta2 = mysql_query($sqlenable) or die(mysql_error());

if($consulta2)
{

header("Location: produtos.php");

}
?>

