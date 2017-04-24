<?php
if(isset($_POST['username'])&&isset($_POST['password'])) {
  $username=$_POST['username'];
  $password=$_POST['password'];
  if(!empty($username)&&!empty($password)){
    $query="SELECT id FROM users WHERE username ='$username' AND password='$password'";

    if($query_run = mysql_query($query)) {
      $query_num_rows = mysql_num_rows($query_run);
      if($query_num_rows==0 ){
        echo 'invalid credentials';
      }
      elseif($query_num_rows==1 /*and (preg_match('/lib/', $username))*/){
        $user_id=mysql_result($query_run,0,'id');
        $_SESSION['user_id']=$user_id;
    
        header('Location: index.php');
      }
    }
  }
  else{
    echo 'You must supply username and password.';}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>No Dues System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
   <style> body { border: solid 5px;} </style>
  </head>
  <body>
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
            <li class="active"><a href="#lib_container">Home</a></li>
            <li><a class="page-scroll" href="#about">About</a></li>
            <li><a class="page-scroll" href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right"> 
      <li><a href="index.php"  data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
    </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- login -->
 <!--<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
-->



<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Login to Your Account</h1><br>
                  <form action="<?php echo $current_file; ?>" method="POST">
                    <input type="text" id="user" name="username" placeholder="Username">
                    <input type="password" id="pass" name="password" placeholder="Password">
                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                  </form>
                 
                    
                  <div class="login-help">
                  <a href="#">Forgot Password</a>
                  </div>
                </div>
            </div>
          </div>

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
    <br>
    <div class="container" id="lib_container">
      <h2>Library</h2>  
      
      <img src=".\image.jpg" class="img-rounded" alt="Cinque Terre" width="350" height="250" id="lib">

      <p>The major problem with the library fine payment is that all work is done on paper. The whole fine is evaluated and stored in register and at the end of the session the reports are generated. In previous system we cannot evaluate the fine during of the middle of the session as it requires more calculations. It is very time consuming and results may not be accurate. The problem with the current system affects the entire body: students as well as the administration.
The records of these fines are not maintained at one place.
So at the end of an academic session library department has to be approached for its registers for clearance of dues of every student.
Now you can submit the library fine online.
The purpose of developing fine evaluation management system is to computerized the tradition way of evaluating fines.
 Another purpose for developing this software is to generate the report automatically at the end of the session or in the between of the session.
The scope of the project is the system on which the software is installed, i.e. the project is developed as a web application, and it will work for a particular institute.
</p>            
      
      <p>It's user Friendly.The proposed system is user friendly because the retrieval and storing of data is fast and data is maintained efficiently. Moreover the graphical user interface is provided in the proposed system, which provides user to deal with the system very easily. 
Reports are easily generated, reports can be easily generated in the proposed system so user can generate the report as per the requirement (monthly) or in the middle of the session. User can give the notice to the students about the fines. 
Very less paper work, the proposed system requires very less paper work. All the data is feted into the computer immediately and reports can be generated through computers. Moreover work become very easy because there is no need to keep data on papers.
Computer operator control, computer operator control will be there so no chance of errors. Moreover storing and retrieving of information is easy. So work can be done speedily and in time.
</p>
    </div>
    <style type="text/css">#lib_container {padding-top:50px;}
    </style>
  
<div class="container">
      <h2>Mess</h2>
      <img src=".\mess.jpg" class="img-rounded" alt="Cinque Terre" width="350" height="250" id="mess">
      <br>
     
      <p>The records of the mess fines are not maintained at one place. So at the end of an academic session every department has to be approached for its registers for clearance of dues of every student. Now you can submit the mess fine online. The purpose of developing fine evaluation management system is to computerized the tradition way of evaluating fines. Another purpose for developing this software is to generate the report automatically at the end of the each month or in the between of the session.</p>            
      
      <p>The major problem with the mess fine payment is that all work is done on paper. The whole fine is evaluated and stored in register and at the end of the session the reports are generated. In previous system we cannot evaluate the fine during of the middle of the session as it requires more calculations. It is very time consuming and results may not be accurate. The problem with the current system affects the entire body: students as well as the administration.</p>
      <p>It's user Friendly.The proposed system is user friendly because the retrieval and storing of data is fast and data is maintained efficiently. Moreover the graphical user interface is provided in the proposed system, which provides user to deal with the system very easily. 
Reports are easily generated, reports can be easily generated in the proposed system so user can generate the report as per the requirement (monthly) or in the middle of the session. User can give the notice to the students about the fines. 
Very less paper work, the proposed system requires very less paper work. All the data is feted into the computer immediately and reports can be generated through computers. Moreover work become very easy because there is no need to keep data on papers.
Computer operator control, computer operator control will be there so no chance of errors. Moreover storing and retrieving of information is easy. So work can be done speedily and in time.</p>
    </div>
    <div class="container">
      <h2>Sports</h2>
      <img src=".\sports.png" class="img-rounded" alt="Cinque Terre" width="350" height="250" id="late_entry">
      
     
      <p>The major problem with the sports fine payment is that all work is done on paper. The whole fine is evaluated and stored in register and at the end of the session the reports are generated. In previous system we cannot evaluate the fine during of the middle of the session as it requires more calculations. It is very time consuming and results may not be accurate. The problem with the current system affects the entire body: students as well as the administration.
The records of these fines are not maintained at one place.
So at the end of an academic session sports department has to be approached for its registers for clearance of dues of every student.
Now you can submit the sports fine online.
The purpose of developing fine evaluation management system is to computerized the tradition way of evaluating fines.
 Another purpose for developing this software is to generate the report automatically at the end of the session or in the between of the session.
The scope of the project is the system on which the software is installed, i.e. the project is developed as a web application, and it will work for a particular institute.
</p>            
      
      <p>It's user Friendly.The proposed system is user friendly because the retrieval and storing of data is fast and data is maintained efficiently. Moreover the graphical user interface is provided in the proposed system, which provides user to deal with the system very easily. 
Reports are easily generated, reports can be easily generated in the proposed system so user can generate the report as per the requirement (monthly) or in the middle of the session. User can give the notice to the students about the fines. 
Very less paper work, the proposed system requires very less paper work. All the data is feted into the computer immediately and reports can be generated through computers. Moreover work become very easy because there is no need to keep data on papers.
Computer operator control, computer operator control will be there so no chance of errors. Moreover storing and retrieving of information is easy. So work can be done speedily and in time.
</p>
    </div>

    <div class="container">
      <h2>Miscellaneous</h2>
      <img src=".\misc.png" class="img-rounded" alt="Cinque Terre" width="300" height="320" id="late_entry">
      
     
      <p>There are several Miscellaneous fines that has to paid to the college or an institute. The fine payment is done on paper. The whole fine is evaluated and stored in register and at the end of the session the reports are generated. In previous system we cannot evaluate the fine during of the middle of the session as it requires more calculations. It is very time consuming and results may not be accurate. The problem with the current system affects the entire body: students as well as the administration.</p>            
      
      <p>It's user Friendly.The proposed system is user friendly because the retrieval and storing of data is fast and data is maintained efficiently. Moreover the graphical user interface is provided in the proposed system, which provides user to deal with the system very easily. 
Reports are easily generated, reports can be easily generated in the proposed system so user can generate the report as per the requirement (monthly) or in the middle of the session. User can give the notice to the students about the fines. 
Very less paper work, the proposed system requires very less paper work. All the data is feted into the computer immediately and reports can be generated through computers. Moreover work become very easy because there is no need to keep data on papers.
Computer operator control, computer operator control will be there so no chance of errors. Moreover storing and retrieving of information is easy. So work can be done speedily and in time.</p>
<p>Another purpose for developing this software is to generate the report automatically at the end of the session or in the between of the session.
The scope of the project is the system on which the software is installed, i.e. the project is developed as a web application, and it will work for a particular institute. There will be an online payment portal for it, in which a student just has to go to the website and pay the fines. This will not only save time of the student but of the administrative personals.</p>
      
</div>
<br>
<br>
<br>
<!--About-->

 <div class="jumbotron jumbotron-sm" id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h3 class="h1">
                    About</h3>
                    
            </div>
        </div>
    </div>
</div>
<div class="container">
<p>There are several Miscellaneous fines that has to paid to the college or an institute. The fine payment is done on paper. The whole fine is evaluated and stored in register and at the end of the session the reports are generated. In previous system we cannot evaluate the fine during of the middle of the session as it requires more calculations. It is very time consuming and results may not be accurate. The problem with the current system affects the entire body: students as well as the administration.

It's user Friendly.The proposed system is user friendly because the retrieval and storing of data is fast and data is maintained efficiently. Moreover the graphical user interface is provided in the proposed system, which provides user to deal with the system very easily. Reports are easily generated, reports can be easily generated in the proposed system so user can generate the report as per the requirement (monthly) or in the middle of the session. User can give the notice to the students about the fines. Very less paper work, the proposed system requires very less paper work. All the data is feted into the computer immediately and reports can be generated through computers. Moreover work become very easy because there is no need to keep data on papers. Computer operator control, computer operator control will be there so no chance of errors. Moreover storing and retrieving of information is easy. So work can be done speedily and in time.

Another purpose for developing this software is to generate the report automatically at the end of the session or in the between of the session. The scope of the project is the system on which the software is installed, i.e. the project is developed as a web application, and it will work for a particular institute. There will be an online payment portal for it, in which a student just has to go to the website and pay the fines. This will not only save time of the student but of the administrative personals.</p></div>
<style type="text/css">
div {
    text-align: justify;
    text-justify: inter-word;
}
</style>

<br>
<br>
<br>
<!-- contact-->
 <div class="jumbotron jumbotron-sm" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h3 class="h1">
                    Contact Us</h3>
            </div>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Website Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
    </div>
</div>



<!--footer-->
<div id="footer">
  <p id="footer_p">© 2017 Company, Inc. -ayush gupta</p>
</div>
<style>
#footer {
    background-color: #E0E0E0 ;
    width: 1350px;
    padding: 30px;

}
#footer_p {
  text-align: center;
}
</style>


</body>
</html>
