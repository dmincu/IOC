
<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_COOKIE['sesiune'])){
	header("location:logedinOrder.php");
}
else{
	header("location:orderfood.php");
}

?>
