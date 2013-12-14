<?php
error_reporting(E_ALL); ini_set('display_errors', 'On');
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="joyinfood"; 
$tbl_users="users"; // Table name
$tbl_session = "sesiuni";


// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// username and password sent from form
$nume		= $_POST['idsesiune'];
$adresa		= $_POST['adresa'];
$telefon	= $_POST['numar'];


$sql1 = "INSERT into $tbl_session  VALUES (default, '$nume', '$adresa', '$telefon')";

if (!mysql_query($sql1)) {
	echo "Not a good query";
	exit;
}

// If result matched $myusername and $mypassword, table row must be 1 row

session_start();
session_destroy();
session_start();

header("location:logedinOrder.html");
exit();
?>
