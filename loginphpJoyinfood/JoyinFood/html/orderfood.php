<?php
session_start();
if ( !isset( $_SESSION['myusername'] ) ){
	header("location:main_login.php");
}
?>
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

    <script src="../closure-library/closure/goog/base.js"></script>
    <script src="deps.js"></script>
    <script>
      goog.require('joyinfood.foodItem');
      goog.require('joyinfood.labeledCheckbox');
      goog.require('joyinfood.joinAlert');
      goog.require('joyinfood.friend');
      goog.require('goog.ui.Container');
    </script>
    <link rel="stylesheet" type="text/css" href="all.css">
  </head>

  <body style="padding-top: 13%; background-color: #5fb05f">

    <div class="container" style="background-color: #5fb05f">

      <div class = "leftmenu">
        <p class = "divp"> <?php echo $_SESSION['myusername'] ?> </p>
      </div>
      <a href = "createSession.html">
        <div class = "centermenu">
          <p class = "divp"> Create Session </p>
        </div>
      </a>
      <a href = "activesessions.html">
      <div class = "rightmenu">
        <p class = "divp"> Join Session </p>
      </div>
      </a>
      <div class = "oferte" id = "oferte">
        <p class = "divp"> Oferte </p>
      </div>
      <div class = "mancare" id = "mancare">
        <p class = "divp"> Mancare </p>
      </div>
       <div class = "restaurante" id = "restaurante">
        <p class = "divp"> Restaurante </p>
      </div>
      <div class = "categorii" id = "categorii">
        <p class = "divp"> Categorii </p>
      </div>
      <div class = "alergeni" id = "alergeni">
        <p class = "divp"> Alergeni </p>
      </div>
    </div> <!-- /container -->

    <script>
      var container = new goog.ui.Container();
      for (i = 0; i < 10; i ++) {
        var foodItem = i % 2 == 0 ? 
            new joyinfood.foodItem("sarmale.jpg", "Sarmale", "Aceasta mancare este un pisat..") :
            new joyinfood.foodItem("pizza.jpg", "Pizza", "Aceasta mancare este alt pisat..");
        container.addChild(foodItem, true);
      }
      container.render(document.getElementById("mancare"));

      var container = new goog.ui.Container();
      for (i = 0; i < 10; i ++) {
        var foodItem = i % 2 == 0 ? 
            new joyinfood.foodItem("sarmale.jpg", "Sarmale", "Aceasta mancare este un pisat..") :
            new joyinfood.foodItem("pizza.jpg", "Pizza", "Aceasta mancare este alt pisat..");
        container.addChild(foodItem, true);
      }
      container.render(document.getElementById("oferte"));

      var container = new goog.ui.Container();
      for (i = 0; i < 10; i ++) {
        var labeledCheckbox = i % 2 == 0 ? 
            new joyinfood.labeledCheckbox("PizzaHut") :
            new joyinfood.labeledCheckbox("SpringTime");
        container.addChild(labeledCheckbox, true);
      }
      container.render(document.getElementById("restaurante"));

      var container = new goog.ui.Container();
      for (i = 0; i < 10; i ++) {
        var labeledCheckbox = i % 2 == 0 ? 
            new joyinfood.labeledCheckbox("PizzaHut") :
            new joyinfood.labeledCheckbox("SpringTime");
        container.addChild(labeledCheckbox, true);
      }      
      container.render(document.getElementById("alergeni"));

      var container = new goog.ui.Container();
      for (i = 0; i < 10; i ++) {
        var labeledCheckbox = i % 2 == 0 ? 
            new joyinfood.labeledCheckbox("PizzaHut") :
            new joyinfood.labeledCheckbox("SpringTime");
        container.addChild(labeledCheckbox, true);
      }
      container.render(document.getElementById("categorii"));
    </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

  </body>
</html>