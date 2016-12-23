<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Title here!</title>
</head>
<body>

<?php
 //FILENAME : ScottAssignment4.php

//PROGRAMMER : Michael Scott

//PURPOSE : Display BB's operations for 2014.




include 'bbs_inventory.php';

 $delimiters = " \n";
  $totalrental=0;
   $completetotal=0;
              $product = array( 	'name'	=> rtrim(strtok($data,$delimiters)),
                        'serial'		=>	rtrim(strtok($delimiters)),
                        'status'		=>	rtrim(strtok($delimiters)),
	                    'depr'		=>	rtrim(strtok($delimiters)),
			            'units'	=>	rtrim(strtok($delimiters)),
			            'total'	=>	rtrim(strtok($delimiters)),

                   'originalprice'		=>  rtrim(strtok($delimiters)),
                        'notes'	=>	rtrim(strtok($delimiters)));





    echo 'PRODUCT  SERIAL #  PRICE/RENTALCHG  UNITS/DAYS  REVENUE  ORIGCOST  NOTES';
    echo '<br>';



     while ($product['name'])
          {
                  foreach ( $product as $value) {

              if ($value==$product['status']) echo "  ";

                elseif ($value==$product['notes'])  echo "  ";

                  else echo "$value    ";}

             if ($product["status"]=="S"&&$product["total"]<800){echo 'L';}

                elseif ($product["status"]=="R"&&$product["units"]<20){echo 'LR';}

                  if ($product["status"]=="S"){$totalrental=$totalrental+$product['units'];}


                   $completetotal= $completetotal+ $product['total'];

echo " <br>";

  $product = array( 	'name'	=> rtrim(strtok($delimiters)),
                        'serial'		=>	rtrim(strtok($delimiters)),
                        'status'		=>	rtrim(strtok($delimiters)),
	                    'depr'		=>	rtrim(strtok($delimiters)),
			            'units'	=>	rtrim(strtok($delimiters)),
			            'total'	=>	rtrim(strtok($delimiters)),

                      'originalprice'		=>  rtrim(strtok($delimiters)),
                        'notes'	=>	rtrim(strtok($delimiters)));


    }

      echo " <br>";



    printf ("The total amount of rental days is %.0f\n  and the total amount is %.02lf\n",$totalrental,$completetotal);



 ?>


</body>
</html>
