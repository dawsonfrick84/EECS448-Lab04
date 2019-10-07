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
      td {
        align: 'right';
      }
      table, th, td {
        border: 1px solid black;
        padding: 2px;
        border-collapse: collapse;
      }
   </style>
   <body>
     <h1>Multiplication Table</h1>
   <table cellspacing='7.5'>
   ";

   for($i=0; $i<=100; $i++){
     echo"<p><tr>";
     for($j=0; $j<=100; $j++){
       if($i==0){
         if($j==0){
           echo "<th align='right'></th>";
         }
         else{
           if($j>=100){echo "<th align='right'> $j </th>";}
           elseif($j>=10){echo "<th align='right'> $j </th>";}
           else{echo "<th align='right'> $j </th>";}
         }
       }
       else{
         if($j==0){
           echo "<th align='right'> $i </th>";
         }
         else{
           echo "<td align='right'> " . multiply($i, $j) . " </td>";
         }
       }

     }
     echo"</tr></p>";
   }
   echo"</table>";
   ?>
