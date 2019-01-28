<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	$errors1 = "";
	if (isset($_POST['search'])) {
		$searchitem1 = $_POST['searchitem'];
			$searchitem1 = mysqli_real_escape_string($db ,$searchitem1);
			if (!preg_match("/^[a-zA-Z0-9].*$/",$searchitem1)) { $errors1= "Only_Letters_and_White_space_Allowed";}

			if ($errors1 == "") { 
				$qu = "SELECT * FROM books WHERE Name_Of_the_Book LIKE '%".$searchitem1."%'"; 
				$resu = mysqli_query($db, $qu);
				if (mysqli_num_rows($resu) == 1) {
							$errors1 = "Search Found";
							
								 }
				else  {
					$errors1 = "Search Not Found";
				
                 	             }
							}	
					}	
?>