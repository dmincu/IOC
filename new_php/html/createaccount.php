<?php
error_reporting(E_ALL); ini_set('display_errors', 'On');
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
$myphone=$_POST['phone'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myphone = stripslashes($myphone);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$myphone = mysql_real_escape_string($myphone);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername'";

$result=mysql_query($sql);
$count=mysql_num_rows($result);


if($count==1){
	echo "User deja inregistrat";
	exit;
}

$sql1 = "INSERT into $tbl_name  VALUES (default, '$myusername', '$mypassword', '$myphone')";

if (!mysql_query($sql1)) {
	echo "Not a good query";
	exit;
}

// If result matched $myusername and $mypassword, table row must be 1 row

session_start();
session_destroy();
session_start();

// Register $myusername, $mypassword and redirect to file 
$_SESSION['myusername']=$myusername;
$_SESSION['mypassword']=$mypassword;
header("location:orderfood.php");
exit();
?>
