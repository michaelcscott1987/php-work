<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>

 <h1>BB's Entertainment Emporium</h1>
       <title></title>
</head>
<body>
  <?php

     //FILE : ScottBB1.php
     //PROG : Michael Scott
     //PURP : This php file takes information from the form and sends the information to the second file.



     $username = "root";
     $password = "";
     $hostname = "localhost";
     $id = array();
     $count = 0;
         extract ($_POST);
      $department = $_POST['dept'];





     $conn = mysqli_connect($hostname, $username, $password);
     if (!$conn) {
         die('Not connected : ' . mysql_error());
     }

     $db_selected = mysqli_select_db($conn, 'cpt283db');
     if (!$db_selected) {
         die ('cpt283db is not working : ' . mysql_error());
     }


     if (isset($department)){


     printf( "</br>$department department</br>");
     printf( "</br>Here are the titles available listed below.");


     $sql = "SELECT * from products WHERE department='$department'";


     $result = mysqli_query($conn, $sql) or die(mysql_error());

     if (mysqli_num_rows($result) == 0){
         echo "No results were found.";
     }


     echo "<table border='0' width=100%>
     <tr>
     <th></th><th>ID</th><th>Entertainer/Author</th><th>Title</th><th>Media</th><th>Feature</th>
     </tr>";

     echo "<form action='Scott_BB2.php' method='POST'>";


     while($row = mysqli_fetch_assoc($result)){
                     $id[$count] = $row['ID'];
         printf("<tr>");
         printf( "<td> <input type='checkbox' name='ID[]' value='$id[$count]'/><br \> ");
        printf("<td align='center'>" . $row['ID'] . "</td>");
         printf( "<td align='center'>" . $row['entertainerauthor'] . "</td>");
         printf("<td align='center'>" . $row['title'] . "</td>");
         printf( "<td align='center'>" . $row['media'] . "</td>");
         printf( "<td align='center'>" . $row['feature'] . "</td>");
         printf( "</tr><br>");

     $count ++;
     }


   printf ("</table>");
     printf( "<br><br><br><input type='submit' value='submit'>");
            printf("<input type='reset' value='clear' />");



     }

     else
        {  printf("You have not made a selection. Please press back on your browser to do so.");}






     mysqli_close($conn);
 ?>

        <input type="hidden" name="Department" value="<?php echo $department;?>">
      <INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>



</body>
</html>
