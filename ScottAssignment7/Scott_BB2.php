<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>

 <h1>BB's Entertainment Emporium</h1>
       <title>Title here!</title>
</head>
<body>
<?php

     //FILE :Scott_BB2.php
     //PROG : Michael Scott
     //PURP : Takes information from BB1 and transfers it to BB3


     $username = "root";
     $password = "";
     $hostname = "localhost";
     extract ($_POST);
     $count = 0;
     $id = array();
     $department=$_POST['Department'];
     $total_sum=0.00;

 echo "Thank you for your $department selections! Below, you will find a summary of your choices.";


     $conn = mysqli_connect($hostname, $username, $password);
     if (!$conn) {
         die('Not connected : ' . mysql_error());
     }


     $db_selected = mysqli_select_db($conn, 'cpt283db');
     if (!$db_selected) {
     die ('Can\'t use cpt283db : ' . mysql_error());
     }


     if (isset($ID)){
     $size = count($ID);


     print( "<table border='0' width=1200px><th></th><th>ID</th><th>Entertainer/Author</th><th>Title</th>
     <th>Price</th><th>Units In Stock</th><th>Summary</th></tr>");
     while ($count < $size){


         $sql = "SELECT * FROM prodinv JOIN products ON products.ID=prodinv.ID WHERE prodinv.ID=$ID[$count]";


         $result = mysqli_query($conn, $sql) or die(mysql_error());
         if (mysqli_num_rows($result) == 0){
             echo "No results were found.";
         }


         echo "<form action='Scott_BB3.php' method='POST'>";
     while($row = mysqli_fetch_assoc($result)){
         $id[$count] = $row['ID'];
        printf("<tr>");
         printf( "<td> <input type='checkbox' name='ID[]' value='$id[$count]'/><br \> ");
          printf( "<td align='center'>" . $row['ID'] . "</td>");
             printf( "<td align='center'>" . $row['entertainerauthor'] . "</td>");
            printf( "<td align='center'>" . $row['title'] . "</td>");
             printf( "<td align='center'>" . $row['UnitPrice'] . "</td>");
             printf("<td align='center'>" . $row['UnitsInStock'] . "</td>");
             printf( "<td align='center'>" . $row['summary'] . "</td>");
         printf( "</tr>");
         printf( "<br>");
          $price=$row['UnitPrice'];
          $total_sum+=$price;
         }



         $count ++;

         }


         printf( "</table>");

     }
     else
         printf( "You did not select any titles. If you wish to do so, please press the back button on your browser.");




     mysqli_close($conn);


 ?>
 <input type="hidden" name="Department" value="<?php echo $department;?>">
 <input type="hidden" name="Total" value="<?php echo $total_sum;?>">
 <br><br><br><br><input type="submit" value="submit"></FORM>
</body>
</html>
