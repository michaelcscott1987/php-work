<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Michael Scott</title>
</head>
<body>
<pre>
<?php
     //FILE :
     //PROG :
     //PURP :

     $monthly_expense = array(    '1' => 2997.10,
                                  '2' => 921.00,
                                  '3' => 371.99,
                                  '4' => 1928.00,
                                  '5' => 1206.00,
                                  '6' => 10190.33,
                                  '7' => 8390.35,
                                  '8' => 3009.93,
                                  '9' => 4803.30,
                                  '10'=> 1212.30,
                                  '11'=> 225.90,
                                  '12'=> 594.65
                                  );
                                  
               $grandtotal=0;




      echo "BB's Sales for the Year","<br> <br>" ;


     for ( $count=1; $count<13;$count++ )
          {



                    if ($count==1){echo "January  ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif ($count==2){echo "February ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==3){echo "March ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==4){echo "April ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==5){echo "May ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==6){echo "June ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==7){echo "July ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==8){echo "August ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==9){echo "September ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==10){echo "October ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==11){echo "November ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}

                elseif  ($count==12){echo "December ",str_pad($monthly_expense["$count"],40," ",STR_PAD_LEFT);}


                echo '<br>' ;





                    $grandtotal=$grandtotal+$monthly_expense["$count"];





    }

               echo "<br> <br>" ;

               echo "Grand Total:", str_pad($grandtotal,40," ",STR_PAD_LEFT);

?>
</pre>
</body>
</html>
