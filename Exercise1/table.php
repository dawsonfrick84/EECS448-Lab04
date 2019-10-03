<?php
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
   function multiply($x, $y) {
       $z = $x * $y;
       return $z;
   }

   echo"<html>
   <head>
     <title>Multiplication Table</title>
   <head>
   <style>
      body {
      background-color: #ccffff;
      text-size: 3;
      }
   </style>
   <body>
     <h1>Multiplication Table</h1>




   ";

   for($i=0; $i<=100; $i++){
     echo"<p><pre>";
     for($j=0; $j<=100; $j++){
       if($i==0){
         if($j==0){
           echo "      ";
         }
         else{
           if($j>=100){echo "  $j ";}
           elseif($j>=10){echo "   $j ";}
           else{echo "    $j ";}
         }
       }
       else{
         if($j==0){
           echo "    $i ";
         }
         else{
           if(multiply($i, $j)>=10000){echo "" . multiply($i, $j) . " ";}
           elseif(multiply($i, $j)>=1000){echo " " . multiply($i, $j) . " ";}
           elseif(multiply($i, $j)>=100){echo "  " . multiply($i, $j) . " ";}
           elseif(multiply($i, $j)>=10){echo "   " . multiply($i, $j) . " ";}
           else{echo "    " . multiply($i, $j) . " ";}
         }
       }

     }
     echo"</pre></p>";
   }
   ?>
