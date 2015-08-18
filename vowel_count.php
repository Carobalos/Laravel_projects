<?php
$text = "sheshe";
function VowelCount($text){
 if($text){

   return preg_match_all('/[aeiou]/i',$text ,$matches );
}
 else{
    return false;
}
}
?>

