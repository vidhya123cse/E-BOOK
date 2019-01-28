<?php 
	session_start(); 

	
	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['firstname']);
		header("location: start.php?category=0&login=0&sign=0");
	                            }
	else 
		{
		if (($_SESSION['sign'] == 0) && ($_SESSION['login'] == 1 ) && ($_SESSION['value'] == 11)) { $c=$_SESSION['login'];$j=$_SESSION['sign']; header("location: start.php?category=0&login=$c&sign=$j"); return false;; }

		if (($_SESSION['value'] == 0) && ($_SESSION['login'] == 1 )) { header("location: search.php"); }

		if (($_SESSION['value'] == 1) && ($_SESSION['login'] == 1 )) { header("location: bio.php"); }
		if (($_SESSION['value'] == 2) && ($_SESSION['login'] == 1 )) { header("location: science.php"); }
		if (($_SESSION['value'] == 3) && ($_SESSION['login'] == 1 )) { header("location: fiction.php"); }
		if (($_SESSION['value'] == 4) && ($_SESSION['login'] == 1 )) { header("location: malayalam.php"); }
		if (($_SESSION['value'] == 5) && ($_SESSION['login'] == 1 )) { header("location: harrypotter.php"); }
		if (($_SESSION['value'] == 6) && ($_SESSION['login'] == 1 )) { header("location: detective.php"); }
		if (($_SESSION['value'] == 7) && ($_SESSION['login'] == 1 )) { header("location: children.php"); }
		if (($_SESSION['value'] == 10) && ($_SESSION['login'] == 1 )) { header("location: addabook.php"); }
		
		  	     
			
		 }				
						?>