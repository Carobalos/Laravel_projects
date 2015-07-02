<?php
  $dbhost="localhost";
  $dbuser="test_app_user";
  $dbpass="test_app_girls@ict2013";
  $dbname="test_app";
  $connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()){
       die("Database connection failed: " .
                mysqli_connect_error() .
                " (" . mysqli_connect_errno() . ")"
       );
}
       mysqli_close($connection);
?>
