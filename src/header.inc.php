<?php

session_start();
$php_self = $_SERVER['PHP_SELF'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>fil-plus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
   <style type="text/css">
      body {
        font-family: "Open Sans", Calibri, Candara, Arial, sans-serif;
        font-size: 170%;
      }
      .navbar-brand {
        background: url(img/logo-mini.png) no-repeat center center;
        height: 50px;
        width: 50px;
      }
      .team-bild img {
        max-width: 100%;
      }
      .logos-sortiment {
        margin-left: 25px;
      }
      .logos-sortiment img {
        height: 40px;
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
      .carousel-caption p {
        background-color: rgba(19,65,136,0.8); 
        border-radius: 10px;
        padding: 20px;
      }
      .carousel-caption a, .carousel-caption a:hover, .carousel-aption a:visited {
        color: white;
        text-decoration: none;
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
      <div class="content-col col-md-10 col-sm-9">

