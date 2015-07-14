</php
 sessions_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTRML 4.01 Transitional//EN"
 "http:///www.w3.org/TR/html4/loose.dtd">

<html lang="en">
 <head>
    <title>Playing with sessions</title>
 </head>
  <body>

   <?php
      $_SESSION["first_name"]="Caro Balos";
      $name=$_SESSION["first_name"];
      echo $name;
   ?>
 </body>
</html>
