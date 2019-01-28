<html>
<head><title></title>
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

 .form1-field input {
	 border: 2px solid blue;
	 background-color: rgba(500,500,500,0.6);    
	 width:200px;
	 height: 30px;
	 font-family: times roman;
	 font-weight: bold;}
 
 .error {
	font-family: times roman;
	color: red;}
 h3 {
	
	
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	background-color: rgba(000,255,255,0.7);
	height: 50px;
	width: 500px;
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
 	height: 400px;
	width: 500px;	
	margin-top: 100px;
	margin-left: 250px;
	font-family: Times of New Roman;
	font-size: 18px;
	color: blue;
	font-weight: bold;
	text-align: center;
	float: left;}

 .border1 {
  	height: 30px;
 	width: 100px;
	padding: 5px 5px 5px 5px;
  	border: 2px solid black;
	border-radius: 10px;
	background-color: rgba(000,255,255,0.7);;
	text-size: 200%;
	text-decoration: none;
	font-weight: bold;
	text-align: center;
	color: white;} 
 v :hover {
	background-color: black; }

</style>
</head>
<body>
<div class ="wrapper">
<div class = "background1">
<h3> Forgot your password<br></h3><br><br>
<?php include('server.php');?>
<form action ="forgot.php?category=$_SESSION['category']&login=$_SESSION['login']" name= "frm3" method ="POST">
<div class = "form1-field">Username:
	<input type= "text" class ="bar" Name= "username" placeholder= "Enter Mail ID" value =""><br><span class="error">&nbsp&nbsp* <?php echo $errors[8]; ?></span></div>
<br><br><br>
   <v><button class="border1" type="submit" name ="forgot_user">LOGIN</button></v>
</form>	
</body>
</html>