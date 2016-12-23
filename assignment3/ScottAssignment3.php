<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
 <style>
table, th, td {
    border: 1px solid black;
}
</style>

</head>
<body>


<?php
 //FILENAME : ScottAssignment3.php

//PROGRAMMER : Michael Scott

//PURPOSE : Display BB's operations for 2014 and the deprication of the jet skis and powerboats.

 //product serial number      price   number of units sold ,  and total


include 'bb_2014sum.php';


$product= strtok($data,"\n");

$serial = rtrim(strtok ("\n"));
$status =rtrim(strtok ("\n"));
$price = rtrim(strtok ("\n"));
$unitssold = rtrim(strtok ("\n"));
$origcost = rtrim(strtok ("\n"));
$deprecfactor = rtrim(strtok ("\n"));
$total=$price*$unitssold*$origcost;

$product1=rtrim(strtok ("\n"));
$serial1 = rtrim(strtok ("\n"));
$status1= rtrim(strtok ("\n"));
$price1 = rtrim(strtok ("\n"));
$unitssold1 = rtrim(strtok ("\n"));
$origcost1 = rtrim(strtok ("\n"));
$deprecfactor1 = rtrim(strtok ("\n"));
$total1=$price1*$unitssold1*$origcost1;
$format_total1 = round($total1, 2, PHP_ROUND_HALF_UP);

$product2=rtrim(strtok ("\n"));
$serial2 = rtrim(strtok ("\n"));
$status2= rtrim(strtok ("\n"));
$price2 = rtrim(strtok ("\n"));
$unitssold2 = rtrim(strtok ("\n"));
$origcost2 = rtrim(strtok ("\n"));
$deprecfactor2 = rtrim(strtok ("\n"));
$total2=$price2*$unitssold2*$origcost2;
$format_total2 = round($total2, 2, PHP_ROUND_HALF_UP);

$product3=rtrim(strtok ("\n"));
$serial3 = rtrim(strtok ("\n"));
$status3= rtrim(strtok ("\n"));
$price3 = rtrim(strtok ("\n"));
$unitssold3 = rtrim(strtok ("\n"));
$origcost3 = rtrim(strtok ("\n"));
$deprecfactor3 = rtrim(strtok ("\n"));
$total3=$price3*$unitssold3*$origcost3;
$format_total3 = round($total3, 2, PHP_ROUND_HALF_UP);

$product4=rtrim(strtok ("\n"));
$serial4 = rtrim(strtok ("\n"));
$status4= rtrim(strtok ("\n"));
$price4 = rtrim(strtok ("\n"));
$unitssold4 = rtrim(strtok ("\n"));
$origcost4 = rtrim(strtok ("\n"));
$deprecfactor4 = rtrim(strtok ("\n"));
$total4=$price4*$unitssold4*$origcost4;
$format_total4 = round($total4, 2, PHP_ROUND_HALF_UP);

$product5=rtrim(strtok ("\n"));
$serial5 = rtrim(strtok ("\n"));
$status5= rtrim(strtok ("\n"));
$price5 = rtrim(strtok ("\n"));
$unitssold5 = rtrim(strtok ("\n"));
$origcost5 = rtrim(strtok ("\n"));
$deprecfactor5 = rtrim(strtok ("\n"));
$total5=$price5*$unitssold5*$origcost5;
$format_total5 = round($total5, 2, PHP_ROUND_HALF_UP);

$product6=rtrim(strtok ("\n"));
$serial6 = rtrim(strtok ("\n"));
$status6= rtrim(strtok ("\n"));
$price6 = rtrim(strtok ("\n"));
$unitssold6 = rtrim(strtok ("\n"));
$origcost6 = rtrim(strtok ("\n"));
$deprecfactor6 = rtrim(strtok ("\n"));
$total6=$price6*$unitssold6*$origcost6;
$format_total6 = round($total6, 2, PHP_ROUND_HALF_UP);

$product7=rtrim(strtok ("\n"));
$serial7 = rtrim(strtok ("\n"));
$status7= rtrim(strtok ("\n"));
$price7 = rtrim(strtok ("\n"));
$unitssold7 = rtrim(strtok ("\n"));
$origcost7 = rtrim(strtok ("\n"));
$deprecfactor7 = rtrim(strtok ("\n"));
$total7=$price7*$unitssold7*$origcost7;
$format_total7= round($total7, 2, PHP_ROUND_HALF_UP);

$product8=rtrim(strtok ("\n"));
$serial8 = rtrim(strtok ("\n"));
$status8= rtrim(strtok ("\n"));
$price8 = rtrim(strtok ("\n"));
$unitssold8 = rtrim(strtok ("\n"));
$origcost8 = rtrim(strtok ("\n"));
$deprecfactor8 = rtrim(strtok ("\n"));
$total8=$price8*$unitssold8*$origcost8;
$format_total8 = round($total8, 2, PHP_ROUND_HALF_UP);

$product9=rtrim(strtok ("\n"));
$serial9 = rtrim(strtok ("\n"));
$status9= rtrim(strtok ("\n"));
$price9 = rtrim(strtok ("\n"));
$unitssold9 = rtrim(strtok ("\n"));
$origcost9 = rtrim(strtok ("\n"));
$deprecfactor9 = rtrim(strtok ("\n"));
$total9=$price9*$unitssold9*$origcost9;
$format_total9 = round($total9, 2, PHP_ROUND_HALF_UP);

$product10=rtrim(strtok ("\n"));
$serial10 = rtrim(strtok ("\n"));
$status10= rtrim(strtok ("\n"));
$price10 = rtrim(strtok ("\n"));
$unitssold10 = rtrim(strtok ("\n"));
$origcost10 = rtrim(strtok ("\n"));
$deprecfactor10 = rtrim(strtok ("\n"));
$total10=$price10*$unitssold10*$origcost10;
$format_total10 = round($total10, 2, PHP_ROUND_HALF_UP);

$product11=rtrim(strtok ("\n"));
$serial11 = rtrim(strtok ("\n"));
$status11= rtrim(strtok ("\n"));
$price11 = rtrim(strtok ("\n"));
$unitssold11 = rtrim(strtok ("\n"));
$origcost11 = rtrim(strtok ("\n"));
$deprecfactor11 = rtrim(strtok ("\n"));
$total11=$price11*$unitssold11*$origcost11;
$format_total11 =round($total11, 2, PHP_ROUND_HALF_UP);
$deprecvalue2003=$origcost10*$deprecfactor10;
$Endingvalue2003=$origcost10-$deprecvalue2003;
$deprecvalue2004=$Endingvalue2003*$deprecfactor10;
$Endingvalue2004=$Endingvalue2003-$deprecvalue2004;
$deprecvalue2005=$Endingvalue2004*$deprecfactor10;
$Endingvalue2005=$Endingvalue2004-$deprecvalue2005;
$deprecvalue2006=$Endingvalue2005*$deprecfactor10;
$Endingvalue2006=$Endingvalue2005-$deprecvalue2006;
$deprecvalue2007=$Endingvalue2006*$deprecfactor10;
$Endingvalue2007=$Endingvalue2006-$deprecvalue2007;

$PBdeprecvalue2003=$origcost11*$deprecfactor11;
$PBEndingvalue2003=$origcost11-$PBdeprecvalue2003;
$PBdeprecvalue2004=$PBEndingvalue2003*$deprecfactor11;
$PBEndingvalue2004=$PBEndingvalue2003-$deprecvalue2004;
$PBdeprecvalue2005=$PBEndingvalue2004*$deprecfactor11;
$PBEndingvalue2005=$PBEndingvalue2004-$PBdeprecvalue2005;
$PBdeprecvalue2006=$PBEndingvalue2005*$deprecfactor11;
$PBEndingvalue2006=$PBEndingvalue2005-$PBdeprecvalue2006;
$PBdeprecvalue2007=$PBEndingvalue2006*$deprecfactor11;
$PBEndingvalue2007=$PBEndingvalue2006-$PBdeprecvalue2007;

 echo'<br/><br/><br/><br/>
 <h1 style="font-size:300%">BBs Operations of 2014</h1>
   <table>



  <tr>
    <th>Product</th>
    <th>Serial Number</th>
    <th>Price or Rental/Day</th>
    <th>Units Sold</th>
    <th>Total</th>



  </tr>
  <tr>
    <td>',$product1,'</td>
    <td>',$serial1,'</td>
    <td>',$price1,'</td>
    <td>',$unitssold1,'</td>
    <td>',$format_total1,'</td>

  </tr>
  <tr>
    <td>',$product2,'</td>
    <td>',$serial2,'</td>
    <td>',$price2,'</td>
    <td>',$unitssold2,'</td>
    <td>',$format_total2,'</td>

  </tr>
   <tr>
       <td>',$product3,'</td>
    <td>',$serial3,'</td>
    <td>',$price3,'</td>
    <td>',$unitssold3,'</td>
    <td>',$format_total3,'</td>

  </tr>
   <tr>
        <td>',$product4,'</td>
    <td>',$serial4,'</td>
    <td>',$price4,'</td>
    <td>',$unitssold4,'</td>
    <td>',$format_total4,'</td>

  </tr>
   <tr>
        <td>',$product5,'</td>
    <td>',$serial5,'</td>
    <td>',$price5,'</td>
    <td>',$unitssold5,'</td>
    <td>',$format_total5,'</td>

  </tr>
   <tr>
        <td>',$product6,'</td>
    <td>',$serial6,'</td>
    <td>',$price6,'</td>
    <td>',$unitssold6,'</td>
    <td>',$format_total6,'</td>

  </tr>
   <tr>
        <td>',$product7,'</td>
    <td>',$serial7,'</td>
    <td>',$price7,'</td>
    <td>',$unitssold7,'</td>
    <td>',$format_total7,'</td>

  </tr>
   <tr>
    <td>',$product8,'</td>
    <td>',$serial8,'</td>
    <td>',$price8,'</td>
    <td>',$unitssold8,'</td>
    <td>',$format_total8,'</td>

  </tr>
   <tr>
       <td>',$product9,'</td>
    <td>',$serial9,'</td>
    <td>',$price9,'</td>
    <td>',$unitssold9,'</td>
    <td>',$format_total9,'</td>
  </tr>
   <tr>
       <td>',$product10,'</td>
    <td>',$serial10,'</td>
    <td>',$price10,'</td>
    <td>',$unitssold10,'</td>
    <td>',$format_total10,'</td>

  </tr>
   <tr>
       <td>',$product11,'</td>
    <td>',$serial11,'</td>
    <td>',$price11,'</td>
    <td>',$unitssold11,'</td>
      <td>',$format_total11,'</td>

  </tr>


</table>';


echo'<br/><br/>';
echo '<h1 style="font-size:100%">Powerboat - Depreciation over 5-year period</h1>';
   echo'<br/>';
echo '<table>
  <tr>
    <th>Year</th>
    <th>Start Value</th>
      <th>Deprec</th>
    <th>Ending Value</th>

  </tr>
  <tr>
    <td>2003</td>
    <td>',$origcost11,'</td>
    <td>',$PBdeprecvalue2003,'</td>
    <td>',$PBEndingvalue2003,'</td>

  </tr>
  <tr>
    <td>2004</td>
     <td>',$PBEndingvalue2003,'</td>
    <td>',$PBdeprecvalue2004,'</td>
    <td>',$PBEndingvalue2004,'</td>
  </tr>
  <tr>
    <td>2005</td>
      <td>',$PBEndingvalue2004,'</td>
    <td>',$PBdeprecvalue2005,'</td>
    <td>',$PBEndingvalue2005,'</td>
  </tr>
  <tr>
    <td>2006</td>
    <td>',$PBEndingvalue2005,'</td>
    <td>',$PBdeprecvalue2005,'</td>
    <td>',$PBEndingvalue2006,'</td>
  </tr>
  <tr>
    <td>2007</td>
     <td>',$PBEndingvalue2006,'</td>
    <td>',$PBdeprecvalue2007,'</td>
    <td>',$PBEndingvalue2007,'</td>
  </tr>
</table>';

 echo'<br/><br/>';
 echo '<h1 style="font-size:100%">Jet Ski - Depreciation over 5-year period</h1>';
 echo'<br/>';
 echo '<table>
  <tr>
    <th>Year</th>
    <th>Start Value</th>
      <th>Deprec</th>
    <th>Ending Value</th>

  </tr>
  <tr>
    <td>2001</td>
    <td>',$origcost10,'</td>
    <td>',$deprecvalue2003,'</td>
    <td>',$Endingvalue2003,'</td>

  </tr>
  <tr>
    <td>2002</td>
     <td>',$Endingvalue2003,'</td>
    <td>',$deprecvalue2004,'</td>
    <td>',$Endingvalue2004,'</td>
  </tr>
  <tr>
    <td>2003</td>
      <td>',$Endingvalue2004,'</td>
    <td>',$deprecvalue2005,'</td>
    <td>',$Endingvalue2005,'</td>
  </tr>
  <tr>
    <td>2004</td>
    <td>',$Endingvalue2005,'</td>
    <td>',$deprecvalue2005,'</td>
    <td>',$Endingvalue2006,'</td>
  </tr>
  <tr>
    <td>2005</td>
     <td>',$Endingvalue2006,'</td>
    <td>',$deprecvalue2007,'</td>
    <td>',$Endingvalue2007,'</td>
  </tr>
</table>';






?>

</body>


</html>
