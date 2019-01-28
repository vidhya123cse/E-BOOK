<?php
$db = mysqli_connect( "localhost", "root", "", "registration");
              $SQL = "CREATE TABLE users (SI_No INT PRIMARY KEY AUTO_INCREMENT, FirstName VARCHAR(20), LastName VARCHAR(20), MailID VARCHAR(50), Password VARCHAR(20))";  
              mysqli_query($db, $SQL);
	      


	     $SQ = "CREATE TABLE books (SI_No INT PRIMARY KEY AUTO_INCREMENT, Name_Of_the_Book VARCHAR(50), Author_Name VARCHAR(50), Link VARCHAR(100))";
	     $select_sq = mysqli_query($db, $SQ);
mysqli_close($db);
?>



