
<?php

error_reporting(0);

$server = 'localhost';
$bd = 'bdnorte';
$db_user = 'root';
$db_pass = '';
$con = mysqli_connect($server, $db_user, $db_pass, $bd); 

$query = mysqli_query($con, $declar);
