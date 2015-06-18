<?php
//area of a triangle
$base=24;
$height=76;
function areaOfATriangle($base, $height){
echo "The area of the triangle is=" . (($base*$height)/2) . "<br>"; 
}
areaOfATriangle( $base,$height);

//area of a circle

$r=36;
function areaOfACircle($r){
echo "The area of the circle is=" . (3.142*$r*$r) . "<br>";
}
areaOfACircle($r);

//area and perimeter of a circle

$r=16;
function areaAndCircumferenceOfACircle($r){
echo "The area of the circle is =". (3.142*$r*$r) . " ";
echo "Circumference of the circle is=" . (3.142*($r*2));
}
areaAndCircumferenceOfACircle($r); 

