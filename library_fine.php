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
        <div class="container">
 <hr>
    <h3 id="fine">Details</h3>
    <hr>
    
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Usersname</h3>
                <div class="pull-right">
                   
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                    <th><input type="text" placeholder="#" disabled></th>
                        <th><input type="text" placeholder="book name" disabled></th>
                        <th><input type="text"  placeholder="issue date" disabled></th>
                        <th><input type="text" placeholder="returned" disabled></th>
                         <th><input type="text" placeholder="fine" disabled></th>
                        
                    </tr>
                </thead>
                <tbody>

                    <tr>
                     <td>1</td>
                        <td><strong>Moris Mano</strong></td>
                        <td>24/4/2017</td>
                        <td>30/4/2017</td>
                        <td>0/-</td>
                       
                       
                        
                    </tr>
                    <tr>
                    <td>2</td>
                        <td><strong>let us C</strong></td>
                        <td>1/4/2017</td>
                        <td>30/4/2017</td>
                        <td>20/-</td>
                        
                      
                    </tr>
                    <tr>
                    <td>3</td>
                       <td><strong> Steve McConnell</strong></td>
                       <td>5/4/2017</td>
                        <td>30/4/2017</td>
                        <td>15/-</td>
                        
                       
                    </tr>
                    <tr>
                    <td>4</td>
                        <td><strong>Elisabeth Freeman</strong></td>
                        <td>1/4/2017</td>
                        <td>10/4/2017</td>
                        <td>9/-</td>
                        
                        
                    </tr>
                     
                </tbody>
            </table>
        </div>
    </div>
</div>

    
    
    </body>
    </html>