<<?php
if(isset($_POST['submit'])){
   // form was submitted
   $item=$_POST["item"];
   $price=$_POST["price"];

setcookie('item', $item, time()+3600);
if($item=="Bread"||'aa'&&$price=="58"||'aa'){
   echo"The {$item}item was successfully added to cart";
}
else {
   $message="There were some errors.";
}
}
else{
   //$item="";
   $message="Please enter the required";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
     <title>Form</title>
  </head>
  <body>
   <?php echo $message; ?><br />
   <form action="shopping_cart.php" method="post">
    Item<input type="text" name="item" value="";/><br/>
    Price:<input type="text" name="price" value=""/><br/>
  <br/>
    <input type="submit" name="submit" value="Submit"/>
   </form>

  </body>
</html>
