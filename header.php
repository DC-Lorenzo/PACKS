<?php 
include "classes/class_general_db.php";

//check usuario
if ($_GET['m']<>""){
  $query = "SELECT member_name, email_address FROM elforodeltenis_members WHERE id_member = '$_GET[m]'";
  $gt = new conexionBD();
  $gt -> doQuery("$query");
    while ( $gt -> setWhile()) {
      $member_name    = $gt -> getDataSQL("member_name");
      $email_address  = $gt -> getDataSQL("email_address");

      $user_log = "SI";
    }
}
if ($_GET['m']=="") { $user_log ="NO"; $member_name = "Visitante";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
  <head>
  <!--GOOGLE ANALYTICS-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2907763-6', 'auto');
  ga('send', 'pageview');

</script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Venta de raquetas de tenis, zapatillas de tenis, ropa de tenis. Venta de segunda mano.">
    <title>el foro del tenis - packs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
