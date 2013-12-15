<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$myusername= $_COOKIE['user'];
$sesiune= $_COOKIE['sesiune'];
$mancare =$_GET['mancare'];
$restaurant =$_GET['restaurant'];
$pret = $_GET['pret'];


$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="joyinfood"; 
$tbl_name="comanda"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

$sql="SELECT id_sesiune FROM sesiuni where nume = '" . $sesiune . "'";
$result=mysql_query($sql);

$row = mysql_fetch_array($result);
$id_sesiune = $row['id_sesiune'];
echo $id_sesiune;

// To protect MySQL injection (more detail about MySQL injection)
$myusername=stripslashes($myusername);
$myusername=mysql_real_escape_string($myusername);

$sql1 = "INSERT into $tbl_name  VALUES (default, '$id_sesiune', '$myusername', '$mancare', '$restaurant', '$pret')";
$result=mysql_query($sql1);

?>