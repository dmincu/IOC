<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="joyinfood"; 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and parola='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

session_start();
session_destroy();
session_start();

setcookie("user", "", time()-3600);

if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	setcookie("user", $myusername, time()+3600);
	header("location:orderfood.php");
}
else {
	header("location:main_login.php");
}
?>
