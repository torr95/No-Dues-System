  <?php
  require 'core.inc.php';
require 'connect.inc.php';
$username=$_POST['username'];
$fine=$_POST['change'];
$q = "SELECT  fine from lib WHERE username='$username';";
$result = mysql_query($q);
 while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
                      
          $f= $row['fine'];
      }
$q2 = "SELECT  total from users WHERE username='$username';";
$result2 = mysql_query($q2);
 while($row = mysql_fetch_array($result2)){   //Creates a loop to loop through results
                      
          $t= $row['total'];               
}
$t=$t-$f;
$query = "UPDATE lib SET fine='$fine' WHERE username='$username';"; //You don't need a ; like you do in SQL
$result = mysql_query($query);
$q = "SELECT  fine from lib WHERE username='$username';";
$result = mysql_query($q);
 while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
                      
          $f= $row['fine'];
      }
$t=$t+$f;
$query = "UPDATE users SET total='$t' WHERE username='$username';"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

header('location:library.php')

?>