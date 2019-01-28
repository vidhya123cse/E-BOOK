<?php 
	session_start();

	
	$username = "";
	$email    = "";
	$errors[0] = ""; $errors[1] = ""; $errors[2] = ""; $errors[3] = ""; $errors[4] = ""; $errors[5] = ""; $errors[6] = ""; $errors[7] = ""; $errors[8] = "";  
	$_SESSION['success'] = ""; $record = array();

	
	$db = mysqli_connect('localhost', 'root', '', 'registration');
	if ($_GET['login'] == 1) { $k=$_GET['category']; $m=$_GET['login']; header('location: index.php?category=$k&login=$m');}
	if (($_GET['login'] == 1) && ($_GET['category'] == 10)) { $k=$_GET['category']; $m=$_GET['login']; header('location: index.php?category=$k&login=$m');}
	
	if (isset($_POST['reg_user'])) {
			
		$_SESSION['login'] = $_GET['login'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['mailid'];
		$password1 = $_POST['password1'];
		$password2 = $_POST['password2'];


		if (empty($firstname)) { $errors[0] = "FirstName_Is_Required" ;  }
		else { if (!preg_match("/^[a-zA-Z]*$/",$firstname)) { $errors[0] = "Only Letters and  White space Allowed";} }							      					       
		if (empty($lastname))  { $errors[1] = "LastName_Is_Required" ;  }
		else { if (!preg_match("/^[a-zA-Z]*$/",$lastname)) { $errors[1] = "Only Letters and  White space Allowed";} }
		if (empty($email))  { $errors[2] = "MailID_Is_Required" ; }
		else { if (!filter_var($email ,FILTER_VALIDATE_EMAIL)) { $errors[2]  = "Invalid Email Format "; } 
                        else { $query2 = "SELECT * FROM users WHERE MailID ='$email'";
			$results2 = mysqli_query($db, $query2);

			if (mysqli_num_rows($results2) >= 1) 
				{ $errors[2]  = "Email ID already Exist"; }}}
		if (empty($password1)) { $errors[3] = "Password_Is_Required"; }
		else { if (strlen($password1) < 4)  { $errors[3] = "Atleast 5 characters needed"; } }
		if (empty($password2)) { $errors[4] = "Confi_Password_Is_Required" ; }
	        else { if ($password1 != $password2) { $errors[4] = "Re_enter_the_Password Correctly" ; } }
		if (!isset($_POST['agrement'])) { $errors[5] = "Tick on the box to Join" ; }
			      
		

		
		if (($errors[0]== "") && ($errors[1]== "")&&($errors[2]=="") && ($errors[3]=="") && ($errors[4]== "") && ($errors[5]== "")) {
			$password = md5($password1);
			$query = "INSERT INTO users (FirstName, LastName, Password, MailID) 
					  VALUES('$firstname', '$lastname', '$password1', '$email')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: start.php?category=0&login=0');
		}
		

	}

	



	if (isset($_POST['login_user'])) {
		$_SESSION['login'] = $_GET['login'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)) { $errors[6] = "Username_Required" ; }
		else { if (!filter_var($username ,FILTER_VALIDATE_EMAIL)) { $errors[6]  = "Invalid Email Format "; } }	
		if (empty($password)) { $errors[7] = "Password_Required" ; }
		else { if (strlen($password) < 4)  { $errors[7] = "Atleast 5 characters needed"; } }
		if (($errors[6]== "") && ($errors[7]== "")) { $query3 = "SELECT * FROM users WHERE MailID ='$username'";
			$results3 = mysqli_query($db, $query3);

			if (!mysqli_num_rows($results3) == 1) 
				{ $errors[7]  = "User Not Present"; }  }		

		if (($errors[6]== "") && ($errors[7]== "")){
			
			$query1 = "SELECT * FROM users WHERE MailID ='$username' AND Password ='$password'";
			$results1 = mysqli_query($db, $query1);

			if (mysqli_num_rows($results1) >= 1) 
				{
				$record = mysqli_fetch_array($results1);
				$_SESSION['firstname'] = $record['FirstName'];
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['login'] = 1;
				header('location: index.php');
				}
			else {
					$errors[7] = " Wrong username/password combination";
			}
		}
	}

	if (isset($_POST['forgot_user'])) {
		  $username = $_POST['username'];
		  if (empty($username)) { $errors[8] = "Username_Required" ; }
		  else { if (!filter_var($username ,FILTER_VALIDATE_EMAIL)) { $errors[8]  = "Invalid Email Format "; } }
		  
		  if ($errors[8]== "") {
					$query2 = "SELECT * FROM users WHERE MailID ='$username'";
					$results2 = mysqli_query($db, $query2);
					if (mysqli_num_rows($results2) == 1) {
						$record = mysqli_fetch_array($results2);
						$_SESSION['firstname'] = $record['FirstName'];
						$_SESSION['success'] = "You are now logged in";
						$_SESSION['login'] = 1;
						$_SESSION['vaue']=$_GET['category'];
						header('location: index.php');
								
				  		 }
					else {
						$k=$_SESSION['value'];
						$j=$_SESSION['login'];
						$m=$_SESSION['sign'];
						$errors[8] = " username not present <br><br><br><a href = \"book.php?category=$k;&login=$j;&sign=$m;\">Click Here</a> to go Sign up page "; }
					}
} 

?>