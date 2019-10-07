<?php
   $pie= $_POST["1"];
   $dog = $_POST["2"];
   $ultimate = $_POST["3"];
   $disc = $_POST["4"];
   $boomerang = $_POST["5"];
   $shield = $_POST["6"];
   $cost = 0;
   $q1= $_POST["q1"];
   $q2 = $_POST["q2"];
   $q3 = $_POST["q3"];
   $q4 = $_POST["q4"];
   $q5 = $_POST["q5"];
   $q6 = $_POST["q6"];
   $shipping=$_POST["shipping"];
   $user=$_POST["user"];
   $pass=$_POST["pass"];

   echo"<html>
   <head>
     <title>Receipt</title>
   <head>
   <link rel='stylesheet' type='text/css' href='style.css'>
   <link rel='stylesheet' type='text/css' href='style.css'>
   <body>
     <h1>Order Confirmed!</h1>
     <h2>Welcome " . $user . "!</h2>
     <h3>Your password is: " . $pass  . "</h3>
     <h1>Receipt</h1>

   <table cellspacing='7.5'>
   <tr>
   <th>&nbsp&nbsp&nbsp</th>
   <th>Quantity</th>
   <th>Cost Per Item</th>
   <th>Sub Total</th>
   </tr>
   ";

  if($pie==TRUE){
    echo"<tr><th>Pie Tin</th>";
    echo"<td>" . $q1 . "</td>";
    echo"<td>$3.99</td>";
    echo"<td>" . $q1*3.99 . "</td>";
    $cost=$cost+$q1*3.99;
  }
  if($dog==TRUE){
    echo"<tr><th>Dog Frisbee</th>";
    echo"<td>" . $q2 . "</td>";
    echo"<td>$9.99</td>";
    echo"<td>&nbsp&nbsp&nbsp" . $q2*9.99 . "</td>";
    $cost=$cost+$q2*9.99;
  }
  if($ultimate==TRUE){
    echo"<tr><th>Utlimate Frisbee</th>";
    echo"<td>" . $q3 . "</td>";
    echo"<td>$14.99</td>";
    echo"<td>&nbsp&nbsp&nbsp" . $q3*14.99 . "</td>";
    $cost=$cost+$q3*14.99;
  }
  if($disc==TRUE){
    echo"<tr><th>5 Disc Golf Discs</th>";
    echo"<td>" . $q4 . "</td>";
    echo"<td>$24.99</td>";
    echo"<td>&nbsp&nbsp&nbsp" . $q4*24.99 . "</td>";
    $cost=$cost+$q4*24.99;
  }
  if($boomerang==TRUE){
    echo"<tr><th>Boomerang</th>";
    echo"<td>" . $q5 . "</td>";
    echo"<td>$24.99</td>";
    echo"<td>&nbsp&nbsp&nbsp" . $q5*24.99 . "</td>";
    $cost=$cost+$q5*24.99;
  }
  if($shield==TRUE){
    echo"<tr><th>Captain America Shield</th>";
    echo"<td>" . $q6 . "</td>";
    echo"<td>$49,999.99</td>";
    echo"<td>&nbsp&nbsp&nbsp" . $q6*49999.99 . "</td>";
    $cost=$cost+$q6*49999.99;
  }

  echo"<tr><th>Shipping</th>";

  if($shipping=="free"){
    echo"
    <td colspan='2'>7-Day Shipping</td>
    <td>0.00</td>
    </tr>";
  }
  if($shipping=="three"){
    echo"
    <td colspan='2'>3-Day Shipping</td>
    <td>5.00</td>
    </tr>";
    $cost=$cost+5.00;
  }
  if($shipping=="overnight"){
    echo"
    <td colspan='2'>Overnight Shipping&nbsp&nbsp&nbsp&nbsp</td>
    <td>50.00</td>
    </tr>";
    $cost=$cost+50.00;
  }

  echo"<tr><td colspan='3'><b>TOTAL COST:&nbsp&nbsp&nbsp&nbsp</b></td>
  <td><b>&nbsp&nbsp&nbsp$" . $cost . "</b></td>
  </tr>
  </table>
  <br><br><button onclick='printReceipt()'><b>Print Receipt</b></button>
  <script>
  function printReceipt() {
    window.print();
  }
  </script>
  ";

   ?>
