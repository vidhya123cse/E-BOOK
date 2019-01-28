<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Search books.......</title>
<style type="text/css">

body{
	background: url(https://wallpaper-house.com/data/out/12/wallpaper2you_479948.jpg) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;  }
.boxed {
	background-color:rgba(0,0,0,.5);
	color:white;
	font:bold 62px "Times New Roman", Times, serif;
	text-align:center;
	margin-left:350px;margin-top:100px;
	width:700px;
	border-radius:30px;   } 
h1 {
color: yellow;}
#div1,.a{
        font-family:Bradley Hand, cursive;font-size:25px;
        line-height: 100px;
        height:500px;
        background-color:rgba(200,200,200,0.7);
        text-align:right;
	height:90px;
	color:white; 
	text-decoration:none; 
	width:1350px;
	padding-right:10px;
	top:0;
	 
	 }
a:hover { color:#666666;}

#div1{
  position: fixed;}
	
	 .logout {
		color: red;}
	  .icon {
           font-family: Times of Roman;
           font-size: 20px;
           font-weight: bold;
           text-decoration: none;
           color: white;}

	
</style>
</head>
<body>
<div id ="div1">
		 <a href="start.php?category=0&login=1" class="a">HOME</a>&nbsp&nbsp&nbsp          <a href="" class="a">MY BOOKS</a>&nbsp&nbsp&nbsp
		 <a href="addabook.php" class="a">ADD A BOOK</a>&nbsp&nbsp&nbsp      <a href="" class="a">CONTACT</a>&nbsp&nbsp&nbsp 
		 <span class ="icon"><?php if (isset($_SESSION['success'])) { echo $_SESSION['firstname']; echo "&nbsp&nbsp<a href=\"index.php?logout='1'\" class =\"logout\">logout</a>";}?></span></div> 
<br><div class="boxed"> Search Results</div> <br><br>
<center><h1> <?php echo $_SESSION['result'] ;if ($_SESSION['link'] != "") { $k=$_SESSION['link']; echo "<br><br> <a href =\"$k\"target=\"_blank\"> Click Here </a>";}?></h1></center>

</body>
</html>