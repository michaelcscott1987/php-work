<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
        <h1>BB's Entertainment Emporium</h1>
        <title></title>
</head>
<body>
<?php



     //FILE : ScottBB3.php
     //PROG : Michael Scott
     //PURP : Shows the total for all the purchases.


         $department=$_POST['Department'];
         $total_sum=$_POST['Total'];


         printf("The total some for all the items in the $department department is $total_sum.</br>");
            printf("Thank you for chosing BB's Entertainment Emporium the best in entertainment retail. ");




 ?>




  <form> <INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></Form>
</body>
</html>
