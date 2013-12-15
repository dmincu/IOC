<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
		
setcookie("sesiune", "", time()-3600);

$nume = $_GET['sesiune'];
echo $nume;

setcookie("sesiune", $nume, time()+3600);

header("location:logedinOrder.php");
exit();
?>
