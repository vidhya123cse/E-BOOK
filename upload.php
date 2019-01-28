<?php
    $currentDir = getcwd();
    $uploadDirectory = "/N/";

   $fileExt= "pdf";
   $error= "";
   $db = mysqli_connect('localhost', 'root', '', 'registration');

    $fileName = $_FILES['myfile']['name'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
    $uploadPath1 = $uploadDirectory . basename($fileName);
    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
    $temp_name = $_POST['temp_name'];
    $author = $_POST['author'];
    if (empty($temp_name)) { $error= "Name Of the book is required"; }
    else {         if ($error == "") {
			$searchitem1 = mysqli_real_escape_string($db ,$temp_name);
			if (!preg_match("/^[a-zA-Z0-9].*$/",$searchitem1)) { $error= "Only_Letters_and_White_space_Allowed";} 
			if ($error == "") { 
				$qu = "SELECT * FROM books WHERE Name_Of_the_Book LIKE '%".$searchitem1."%'"; 
				$resu = mysqli_query($db, $qu);
				
				if (mysqli_num_rows($resu) >=1) {
							$error = "Already There";}}}
 }
    if ($error == "") {

    if (empty($author)) { $error= "Author Name is required"; }}
    if ($error == "") {
    if (empty($fileName)) { $error= "File Is Not Located"; }}
    
    if ($error == "") {
    if ($fileExtension != $fileExt) { $error = "File Is Not in PDF Format"; }}


			


   if ($error == ""){

    if (isset($_POST['upload'])) {

        if ($fileExtension == $fileExt) {
        
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
	    $qu = "INSERT INTO books (Name_Of_the_Book, Author_Name, Link) VALUES ('$temp_name','$author','$uploadPath1')";
			mysqli_query($db, $qu);
	    header('location: addabook.php?upload=1');
		

            	}
  	  }}else { 
		 session_start();
		 $_SESSION['error1'] = $error;
	       	 header('location: addabook.php?upload=0'); }


?>