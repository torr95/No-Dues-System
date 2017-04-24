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
  
  <style> body { border: solid 5px;} </style>
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
          <ul class="nav navbar-nav">
            <li class="active"><a href="#prof">Profile</a></li>
            <li><a class="page-scroll" href="#fine">Fine</a></li>
            <li><a class="page-scroll" href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right"> 
      <li><a href="logout.php"<span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--scroll-->
    <script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#navbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>
<!--profile -->
<br>
<br>

<div class="container">
 <hr>
      <h3 id="prof">Profile</h3>
       <hr>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php $a=getuserfield('firstname');
              $b=getuserfield('lastname');
                        echo $a." ".$b;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="./male.png" class="img-circle img-responsive"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td><?php $a=getuserfield('department');             
                        echo $a?></td>
                      </tr>
                      <tr>
                        <td>Roll number:</td>
                        <td><?php $a=getuserfield('roll_num');             
                        echo $a?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php $a=getuserfield('date_of_birth');             
                        echo $a?></td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?php $a=getuserfield('gender');             
                        echo $a?></td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td><?php $a=getuserfield('home_add');             
                        echo $a?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php $a=getuserfield('email');             
                        echo $a?></td>
                      </tr>
                        <td>Phone Number</td>
                        <td><?php $a=getuserfield('phone_number');             
                        echo $a?>
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Edit Profile Data</a>
                  <a href="#" class="btn btn-primary">Change Password</a>
                </div>
              </div>
            </div>
               <div class="panel-footer">
                        
                    </div>
            
          </div>
        </div>
      </div>
    </div>
    <style type="text/css">
        .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

    </style>
    <script type="text/javascript">
        $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    
});
    </script>
<!-- for data showing of individual-->

<div class="container">
 <hr>
    <h3 id="fine">Update Library Fines</h3>
    <hr>
    
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Library Fines</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
             


            <table class="table">
                <thead>
                    <tr class="filters">
                        
                        
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="username " disabled></th>
                        <th><input type="text" class="form-control" placeholder="Amount(Rs)" disabled></th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php $query = "SELECT * FROM lib"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
$count = 1;

 while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
                    echo "<tr>
                        <td>$count</td>                   
                        <td>"; echo $row['username'];echo "</td>
                        <td>"; echo $row['fine'];echo "</td>                      
                    </tr>";
                    $count++;}
                    ?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--<div class="col-md-8">
<form action='from_lib.php' method='POST'>
     username: <input type='text' name='username'>
     new fine: <input type='text' name='change'>
    <input type='submit' value='Update'>
</form>
</div>--><div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
        <form action='from_lib.php' method='POST'>
     username: <input type='text' name='username'>
     new fine: <input type='text' name='change'>
    <input type='submit' value='Update'>
</form>
        </div>
        </div>
        </div>

<!--<div class="container">


  <a href="#" class="btn btn-primary" style="float: right">Update</a>
</div>-->
<br>
<br>
<br>
<br>
<br>
<!--footer-->
<div id="footer">
	<p id="footer_p">© 2017 Company, Inc. -ayush gupta</p>
</div>
<style>
#footer {
    background-color: #E0E0E0	;
    width: 1338px;
    padding: 30px;

}
#footer_p {
	text-align: center;
}
</style>

<style type="text/css">


.filterable {
margin-top: 15px;
}
.filterable .panel-heading .pull-right {
margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}

</style>
<script type="text/javascript">
  /*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>

</body>

</html>
    