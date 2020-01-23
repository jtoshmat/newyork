<?php
$parms = $_POST??null;
$result = null;

if ($parms){
   $number = (int) $parms['number'];
   //1 = mile and 2  = km
   $option = (int) $parms['option'];

   if ($option == 1){
       $result = ($number/1.609);
   }else{
       $result = $number * 1.609;

   }
   $result = round($result,2)??null;
}
