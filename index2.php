<?php 

$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);

}

include 'header.php';

switch ($pagina) {

	case 'home':
	include 'home.php';
	break;

	case 'produtos':
	include 'produtos.php';
	break;	
	
	default:
	include 'home.php';
	break;
}

include 'footer.php';