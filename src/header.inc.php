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
  <style type="text/css">
      .navbar-brand {
        background: url(img/logo-mini.png) no-repeat center center;
        height: 50px;
        width: 50px;
      }
      .logo-side {
        max-width: 100%;
      }
      .content-col {
        margin-bottom: 30px;
      }
      .carousel img {
        min-width: 100%;
      }
      .carousel-caption {
        font-size: 120%;
        font-weight: normal;
      }
  </style>
</head>
<body>

  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"></a>
      </div>

      <div class="navbar-collapse collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li<?php if (basename($php_self) == 'aktuell.php') echo(' class="active"'); ?>><a href="aktuell.php">Aktuell</a></li>
          <li<?php if (basename($php_self) == 'sortiment.php') echo(' class="active"'); ?>><a href="sortiment.php">Sortiment</a></li>
          <li<?php if (basename($php_self) == 'dienstleistungen.php') echo(' class="active"'); ?>><a href="dienstleistungen.php">Dienstleistungen</a></li>
          <li<?php if (basename($php_self) == 'team.php') echo(' class="active"'); ?>><a href="team.php">Team</a></li>
          <li<?php if (basename($php_self) == 'kontakt.php') echo(' class="active"'); ?>><a href="kontakt.php">Kontakt</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="container">
      
    <div class="row">
      <div class="content-col col-md-10">

