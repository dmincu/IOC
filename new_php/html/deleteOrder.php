<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$myusername=$_COOKIE["user"];
$idsesiune=$_COOKIE["sesiune"];

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="Paracocci23#"; // Mysql password
$db_name="joyinfood"; 
$tbl_name="comanda"; // Table name 

setcookie("sesiune", "", time()-3600);

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// To protect MySQL injection (more detail about MySQL injection)
$myusername=stripslashes($myusername);
$myusername=mysql_real_escape_string($myusername);
$idsesiune=stripslashes($idsesiune);
$idsesiune=mysql_real_escape_string($idsesiune);

$sql="SELECT id_sesiune FROM sesiuni WHERE nume='$idsesiune'";
$result=mysql_query($sql);
$sesiune="";
while($row = mysql_fetch_array($result)) {
   $sesiune=$row['id_sesiune'];
}

$sql="DELETE FROM $tbl_name WHERE id_sesiune='$sesiune'";
$result=mysql_query($sql);

echo $result;

?>
