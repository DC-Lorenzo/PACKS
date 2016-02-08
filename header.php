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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
