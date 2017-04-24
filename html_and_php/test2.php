<?php
require 'core.inc.php';
require 'connect.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <head>
  <title>Fine Evaluation System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  </head>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">No Dues System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
         
          <ul class="nav navbar-nav navbar-right"> 
      <li><a href="logout.php"<span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>
        <br>
        <br>
    
    <div class="container col-md-8 col-sm-offset-4">
    <h3>Select Course</h3>
    <br>
    <br>
    <a href="test3.php"><button type="button" class="btn btn-primary btn-lg">IPG</button></a> 
    <button type="button" class="btn btn-primary btn-lg">MTECH</button>
    <button type="button" class="btn btn-primary btn-lg">MBA</button>
</div>

    </body>
    </html>