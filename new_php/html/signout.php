<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

setcookie("user", "", time()-3600);
setcookie("sesiune", "", time()-3600);

header("location:index.html");
}
?>
