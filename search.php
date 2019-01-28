<?php 
  session_start();
   $_SESSION['error'] = "";
$db = mysqli_connect('localhost', 'root', '', 'registration');


	
	        $searchitem = $_SESSION['search']; 
		if (!preg_match("/^[a-zA-Z0-9].*$/",$searchitem)) { $_SESSION['error'] = "Only_Letters_and_White_space_Allowed";}

		if ($_SESSION['error'] == "") { 
			$qu = "SELECT * FROM books WHERE Name_Of_the_Book ='$searchitem'"; 
			$resu = mysqli_query($db, $qu);
			if (mysqli_num_rows($resu) == 1) {
					$rec = mysqli_fetch_array($resu);
					$_SESSION['link'] = $rec['Link'];
					$_SESSION['result'] = "Succssfully Found";
					$_SESSION['sign'] = $_GET['sign'];
					header("location: s.php");
							}
			else { 
					 $_SESSION['result'] = "Search Not Found";
					 $_SESSION['link'] ="";
					 $_SESSION['sign'] = $_GET['sign'];
					 header("location: s.php");}
						}
		else {  header("location: start.php");   }
                                     
		
   ?>