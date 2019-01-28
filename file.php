<?php
$db = mysqli_connect('localhost', 'root', '', 'registration');

$fh =fopen("file.txt" ,"r");
while( !feof($fh)) {
	
	 $line = fgetcsv($fh,1000);
	 $qu = "INSERT INTO books (Name_Of_the_Book, Link) 
					  VALUES('$line[0]', '$line[1]')";
			mysqli_query($db, $qu);}
?>