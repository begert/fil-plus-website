<?php
date_default_timezone_set('Europe/Zurich');
session_start();
$php_self = $_SERVER['PHP_SELF'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>fil-plus admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
  <style type="text/css">
      body {
        padding-top: 50px;
        font-size: 170%;
      }
  </style>
  <script src="../js/jquery.min.js"></script>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">fil-plus admin</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="aktuell_list.php">Aktuell</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

  <div class="container">
      
    <div class="row">
      <div class="content-col col-md-12 col-sm-12">

