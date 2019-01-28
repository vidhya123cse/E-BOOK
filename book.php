<!doctype html>
<html>
<head>
<title>loginpage</title>
<style>
  body {
	background: url(galaxy.jpg);
	background-repeat: no-repeat;
	background-size: cover;}
 .wrapper {
	border: 10px solid #888888;
	border-radius: 15px;        
	background: url(butterfly.jpg);
	background-repeat: no-repeat;
	background-size: cover;
 	height: 800px;
	width: 1050px;
	margin-top: 50px;
	margin-left: 100px;
	padding-left: 50px;}	
 .error {
	font-family: times roman;
	color: red;}
 .form2-field input {
	 border: 2px solid blue;
	 border-radius: 10px;
	 background-color: rgba(500,500,500,0.6);    
	 width:200px;
	 height: 30px;
	 font-family: times roman;
	 font-weight: bold;}
 .form1-field input {
	 border: 2px solid blue;
	 background-color: rgba(500,500,500,0.6);    
	 width:200px;
	 height: 30px;
	 font-family: times roman;
	 font-weight: bold;}
 .check-field input {
	 border: 2px solid blue;
	 background-color: rgba(500,500,500,0.6);
	 width:15px;
	 height: 15px;}
 k {
	font-family: times roman;
	font-weight: bold;
	color: red;}
 h3 {
	
	
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	background-color: rgba(000,255,255,0.7);
	height: 50px;
	width: 560px;
	margin: 0px;
	padding-top: 5px;
	font-family: Impact header;
	color: black;
	font-weight: bold;
	text-align: center;
	font-size: 35px;
	text-transform: uppercase;}

 h2 {
	
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	background-color: rgba(000,255,255,0.7);
	height: 50px;
	width: 370px;
	margin: 0px;
	padding-top: 5px;
	font-family: Impact header;
	color: black;
	font-weight: bold;
	text-align: center;
	font-size: 35px; 
	text-transform: uppercase;}
  	
 .background1 {
	border: 0px solid #cccccc;
	border-radius: 10px;        
	background-color: rgba(500,500,500,0.5);
 	height: 390px;
	width: 370px;	
	margin-top: 150px;
	margin-left: 5px;
	font-family: Times of New Roman;
	font-size: 18px;
	color: blue;
	font-weight: bold;
	text-align: center;
	float: left;}
 .background2 {
	border: 0px solid #cccccc;
	border-radius: 10px;        
	background-color: rgba(500,500,500,0.5);
 	height: 610px;
	width: 560px;
	margin-top: 0px;	
	margin-left: 70px;
	font-family: Times of New Roman;
	color: blue;
	font-weight: bold;
	text-align: left;
	float: left;}
 .forgot {
	font-family: Times New Roman;
	color: blue;
	font-weight: bold;
	text-align: center;
	text-decoration: none;}

 .border1 {
  	height: 30px;
 	width: 100px;
	padding: 5px 5px 5px 5px;
  	border: 2px solid black;
	border-radius: 10px;
	background-color: rgba(000,255,255,0.7);
	text-size: 200%;
	text-decoration: none;
	font-weight: bold;
	text-align: center;
	color: white;} 
 .bar {
   	 border:none;
  	  border-radius: 2px;}
 v :hover {
	background-color: black; }
 a { cursor: wait;}
</style>
</head>
<body bgcolor= "#666666">
<div class ="wrapper">
<div class = "background1">
<h2> Sign In<br></h2><br><br>
<?php if (isset($_POST['search'])) { session_start(); $_SESSION['search'] = $_POST['searchitem']; session_write_close(); } ?>
<?php  session_start(); $_SESSION['value'] = $_GET['category'] ; $_SESSION['sign'] = $_GET['sign'] ; session_write_close(); ?> <?php include ("server.php"); ?>	
<form action ="book.php?category=<?php echo $_GET['category'] ;?>&login=0&sign=<?php echo $_GET['sign'] ;?>" name= "frm1" method ="POST">
	<div class = "form1-field">Username:
	<input type= "text" class ="bar" Name= "username" placeholder= "Enter Mail ID" value =""><br><span class="error">&nbsp&nbsp* <?php echo $errors[6]; ?></span></div>
	<Br>
        <div class = "form1-field">Password:&nbsp
 	<input type= "password" class ="bar" Name= "password" placeholder= "Enter Password"><br> <span class="error">&nbsp&nbsp* <?php echo $errors[7]; ?></span></div>
	<br>
	<div class ="check-field"><input type= "checkbox" Name= "reme" value= "">Remember Me ?</div>
	<br>
	
        <v><button class="border1" type="submit" name ="login_user">SIGN IN</button></v>
</form>
<br><a href="forgot.php?category=<?php echo $_GET['category']; ?>&login=<?php echo $_GET['login'];?>&sign=<?php echo $_GET['sign'] ;?>" class ="forgot">Forgot Password ?</a>
</div>
<br><br><div class = "background2"><h3>Sign Up</h3><br>
<form action= "book.php?category=<?php echo $_GET['category'] ;?>&login=0&sign=<?php echo $_GET['sign'] ;?>" name= "frm2" method ="POST">
	&nbsp&nbsp<k>* Required Field</k><br>
	&nbsp&nbsp<div class ="form2-field"><k>*</k> First Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type= "text" class ="bar" Name= "firstname" placeholder= "First Name" value= ""><span class="error">&nbsp&nbsp* <?php echo $errors[0]; ?></span></div>
	<br>
	&nbsp&nbsp<div class ="form2-field"><k>*</k> Last Name :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type= "text" class ="bar" Name= "lastname" placeholder= "Last Name" value= ""><span class="error">&nbsp&nbsp* <?php echo $errors[1]; ?></span></div>
	<br>
	&nbsp&nbsp<div class ="form2-field"><k>*</k> Mail ID :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type= "text" class ="bar" Name= "mailid" placeholder= "Enter Mail ID" value=""><span class="error">&nbsp&nbsp* <?php echo $errors[2]; ?></span></div>
	<br>
	&nbsp&nbsp<div class ="form2-field"><k>*</k> Password :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type= "password" class ="bar" Name= "password1" placeholder= "Enter Password" value= ""><span class="error">&nbsp&nbsp* <?php echo $errors[3]; ?></span></div>
	<br>
	&nbsp&nbsp<div class ="form2-field"><k>*</k> Conf-Password :
	<input type= "password" class ="bar" Name= "password2" placeholder= "Re-Enter Password" value= ""><span class="error">&nbsp&nbsp* <?php echo $errors[4]; ?></span></div>
	<br>
	&nbsp&nbsp<div class = "check-field"><k>*</k> I agree to the Terms and Conditions :&nbsp&nbsp&nbsp<input type= "checkbox" class ="bar" Name= "agrement" value= ""><span class="error">&nbsp&nbsp* <?php echo $errors[5]; ?></span></div>
	<br><br>	
	<center><v><button class="border1" type="submit" name= "reg_user">SIGN UP</button></v></center>
</form>
</div>
</div>
</body>
</html> 