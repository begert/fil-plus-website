<?php

session_start();
$php_self = $_SERVER['PHP_SELF'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>fil-plus</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
  <style type="text/css">
      .carousel img {
        min-width: 100%;
      }
      .carousel-caption {
        font-size: 120%;
        font-weight: normal;
      }
      .nav li {
        margin-top: 5px;
      }
  </style>
</head>
<body>

  <div class="container">

    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <a class="brand" href="index.php"><img src="img/logo-mini.png"></a>
            <ul class="nav">
              <li><a href="aktuell.php">Aktuell</a></li>
              <li><a href="sortiment.php">Sortiment</a></li>
              <li><a href="dienstleistungen.php">Dienstleistungen</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
            <!--form class="navbar-search pull-right">
              <input type="text" class="search-query" placeholder="Suche">
            </form-->
          </div><!--/.nav-collapse -->

        </div>
      </div>
    </div>

    <div class="container">
      
      <div class="row">
        <div class="span10">

