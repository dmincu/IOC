<!DOCTYPE html>
<!-- saved from url=(0071)file:///home/diana/Facultate/An%20IV/IOC/IOC/JoyinFood/html/signin.html -->
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
  </head>

  <body style="padding-top: 13%; background-color: #5fb05f">

    <div class="container" style="background-color: #5fb05f">

      <form class="form-signin" style="background-color: #5fb05f" action="checklogin.php" method = "post">
        <h2 class="form-signin-heading" style="color: #010101;">Please sign in</h2>
        <input id="myusername" name="myusername" type="text" class="form-control" placeholder="Email address" required="" autofocus="" style="color: #010101; margin-bottom: 20px; margin-top: 40px;">
        <input id= "mypassword" name = "mypassword" type="password" class="form-control" placeholder="Password" required="" style="color: #010101;">
        <label class="checkbox">
          <input type="checkbox" value="remember-me" style="color: #010101"> Remember me
        </label>
        <button class="btn btn-lg btn-primary2 btn-block" type="submit" name = "submit" >Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  

  </body>
</html>
