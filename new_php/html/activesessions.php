<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://thumbs.dreamstime.com/thumblarge_479/1266592313ELUmjn.jpg">

    <title>JoyinFood - SignIn</title>

	<link href="../resources/dist/css/index.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" type="text/css" href="all.css">
  </head>

  <body style="padding-top: 13%; background-color: #5fb05f">

    <div class="container" style="background-color: #5fb05f">

      <div class = "activeup">
        <p class = "divp"> Active Sessions </p>
      </div>
      <a href = "orderfood.php">
	  <div class = "activeback">
        <p class = "divp"> Back </p>
      </div>
      </a>
	  <div id = "sesiuni" style="background-color : #5fb05f; left:auto; right:auto; position : relative; z-index:99; height:80%;">
	  <?php

		error_reporting(E_ALL);
		ini_set("display_errors", 1);

		$myusername= $_COOKIE['user'];

		$host="localhost"; // Host name
		$username="root"; // Mysql username
		$password=""; // Mysql password
		$db_name="joyinfood"; 
		$tbl_name="sesiuni"; // Table name 

		// Connect to server and select databse.
		mysql_connect("$host", "$username", "$password") or die("cannot connect");
		mysql_select_db("$db_name") or die("cannot select DB");

		// To protect MySQL injection (more detail about MySQL injection)
		$myusername=stripslashes($myusername);
		$myusername=mysql_real_escape_string($myusername);

		$sql="SELECT * FROM $tbl_name";
		$result=mysql_query($sql);

		while($row = mysql_fetch_array($result)) {
		  echo "<div style = \"background-color : #5fb050;  margin-left:auto; margin-right:auto; position : relative; z-index:99; height:30px; width: 180px;  border:1px; border-radius:20px; border-style:solid; border-color:black\">";
		  echo "<a href=\"joinsession.php?sesiune=" . $row['nume'] . "\"> <p align=\"center\"> " . $row['nume'] . "</p> </a>";
		  echo "</div>";
		  echo " ";
		}

		?>
	  </div>
    </div> <!-- /container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

  </body>
</html>
